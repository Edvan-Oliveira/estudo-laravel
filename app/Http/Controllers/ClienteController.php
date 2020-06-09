<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'dataNascimento'    => 'required|max:10',
            'senha'             => 'required|max:15',
            'senhaConf'         => 'required|same:senha'
        ]);
        
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

        if($request->email == 'edvan.oliveiract@gmail.com' && $request->senha == '123456'){
            session(['nome' => 'Edvan', 'id' => 1]);
            return redirect()->route('home');
        }
        return redirect()->back();
    }

    public function sair(Request $request) {
        $request->session()->flush();
        return redirect()->route('cliente.login');
    }
}
