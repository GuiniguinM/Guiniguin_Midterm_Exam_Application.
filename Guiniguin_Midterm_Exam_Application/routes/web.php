<?php

use Illuminate\Support\Facades\Route;

//for da booksss//
Route::get('/products', [ProductController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
