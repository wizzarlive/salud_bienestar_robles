<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('header', function () {
    return view('header ');
});

Route::get('footer', function () {
    return view('footer ');
});

Route::get('nosotros', function () {
    return view('nosotros ');
});

Route::resource('users', UserController::class);


