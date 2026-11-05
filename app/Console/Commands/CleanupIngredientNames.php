<?php

namespace App\Console\Commands;

use App\Models\Ingredient;
use App\Models\RecipeIngredient;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CleanupIngredientNames extends Command
{
    protected $signature = 'ingredient:cleanup {--dry-run : Preview changes without updating}';
    protected $description = 'Clean up ingredient names: remove amounts/units, split "or" options, simplify names';

    private array $validUnits = [];
    private int $cleaned = 0;
    private int $merged = 0;
    private int $deleted = 0;

    public function handle()
    {
        $dryRun = $this->option('dry-run');

        if ($dryRun) {
            $this->warn('DRY RUN MODE - No changes will be saved');
            $this->newLine();
        }

        // Load valid units from IngredientService
        $this->validUnits = $this->getValidUnits();

        if (!$dryRun) {
            DB::beginTransaction();
        }

        try {
            $this->info('Step 1: Cleaning ingredient names...');
            $this->cleanIngredientNames($dryRun);

            $this->newLine();
            $this->info('Step 2: Merging duplicate ingredients...');
            $this->mergeDuplicates($dryRun);

            $this->newLine();
            $this->info('Step 3: Removing orphaned ingredients...');
            $this->removeOrphans($dryRun);

            if (!$dryRun) {
                DB::commit();
                $this->newLine();
                $this->info("✓ Successfully cleaned {$this->cleaned} ingredients, merged {$this->merged} duplicates, deleted {$this->deleted} orphans");
            } else {
                $this->newLine();
                $this->info("Would clean {$this->cleaned} ingredients, merge {$this->merged} duplicates, delete {$this->deleted} orphans");
                $this->warn('Run without --dry-run to apply changes');
            }

            return Command::SUCCESS;

        } catch (\Exception $e) {
            if (!$dryRun) {
                DB::rollBack();
            }
            $this->error("Error: " . $e->getMessage());
            return Command::FAILURE;
        }
    }

    private function cleanIngredientNames(bool $dryRun): void
    {
        $ingredients = Ingredient::all();
        $bar = $this->output->createProgressBar(count($ingredients));

        // First pass: calculate all cleaned names and group by them
        $cleanedMapping = [];
        foreach ($ingredients as $ingredient) {
            $originalName = $ingredient->name;
            $cleanedName = $this->cleanName($originalName);

            if ($cleanedName !== $originalName && !empty($cleanedName)) {
                if (!isset($cleanedMapping[$cleanedName])) {
                    $cleanedMapping[$cleanedName] = [];
                }
                $cleanedMapping[$cleanedName][] = $ingredient;
            }

            $bar->advance();
        }

        $bar->finish();
        $this->newLine();

        // Second pass: update or merge
        foreach ($cleanedMapping as $cleanedName => $ingredientsToClean) {
            // Check if this cleaned name already exists
            $existing = Ingredient::where('name', $cleanedName)->first();

            if ($existing && in_array($existing->id, array_map(fn($i) => $i->id, $ingredientsToClean))) {
                // One of the ingredients to clean already has this name - it's the keeper
                $primary = $existing;
                $toMerge = array_filter($ingredientsToClean, fn($i) => $i->id !== $primary->id);
            } elseif ($existing) {
                // An ingredient with this name already exists - merge into it
                $primary = $existing;
                $toMerge = $ingredientsToClean;
            } else {
                // No existing ingredient with this name - rename first one, merge others
                $primary = $ingredientsToClean[0];
                $toMerge = array_slice($ingredientsToClean, 1);

                $this->cleaned++;

                if ($this->option('verbose')) {
                    $this->line("  {$primary->name} → {$cleanedName}");
                }

                if (!$dryRun) {
                    $primary->name = $cleanedName;
                    $primary->save();
                }
            }

            // Merge the others into the primary
            foreach ($toMerge as $ingredient) {
                $this->merged++;

                if ($this->option('verbose')) {
                    $this->line("  Merging #{$ingredient->id} ({$ingredient->name}) into #{$primary->id} ({$cleanedName})");
                }

                if (!$dryRun) {
                    // Update all recipe_ingredients to point to the primary
                    RecipeIngredient::where('ingredient_id', $ingredient->id)
                        ->update(['ingredient_id' => $primary->id]);

                    // Merge tags (reload primary to get fresh tags)
                    $primary->load('tags');
                    $primaryTagIds = $primary->tags->pluck('id')->toArray();

                    foreach ($ingredient->tags as $tag) {
                        if (!in_array($tag->id, $primaryTagIds)) {
                            $primary->tags()->attach($tag->id);
                            $primaryTagIds[] = $tag->id; // Add to local cache
                        }
                    }

                    // Delete the duplicate
                    $ingredient->delete();
                    $this->deleted++;
                }
            }
        }
    }

    private function cleanName(string $name): string
    {
        // Clean UTF-8 - remove invalid bytes
        $name = iconv('UTF-8', 'UTF-8//IGNORE', $name);
        // Convert non-breaking spaces to regular spaces
        $name = str_replace(["\xC2\xA0", "\xA0", chr(194) . chr(160)], ' ', $name);
        // Convert en-dash, em-dash to regular hyphen
        $name = str_replace(['–', '—'], '-', $name);
        // Remove any remaining control characters
        $name = preg_replace('/[\x00-\x1F\x7F]/u', '', $name);

        // Remove orphaned parentheses and artifacts first
        $name = preg_replace('/\s*[\(\)]\s*/', ' ', $name);

        // Remove leading amounts (numbers, fractions, mixed numbers)
        // More aggressive: remove any leading numbers and measurement patterns
        $name = preg_replace('/^[\d½⅓⅔¼¾⅕⅖⅗⅘⅙⅐⅛⅑⅒\/\-\.\s]+/u', '', $name);

        // Remove "1-inch", "2-inch" style descriptions from beginning
        $name = preg_replace('/^[\d½⅓⅔¼¾]+[\/-]inch\s+/i', '', $name);

        // Remove size adjectives at the beginning
        $name = preg_replace('/^(large|medium|small|extra-large|extra large)\s+/i', '', $name);

        // Remove units at the beginning (iteratively)
        $unitPattern = implode('|', array_map('preg_quote', $this->validUnits));
        do {
            $oldName = $name;
            $name = preg_replace('/^(' . $unitPattern . ')\s+/i', '', $name);
        } while ($name !== $oldName && !empty($name));

        // Remove common measurement phrases
        $name = preg_replace('/^(packed|heaping|level|rounded|scant|boneless|skinless)\s+/i', '', $name);

        // Handle "or" - be smart about keeping the meaningful parts
        if (str_contains($name, ' or ')) {
            // Pattern: "adjective or adjective noun" → "adjective noun" or "noun"
            // Example: "light or dark brown sugar" → "brown sugar"
            // Example: "red or yellow onion" → "onion"
            $parts = explode(' or ', $name);

            if (count($parts) === 2) {
                $firstPart = trim($parts[0]);
                $secondPart = trim($parts[1]);

                $firstWords = explode(' ', $firstPart);
                $secondWords = explode(' ', $secondPart);

                // If second part has more than one word, it likely contains the noun
                if (count($secondWords) > 1) {
                    // Take last 2 words, but drop first if it's a pure color adjective
                    $lastWord = $secondWords[count($secondWords) - 1];
                    $secondToLast = count($secondWords) > 1 ? $secondWords[count($secondWords) - 2] : '';

                    // Pure color modifiers that don't define the ingredient
                    $pureColorModifiers = ['red', 'yellow', 'white', 'green', 'blue'];

                    if ($secondToLast && in_array(strtolower($secondToLast), $pureColorModifiers)) {
                        // Drop the color, keep just the noun
                        $name = $lastWord;
                    } else {
                        // Keep the descriptor + noun (e.g., "brown sugar", "dry sherry")
                        $name = $secondToLast . ' ' . $lastWord;
                    }
                } else {
                    // Second part is single word, take first option
                    $name = $firstPart;
                }
            } else {
                // Multiple "or"s, just take first
                $name = trim($parts[0]);
            }
        }

        // Remove "of" or "of the" at the beginning
        $name = preg_replace('/^(of\s+the|of)\s+/i', '', $name);

        // Remove "and" connecting words at beginning
        $name = preg_replace('/^\s*and\s+/i', '', $name);

        // Remove duplicate consecutive words
        $name = preg_replace('/\b(\w+)\s+\1\b/i', '$1', $name);

        // Clean up multiple spaces
        $name = preg_replace('/\s+/', ' ', $name);

        // Remove leading/trailing punctuation
        $name = trim($name, ' ,-.');

        // Remove common phrases that don't add value
        $name = preg_replace('/\s+from about.*$/i', '', $name);
        $name = preg_replace('/\s+preferably.*$/i', '', $name);
        $name = preg_replace('/\s+\+\s+.*$/i', '', $name);

        return trim($name);
    }

    private function mergeDuplicates(bool $dryRun): void
    {
        // Find ingredients with the same name (after cleaning)
        $duplicates = Ingredient::select('name', DB::raw('COUNT(*) as count'))
            ->groupBy('name')
            ->havingRaw('COUNT(*) > 1')
            ->get();

        foreach ($duplicates as $duplicate) {
            $name = $duplicate->name;
            $ingredients = Ingredient::where('name', $name)->get();

            // Keep the first one, merge others into it
            $primary = $ingredients->first();
            $toMerge = $ingredients->slice(1);

            foreach ($toMerge as $ingredient) {
                $this->merged++;

                if ($this->option('verbose')) {
                    $this->line("  Merging #{$ingredient->id} into #{$primary->id}: {$name}");
                }

                if (!$dryRun) {
                    // Update all recipe_ingredients to point to the primary
                    RecipeIngredient::where('ingredient_id', $ingredient->id)
                        ->update(['ingredient_id' => $primary->id]);

                    // Merge tags (reload primary to get fresh tags)
                    $primary->load('tags');
                    $primaryTagIds = $primary->tags->pluck('id')->toArray();

                    foreach ($ingredient->tags as $tag) {
                        if (!in_array($tag->id, $primaryTagIds)) {
                            $primary->tags()->attach($tag->id);
                            $primaryTagIds[] = $tag->id; // Add to local cache
                        }
                    }

                    // Delete the duplicate
                    $ingredient->delete();
                    $this->deleted++;
                }
            }
        }
    }

    private function removeOrphans(bool $dryRun): void
    {
        // Find ingredients not used in any recipes
        $orphans = Ingredient::whereDoesntHave('recipeIngredients')->get();

        foreach ($orphans as $orphan) {
            if ($this->option('verbose')) {
                $this->line("  Deleting unused: {$orphan->name}");
            }

            if (!$dryRun) {
                $orphan->delete();
                $this->deleted++;
            } else {
                $this->deleted++;
            }
        }
    }

    private function getValidUnits(): array
    {
        return [
            'cup', 'cups',
            'tablespoon', 'tablespoons', 'tbsp', 'Tbsp',
            'teaspoon', 'teaspoons', 'tsp',
            'ounce', 'ounces', 'oz',
            'pound', 'pounds', 'lb', 'lbs',
            'gram', 'grams', 'g',
            'kilogram', 'kilograms', 'kg',
            'milliliter', 'milliliters', 'ml',
            'liter', 'liters', 'l',
            'pint', 'pints',
            'quart', 'quarts',
            'gallon', 'gallons',
            'stick', 'sticks',
            'can', 'cans',
            'package', 'packages',
            'jar', 'jars',
            'bottle', 'bottles',
            'bunch', 'bunches',
            'clove', 'cloves',
            'head', 'heads',
            'sprig', 'sprigs',
            'slice', 'slices',
            'piece', 'pieces',
            'whole',
            'large', 'medium', 'small',
            'packed',
        ];
    }
}
