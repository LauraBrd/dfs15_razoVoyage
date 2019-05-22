<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Voyage;
use Faker\Generator as Faker;

$factory->define(Voyage::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl($width = 640, $height = 480, 'city'),
        'destination' => $faker->country,
        'description' => $faker->text,
        'prix' => $faker->numberBetween(100,3000),
        'titre' => $faker->text
        // 'image' => $faker->imageUrl($width = 640, $height = 480, 'city')
    ];
});
