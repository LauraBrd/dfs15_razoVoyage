<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'like' => $faker->numberBetween(1,20),
        'title' => $faker->text,
        'content' => $faker->text,
        'active' => $faker->numberBetween(0,1),
        'author' => $faker->firstNameMale,
        'visited' => $faker->numberBetween(0,1000),
        'voyage_id' => ''
    ];
});
