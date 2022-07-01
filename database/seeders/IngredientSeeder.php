<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $switch = true;

        for ($index = 0; $index < 300;$index++) {

            Ingredient::create([
                'ingredient_name' => Factory::create()->word(),
                'ingredient_img' => $switch ? 'https://cdn.pixabay.com/photo/2018/07/06/08/49/tomatoes-3520004_960_720.jpg' : 'https://cdn.pixabay.com/photo/2013/09/18/18/24/chocolate-183543_960_720.jpg',
            ]);

            $switch = !$switch;

        }

    }
    
}
