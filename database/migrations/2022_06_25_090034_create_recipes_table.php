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

        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('recipe_title');
            $table->text('recipe_content');
            $table->integer('preparation_time');
            $table->integer('cooking_time');
            $table->integer('break_time');
            $table->integer('note');
            $table->timestamps();
            $table->unsignedBigInteger('recipe_categories_id');
            $table->foreign('recipe_categories_id')->on('recipe_categories')->references('id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('recipes');
        
    }
};
