<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body> 
    <main>
    <div class="back">
        <a class="backButton" href="../index.php">Inicio</a>
    </div> 
    <div id="container">
        <h1>Login</h1>
        <div class="inputLogin">   
            <form action="testeLogin.php" method="POST">
                <input type="text" name="email" placeholder="Email" value="admin">
                <br>
                <input type="password" name="senha" placeholder="Senha" value="admin123">
            </div>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
        

        </div>
    </main>
</body>
</html>