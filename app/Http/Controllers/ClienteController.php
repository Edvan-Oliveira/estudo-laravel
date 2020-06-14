<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function home() {
        return view('home');
    }

    public function cadastro() {
        return view('cadastro');
    }
    
    public function cadastrar(Request $request) {
        $request->validate([
            'nome'              => 'required|max:20',
            'sobrenome'         => 'required|max:20',
            'cpf'               => 'required|max:14',
            'email'             => 'required|max:30|email',
            'telefone'          => 'required|max:16',
            'data_nascimento'   => 'required|max:10',
            'senha'             => 'required|max:15',
            'senha_conf'        => 'required|same:senha'
        ]);
        
        $dados = $request->except(['_token', 'senhaConf']);
        $dados['senha'] = md5($dados['senha']);
        
        Cliente::create($dados);
        session(['nome' => $dados['nome']]);
        
        return redirect()->route('home');
    }

    public function login() {
        return view('login');
    }

    public function logar(Request $request) {
        $request->validate([
            'email' => 'required|max:30|email',
            'senha' => 'required|max:15'
        ]);

        $cliente = Cliente::where('email', $request->email)->where('senha', md5($request->senha))->first();
        
        if($cliente != null){
            session(['nome' => $cliente->nome]);
            return redirect()->route('home');
        }

        return redirect()->back();
    }

    public function sair(Request $request) {
        $request->session()->flush();
        return redirect()->route('home');
    }
}
