<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\SubjectsController;

Route::get('/subjects',              [SubjectsController::class, 'index'])->name('subjects.index');
Route::get('/subjects/featured',     [SubjectsController::class, 'featured'])->name('subjects.featured');
Route::get('/subjects/filter/{units?}', [SubjectsController::class, 'filter'])->name('subjects.filter');
Route::get('/subjects/{id}',         [SubjectsController::class, 'show'])->name('subjects.show');