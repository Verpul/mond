<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Eds;
use Faker\Generator as Faker;

$factory->define(Eds::class, function (Faker $faker) {
    return [
        'purpose' => $faker->numberBetween(1,5),
        'employee_owner' => $faker->numberBetween(1,5),
        'company' => $faker->numberBetween(1,3),
    	'created' => $faker->dateTimeThisCentury(),
    	'expired' => $faker->dateTimeThisYear(),
    	'status' => $faker->numberBetween(0,1),
    ];
});
