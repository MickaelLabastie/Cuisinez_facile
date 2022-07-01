<?php

namespace App\Models;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ingredient extends Model
{

    use HasFactory;
    

    public $timestamps = false;


    public function recipes() {

        return $this->belongsToMany(Recipe::class, 'ingredients_recipes', 'ingredients_id', 'recipes_id')->withPivot('quantity', 'unity');

    }
    
}
