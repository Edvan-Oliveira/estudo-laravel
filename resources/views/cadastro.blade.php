<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{url('css/estilo-cadastro.css')}}">
</head>
<body>
    <div id="caixa-cadastro">
        <h1>Cadastro</h1>
        <hr>
        <div id="caixa-dentro">
            <form action="{{url('cliente/cadastrar')}}" method="POST">
                @csrf
                <div id="esquerda">
                    <label for="nome">Nome</label><br>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required><br>

                    <label for="cpf">CPF</label><br>
                    <input type="text" id="cpf" name="cpf" placeholder="111.111.111-11" required><br>

                    <label for="telefone">Telefone</label><br>
                    <input type="tel" id="telefone" name="telefone" placeholder="(11) 11111-1111" required><br>

                    <label for="senha">Senha</label><br>
                    <input type="password" id="senha" name="senha" placeholder="Criar senha" required><br>
                </div>

                <div id="direita">
                    <label for="sobrenome">Sobrenome</label><br>
                    <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome" required><br>

                    <label for="email">E-mail</label><br>
                    <input type="email" id="email" name="email" placeholder="seuemail@email.com" required><br>

                    <label for="dataNascimento">Data de Nascimento</label><br>
                    <input type="date" id="dataNascimento" name="dataNascimento" required><br>

                    <label for="senhaConf">Confirmar Senha:</label><br>
                    <input type="password" id="senhaConf" name="senhaConf" placeholder="Repita a senha" required><br>
                </div>

                <input type="submit" value="Acessar" onclick="return validarSenha()">
            </form>
            <a href="{{url('cliente/login')}}">Já tenho um cadastro</a>
        </div>
    </div>

    <script>
        function validarSenha(){
            let senha1 = document.getElementById('senha').value
            let senha2 = document.getElementById('senhaConf').value

            if(senha1 !== senha2){
                alert('Senhas diferentes!')
                return false
            } else {
                return true
            }
        }
    </script>
</body>
</html>