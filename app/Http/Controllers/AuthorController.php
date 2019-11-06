<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    //
    public function list(){
        $vars=[ 'authors' => Author::all() ];
        return view("author.list", $vars);
    }
}
