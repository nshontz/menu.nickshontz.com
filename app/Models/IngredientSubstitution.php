<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IngredientSubstitution extends Model
{
    use HasFactory;

    protected $fillable = [
        'primary_ingredient_id',
        'substitute_ingredient_id',
        'context',
    ];

    public function primaryIngredient(): BelongsTo
    {
        return $this->belongsTo(Ingredient::class, 'primary_ingredient_id');
    }

    public function substituteIngredient(): BelongsTo
    {
        return $this->belongsTo(Ingredient::class, 'substitute_ingredient_id');
    }
}
