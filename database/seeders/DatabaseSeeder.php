<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([

            UserSeeder::class,
            AdminSeeder::class,
            ArticleCategorySeeder::class,
            ArticleSeeder::class,
            RecipeCategorySeeder::class,
            RecipeSeeder::class,
            RecipeMediaSeeder::class,
            IngredientSeeder::class,
            CommentSeeder::class,
            IngredientRecipeSeeder::class,
            RecipeUserSeeder::class,

        ]);

    }
}
