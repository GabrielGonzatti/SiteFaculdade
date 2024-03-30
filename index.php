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
