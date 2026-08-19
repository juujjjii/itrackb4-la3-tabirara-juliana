<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectsController;

Route::get('/', function () {
    return view ('welcome');
});

    Route::get('/subjects', [SubjectsController::class, 'index']);