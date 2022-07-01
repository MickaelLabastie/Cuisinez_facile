<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = Article::paginate(10);

        return view('admin.admin', [
            'articles' => $articles
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.article.create', [
            'article_categories' => ArticleCategory::all(),
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {

        $validated = $request->validated();

        $article_title = $request->input('article_title');
        // $article_media = Storage::disk('local')->put('images', $request->file('article_media'));

        Article::create([
            'article_slug' => Str::slug($article_title, '-'),
            'article_title' => $article_title,
            'article_content' => $request->input('article_content'),
            'created_at' => now(),
            'article_categories_id' => $request->input('article_category'),
            'users_id' => Auth::user()->id,
        ]);

        return redirect()->route('articles.index')->with('success', 'L\'article a bien été crée !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {

        return view('admin.article.edit', [
            
            'article' => $article,
            'article_categories' => ArticleCategory::all(),

        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {

        $article->article_title = $request->input('article_title');
        $article->article_categories_id = $request->input('article_category');
        $article->article_content = $request->input('article_content');
        $article->save();

        return redirect()->route('articles.index')->with('success', 'L\'article a bien été modifié !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {

        $article->delete();

        return redirect()->route('articles.index')->with('success', 'L\'article a bien été supprimé !');
        
    }
}
