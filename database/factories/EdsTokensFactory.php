<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Eds_tokens;
use Faker\Generator as Faker;

$factory->define(Eds_tokens::class, function (Faker $faker) {
    return [
        'eds_id' => $faker->numberBetween(1,10),
        'token_id' => $faker->numberBetween(1,10)
    ];
});
