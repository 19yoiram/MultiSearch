<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [ProductController::class, 'index']);
Route::get('/search', [ProductController::class, 'search'])->name('products.search');
