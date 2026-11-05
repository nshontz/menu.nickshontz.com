<?php

namespace App\Console\Commands;

use App\Models\Ingredient;
use App\Models\RecipeIngredient;
use App\Models\IngredientSubstitution;
use App\Services\IngredientService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ReparseIngredientsWithSplitting extends Command
{
    protected $signature = 'ingredient:reparse-with-splitting
                            {--dry-run : Preview changes without updating}
                            {--only-and : Only process ingredients with "and"}
                            {--only-or : Only process ingredients with "or"}';

    protected $description = 'Re-parse ingredients with new "and" splitting and "or" substitution logic';

    protected IngredientService $ingredientService;

    public function handle()
    {
        $this->ingredientService = new IngredientService();
        $dryRun = $this->option('dry-run');

        if ($dryRun) {
            $this->warn('⚠ DRY RUN MODE - No changes will be made');
            $this->newLine();
        }

        $this->info('Re-parsing ingredients with splitting logic...');
        $this->newLine();

        // Get all recipe ingredients with "and" or "or"
        $query = RecipeIngredient::with(['ingredient', 'recipe']);

        if ($this->option('only-and')) {
            $query->whereHas('ingredient', fn($q) =>
                $q->where('name', 'like', '% and %')
            );
        } elseif ($this->option('only-or')) {
            $query->whereHas('ingredient', fn($q) =>
                $q->where('name', 'like', '% or %')
            );
        } else {
            $query->whereHas('ingredient', fn($q) =>
                $q->where('name', 'like', '% and %')
                  ->orWhere('name', 'like', '% or %')
            );
        }

        $recipeIngredients = $query->get();

        if ($recipeIngredients->isEmpty()) {
            $this->info('No matching ingredients found.');
            return Command::SUCCESS;
        }

        $total = $recipeIngredients->count();
        $this->info("Found {$total} ingredients to process");
        $this->newLine();

        $progress = $this->output->createProgressBar($total);
        $progress->setFormat(' %current%/%max% [%bar%] %percent:3s%% %message%');

        $stats = [
            'processed' => 0,
            'split' => 0,
            'substitutions_created' => 0,
            'kept_together' => 0,
            'errors' => 0,
        ];

        foreach ($recipeIngredients as $recipeIngredient) {
            $originalIngredient = $recipeIngredient->ingredient;
            $originalName = $originalIngredient->name;

            $progress->setMessage("Processing: {$originalName}");

            try {
                // Reconstruct original string
                $originalString = $this->reconstructOriginal($recipeIngredient);

                // Parse with new logic
                $parseResult = $this->ingredientService->parseIngredient($originalString);

                $ingredientCount = count($parseResult['ingredients']);

                // Case 1: Split into multiple ingredients (has "and")
                if ($ingredientCount > 1) {
                    $this->newLine();
                    $this->line("  SPLIT: {$originalName}");

                    if (!$dryRun) {
                        DB::transaction(function () use ($recipeIngredient, $parseResult, &$stats) {
                            $baseOrder = $recipeIngredient->order;

                            // Update first ingredient in place
                            $firstParsed = $parseResult['ingredients'][0];
                            $firstIngredient = $this->ingredientService->findOrCreateIngredient($firstParsed['name']);

                            $recipeIngredient->update([
                                'ingredient_id' => $firstIngredient->id,
                                'amount' => $firstParsed['amount'] ?? $recipeIngredient->amount,
                                'unit' => $firstParsed['unit'] ?? $recipeIngredient->unit,
                                'preparation' => $firstParsed['preparation'] ?? $recipeIngredient->preparation,
                            ]);

                            $this->line("    -> {$firstParsed['name']}");

                            // Create new records for remaining ingredients
                            for ($i = 1; $i < count($parseResult['ingredients']); $i++) {
                                $parsed = $parseResult['ingredients'][$i];
                                $ingredient = $this->ingredientService->findOrCreateIngredient($parsed['name']);

                                RecipeIngredient::create([
                                    'recipe_id' => $recipeIngredient->recipe_id,
                                    'ingredient_id' => $ingredient->id,
                                    'amount' => $parsed['amount'] ?? null,
                                    'unit' => $parsed['unit'] ?? null,
                                    'preparation' => $parsed['preparation'] ?? null,
                                    'notes' => $parsed['notes'] ?? null,
                                    'original_text' => $recipeIngredient->original_text,
                                    'order' => $baseOrder + ($i * 0.1), // Fractional ordering
                                    'is_optional' => $recipeIngredient->is_optional,
                                ]);

                                $this->line("    -> {$parsed['name']}");
                            }

                            $stats['split']++;
                        });
                    } else {
                        foreach ($parseResult['ingredients'] as $parsed) {
                            $this->line("    -> {$parsed['name']}");
                        }
                    }
                }
                // Case 2: Has "or" - create substitution
                elseif ($parseResult['has_or'] && $ingredientCount === 1) {
                    $parsed = $parseResult['ingredients'][0];
                    $orData = $this->ingredientService->extractOrSubstitution($parsed['name']);

                    if ($orData) {
                        $this->newLine();
                        $this->line("  SUBSTITUTION: {$originalName}");
                        $this->line("    Primary: {$orData['primary']}");
                        $this->line("    Substitute: {$orData['substitute']}");

                        if (!$dryRun) {
                            $primaryIng = $this->ingredientService->findOrCreateIngredient($orData['primary']);
                            $substituteIng = $this->ingredientService->findOrCreateIngredient($orData['substitute']);

                            $this->ingredientService->createSubstitution(
                                $primaryIng,
                                $substituteIng,
                                $orData['original']
                            );

                            // Update recipe_ingredient to use primary
                            $recipeIngredient->update([
                                'ingredient_id' => $primaryIng->id,
                            ]);

                            $stats['substitutions_created']++;
                        }
                    }
                }
                // Case 3: Kept together (no split, no or)
                else {
                    $stats['kept_together']++;
                }

            } catch (\Exception $e) {
                $this->newLine();
                $this->error("  ✗ Error: {$originalName} - {$e->getMessage()}");
                $stats['errors']++;
            }

            $progress->advance();
            $stats['processed']++;
        }

        $progress->finish();
        $this->newLine(2);

        // Summary
        $this->info('╔════════════════════════════════════════════════╗');
        $this->info('║     Ingredient Splitting/Substitution Summary  ║');
        $this->info('╚════════════════════════════════════════════════╝');
        $this->newLine();
        $this->line("  Total processed:          {$stats['processed']}");
        $this->line("  Split into multiple:      {$stats['split']}");
        $this->line("  Substitutions created:    {$stats['substitutions_created']}");
        $this->line("  Kept together:            {$stats['kept_together']}");
        $this->line("  Errors:                   {$stats['errors']}");
        $this->newLine();

        if ($dryRun) {
            $this->warn('This was a DRY RUN. Run without --dry-run to apply changes.');
        } else {
            $this->info('✓ Complete!');
        }

        return Command::SUCCESS;
    }

    protected function reconstructOriginal(RecipeIngredient $ri): string
    {
        return trim(implode(' ', array_filter([
            $ri->amount,
            $ri->unit,
            $ri->ingredient->name,
            $ri->preparation,
            $ri->notes,
        ])));
    }
}
