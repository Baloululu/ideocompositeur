<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTitles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_titles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("category_id");
            $table->unsignedInteger("country_code_id");
            $table->string("title", 100);

            $table->foreign("category_id")->references("id")->on("categories");
            $table->foreign("country_code_id")->references("id")->on("country_code");
            $table->unique(["category_id", "country_code_id"]);
        });

        DB::table("category_titles")->insert([
            ["category_id" => 1, "country_code_id" => 1, "title" => "Qui est IDEO ?"],
            ["category_id" => 1, "country_code_id" => 2, "title" => "Who is IDEO ?"],

            ["category_id" => 2, "country_code_id" => 1, "title" => "Projets"],
            ["category_id" => 2, "country_code_id" => 2, "title" => "Projects"],

            ["category_id" => 3, "country_code_id" => 1, "title" => "Albums"],
            ["category_id" => 3, "country_code_id" => 2, "title" => "Albums"],

            ["category_id" => 4, "country_code_id" => 1, "title" => "Galerie"],
            ["category_id" => 4, "country_code_id" => 2, "title" => "Gallery"],

            ["category_id" => 5, "country_code_id" => 1, "title" => "Contacts"],
            ["category_id" => 5, "country_code_id" => 2, "title" => "Contacts"],

            ["category_id" => 6, "country_code_id" => 1, "title" => "Commentaires"],
            ["category_id" => 6, "country_code_id" => 2, "title" => "Comments"],

            ["category_id" => 7, "country_code_id" => 1, "title" => "Accès"],
            ["category_id" => 7, "country_code_id" => 2, "title" => "Access"],

            ["category_id" => 8, "country_code_id" => 1, "title" => "Matériel"],
            ["category_id" => 8, "country_code_id" => 2, "title" => "Equipment"],

            ["category_id" => 9, "country_code_id" => 1, "title" => "Prestations"],
            ["category_id" => 9, "country_code_id" => 2, "title" => "Services"],

            ["category_id" => 10, "country_code_id" => 1, "title" => "Contacts"],
            ["category_id" => 10, "country_code_id" => 2, "title" => "Contacts"],

            ["category_id" => 11, "country_code_id" => 1, "title" => "Projets/\nCommentaires"],
            ["category_id" => 11, "country_code_id" => 2, "title" => "Projects/\nComments"]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_titles');
    }
}
