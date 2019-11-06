<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Editorial::class,20)->create()->each(function($e){
            $e->books()->saveMany(factory(App\Models\Book::class,10)->make() );
        });
    }
}
