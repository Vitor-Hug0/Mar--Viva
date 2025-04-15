<?php
  if(isset($_POST['submit'])){
    include_once('registertest.php');
  }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro de Usuário</title>
  <link rel="icon" href="favicon_mare.png" type="image/x-icon" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }

    .container {
      max-width: 450px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 15px;
    }

    input[type="text"],
    input[type="date"],
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="submit"] {
      background-color: #5cb85c;
      color: white;
      border: none;
      margin-top: 20px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #4cae4c;
    }

    fieldset {
      margin-top: 20px;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    legend {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2><i class="fas fa-user"></i> Cadastro de Usuário</h2>
    <form  action = "php/registertest.php" method = "POST">
      <label for="nome">Nome Completo:</label>
      <input type="text" id="nome" name="nome" autocomplete="given-name" required />

      <label for="nome">Gmail:</label>
      <input type="text" id="email" name="email" required />

      <label for="nome">Senha:</label>
      <input type="text" id="password" name="password"  required />

      <label for="data_nascimento">Data de Nascimento:</label>
      <input type="date" id="data" name="data" autocomplete="bday" required />

      <label for="cpf">CPF:</label>
      <input type="text" id="cpf" name="cpf" pattern="\d{11}" maxlength="11" inputmode="numeric" autocomplete="off" required />

      <fieldset>
        <legend>Endereço</legend>

        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" autocomplete="postal-code" required onblur="buscarCEP()" />

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" autocomplete="address-level2" required />

        <label for="rua">Rua:</label>
        <input type="text" id="rua" name="rua" autocomplete="address-line1" required />

        <label for="complemento">Complemento:</label>
        <input type="text" id="complemento" name="complemento" autocomplete="address-line2" />
      </fieldset>

      <input type="submit" name="submit" id="submit" value="Enviar" />
    </form>
  </div>

  