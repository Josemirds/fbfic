<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio1Controller extends Controller
{
    public function exercicio1(){
        $itens = ['Guardanapo','Papel','Prato'];
        return view('exercicio1', compact('itens'));
    }
}
