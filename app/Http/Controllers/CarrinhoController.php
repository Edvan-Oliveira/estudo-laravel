<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;


class CarrinhoController extends Controller
{
    public function exibir() {
        if(session('produtos_ids')) {
            $contador = 0;

            foreach(session('produtos_ids') as $produto_id){
                if($contador == 0) {
                    session()->put('produtos', array(Produto::find($produto_id)));
                } else {
                    $vetor = session('produtos');
                    array_push($vetor, Produto::find($produto_id)); 
                    session()->put('produtos', $vetor);
                }
                $contador++;
            }
            return view('carrinho', ['camisas' => session('produtos'), 'vazio' => false]);
        }

        return view('carrinho', ['vazio' => true]);
    }

    public function adicionar($produto_id) {
        if(session('produtos_ids')) {
            $vetor = session('produtos_ids');
           array_push($vetor, $produto_id); 
           session()->put('produtos_ids', $vetor);
        } else {
            session()->put('produtos_ids', array($produto_id));
        }

        return redirect()->back();
    }

    public function remover($produto_id) {
        $posicao = array_search($produto_id, session('produtos_ids'));
        
        $vetor = session('produtos_ids');
        unset($vetor[$posicao]); 
        session()->put('produtos_ids', $vetor);

        return redirect()->route('carrinho.exibir');
    }
}
