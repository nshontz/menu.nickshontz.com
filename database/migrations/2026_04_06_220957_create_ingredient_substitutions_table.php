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
        Schema::create('ingredient_substitutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('primary_ingredient_id')
                ->constrained('ingredients')
                ->cascadeOnDelete();
            $table->foreignId('substitute_ingredient_id')
                ->constrained('ingredients')
                ->cascadeOnDelete();
            $table->text('context')->nullable();
            $table->timestamps();

            // Ensure unique combinations
            $table->unique(['primary_ingredient_id', 'substitute_ingredient_id'], 'unique_substitution');

            // Indexes for efficient lookup
            $table->index('primary_ingredient_id');
            $table->index('substitute_ingredient_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredient_substitutions');
    }
};
