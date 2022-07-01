<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\ArticleCategory;

class ArticleCategoryObserver
{
    /**
     * Handle the ArticleCategory "created" event.
     *
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return void
     */
    public function created(ArticleCategory $articleCategory)
    {
        
        $articleCategory->category_slug = Str::slug($articleCategory->category_title, '-');
        $articleCategory->save();

    }

    /**
     * Handle the ArticleCategory "updated" event.
     *
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return void
     */
    public function updated(ArticleCategory $articleCategory)
    {

        $articleCategory->category_slug = Str::slug($articleCategory->category_title, '-');
        $articleCategory->saveQuietly();

    }

    /**
     * Handle the ArticleCategory "deleted" event.
     *
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return void
     */
    public function deleted(ArticleCategory $articleCategory)
    {
        //
    }

    /**
     * Handle the ArticleCategory "restored" event.
     *
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return void
     */
    public function restored(ArticleCategory $articleCategory)
    {
        //
    }

    /**
     * Handle the ArticleCategory "force deleted" event.
     *
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return void
     */
    public function forceDeleted(ArticleCategory $articleCategory)
    {
        //
    }
}
