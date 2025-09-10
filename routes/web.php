<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

// Páginas estáticas
Route::view('contacto', 'contacto');
Route::view('header', 'header');
Route::view('footer', 'footer');
Route::view('nosotros', 'nosotros');

// CRUD de usuarios
Route::resource('users', UserController::class);

// Dashboard protegido
Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
});

// Autenticación (Laravel UI)
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Login con Google (Socialite)
Route::get('login/google', [LoginController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);
