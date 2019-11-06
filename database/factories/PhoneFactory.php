<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Phone::class, function (Faker $faker) {
    return [
        'number'=>$faker->phoneNumber,
        //'author_id'=>null
    ];
});
