<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IngredientRecipeSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $ingredients = Ingredient::all();
        $recipes = Recipe::all();

        foreach ($recipes as $recipe) {

            $recipe->ingredients()->attach(
                $ingredients->random(rand(1,10))->pluck('id')->toArray(),
                [
                    'quantity' => rand(5,100),
                    'unity' => 'g',
                ]
            );

        }

    }

}
