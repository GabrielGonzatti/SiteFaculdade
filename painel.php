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
    <title>Painel dos RPG</title>
    <link rel="stylesheet" href="painel.css">
</head>

<body>

    <!-- ATENÇÃO PARTE DE TESTE -->
    <h1 class="welcome">
        <p>Bem vindo ao Painel inicial dos RPG's, <?php echo $_SESSION['nome']; ?>.</p>
    </h1>
    <p>Este site tem o intuíto de ajudar aos iniciantes ao RPG se encontrarem, descobrirem sobre um dos jogos mais interativos, que constrói raciocínios e criativade.</p>
    <p>Dungeons & Dragons, é um jogo de interpretação de papéis de alta fantasia criado por Gary Gygax e Dave Arneson. e publicado pela primeira vez em 1974 nos Estados Unidos pela TSR, Inc., empresa fundada por Gygax e Don Kay em 1973..</p>
    <div class="img"></div>
    <h3>Quer saber mais sobre D&D e RPG's?
    <a href="Páginas/D&D.html" target="_blank" class="dnd">Clique aqui</a>
    <!-- ATENÇÃO PARTE DE TESTE -->
    </h3>

    <footer class="rodape">
            <a href="logout.php" class="deslogar">Clique aqui para Sair</a>
    </footer>

    <!-- PARTE DE SUPORTE PARA O CÓDIGO-->

    <script src="https://unpkg.com/blip-chat-widget" type="text/javascript"></script>
<script>
    (function () {
        window.onload = function () {
            new BlipChat()
                .withAppKey('Z29uemF0dGlib3Q6ODMxMDg5ZTMtYzc1Mi00OGEyLTkxYTQtNjZhZTA2MDFmYzNl')
                .withButton({"color":"#0096fa","icon":""})
                .withCustomCommonUrl('https://gabriel-gonzatti-ljiru.chat.blip.ai/')
                .build();
        }
    })();
</script>       
            
</body>
</html>
