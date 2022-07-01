<?php

namespace App\Models;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RecipeCategory extends Model
{

    use HasFactory;
    

    public $timestamps = false;


    public function recipes() {

        return $this->hasMany(Recipe::class, 'recipe_categories_id');

    }

}
