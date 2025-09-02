<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio3Controller extends Controller
{
  public function TrazDados(){
 $dados = ['nome' => 'Diego', 'idade'=>27, 'profissao'=>'GP' ];
 return view ('exercicio3',compact('dados'));
  }
}
