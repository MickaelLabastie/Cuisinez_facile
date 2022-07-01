<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecipeCategory>
 */
class RecipeCategoryFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // $category_title = $this->faker->sentence();
        // $category_label = $this->faker->word();

        // return [
                
        //     'category_label' => $category_label,
        //     'category_title' => $category_title,
        //     'category_slug' => Str::slug($category_title, '-'),
    
        // ];
    }
    
}
