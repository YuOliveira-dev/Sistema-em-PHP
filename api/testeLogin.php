<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    
    include_once('./config.php');
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        
    $_SESSION['email'] = $usuario['email'];
     header('Location: sistema.php');
     exit();
    } else {
        echo "<p style='color:red;'>Email ou senha incorretos.</p>";
    }
} else {
    header('Location: login.php');
    exit();
}
?>
