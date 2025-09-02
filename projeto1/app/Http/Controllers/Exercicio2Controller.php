<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio2Controller extends Controller
{
 public function exercicio2(){
        $nomes = ['Diego','Josemir','Ana'];
        return view('exercicio2', compact('nomes'));
    }
}
