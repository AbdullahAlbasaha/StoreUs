<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::group(['middleware' => 'auth'],function(){

    Route::get('/',[HomeController::class,'home'])->name('home');
    Route::get('books/{book}',[BookController::class,'show'])->name('showBook')->middleware('logs');
    Route::get('writer-books/{writer}',[WriterController::class,'writerBooks'])->name('writerBooks');
    Route::post('logout',[LoginController::class,'logout'])->name('logout');
});

    Route::get('login',[LoginController::class,'showLoginForm'])->name('login');
    Route::post('login',[LoginController::class,'login']);
    Route::get('register',[RegisterController::class,'showRegistrationForm'])->name('register');
    Route::post('register',[RegisterController::class,'register']);


