<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\ArticleCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // $article_title = $this->faker->sentence();

        // return [

        //     'article_title' => $article_title,
        //     'article_slug' => Str::slug($article_title, '-'),
        //     'article_content' => $this->faker->text($maxNbChars = 600),
        //     'article_media' => 'https://cdn.pixabay.com/photo/2017/06/06/22/37/italian-cuisine-2378729_960_720.jpg',
        //     'created_at' => now(),
        //     'updated_at' => null,
        //     'article_categories_id' => ArticleCategory::inRandomOrder()->first()->id,
        //     'users_id' => User::where('role', User::ADMIN_ROLE)->inRandomOrder()->first()->id,

        // ];

    }

}
