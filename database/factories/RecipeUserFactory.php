<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RecipeUserFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // return [

        //     'recipes_id' => Recipe::InRandomOrder()->first()->id,
        //     'users_id' => User::InRandomOrder()->first()->id,

        // ];

    }

}
