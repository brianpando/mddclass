<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone_id'=> null,
        'created_at'=>now(),
        'updated_at'=>now(),
    ];
});

$factory->define(App\Models\Book::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(),
        'pages'=>$faker->numberBetween(50,200),
        'created_at'=>now(),
        'updated_at'=>now(),
    ];
});

$factory->define(App\Models\Editorial::class, function (Faker $faker) {
    return [
        'name'=>$faker->company,
        'created_at'=>now(),
        'updated_at'=>now(),
    ];
});
