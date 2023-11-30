<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
   public  function articles() {

      return Article::inRandomOrder()->take(10)->get(['name','wordCount','status']);
    }
}
