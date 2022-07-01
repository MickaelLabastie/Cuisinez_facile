<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use App\Models\RecipeCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{

    public function home() {

        $recipe_categories = RecipeCategory::all();
        $ingredients = Ingredient::inRandomOrder()->limit(rand(1,6))->get();
        $limit_recipes = 4;
        $recipes_response = [];


        foreach ($recipe_categories as $recipe_category) {
            array_push($recipes_response, $recipe_category->recipes()->inRandomOrder()->limit($limit_recipes)->get());
        }
        

        return view('home', [
            'recipe_categories' => $recipe_categories,
            'ingredients' => $ingredients,
            'limit_recipes' => $limit_recipes,
            'recipes_response' => $recipes_response,
        ]);

    }


    public function showUserProfile() {

        $connected_user  = Auth::user();

        if($connected_user){

            return view('user_profile', [
                'connected_user' => $connected_user,
            ]);

        } else {

            return redirect()->route('login');

        }

    }


}