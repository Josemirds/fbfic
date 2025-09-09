<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;



route::get('/produtos/novo',[ProdutoController::class,'criar'])->name('produtos.criar');
route::post('/produtos/novo',[ProdutoController::class,'salvar'])->name('produtos.salvar');