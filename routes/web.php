<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/products/{index}', function ($index) {
    $books = config('comics');

    // Creo delle variabili per cambiare index

    $prev = $index - 1;
    $next = $index + 1;

    // Prendo il singolo fumetto
    $book = $books[$index];

    $data = compact('book', 'prev', 'next');
    return view('products', $data);
})->name('products-info');
