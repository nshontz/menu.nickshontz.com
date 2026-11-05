<?php

namespace App\Services;

use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\RecipeIngredient;
use App\Models\RecipeStep;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use GuzzleHttp\Client;

class RecipeFactory
{
    protected static ?IngredientService $ingredientService = null;

    /**
     * Get or create IngredientService instance
     */
    protected static function getIngredientService(): IngredientService
    {
        if (static::$ingredientService === null) {
            static::$ingredientService = new IngredientService();
        }
        return static::$ingredientService;
    }

    /**
     * Create a complete recipe from structured data
     */
    public static function create(array $data): Recipe
    {
        return DB::transaction(function () use ($data) {
            Log::info("Creating recipe: {$data['title']}");

            // Create the recipe record
            $recipe = static::createRecipe($data);

            // Create and attach ingredients
            if (!empty($data['ingredients'])) {
                static::attachIngredients($recipe, $data['ingredients']);
            }

            // Create steps
            if (!empty($data['steps'])) {
                static::createSteps($recipe, $data['steps']);
            }

            // Download and store image if URL provided
            if (!empty($data['image_url']) && config('recipes.download_images')) {
                try {
                    static::downloadAndStoreImage($recipe, $data['image_url']);
                } catch (\Exception $e) {
                    Log::warning("Failed to download image for recipe {$recipe->id}: {$e->getMessage()}");
                }
            }

            // Load all relationships
            $recipe->load([
                'recipeIngredients.ingredient.tags',
                'steps',
                'layout',
                'protein'
            ]);

            Log::info("Successfully created recipe {$recipe->id}: {$recipe->title}");

            return $recipe;
        });
    }

    /**
     * Create the recipe record
     */
    protected static function createRecipe(array $data): Recipe
    {
        return Recipe::create([
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'source_url' => $data['source_url'] ?? null,
            'source_name' => $data['source_name'] ?? null,
            'author' => $data['author'] ?? null,
            'servings' => $data['servings'] ?? null,
            'prep_time_minutes' => $data['prep_time'] ?? null,
            'cook_time_minutes' => $data['cook_time'] ?? null,
            'total_time_minutes' => $data['total_time'] ?? null,
            'difficulty' => $data['difficulty'] ?? null,
            'notes' => $data['notes'] ?? null,
            'protein_id' => $data['protein_id'] ?? null,
            'layout_id' => $data['layout_id'] ?? null,
            'is_published' => $data['is_published'] ?? false,
        ]);
    }

    /**
     * Attach ingredients to recipe with usage details
     */
    protected static function attachIngredients(Recipe $recipe, array $ingredients): void
    {
        foreach ($ingredients as $index => $ingredientData) {
            $ingredientName = $ingredientData['name'];

            if (empty($ingredientName)) {
                continue;
            }

            // Find or create the ingredient
            $ingredient = static::findOrCreateIngredient($ingredientName);

            // Get original string for storage
            $originalText = $ingredientData['_original_string'] ?? $ingredientData['original'] ?? null;

            // Create the recipe_ingredient pivot record with usage details
            RecipeIngredient::create([
                'recipe_id' => $recipe->id,
                'ingredient_id' => $ingredient->id,
                'amount' => $ingredientData['amount'] ?? null,
                'unit' => $ingredientData['unit'] ?? null,
                'preparation' => $ingredientData['preparation'] ?? null,
                'notes' => $ingredientData['notes'] ?? null,
                'original_text' => $originalText,
                'order' => $index,
                'is_optional' => $ingredientData['is_optional'] ?? false,
            ]);

            // Handle "or" substitutions
            if (!empty($ingredientData['_has_or'])) {
                $orData = static::getIngredientService()->extractOrSubstitution($ingredientName);
                if ($orData) {
                    $primaryIngredient = static::findOrCreateIngredient($orData['primary']);
                    $substituteIngredient = static::findOrCreateIngredient($orData['substitute']);

                    static::getIngredientService()->createSubstitution(
                        $primaryIngredient,
                        $substituteIngredient,
                        $orData['original']
                    );

                    Log::info("Created substitution: {$orData['primary']} -> {$orData['substitute']}");
                }
            }
        }

        Log::info("Attached " . count($ingredients) . " ingredients to recipe {$recipe->id}");
    }

    /**
     * Find or create ingredient using IngredientService
     */
    protected static function findOrCreateIngredient(string $name): Ingredient
    {
        return static::getIngredientService()->findOrCreateIngredient($name);
    }

    /**
     * Create ordered recipe steps
     */
    protected static function createSteps(Recipe $recipe, array $steps): void
    {
        foreach ($steps as $index => $instruction) {
            if (empty(trim($instruction))) {
                continue;
            }

            RecipeStep::create([
                'recipe_id' => $recipe->id,
                'step_number' => $index + 1,
                'instruction' => trim($instruction),
            ]);
        }

        Log::info("Created " . count($steps) . " steps for recipe {$recipe->id}");
    }

    /**
     * Download and store recipe image
     */
    protected static function downloadAndStoreImage(Recipe $recipe, string $imageUrl): ?string
    {
        try {
            $client = new Client(['timeout' => 30]);
            $response = $client->get($imageUrl);

            $imageContent = (string) $response->getBody();
            $contentType = $response->getHeader('Content-Type')[0] ?? 'image/jpeg';

            // Determine file extension from content type
            $extension = match (true) {
                str_contains($contentType, 'jpeg') || str_contains($contentType, 'jpg') => 'jpg',
                str_contains($contentType, 'png') => 'png',
                str_contains($contentType, 'webp') => 'webp',
                default => 'jpg',
            };

            // Generate filename
            $filename = 'recipe-' . $recipe->id . '-' . time() . '.' . $extension;
            $path = config('recipes.image_path') . '/' . $filename;

            // Store image
            $disk = config('recipes.image_disk');
            Storage::disk($disk)->put($path, $imageContent);

            // Update recipe
            $recipe->image_path = $path;
            $recipe->save();

            Log::info("Downloaded and stored image for recipe {$recipe->id}: {$path}");

            return $path;

        } catch (\Exception $e) {
            Log::error("Failed to download image from {$imageUrl}: {$e->getMessage()}");
            throw $e;
        }
    }

    /**
     * Parse ingredient amount string (e.g., "1/2" -> 0.5)
     */
    public static function parseIngredientAmount(string $amount): float
    {
        $amount = trim($amount);

        // Handle fractions like "1/2", "3/4"
        if (preg_match('/^(\d+)\/(\d+)$/', $amount, $matches)) {
            return $matches[1] / $matches[2];
        }

        // Handle mixed numbers like "1 1/2"
        if (preg_match('/^(\d+)\s+(\d+)\/(\d+)$/', $amount, $matches)) {
            return $matches[1] + ($matches[2] / $matches[3]);
        }

        // Handle ranges like "1-2" -> take the middle
        if (preg_match('/^(\d+(?:\.\d+)?)\s*-\s*(\d+(?:\.\d+)?)$/', $amount, $matches)) {
            return ($matches[1] + $matches[2]) / 2;
        }

        // Regular number
        return (float) $amount;
    }
}
