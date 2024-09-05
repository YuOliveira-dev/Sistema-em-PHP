<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
<body>
    
    <main>
    <div class="back">
        <a class="backButton" href="../home.php">Inicio</a>
    </div>
    
    <div id="container">
        <h1>Login</h1>
        <div class="inputLogin">
            
            <form action="testeLogin.php" method="POST">
                <input type="text" name="email" placeholder="Email">
                <br>
                <input type="password" name="senha" placeholder="Senha">
            </div>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
        

        </div>
    </main>
</body>
</html>