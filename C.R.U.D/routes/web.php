<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CoutryController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\FestaController;


route::get('/produtos/novo',[ProdutoController::class,'criar'])-> name('produtos.criar');
route::post('/produtos/novo',[ProdutoController::class,'salvar'])-> name('produtos.salvar');

route::get('/coutry',[CoutryController::class,'paises'])-> name('coutry.paises');

route::get('/music',[MusicController::class,'index']) -> name('index');
route::post('/music',[MusicController::class, 'store']) -> name('store');
route::get('/festival',[FestaController::class,'index']) -> name('goto');

route::get('/loginadm',[FestaController::class,'login']) -> name('admin.login');
route::get('/loginadm',[FestaController::class,'login']) -> name('admin.login.form');
route::get('/registroadm',[FestaController::class,'cadastro']) -> name('admin.register');