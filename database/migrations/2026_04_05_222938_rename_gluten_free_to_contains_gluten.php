<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Get the old gluten-free tag
        $glutenFreeTag = \App\Models\IngredientTag::where('slug', 'gluten-free')->first();

        if (!$glutenFreeTag) {
            return;
        }

        // Create the new contains-gluten tag
        $containsGlutenTag = \App\Models\IngredientTag::create([
            'name' => 'Contains Gluten',
            'slug' => 'contains-gluten',
            'type' => 'allergen',
            'icon' => '🌾',
            'color' => '#f39c12',
        ]);

        // Get all ingredients that are NOT tagged as gluten-free
        $allIngredientIds = \App\Models\Ingredient::pluck('id');
        $glutenFreeIngredientIds = $glutenFreeTag->ingredients()->pluck('ingredients.id');
        $containsGlutenIngredientIds = $allIngredientIds->diff($glutenFreeIngredientIds);

        // Tag ingredients that don't have gluten-free as contains-gluten
        foreach ($containsGlutenIngredientIds as $ingredientId) {
            \DB::table('ingredient_ingredient_tag')->insert([
                'ingredient_id' => $ingredientId,
                'ingredient_tag_id' => $containsGlutenTag->id,
            ]);
        }

        // Remove all gluten-free tag associations
        \DB::table('ingredient_ingredient_tag')
            ->where('ingredient_tag_id', $glutenFreeTag->id)
            ->delete();

        // Delete the old gluten-free tag
        $glutenFreeTag->delete();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Get the contains-gluten tag
        $containsGlutenTag = \App\Models\IngredientTag::where('slug', 'contains-gluten')->first();

        if (!$containsGlutenTag) {
            return;
        }

        // Create the gluten-free tag
        $glutenFreeTag = \App\Models\IngredientTag::create([
            'name' => 'Gluten-Free',
            'slug' => 'gluten-free',
            'type' => 'dietary_restriction',
            'icon' => '🌾',
            'color' => '#f39c12',
        ]);

        // Get all ingredients that are NOT tagged as contains-gluten
        $allIngredientIds = \App\Models\Ingredient::pluck('id');
        $containsGlutenIngredientIds = $containsGlutenTag->ingredients()->pluck('ingredients.id');
        $glutenFreeIngredientIds = $allIngredientIds->diff($containsGlutenIngredientIds);

        // Tag ingredients that don't have contains-gluten as gluten-free
        foreach ($glutenFreeIngredientIds as $ingredientId) {
            \DB::table('ingredient_ingredient_tag')->insert([
                'ingredient_id' => $ingredientId,
                'ingredient_tag_id' => $glutenFreeTag->id,
            ]);
        }

        // Remove all contains-gluten tag associations
        \DB::table('ingredient_ingredient_tag')
            ->where('ingredient_tag_id', $containsGlutenTag->id)
            ->delete();

        // Delete the contains-gluten tag
        $containsGlutenTag->delete();
    }
};
