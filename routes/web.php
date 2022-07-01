<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\IngredientsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/recettes/{category_slug}', [RecipesController::class, 'showRecipesCategory'])->name('recipes_category');
Route::get('/recette/{id}', [RecipesController::class, 'showRecipe'])->name('recipe');
Route::get('/articles/catégories', [ArticlesController::class, 'showArticlesCategories'])->name('articles_categories');
Route::get('/article/{id}', [ArticlesController::class, 'showArticle'])->name('article');
Route::get('/profil', [MainController::class, 'showUserProfile'])->name('profile');
Route::get('/ingredients', [IngredientsController::class, 'showIngredients'])->name('ingredients');

Auth::routes();

Route::prefix('admin')->middleware('admin')->group(function(){

    Route::resource('articles', ArticleController::class)->except([
        'show'
    ]);

    // Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
    // Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');
    // Route::post('/articles/store', [ArticleController::class, 'store'])->name('article.store');
    // Route::delete('/articles/{article}/destroy', [ArticleController::class, 'destroy'])->name('article.destroy');
    // Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    // Route::put('/articles/{article}/update', [ArticleController::class, 'update'])->name('article.update');

});

