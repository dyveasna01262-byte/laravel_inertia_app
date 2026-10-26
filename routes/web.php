<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'About'])->name('about');
Route::get('/login', function () {
    return Inertia::render('auth/Login');
})->name('login');
Route::get('/register', function () {
    return Inertia::render('auth/Register');
})->name('register');
