<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Str;
use App\Models\ArticleCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $switch = true;

        for ($index = 0; $index < 75;$index++) {

            $article_title = Factory::create()->sentence();

            Article::create([
                'article_title' => $article_title,
                'article_slug' => Str::slug($article_title, '-'),
                'article_content' => Factory::create()->text($maxNbChars = 600),
                'article_media' => $switch ? 'https://cdn.pixabay.com/photo/2017/06/06/22/37/italian-cuisine-2378729_960_720.jpg' : 'https://cdn.pixabay.com/photo/2012/10/12/17/52/potato-gratin-61106_960_720.jpg',
                'created_at' => now(),
                'updated_at' => null,
                'article_categories_id' => ArticleCategory::inRandomOrder()->first()->id,
                'users_id' => User::where('role', User::ADMIN_ROLE)->inRandomOrder()->first()->id,
            ]);

            $switch = !$switch;

        }

    }

}
