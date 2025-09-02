<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercicio1Controller;
use App\Http\Controllers\Exercicio2Controller;
use App\Http\Controllers\Exercicio3Controller;
use App\Http\Controllers\Exercicio4Controller;
use App\Http\Controllers\ItemController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/barba', function () {
    return view('barba');
});

Route::get('/exercicio1', [Exercicio1Controller::class,'exercicio1']);

Route::get('/exercicio2', [Exercicio2Controller::class,'exercicio2']);

route::get('/sabadou',[Exercicio3Controller::class,'TrazDados']);

route::get('/contar',[Exercicio4Controller::class,'contar']);

route::get('/contaritem',[itemController::class,'contarItens']);