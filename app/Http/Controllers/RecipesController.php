<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Models\RecipeCategory;

class RecipesController extends Controller
{
    
    public function showRecipesCategory($category_slug) {

        $category_title = RecipeCategory::where('category_slug', $category_slug)->first()->category_title;
        $recipes = RecipeCategory::paginate(10)->where('category_slug', $category_slug)->first()->recipes()->get();

        return view('recipes_category', [
            'category_title' => $category_title,
            'recipes' => $recipes,
        ]);

    }


    public function showRecipe(Recipe $id) {

        $recipe = $id;
        $ingredients_list = $recipe->ingredients()->get();
        
        return view('recipe', [
            'recipe' => $recipe,
            'ingredients_list' => $ingredients_list,
        ]);

    }

}
