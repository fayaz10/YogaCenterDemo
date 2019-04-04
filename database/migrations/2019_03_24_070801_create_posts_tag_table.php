<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_tag', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('posts_id')->unsigned();
            $table->foreign('posts_id')->references('id')->on('posts');

            $table->integer('tags_id')->unsigned();
            $table->foreign('tags_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_tag');
    }
}
