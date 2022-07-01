<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleCategory extends Model
{
    
    use HasFactory;
    

    public $timestamps = false;


    public function articles() {

        return $this->hasMany(Article::class, 'article_categories_id');

    }

}
