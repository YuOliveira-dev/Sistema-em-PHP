<?php
session_start();
// print_r($_REQUEST);
if (isset($_POST ['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    // acessa 
    include_once('./config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        
        // Manda pro banco de dados verificando se existe a senha e o e-mail no banco de dados
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else {
            $_SESSION['senha'] = $senha;
            $_SESSION['email'] = $email;
            header('Location: sistema.php');
        }
    }

    // não acessa
    else {
        header('location: login.php');
    }
?>