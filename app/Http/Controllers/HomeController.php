<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BookController as Book;
use App\Http\Controllers\WriterController as Writer;
use App\Http\Controllers\ArticleController as Article;

class HomeController extends Controller
{
    public function home(Writer $writer,Article $article,Book $book) {
          $writers = $writer->writers();
         $articles = $article->articles();
         $books = $book->books();
        return view('pages.home',compact('writers','articles','books'));
    }
}
