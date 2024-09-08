<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;



Route::get('/search', SearchController::class)->name('search');
Route::get('/tags/{tag:name}', TagController::class)->name('tag');

// jobs
Route::get('/', [JobController::class, 'index'])->name('home');
Route::get('jobs/create', [JobController::class, 'create'])->name('jobs.create')->middleware('auth');
Route::post('jobs', [JobController::class, 'store'])->name('jobs.store')->middleware('auth');

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
