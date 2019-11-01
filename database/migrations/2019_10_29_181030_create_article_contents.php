<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleContents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("article_id");
            $table->unsignedInteger("country_code_id");
            $table->string("title", 100)->default("");
            $table->text("content")->nullable();

            $table->foreign("article_id")->references("id")->on("articles");
            $table->foreign("country_code_id")->references("id")->on("country_code");
            $table->unique(["article_id", "country_code_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_contents');
    }
}
