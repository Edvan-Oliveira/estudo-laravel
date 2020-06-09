<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futebol no Peito</title>
    <link rel="stylesheet" href="{{url('css/estilo-principal.css')}}">
</head>
<body>
    <header>
        <div class="container">
            <img src="{{url('imagens/logo.png')}}" alt="logo" height="90px">

            <form action="#" method="POST">
                <input type="search" placeholder="O que procura ?">
                <input type="submit" value="pesquisar">
            </form>

            @if(session('nome') == null)
                <div id="login-cadastrar">
                    <a href="{{url('cliente/cadastro')}}">Cadastre-se</a>
                    <a href="{{url('cliente/login')}}">Acessar</a>
                </div>
            @else
                <div id="usuario">
                    <a href="{{url('cliente/sair')}}"><img id="sairImg" src="{{url('imagens/sair.png')}}" height="28px"></a>
                    <a id="sair" href="{{url('cliente/sair')}}">Sair</a>
                </div>
            @endif

            <nav>
                <ul>
                    <li><a href="#">Times</a></li>
                    <li><a href="#">Masculinas</a></li>
                    <li><a href="#">Femininas</a></li>
                    <li><a href="#">Lançamentos</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">

        @if(session('nome'))
            <h3>Seja muito bem vindo {{session('nome')}}, tenha ótimas compras!</h3>
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

    <footer>
        <div class="container">
            <h3>Desenvolvido por Edvan Oliveira</h3>
            <p>Contato: edvan.oliveiract@gmail.com</p>
        </div>
    </footer>
</body>
</html>