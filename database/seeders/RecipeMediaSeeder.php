<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\RecipeMedias;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecipeMediaSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes = Recipe::all();
        $switch = true;

        foreach ($recipes as $recipe) {

            RecipeMedias::create([
                'media_name' => $switch ? 'https://cdn.pixabay.com/photo/2020/02/02/15/07/meat-4813261_960_720.jpg' : 'https://cdn.pixabay.com/photo/2017/03/31/18/02/strawberry-dessert-2191973_960_720.jpg',
                'recipes_id' => $recipe->id,
            ]);

            $switch = !$switch;

        }

    }
    
}
