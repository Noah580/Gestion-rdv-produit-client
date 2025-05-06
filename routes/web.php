<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/RoutedeTest', function (){
    return 'Seconde route de test'
});
