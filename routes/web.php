<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BooksController;

Route::get('/books',              [BooksController::class, 'index'])->name('books.index');
Route::get('/books/featured',     [BooksController::class, 'featured'])->name('books.featured');
Route::get('/books/filter/{pages?}', [BooksController::class, 'filter'])->name('books.filter');
Route::get('/books/{id}',         [BooksController::class, 'show'])->name('books.show');