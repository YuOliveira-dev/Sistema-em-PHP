<?php
  if(isset($_POST['submit'])) {
    
    include_once('config.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    // Executar a consulta
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    header('Location: login.php');

  }

  
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div id="back">
        <a class="backButton" href=".././home.php">Voltar</a>
    </div>
    <main>
      <div class="box">
        <form action="cadastro.php" method="POST">
          <fieldset>
            <legend><b> Formulário de Cadastro </b></legend>
            <br />
            <div class="inputBox">
              <input
                placeholder="Nome Completo"
                type="text"
                name="nome"
                id="nome"
                class="inputUser"
                required
              />
            </div>
            <br><br>
            <div class="inputBox">
              <input
                placeholder="Senha"
                type="password"
                name="senha"
                id="senha"
                class="inputUser"
                required
              />
            </div>
            <br /><br />
            <div class="inputBox">
              <input
                placeholder="Email"
                type="email"
                name="email"
                id="email"
                class="inputUser"
                required
              />
            </div>
            <br /><br />
            <div class="inputBox">
              <input
                placeholder="Telefone"
                type="tel"
                name="telefone"
                id="telefone"
                class="inputUser"
                required
              />
              <label for="telefone"></label>
              <div>
                <p>sexo</p>
                <input
                  type="radio"
                  id="feminino"
                  name="genero"
                  value="feminino"
                  required
                />

                <label for="feminino">Feminino</label>
                <br />

                <input
                  type="radio"
                  id="masculino"
                  name="genero"
                  value="masculino"
                  required
                />
                <label for="masculino">Masculino</label>
                <br />

                <input
                  type="radio"
                  id="outro"
                  name="genero"
                  value="outro"
                  required
                />
                <label for="outro">Outro</label>
                <br /><br />
                <div>
                  <label for="data_nascimento"><b>Data de Nascimento</b></label>
                  <input
                    type="date"
                    name="data_nascimento"
                    id="data_nascimento"
                    required
                  />
                </div>
                <br /><br />
                <div class="inputBox">
                  <input
                    type="text"
                    name="cidade"
                    id="cidade"
                    class="inputUser"
                    placeholder="Cidade"
                    required
                  />
                </div>
                <br /><br />
                <div class="inputBox">
                  <input
                    type="text"
                    name="estado"
                    id="estado"
                    class="inputUser"
                    placeholder="Estado"
                    required
                  />
                </div>
                <br /><br />
                <div class="inputBox">
                  <input
                    type="text"
                    name="endereco"
                    id="endereco"
                    class="inputUser"
                    placeholder="Endereço"
                    required
                  />
                </div>
                <br /><br />
              </div>
            </div>
            <input type="submit" name="submit" id="submit" />
          </fieldset>
        </form>
      </div>
    </main>
  </body>
</html>
