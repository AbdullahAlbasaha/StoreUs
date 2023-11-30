<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function writers() {

        return Writer::inRandomOrder()->take(10)->get(['id','name']);
    }

    public function writerBooks(Writer $writer){
        $books =  $writer->books;
        return view('pages.books',compact('books','writer'));
    }
}
