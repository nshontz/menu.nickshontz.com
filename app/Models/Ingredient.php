<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
    ];

    protected $appends = [
        'plural_name',
    ];

    public function recipes(): BelongsToMany
    {
        return $this->belongsToMany(Recipe::class, 'recipe_ingredients')
            ->withPivot(['amount', 'unit', 'preparation', 'notes', 'order', 'is_optional'])
            ->withTimestamps();
    }

    public function recipeIngredients(): HasMany
    {
        return $this->hasMany(RecipeIngredient::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(IngredientTag::class, 'ingredient_ingredient_tag')
            ->withPivot('created_at');
    }

    public function substitutes(): HasMany
    {
        return $this->hasMany(IngredientSubstitution::class, 'primary_ingredient_id');
    }

    public function isSubstituteFor(): HasMany
    {
        return $this->hasMany(IngredientSubstitution::class, 'substitute_ingredient_id');
    }

    /**
     * Get the plural form of the ingredient name
     */
    protected function pluralName(): Attribute
    {
        return Attribute::make(
            get: fn () => Str::plural($this->name),
        );
    }
}
