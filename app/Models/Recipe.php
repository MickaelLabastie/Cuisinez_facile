<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\Ingredient;
use App\Models\RecipeMedias;
use App\Models\RecipeCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{

    use HasFactory;


    public function recipe_categories() {

        return $this->belongsTo(RecipeCategory::class, 'recipe_categories_id');

    }


    public function ingredients() {

        return $this->belongsToMany(Ingredient::class, 'ingredients_recipes', 'recipes_id', 'ingredients_id')->withPivot('quantity', 'unity');

    }


    public function users() {

        return $this->belongsToMany(User::class, 'recipes_users', 'recipes_id', 'users_id');

    }


    public function recipe_medias() {

        return $this->hasMany(RecipeMedias::class, 'recipes_id');

    }


    public function oldest_recipe_medias() {

        return $this->hasOne(RecipeMedias::class, 'recipes_id')->oldestOfMany();

    }


    public function comments() {

        return $this->hasMany(Comment::class);

    }

}
