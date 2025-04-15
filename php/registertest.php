<?php
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $data = $_POST['data'];
 $cpf = $_POST['cpf'];
 $cep = $_POST['cep'];
 $cidade = $_POST['cidade'];
 $rua = $_POST['rua'];
 $complemento = $_POST['complemento'];

 include_once('connection.php');
 if (isset($_POST['submit'])){
 $result = mysqli_query($conexion, "INSERT INTO usuarios (gmail, senha, datadenascimento,cpf,cep,cidade,rua,complemento) VALUES ('$email','$password','$data','$cpf','$cep','$cidade','$rua','$complemento')");
 }
?>
