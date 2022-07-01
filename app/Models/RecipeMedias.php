<?php

namespace App\Models;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RecipeMedias extends Model
{
    use HasFactory;


    public $timestamps = false;
    

    public function recipes() {

        return $this->belongsTo(Recipe::class, 'recipes_id');

    }
}
