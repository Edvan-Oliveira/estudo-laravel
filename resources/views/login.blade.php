<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{url('css/estilo-login.css')}}">
</head>
<body>
    <div id="caixa-login">
        <h1>Login</h1>
        <hr>
        <div id="caixa-dentro">
            <form action="{{url('cliente/logar')}}" method="POST">
                @csrf
                <label for="email">E-mail</label><br>
                <input type="email" id="email" name="email" placeholder="seuendereco@email.com" required autofocus><br>
                
                <label for="senha">Senha</label><br>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required><br>

                <input type="submit" value="Acessar">
            </form>
            <a href="{{url('cliente/cadastro')}}">Quero me cadastrar</a>
        </div>
    </div>
</body>
</html>