<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function criar(){


        $linhas = DB::Select("select id, nome from tipos_produtos order by nome asc");
        $tipos = [];

        foreach ($linhas as $linha){
            $tipos[$linha -> id] = $linha -> nome;
        }
        
        return view ('produtos.create', compact('tipos'));
    }
    public function salvar(Request $request){

        $dados = $request->validate(['nome'=>['required','string','max:255'],
        'tipo_id'=>['required','integer'],
    ]);

    DB::insert("INSERT INTO produtos (nome, tipo_id, created_at) 
    VALUES(?,?, now())", [$dados['nome'],$dados['tipo_id']]);
    return redirect()->route('produtos.salvar');
    }

}

