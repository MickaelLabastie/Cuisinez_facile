<?php

namespace App\Models;

use App\Models\User;
use App\Models\ArticleCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{

    use HasFactory;

    protected $fillable = [

        'article_slug',
        'article_title',
        'article_content',
        'article_categories_id',
        'users_id',

    ];


    public function dateFormatted() {

        return date_format($this->created_at, 'd-m-Y');

    }


    public function user() {

        return $this->belongsTo(User::class, 'users_id');

    }


    public function category() {

        return $this->belongsTo(ArticleCategory::class, 'article_categories_id');

    }

}
