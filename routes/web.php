<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;

Route::view('/', 'home')->name('home');

Route::view('/contact', 'contact')->name('contact');

Route::resource('jobs', JobController::class);

// User Registration Routes
Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');

// Login
Route::get('login', [SessionController::class, 'create'])->name('login');
Route::post('login', [SessionController::class, 'store'])->name('login.store');
Route::post('logout', [SessionController::class, 'destroy'])->name('logout');
