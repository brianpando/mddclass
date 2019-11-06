<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author(){
        return $this->belongsTo("\App\Models\Author");
    }

    public function editorial(){
        return $this->belongsTo("\App\Models\Editorial");
    }

    public function stores(){
        return $this->belongsToMany("App\Models\Store");
    }
}
