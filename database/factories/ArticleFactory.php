<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween(1, 11),
        'online' => $faker->boolean(90),
        'image' => $faker->imageUrl()
    ];
});
