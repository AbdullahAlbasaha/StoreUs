<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function books() {
       return  Book::inRandomOrder()->take(10)->get(['id','name','writer_id']);
    }
    public function show(Book $book)  {
        return view('pages.showBook',compact('book'));
    }
}
