<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\RecipeCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecipeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $recipe_categories = [

            'Apéritifs' => 'Pour l\'apéro',
            'Entrées' => 'Pour l\'entrée',
            'Plats' => 'Pour le plat principal',
            'Desserts' => 'Pour le dessert',

        ];


        foreach ($recipe_categories as $category_label => $category_title) {

            RecipeCategory::create([
                'category_label' => $category_label,
                'category_title' => $category_title,
                'category_slug' => Str::slug($category_title, '-'),
            ]);
           
        }
            
    }
}
