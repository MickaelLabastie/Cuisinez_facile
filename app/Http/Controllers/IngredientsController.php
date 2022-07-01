<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    
    public function showIngredients() {

        $ingredients_list = Ingredient::paginate(30);
        $ingredients_random = Ingredient::inRandomOrder()->limit(rand(1,6))->get();

        return view('ingredients', [
            'ingredients_list' => $ingredients_list,
            'ingredients_random' => $ingredients_random,
        ]);
        
    }

}
