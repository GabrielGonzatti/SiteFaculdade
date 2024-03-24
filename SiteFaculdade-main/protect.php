<?php
//Inicia a sessão
if(!isset($_SESSION)) {
    session_start();
}
//Valida se não está logado (!)
if(!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
}


?>