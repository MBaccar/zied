<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Offre;
use Faker\Generator as Faker;
use App\Local;
use App\User;
$factory->define(Offre::class, function (Faker $faker) {
    return [
        'local_id' => Local::get('id')->random(),
        'user_id' => User::get('id')->random(),
        
        'capacity' => $faker->numberBetween(0, 5),
        
        
        'description' => $faker->text(200),
        'begin_date' => $faker->date,
        'end_date' => $faker->date,
        'amount' => $faker->randomFloat(3, 10),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
