<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_code', function (Blueprint $table) {
            $table->increments('id');
            $table->string("code", 10);
        });

        $code = DB::table("country_code");
        $code->insert(["code" => "fr"]);
        $code->insert(["code" => "en"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_code');
    }
}
