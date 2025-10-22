<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;


Route::view('/', 'inicio');
Route::view('contacto', 'pages/contacto');
Route::view('nosotros', 'pages/nosotros');


Route::resource('users', UserController::class);

Auth::routes();

Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

Route::middleware(['auth'])->group(function () {
    Route::view('/layout-admin', 'layouts.admin');
});