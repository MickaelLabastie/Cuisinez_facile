<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\RecipeCategory;

class RecipeCategoryObserver
{

    /**
     * Handle the RecipeCategory "created" event.
     *
     * @param  \App\Models\RecipeCategory  $recipeCategory
     * @return void
     */
    public function created(RecipeCategory $recipeCategory)
    {

        $recipeCategory->category_slug = Str::slug($recipeCategory->category_title, '-');
        $recipeCategory->save();

    }


    /**
     * Handle the RecipeCategory "updated" event.
     *
     * @param  \App\Models\RecipeCategory  $recipeCategory
     * @return void
     */
    public function updated(RecipeCategory $recipeCategory)
    {

        $recipeCategory->category_slug = Str::slug($recipeCategory->category_title, '-');
        $recipeCategory->saveQuietly();

    }


    /**
     * Handle the RecipeCategory "deleted" event.
     *
     * @param  \App\Models\RecipeCategory  $recipeCategory
     * @return void
     */
    public function deleted(RecipeCategory $recipeCategory)
    {
        //
    }


    /**
     * Handle the RecipeCategory "restored" event.
     *
     * @param  \App\Models\RecipeCategory  $recipeCategory
     * @return void
     */
    public function restored(RecipeCategory $recipeCategory)
    {
        //
    }


    /**
     * Handle the RecipeCategory "force deleted" event.
     *
     * @param  \App\Models\RecipeCategory  $recipeCategory
     * @return void
     */
    public function forceDeleted(RecipeCategory $recipeCategory)
    {
        //
    }

}
