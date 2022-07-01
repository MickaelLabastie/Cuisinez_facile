<?php

namespace Database\Factories;

use App\Models\RecipeCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            
            'recipe_title' => $this->faker->sentence(),
            'recipe_content' => $this->faker->text($maxNbChars = 600),
            'preparation_time' => $this->faker->randomNumber(),
            'cooking_time' => $this->faker->randomNumber(),
            'break_time' => $this->faker->randomNumber(),
            'note' => $this->faker->numberBetween($int1 = 0, $int2 = 5),
            'created_at' => now(),
            'recipe_categories_id' => RecipeCategory::inRandomOrder()->first()->id,

        ];

    }

}
