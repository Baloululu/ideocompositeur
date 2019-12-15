<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->enum("site", ["Studio", "Compo"]);
            $table->unsignedTinyInteger("position");
        });

        $cats = array();
        for($i = 1; $i < 7; $i++)
        {
            $cat["site"] = "Compo";
            $cat["position"] = $i;
            $cats[] = $cat;
        }

        for($i = 1; $i < 6; $i++)
        {
            $cat["site"] = "Studio";
            $cat["position"] = $i;
            $cats[] = $cat;
        }
        DB::table("categories")->insert($cats);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
