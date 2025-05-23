<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use Inertia\Inertia;


//  echo  config('app.name');
//   echo Config::get('app.name');

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
