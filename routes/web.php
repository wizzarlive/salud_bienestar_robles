<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;


Route::view('/', 'inicio');
Route::view('contacto', 'contacto');
Route::view('nosotros', 'nosotros');
Route::view('header', 'header');
Route::view('footer', 'footer');


Route::resource('users', UserController::class);

//Route::middleware(['auth'])->get('/dashboard', function () {
//    return view('dashboard');
//});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);