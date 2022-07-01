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

        Schema::create('ingredients_recipes', function (Blueprint $table) {
            $table->unsignedBigInteger('ingredients_id');
            $table->foreign('ingredients_id')->on('ingredients')->references('id');
            $table->unsignedBigInteger('recipes_id');
            $table->foreign('recipes_id')->on('recipes')->references('id');
            $table->integer('quantity');
            $table->string('unity');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('ingredients_recipes');
        
    }
};
