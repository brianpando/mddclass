<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    
    public function Phone(){
        return $this->hasOne("App\Models\Phone");
    }

    public function books(){
        return $this->hasMany("App\Models\Book");
    }
}   
