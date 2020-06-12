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
                    <a href="#"><img id="carrinho" src="{{url('imagens/carrinho.png')}}" height="50px"></a>
                </div>
            @else
                <div id="logado">
                    <a href="#"><img id="logado-carrinho" src="{{url('imagens/carrinho.png')}}" height="50px"></a>
                    <a href="{{url('cliente/sair')}}"><img id="sairImg" src="{{url('imagens/sair.png')}}" height="43px"></a>
                    <a id="sair" href="{{url('cliente/sair')}}"><i>Sair</i></a>
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
    <!--INICIO DO CONTEÚDO-->

    @yield('conteudo')

    <!--FIM DO CONTEÚDO-->
    <footer>
        <div class="container">
            <h3>Desenvolvido por Edvan Oliveira</h3>
            <p>Contato: edvan.oliveiract@gmail.com</p>
        </div>
    </footer>
</body>
</html>