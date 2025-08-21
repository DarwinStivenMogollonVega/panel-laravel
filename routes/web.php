<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/app', function () {
    //return view('plantilla.app');
//});

Route::get('/usuario', function () {
    return view('usuario.index');
});