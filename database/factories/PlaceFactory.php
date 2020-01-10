<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Place;
use Faker\Generator as Faker;

$factory->define(Place::class, function (Faker $faker) {
    return [
        'place' => $faker->city,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
