<?php

use Hamcrest\Type\IsNumeric;
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

    $last_index = count($books) - 1;

    // Faccio una validazione per l'index 
    if ($index < 0 || $index > $last_index || !is_numeric($index))
        abort(404);

    // Creo delle variabili per cambiare index

    $prev = $index > 0 ? $index - 1 : null;
    $next = $index == $last_index ? null : $index + 1;

    // Prendo il singolo fumetto
    $book = $books[$index];

    $data = ['book' => $book];
    if ($prev != null) $data['prev'] = $prev;
    if ($next != null) $data['next'] = $next;


    return view('products', $data);
})->name('products-info');
