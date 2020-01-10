<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'category' => $faker->unique()->randomElement($array = array('Hotel', 'Bangalo', 'Mansion')),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
