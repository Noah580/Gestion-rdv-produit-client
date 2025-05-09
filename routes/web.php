<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Profil', function () {
    return view('Auth.profil');
});

Route::get('/Register', function () {
    return view('Auth.register');
});

Route::get('/Login', function () {
    return view('Auth.login');
});