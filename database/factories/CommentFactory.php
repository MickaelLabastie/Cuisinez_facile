<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            
            'comment_content' => $this->faker->text($maxNbChars = 300),
            'created_at' => now(),
            'recipes_id' => Recipe::inRandomOrder()->first()->id,
            'users_id' => User::inRandomOrder()->first()->id,

        ];

    }

}
