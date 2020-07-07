<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Tokens;
use Faker\Generator as Faker;

$factory->define(Tokens::class, function (Faker $faker) {
    return [
        'type' => $faker->numberBetween(1,3),
        'serial' => $faker->unique()->word,
        'employee_id' => $faker->numberBetween(1,5),
    ];
});
