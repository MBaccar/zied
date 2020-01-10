<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Photo;
use App\Local;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    return [
        'photo'=>$faker->imageUrl(640,480),
        'local_id' => Local::get('id')->random(),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
