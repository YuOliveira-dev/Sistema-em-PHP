<?php
    // Cria um caminho para o inicio e destrói todas as informações de login
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
?>