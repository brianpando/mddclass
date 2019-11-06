<?php

use Illuminate\Database\Seeder;
use App\Models\Author;
class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Author::class,20)->create()->each(function($e){
            $e->phone()->save(factory(App\Models\Phone::class)->make());
            
        });   
    }
}
