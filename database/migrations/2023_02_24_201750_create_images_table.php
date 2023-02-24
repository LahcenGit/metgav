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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('article_id')->unsigned()->nullable();
            $table->unsignedBigInteger('actualite_id')->unsigned()->nullable();
            $table->string('link');
            $table->tinyInteger('type');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('actualite_id')->references('id')->on('actualites')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
};
