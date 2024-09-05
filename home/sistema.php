<?php
session_start();

if ((!isset($SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{   
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION ['email']

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: linear-gradient(
    to right,
    rgb(20, 147, 220),
    rgb(17, 54, 71)
  );
  color: white;
  text-align: center;
        }
    </style>
</head>
<body>
<nav class="navbar bg-body-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>YuDev</b></a>
    <div class="d-flex">
      <a href="sair.php" class="btn btn-danger me-1">Sair</a>
    </div>
  </div>
</nav>
<br>
    <?php
        echo "<h1> Bem vindo <u>$logado</u></h1>";
    ?>
</body>
</html>