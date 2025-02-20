<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

//for da booksss//
Route::get('/index', [ProductController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
