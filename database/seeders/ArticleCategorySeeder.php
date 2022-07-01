<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\ArticleCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $article_categories = [

            'News' => 'Quoi de neuf en ce moment ?',
            'Blog' => 'Nos articles',

        ];
        

        foreach ($article_categories as $category_label => $category_title) {
            
            ArticleCategory::create([
                'category_label' => $category_label,
                'category_title' => $category_title,
                'category_slug' => Str::slug($category_title, '-'),
            ]);

        }
        
    }
}
