@extends('template')

@section('conteudo')
    <div class="container">
        @if($vazio == true)
            <h1>Carrinho de compras está vazio!</h1>
        @else
            <h1>Carrinho de Compras</h1>
            @foreach($camisas as $camisa)
                <figure>
                    <img src="{{url($camisa->caminho_imagem)}}" height="190px">
                    <figcaption><form action="{{url('carrinho/remover', [$camisa->id])}}"><button class="botao_remover">Remover</button></form></figcaption>
                </figure>
            @endforeach
        @endif
    </div>
@endsection