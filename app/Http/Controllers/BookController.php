<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    
    public function list(){
        $books  = Book::all();
        $vars = [ 'books'=> $books ];
        return view("book.list", $vars );
    }
}
