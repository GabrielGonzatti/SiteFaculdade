<?php
include('protect.php');
//Inclui a parte de validar se o usuário não está logado
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>

    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 1200px;
}

.welcome {
    text-align: center;
    margin-bottom: 30px;
}

.welcome span {
    color: #007bff;
}

.dashboard {
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.box {
    background-color: #f5f5f5;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    flex-basis: calc(33.33% - 20px);
    margin-bottom: 20px;
}

.box h2 {
    margin-bottom: 10px;
    color: #333;
}

.box p {
    color: #666;
}
    </style>
</head>

<body>

    Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>.

    <p>
        <a href="logout.php">Sair</a>
    </p>

</body>
</html>
