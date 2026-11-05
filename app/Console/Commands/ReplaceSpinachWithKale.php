<?php

namespace App\Console\Commands;

use App\Models\RecipeIngredient;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ReplaceSpinachWithKale extends Command
{
    protected $signature = 'ingredient:spinach-to-kale {--dry-run : Preview changes without updating}';
    protected $description = 'Replace all spinach ingredients with kale equivalents';

    public function handle()
    {
        $dryRun = $this->option('dry-run');

        if ($dryRun) {
            $this->warn('DRY RUN MODE - No changes will be saved');
            $this->newLine();
        }

        // Define spinach → kale mappings
        $replacements = [
            199 => 315,  // fresh baby spinach → baby kale
            427 => 315,  // packed spinach leaves → baby kale
            921 => 315,  // baby spinach → baby kale
            1017 => 315, // packed cups baby spinach → baby kale
            441 => 606,  // cooked spinach → kale
        ];

        $totalAffected = 0;

        if (!$dryRun) {
            DB::beginTransaction();
        }

        try {
            foreach ($replacements as $spinachId => $kaleId) {
                $spinachIngredient = \App\Models\Ingredient::find($spinachId);
                $kaleIngredient = \App\Models\Ingredient::find($kaleId);

                if (!$spinachIngredient || !$kaleIngredient) {
                    $this->error("Missing ingredient: spinach ID {$spinachId} or kale ID {$kaleId}");
                    continue;
                }

                $affected = RecipeIngredient::where('ingredient_id', $spinachId)->count();

                if ($affected > 0) {
                    $this->line("Replacing: {$spinachIngredient->name}");
                    $this->line("     With: {$kaleIngredient->name}");
                    $this->info("  Affected: {$affected} recipe ingredient(s)");

                    if (!$dryRun) {
                        RecipeIngredient::where('ingredient_id', $spinachId)
                            ->update(['ingredient_id' => $kaleId]);
                    } else {
                        $this->comment("  → Would update {$affected} recipe ingredient(s)");
                    }

                    $totalAffected += $affected;
                    $this->newLine();
                }
            }

            if (!$dryRun) {
                DB::commit();
                $this->newLine();
                $this->info("✓ Successfully replaced {$totalAffected} spinach ingredients with kale");
            } else {
                $this->newLine();
                $this->info("Would replace {$totalAffected} spinach ingredients with kale");
                $this->warn('Run without --dry-run to apply changes');
            }

            // Show what was NOT replaced
            $this->newLine();
            $this->line("Not replaced (contain both spinach and kale):");
            $mixed = [
                774 => 'baby spinach or baby kale',
                966 => 'packed cups baby spinach or kale',
                1054 => 'packed cup spinach kale or other leafy green',
                1094 => 'packed packed cups baby spinach or kale',
                1235 => 'packed packed cup spinach kale or other leafy green',
            ];

            foreach ($mixed as $id => $name) {
                $ingredient = \App\Models\Ingredient::find($id);
                if ($ingredient) {
                    $count = RecipeIngredient::where('ingredient_id', $id)->count();
                    $this->line("  • {$ingredient->name} ({$count} uses)");
                }
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
}
