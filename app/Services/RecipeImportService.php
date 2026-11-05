<?php

namespace App\Services;

use DOMDocument;
use DOMXPath;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class RecipeImportService
{
    protected Client $client;
    protected array $config;
    protected IngredientService $ingredientService;

    public function __construct()
    {
        $this->config = config('recipes');
        $this->ingredientService = new IngredientService();

        $this->client = new Client([
            'timeout' => $this->config['import_timeout'],
            'headers' => [
                'User-Agent' => $this->config['user_agent'],
                'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
                'Accept-Language' => 'en-US,en;q=0.9',
            ],
            'verify' => true,
        ]);
    }

    /**
     * Import recipe from URL
     */
    public function importFromUrl(string $url): array
    {
        Log::info("Importing recipe from: {$url}");

        try {
            $response = $this->client->get($url);
            $html = (string) $response->getBody();

            // Detect and parse recipe format
            $format = $this->detectRecipeFormat($html);

            $recipeData = match ($format) {
                'json-ld' => $this->parseJsonLdRecipe($html, $url),
                default => throw new \Exception("Unsupported or no recipe format detected"),
            };

            Log::info("Successfully imported recipe: {$recipeData['title']}");

            return $recipeData;

        } catch (\Exception $e) {
            Log::error("Failed to import recipe from {$url}: {$e->getMessage()}");
            throw $e;
        }
    }

    /**
     * Detect recipe format (JSON-LD, Microdata, etc.)
     */
    protected function detectRecipeFormat(string $html): ?string
    {
        // Check for JSON-LD (most common on modern recipe sites)
        if (preg_match('/<script[^>]*type=["\']application\/ld\+json["\'][^>]*>/i', $html)) {
            return 'json-ld';
        }

        // Could add Microdata detection here
        // if (stripos($html, 'itemtype="http://schema.org/Recipe"') !== false) {
        //     return 'microdata';
        // }

        return null;
    }

    /**
     * Parse JSON-LD recipe format
     */
    protected function parseJsonLdRecipe(string $html, string $sourceUrl): array
    {
        // Extract all JSON-LD scripts
        preg_match_all('/<script[^>]*type=["\']application\/ld\+json["\'][^>]*>(.*?)<\/script>/is', $html, $matches);

        $recipeData = null;

        foreach ($matches[1] as $jsonString) {
            $data = json_decode($jsonString, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                continue;
            }

            // Handle @graph structure
            if (isset($data['@graph']) && is_array($data['@graph'])) {
                foreach ($data['@graph'] as $item) {
                    if ($this->isRecipeType($item)) {
                        $recipeData = $item;
                        break 2;
                    }
                }
            }

            // Direct recipe object
            if ($this->isRecipeType($data)) {
                $recipeData = $data;
                break;
            }
        }

        if (!$recipeData) {
            throw new \Exception("No recipe data found in JSON-LD");
        }

        return $this->extractRecipeData($recipeData, $sourceUrl);
    }

    /**
     * Check if data represents a Recipe type
     */
    protected function isRecipeType(mixed $data): bool
    {
        if (!is_array($data) || !isset($data['@type'])) {
            return false;
        }

        $type = $data['@type'];

        if (is_string($type)) {
            return $type === 'Recipe';
        }

        if (is_array($type)) {
            return in_array('Recipe', $type);
        }

        return false;
    }

    /**
     * Extract structured recipe data from JSON-LD
     */
    protected function extractRecipeData(array $jsonLd, string $sourceUrl): array
    {

        $ingredients = $this->extractIngredients($jsonLd['recipeIngredient'] ?? []);
        $steps = $this->extractSteps($jsonLd['recipeInstructions'] ?? []);

        return [
            'title' => $jsonLd['name'] ?? 'Untitled Recipe',
            'description' => $jsonLd['description'] ?? null,
            'source_url' => $sourceUrl,
            'source_name' => $this->extractSourceName($sourceUrl),
            'author' => $this->extractAuthor($jsonLd),
            'servings' => $this->extractServings($jsonLd),
            'prep_time' => $this->parseDuration($jsonLd['prepTime'] ?? null),
            'cook_time' => $this->parseDuration($jsonLd['cookTime'] ?? null),
            'total_time' => $this->parseDuration($jsonLd['totalTime'] ?? null),
            'ingredients' => $ingredients,
            'steps' => $steps,
            'image_url' => $this->extractImageUrl($jsonLd),
        ];
    }

    /**
     * Extract and parse ingredients
     */
    protected function extractIngredients(array $rawIngredients): array
    {
        $ingredients = [];

        foreach ($rawIngredients as $raw) {
            $parsedResult = $this->parseIngredientString($raw);

            // parseIngredientString now returns ['ingredients' => [...], 'has_or' => bool]
            // We need to add all parsed ingredients and preserve the original string and "has_or" flag
            foreach ($parsedResult['ingredients'] as $parsed) {
                $parsed['_original_string'] = $raw; // Store original for later
                $parsed['_has_or'] = $parsedResult['has_or']; // Flag for substitution creation
                $ingredients[] = $parsed;
            }
        }

        return $ingredients;
    }

    /**
     * Parse ingredient string into components
     * Delegates to IngredientService for robust parsing
     * Returns ['ingredients' => array, 'has_or' => bool]
     */
    protected function parseIngredientString(string $ingredient): array
    {
        return $this->ingredientService->parseIngredient($ingredient);
    }

    /**
     * Extract recipe steps
     */
    protected function extractSteps(array $instructions): array
    {
        $steps = [];

        foreach ($instructions as $instruction) {
            if (is_string($instruction)) {
                $steps[] = trim($instruction);
            } elseif (is_array($instruction)) {
                // HowToStep or HowToSection
                if (isset($instruction['text'])) {
                    $steps[] = trim($instruction['text']);
                } elseif (isset($instruction['itemListElement']) && is_array($instruction['itemListElement'])) {
                    // HowToSection with multiple steps
                    foreach ($instruction['itemListElement'] as $step) {
                        if (isset($step['text'])) {
                            $steps[] = trim($step['text']);
                        }
                    }
                }
            }
        }

        return $steps;
    }

    /**
     * Parse ISO 8601 duration to minutes
     */
    protected function parseDuration(?string $duration): ?int
    {
        if (!$duration) {
            return null;
        }

        // Parse ISO 8601 duration format (PT15M, PT1H30M, etc.)
        if (preg_match('/PT(?:(\d+)H)?(?:(\d+)M)?/', $duration, $matches)) {
            $hours = (int) ($matches[1] ?? 0);
            $minutes = (int) ($matches[2] ?? 0);
            return ($hours * 60) + $minutes;
        }

        return null;
    }

    /**
     * Extract servings/yield
     */
    protected function extractServings(array $jsonLd): ?int
    {
        $yield = $jsonLd['recipeYield'] ?? $jsonLd['yield'] ?? null;

        if (!$yield) {
            return null;
        }

        // Handle array
        if (is_array($yield)) {
            $yield = $yield[0] ?? null;
        }

        // Extract number from string like "4 servings" or "Serves 6"
        if (is_string($yield)) {
            preg_match('/\d+/', $yield, $matches);
            return isset($matches[0]) ? (int) $matches[0] : null;
        }

        return (int) $yield;
    }

    /**
     * Extract author name
     */
    protected function extractAuthor(array $jsonLd): ?string
    {
        $author = $jsonLd['author'] ?? null;

        if (!$author) {
            return null;
        }

        if (is_string($author)) {
            return $author;
        }

        if (is_array($author)) {
            return $author['name'] ?? null;
        }

        return null;
    }

    /**
     * Extract image URL
     */
    protected function extractImageUrl(array $jsonLd): ?string
    {
        $image = $jsonLd['image'] ?? null;

        if (!$image) {
            return null;
        }

        if (is_string($image)) {
            return $image;
        }

        if (is_array($image)) {
            // Could be array of images or ImageObject
            if (isset($image['url'])) {
                return $image['url'];
            }

            // Array of URLs
            if (isset($image[0])) {
                return is_string($image[0]) ? $image[0] : ($image[0]['url'] ?? null);
            }
        }

        return null;
    }

    /**
     * Extract source name from URL
     */
    protected function extractSourceName(string $url): string
    {
        $host = parse_url($url, PHP_URL_HOST);

        // Clean up common patterns
        $host = str_replace('www.', '', $host);

        // Map known hosts to friendly names
        $knownSources = [
            'cooking.nytimes.com' => 'NYT Cooking',
            'nytimes.com' => 'The New York Times',
            'seriouseats.com' => 'Serious Eats',
            'allrecipes.com' => 'AllRecipes',
            'foodnetwork.com' => 'Food Network',
            'bonappetit.com' => 'Bon Appétit',
            'epicurious.com' => 'Epicurious',
            'recipetineats.com' => 'RecipeTin Eats',
            'dinneratthezoo.com' => 'Dinner at the Zoo',
        ];

        return $knownSources[$host] ?? ucwords(str_replace('.com', '', $host));
    }
}
