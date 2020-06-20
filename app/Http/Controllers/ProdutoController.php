<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function detalhe(Request $request) {

        $produto = Produto::find($request->id);
        
        if($produto != null) {
            session([
                'id'                => $produto->id,
                'titulo'            => $produto->titulo,
                'descricao'         => $produto->descricao,
                'preco'             => $produto->preco,
                'caminho_imagem'    => $produto->caminho_imagem
            ]);
            return view('detalhe');
        }
        return redirect()->back();
    }
}
