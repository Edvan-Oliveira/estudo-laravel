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
            'nome'              => 'required',
            'sobrenome'         => 'required',
            'cpf'               => 'required',
            'email'             => 'required',
            'telefone'          => 'required',
            'dataNascimento'    => 'required',
            'senha'             => 'required',
            'senhaConf'         => 'required|same:senha'
        ]);
        
        return redirect()->route('home');
    }

    public function login() {
        return view('login');
    }

    public function logar(Request $request) {
        $request->validate([
            'email' => 'required',
            'senha' => 'required'
        ]);

        if($request->email == 'edvan.oliveiract@gmail.com' && $request->senha == '123456')
            return redirect()->route('home');
        return redirect()->back();
    }
}
