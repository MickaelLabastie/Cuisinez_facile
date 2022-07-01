<?php

namespace App\Models;

use App\Models\Recipe;
use App\Models\Article;
use App\Models\Comment;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    const ADMIN_ROLE = 'ADMIN';
    const USER_ROLE = 'USER';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'email',
        'password',
        'role',

    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

        'password',
        'remember_token',

    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'email_verified_at' => 'datetime',
        
    ];


    public function recipes() {

        return $this->belongsToMany(Recipe::class, 'recipes_users', 'users_id', 'recipes_id');

    }


    public function comments() {

        return $this->hasMany(Comment::class);

    }


    public function articles() {

        return $this->hasMany(Article::class, 'users_id');

    }

}
