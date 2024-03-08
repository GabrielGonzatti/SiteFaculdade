<?php
//Código de sair do sistema

if(!isset($_SESSION)){
    session_start();
}
//Saí da sessão e redireciona para página login inicial (index):
session_destroy();

header("Location: index.php");

?>