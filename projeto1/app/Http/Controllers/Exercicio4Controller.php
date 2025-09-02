<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio4Controller extends Controller
{
    public  function contar(){
        $produtos = ['Produto A','Produto B','Produto C','Produto D'];
        $quantidade = 0;
        foreach ($produtos as $produto){
            $quantidade++;
        }
        return view('exercicio4',compact('quantidade','produtos'));
    }
}
