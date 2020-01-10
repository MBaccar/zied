<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use App\Local;
use App\User;


use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'local_id' => Local::get('id')->random(),
        'user_id' => User::get('id')->random(),
        'stars' => $faker->numberBetween(0, 5),
        'review' => $faker->text(200),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
