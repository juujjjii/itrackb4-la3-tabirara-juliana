<?php

use Illuminate\Support\Facades\Route;
// ✅ SURE NA MAY 's' — SubjectsController
use App\Http\Controllers\SubjectsController;

Route::get('/', function () {
    return view('welcome');
});

// ✅ TAMANG AYOS — MAY 's' LAHAT
Route::get('/subjects',          [SubjectsController::class, 'index'])->name('subjects.index');
Route::get('/subjects/featured', [SubjectsController::class, 'featured'])->name('subjects.featured');
Route::get('/subjects/filter/{units?}', [SubjectsController::class, 'filter'])->name('subjects.filter');
Route::get('/subjects/{id}',      [SubjectsController::class, 'show'])->name('subjects.show');