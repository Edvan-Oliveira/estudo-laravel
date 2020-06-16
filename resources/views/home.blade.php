@extends('template')

@section('conteudo')
    <div class="container">
        @if(session('nome'))
            <h3>Seja muito bem vindo(a) {{session('nome')}}, tenha ótimas compras!</h3>
        @endif
        
        <section id="camisas-masculinas" >
            <h2>Destaques Masculinas</h2>
            <hr>
            <figure>
                <img src="{{url('imagens/times/masculinas/spfc.jpg')}}" alt="camisa do spfc" height="180px">
            <figcaption>Camisa 1 SPFC</figcaption>
            </figure>

            <figure>
                <img src="{{url('imagens/times/masculinas/juventus1.jpg')}}" alt="camisa da juventus" height="180px">
            <figcaption>Camisa 1 Juventus</figcaption>
            </figure>

            <figure>
                <img src="{{url('imagens/times/masculinas/psg1.jpg')}}" alt="camisa do psg" height="180px">
            <figcaption>Camisa 1 PSG</figcaption>
            </figure>

            <figure>
                <img src="{{url('imagens/times/masculinas/arsenal1.jpg')}}" alt="camisa do arsenal" height="180px">
            <figcaption>Camisa 1 Arsenal</figcaption>
            </figure>
        </section>
        <section id="camisas-femininas">
            <h2>Destaques Femininas</h2>
            <hr>
            <figure>
                <img src="{{url('imagens/times/femininas/spfc1.jpg')}}" alt="camisa do spfc" height="180px">
            <figcaption>Camisa 1 SPFC</figcaption>
            </figure>

            <figure>
                <img src="{{url('imagens/times/femininas/brasil1.jpg')}}" alt="camisa do brasil" height="180px">
            <figcaption>Camisa 1 Brasil</figcaption>
            </figure>

            <figure>
                <img src="{{url('imagens/times/femininas/psg1.jpg')}}" alt="camisa do psg" height="180px">
            <figcaption>Camisa 1 PSG</figcaption>
            </figure>

            <figure>
                <img src="{{url('imagens/times/femininas/barcelona1.jpg')}}" alt="camisa do barcelona" height="180px">
            <figcaption>Camisa 1 Barcelona</figcaption>
            </figure>
        </section>
    </div>
    <script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
    </script>
    <script>
        (function () {
            window.onload = function () {
                new BlipChat()
                .withAppKey('bWV1Y2hhdGJvdGNlc21hYzE6OTVlODViZWEtOTFhZS00YTk2LTllNGQtOThhMWQxOGQ5YmNk')
                .withButton({"color":"#2CC3D5","icon":""})
                .withCustomCommonUrl('https://chat.blip.ai/')
                .build();
            }
        })();
    </script>                          
@endsection