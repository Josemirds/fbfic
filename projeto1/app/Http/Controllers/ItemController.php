<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
   public  function contarItens(){
        $itens = ['item 1','item 2','item 3','item 4','item 5','item 6'];
        $quantidade = 0;
        foreach ($itens as $item){
            $quantidade++;
        }
        return view('Item',compact('quantidade'));
    }
}
