<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Data;
use Faker\Generator as Faker;

$factory->define(Data::class, function (Faker $faker) {
    return [
        'purpose' => $faker->word,
        'login' => $faker->name,
        'password' => $faker->text(6),
        'comment' => $faker->text(30)
    ];
});
