<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\RecipeCategory;
use App\Models\ArticleCategory;

class ArticlesController extends Controller
{

    public function showArticlesCategories() {

        $articles_categories = ArticleCategory::all();
        $limit_articles = 4;
        $articles_response = [];

        foreach ($articles_categories as $article_category) {
            array_push($articles_response, $article_category->articles()->inRandomOrder()->limit($limit_articles)->get());
        }

        return view('articles_categories', [
            'articles_categories' => $articles_categories,
            'limit_articles' => $limit_articles,
            'articles_response' => $articles_response,
        ]);

    }


    public function showArticle(Article $id) {

        $article = $id;
        
        return view('article', [
            'article' => $article,
        ]);

    }
    
}
