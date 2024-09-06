<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('home');
Route::get('jobs', [JobController::class, 'create'])->name('jobs.create');


Route::middleware('guest')->group(function () {
  // register
  Route::get('/register', [RegisterUserController::class, 'create'])->name('register.create');
  Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');

  // login
  Route::get('/login', [LoginController::class, 'create'])->name('login.create');
  Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

// logout
Route::delete('/logout', [LoginController::class, 'destroy'])->name('login.destroy')->middleware('auth');
