@extends('template')

@section('conteudo')
    <div class="container">
        <h1>{{session('titulo')}}</h1>

        <img id="imagem-camisa" src="{{url(session('caminho_imagem'))}}" height="300px">

        <p id="descricao">{{session('descricao')}}</p>

        <h2>Preço: R$ {{session('preco')}}</h2>
        
        <div id="comprar-adicionar">
            <form action="#"><button>Comprar</button></form>
            <form action="{{url('carrinho/adicionar', ['produto_id' => session('id')])}}"><button>Adicionar</button></form>
        </div>
    </div>
@endsection