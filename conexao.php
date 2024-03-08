<?php
//conexão ao banco de dados
$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';
//Criando/Conectando MySQL
$mysqli = new mysqli($host, $usuario, $senha, $database);
//Resposta caso dê um erro:
if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}