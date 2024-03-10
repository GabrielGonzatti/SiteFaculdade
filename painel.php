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
    <link rel="stylesheet" href="painel.css">
</head>

<body>
    <!-- ATENÇÃO PARTE DE TESTE -->

    Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>.
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error minus libero voluptates quis quo fugiat omnis quidem dignissimos, corrupti exercitationem quia rem et, est vero eveniet facilis pariatur aperiam temporibus.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur asperiores nam doloribus nobis est earum, quas optio. Ut tenetur sit porro eligendi, deleniti eveniet provident, possimus laudantium quia, esse ipsam.</p>
    <p>
        <a href="logout.php" class="deslogar">Sair</a>
    </p>
    <a href="Páginas/D&D.html" target="_blank">D&D World</a>
    <!-- ATENÇÃO PARTE DE TESTE -->

</body>
</html>
