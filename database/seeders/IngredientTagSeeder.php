<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Contains Gluten', 'slug' => 'contains-gluten', 'type' => 'allergen', 'icon' => '🌾', 'color' => '#f39c12'],
            ['name' => 'Dairy', 'slug' => 'dairy', 'type' => 'allergen', 'icon' => '🥛', 'color' => '#3498db'],
            ['name' => 'Vegan', 'slug' => 'vegan', 'type' => 'dietary_restriction', 'icon' => '🌱', 'color' => '#27ae60'],
            ['name' => 'Vegetarian', 'slug' => 'vegetarian', 'type' => 'dietary_restriction', 'icon' => '🥗', 'color' => '#2ecc71'],
            ['name' => 'Nut Allergen', 'slug' => 'nut-allergen', 'type' => 'allergen', 'icon' => '🥜', 'color' => '#e74c3c'],
            ['name' => 'Shellfish', 'slug' => 'shellfish', 'type' => 'allergen', 'icon' => '🦐', 'color' => '#9b59b6'],
            ['name' => 'Soy', 'slug' => 'soy', 'type' => 'allergen', 'icon' => '🫘', 'color' => '#e67e22'],
            ['name' => 'Organic', 'slug' => 'organic', 'type' => 'attribute', 'icon' => '🍃', 'color' => '#16a085'],
            ['name' => 'Egg', 'slug' => 'egg', 'type' => 'allergen', 'icon' => '🥚', 'color' => '#f1c40f'],
            ['name' => 'Fish', 'slug' => 'fish', 'type' => 'allergen', 'icon' => '🐟', 'color' => '#3498db'],
        ];

        foreach ($tags as $tag) {
            \App\Models\IngredientTag::updateOrCreate(
                ['slug' => $tag['slug']],
                $tag
            );
        }
    }
}
