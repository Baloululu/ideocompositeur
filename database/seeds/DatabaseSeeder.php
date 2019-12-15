<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Article::class, 30)->create()->each(function ($a){
            $a->articleContents()->save(factory(App\ArticleContent::class)->make([
                'country_code_id' => 1
            ]));
            $a->articleContents()->save(factory(App\ArticleContent::class)->make([
                'country_code_id' => 2
            ]));
        });
    }
}
