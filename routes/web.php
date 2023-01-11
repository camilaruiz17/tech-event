<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrimeController;

Auth::routes();

Route::get('/', [CrimeController::class, 'index'])->name('home');
Route::get('/home', [CrimeController::class, 'index']);

Route::delete('/delete/{id}', [CrimeController::class, 'destroy'])->name
('deleteCrime')->middleware('isadmin', 'auth');

Route::get('/create', [CrimeController::class, 'create'])->name
('createCrime')->middleware('isadmin', 'auth');
Route::post('/', [CrimeController::class, 'store'])->name
('storeCrime')->middleware('isadmin', 'auth');

Route::get('/edit/{id}', [CrimeController::class, 'edit'])->name
('editCrime')->middleware('isadmin', 'auth');
Route::patch('/crime/{id}', [CrimeController::class,'update'])->name
('updateCrime');

Route::get('/show/{id}', [CrimeController::class,'show'])->name
('showCrime');