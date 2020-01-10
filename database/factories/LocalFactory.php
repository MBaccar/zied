<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Local;
use Faker\Generator as Faker;
use App\Category;
use App\Place;
use App\Photo;
$factory->define(Local::class, function (Faker $faker) {
    return [
        'category_id' => Category::get('id')->random(),
        'place_id' => Place::get('id')->random(),
        
        'capacity' => $faker->randomNumber(4, true),
        'stars' => $faker->numberBetween(0, 5),
        'name' => $faker->unique()->name,
        'description' => $faker->text(200),
        'address' => $faker->address,
        'amount'=>$faker->randomFloat(3, 10),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
