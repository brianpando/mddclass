<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Store::class, function (Faker $faker) {
    return [
        'name'=>$faker->company,
        'address'=>$faker->address
    ];
});

$factory->afterCreating(App\Models\Store::class, function ($store, $faker) {
    $books=App\Models\Book::all()->random( $faker->numberBetween(1,10) ); 
    $ids=array_map( function($e){ return $e['id']; }, $books->toArray() );
    $store->books()->sync($ids);
  });
