<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('home');
});
*/
/*
Route::get('/second', function () {
    return view('second');
});
*/
/*
Route::view('/second', 'second');
Route::view('contact', 'contact');
Route::view('about', 'about');
*/
//Route::view("/", 'home')->name('home');
Route::get("/", [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("post/{post}", [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');