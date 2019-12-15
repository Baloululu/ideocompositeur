<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ArticleContent;
use Faker\Generator as Faker;

$factory->define(ArticleContent::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'content' => $faker->paragraph(50, true)
    ];
});
