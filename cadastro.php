        <!-- ATENÇÃO PARTE DE TESTE -->

<?php

// Conectar ao banco de dados
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Obter dados do formulário
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    // Verificar se a conexão com o banco de dados foi bem-sucedida
    if ($mysqli->connect_errno) {
        echo "Falha ao conectar-se ao MySQL: " . $mysqli->connect_error;
    } else {
        // Inserir os dados no banco de dados
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        //Verifica se deu certo inclusão:
        if ($mysqli->query($sql) === TRUE) {
            header("Location: index.php");
        } else {
            echo "Erro ao cadastrar usuário: " . $mysqli->error;
        }

        // Fechar conexão
        $mysqli->close();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    form {
        background-color: #fff;
        padding: 30px; /* adicionado padding-top */
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }
/* MUDAR A POSIÇÃO DO H1 -> CADASTRA-SE */
    form h1 {
        text-align: center;
        margin-bottom: 30px; /* adicionado margin-bottom */
    }

    form p {
        margin-bottom: 10px;
    }

    form label {
        display: block;
        margin-bottom: 5px;
    }

    form input {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 3px;
    }

    form button {
        background-color: #007bff;
        color: #fff;
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        list-style: none;
    }

    form button:hover {
        background-color: #0056b3;
    }

    .botao{
        background-color: #007bff;
        color: #fff;
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        list-style: none;
    }
    </style>

</head>
<body>
    <h1>Cadastre-se</h1>
    <label>
    <form action="cadastro.php" method="POST">
        <p>
            <label>Nome</label>
            <input type="text" name="nome" required>
        </p>
        <p>
            <label>E-mail</label>
            <input type="email" name="email" required>
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha" required>
        </p>
        <p>
            <button type="submit" class="botão">Cadastrar</button>
        </p>
    </form>
    </label>
        if (isset($_GET['success'])) {
        echo '<div class="success-message">Usuário cadastrado com sucesso!</div>';
    }
</body>
</html>
                <!-- ATENÇÃO PARTE DE TESTE -->
