<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'meu_formulario';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, 3306);
    mysqli_set_charset($conexao, 'utf8mb4');

    // if ($conexao->connect_errno)
    // {
    //     echo "erro";
    // }
    // else {
    //     echo"Conexão efetuada com sucesso";
    // }

?>