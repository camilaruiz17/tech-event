<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrimeController;

Auth::routes();

Route::get('/', [CrimeController::class, 'index'])->name('home');

Route::get('/home', [CrimeController::class, 'index']);
Route::delete('/delete/{id}', [CrimeController::class, 'destroy'])->name
('deleteCrime');