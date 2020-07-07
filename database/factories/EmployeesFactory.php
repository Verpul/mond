<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Employees;
use Faker\Generator as Faker;

$factory->define(Employees::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'surname' => $faker->lastName,
        'patronymic' => $faker->suffix,
        'position' => $faker->word,
        'eds' => $faker->numberBetween(0,1),
    ];
});
