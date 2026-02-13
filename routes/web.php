<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('ajustes.index', 'ajustes.index')
    ->middleware(['auth', 'verified'])
    ->name('ajustes');

require __DIR__.'/settings.php';
