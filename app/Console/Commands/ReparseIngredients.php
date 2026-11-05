<?php

namespace App\Console\Commands;

use App\Models\Ingredient;
use App\Models\RecipeIngredient;
use App\Services\IngredientService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ReparseIngredients extends Command
{
    protected $signature = 'ingredient:reparse {--dry-run : Preview changes without updating}';

    protected $description = 'Re-parse all ingredients using the improved IngredientService';

    protected IngredientService $ingredientService;

    public function handle()
    {
        $this->ingredientService = new IngredientService();
        $this->ingredientService->resetImportLog();
        $dryRun = $this->option('dry-run');

        if ($dryRun) {
            $this->warn('⚠ DRY RUN MODE - No changes will be made');
            $this->newLine();
        }

        $this->info('Analyzing recipe ingredients for re-parsing...');
        $this->newLine();

        // Get all recipe ingredients with their original strings
        // We need to reconstruct the original string from parts
        $recipeIngredients = RecipeIngredient::with('ingredient')->get();

        if ($recipeIngredients->isEmpty()) {
            $this->info('No recipe ingredients found.');
            return Command::SUCCESS;
        }

        $total = $recipeIngredients->count();
        $progress = $this->output->createProgressBar($total);
        $progress->setFormat(' %current%/%max% [%bar%] %percent:3s%% %message%');

        $stats = [
            'processed' => 0,
            'cleaned' => 0,
            'merged' => 0,
            'deleted' => 0,
            'errors' => 0,
        ];

        $mergeMap = []; // Track ingredients to merge
        $toDelete = []; // Track ingredients to delete

        foreach ($recipeIngredients as $recipeIngredient) {
            $oldIngredient = $recipeIngredient->ingredient;
            $oldName = $oldIngredient->name;

            // Skip if already looks clean
            if ($this->looksClean($oldName)) {
                $progress->setMessage("Skipping: {$oldName}");
                $progress->advance();
                $stats['processed']++;
                continue;
            }

            // Reconstruct original string from parts
            $originalString = $this->reconstructOriginalString($recipeIngredient);

            $progress->setMessage("Parsing: {$oldName}");

            try {
                // Re-parse using IngredientService
                $parsed = $this->ingredientService->parseIngredient($originalString);

                if (!$parsed || empty($parsed['name'])) {
                    $this->newLine();
                    $this->warn("  ⚠ Could not parse: {$originalString}");
                    $stats['errors']++;
                    continue;
                }

                $newName = $parsed['name'];

                // Check if this is a real change
                if (strtolower(trim($oldName)) === strtolower(trim($newName))) {
                    $progress->advance();
                    $stats['processed']++;
                    continue;
                }

                // Log the change
                $this->newLine();
                $this->line("  Changed:");
                $this->line("    From: " . $this->formatIngredientString($oldName, $recipeIngredient));
                $this->line("    To:   " . $this->formatIngredientString($newName, $parsed));

                if (!$dryRun) {
                    // Find or create the cleaned ingredient
                    $newIngredient = $this->ingredientService->findOrCreateIngredient($newName);

                    // Update the recipe_ingredient pivot to point to new ingredient
                    $recipeIngredient->update([
                        'ingredient_id' => $newIngredient->id,
                        'amount' => $parsed['amount'] ?? $recipeIngredient->amount,
                        'unit' => $parsed['unit'] ?? $recipeIngredient->unit,
                        'preparation' => $parsed['preparation'] ?? $recipeIngredient->preparation,
                        'notes' => $parsed['notes'] ?? $recipeIngredient->notes,
                    ]);

                    // Track old ingredient for potential deletion
                    if (!isset($toDelete[$oldIngredient->id])) {
                        $toDelete[$oldIngredient->id] = $oldIngredient;
                    }

                    $stats['cleaned']++;
                }

            } catch (\Exception $e) {
                $this->newLine();
                $this->error("  ✗ Error parsing '{$oldName}': {$e->getMessage()}");
                $stats['errors']++;
            }

            $progress->advance();
            $stats['processed']++;
        }

        $progress->finish();
        $this->newLine(2);

        // Clean up orphaned ingredients
        if (!$dryRun && !empty($toDelete)) {
            $this->info('Cleaning up orphaned ingredients...');

            foreach ($toDelete as $ingredientId => $ingredient) {
                // Check if ingredient is still used
                $usageCount = RecipeIngredient::where('ingredient_id', $ingredientId)->count();

                if ($usageCount === 0) {
                    $ingredient->delete();
                    $stats['deleted']++;
                    $this->line("  Deleted unused: {$ingredient->name}");
                }
            }

            $this->newLine();
        }

        // Show summary
        $this->info('╔════════════════════════════════════════════════╗');
        $this->info('║          Ingredient Re-parse Summary           ║');
        $this->info('╚════════════════════════════════════════════════╝');
        $this->newLine();
        $this->line("  Total processed:       {$stats['processed']}");
        $this->line("  Cleaned/updated:       {$stats['cleaned']}");
        $this->line("  Deleted orphans:       {$stats['deleted']}");
        $this->line("  Errors:                {$stats['errors']}");
        $this->newLine();

        if ($dryRun) {
            $this->warn('This was a DRY RUN. Run without --dry-run to apply changes.');
        } else {
            $this->info('✓ Ingredient re-parsing complete!');
        }

        return Command::SUCCESS;
    }

    /**
     * Check if an ingredient name looks clean (no parsing issues)
     */
    protected function looksClean(string $name): bool
    {
        // Check for common issues
        if (
            // Starts with number
            preg_match('/^[\d]/', $name) ||
            // Starts with unit
            preg_match('/^(cup|tablespoon|teaspoon|lb|pound|ounce|oz|can|jar|package)/i', $name) ||
            // Contains empty parens
            str_contains($name, '()') ||
            // Is just a descriptor
            in_array(strtolower(trim($name)), ['boneless', 'bone-in', 'cooked', 'fresh', 'sprig']) ||
            // Starts with "roughly"
            str_starts_with(strtolower($name), 'roughly ')
        ) {
            return false;
        }

        return true;
    }

    /**
     * Reconstruct original ingredient string from parts
     */
    protected function reconstructOriginalString(RecipeIngredient $recipeIngredient): string
    {
        $parts = array_filter([
            $recipeIngredient->amount,
            $recipeIngredient->unit,
            $recipeIngredient->preparation,
            $recipeIngredient->ingredient->name,
            $recipeIngredient->notes,
        ]);

        return implode(' ', $parts);
    }

    /**
     * Format ingredient string for display
     */
    protected function formatIngredientString(string $name, $data): string
    {
        if (is_array($data)) {
            return trim(implode(' ', array_filter([
                $data['amount'] ?? null,
                $data['unit'] ?? null,
                $name,
                $data['preparation'] ?? null,
            ])));
        }

        // RecipeIngredient model
        return trim(implode(' ', array_filter([
            $data->amount,
            $data->unit,
            $name,
            $data->preparation,
        ])));
    }
}
