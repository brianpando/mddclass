<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Book::class, function (Faker $faker) {
    $author = App\Models\Author::all()->random();
    return [
        'title'=>$faker->sentence(),
        'pages'=>$faker->numberBetween(50,200),
        'author_id'=>$author->id,
    ];
});

  
