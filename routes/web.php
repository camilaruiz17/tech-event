<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [CrimeController::class, 'index']);

Route::get('/home', [CrimeController::class, 'index']);