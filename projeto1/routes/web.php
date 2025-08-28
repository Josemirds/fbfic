<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercicio1Controller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/barba', function () {
    return view('barba');
});

Route::get('/exercicio1', [Exercicio1Controller::class,'exercicio1']);