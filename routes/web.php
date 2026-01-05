<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;

Route::view('/', 'home')->name('home');

Route::view('/contact', 'contact')->name('contact');

//Route::resource('jobs', JobController::class);

// User Registration Routes
//Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
//Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');

// Jobs routes - manual definition of resource routes
// index, show, create, store, edit, update, destroy

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store')->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit')
    ->middleware('auth')
    ->can(
    'edit-job', 'job'
);
Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');


// Auth routes
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

//login routes
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store'])->name('login.store');

// logout route
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');
