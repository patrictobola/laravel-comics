<?php

use App\Http\Controllers\ComicController;
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

Route::get('/', [ComicController::class, 'index'])->name('home');
Route::get('/products/create', [ComicController::class, 'create'])->name('comicbooks.create');
Route::get('/products/{comic}/edit', [ComicController::class, 'edit'])->name('comicbooks.edit');
Route::get('/products/{comic}', [ComicController::class, 'show'])->name('comicbooks.show');
Route::post('/products', [ComicController::class, 'store'])->name('comicbooks.store');
