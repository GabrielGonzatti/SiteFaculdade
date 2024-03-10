<?php
//include faz uma inclusão, neste caso inclui a parte de conexao
include('conexao.php');

//login 
if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        //Validação se o email está com zero caracteres, se sim:
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        //Validação se a senha está com zero caracteres, se sim:
        echo "Preencha sua senha";
    } else {
        //armazena em variável o que foi postado como email e senha;
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        //Valida selecionando dentro do banco de dados, se email = email & senha = senha;
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;
        //verificação se existe 1 usuário baseado nos dados fornecidos;
        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! Login incorreto ou Usuário não cadastrado!";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <h1>Acesse sua conta</h1>
    <label>
    <form action="" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text" name="email" required>
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha" required>
        </p>
        <!-- ATENÇÃO PARTE DE TESTE -->
        <p>
            <button type="submit">Entrar</button>
            <a href="cadastro.php" class="botao">Cadastrar</a> <!-- Adicionado botão de cadastro -->
        </p>
        <!-- ATENÇÃO PARTE DE TESTE -->
    </form>
    </label>
</body>
</html>
