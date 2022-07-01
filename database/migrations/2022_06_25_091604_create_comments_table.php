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

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment_content');
            $table->timestamps();
            $table->unsignedBigInteger('recipes_id');
            $table->foreign('recipes_id')->on('recipes')->references('id');
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

        Schema::dropIfExists('comments');

    }
};
