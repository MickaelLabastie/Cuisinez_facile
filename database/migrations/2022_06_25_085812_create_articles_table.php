<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('article_slug');
            $table->string('article_title');
            $table->text('article_content');
            $table->string('article_media')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('article_categories_id');
            $table->foreign('article_categories_id')->on('article_categories')->references('id');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->on('users')->references('id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('articles');
        
    }
};
