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

        Schema::create('recipe_medias', function (Blueprint $table) {
            $table->id();
            $table->string('media_name');
            $table->unsignedBigInteger('recipes_id');
            $table->foreign('recipes_id')->on('recipes')->references('id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('recipe_medias');
        
    }
};
