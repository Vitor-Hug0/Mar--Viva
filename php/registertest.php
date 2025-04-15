<?php
 $email = $_POST['email'];//verificando o tipo email
 $senha = $_POST['password'];
 $cpf = $_POST['cpf'];
 $datanascimento = $_POST['data_nascimento'];
 $rua = $_POST['rua'];
 $cep = $_POST['cep'];
 $complemento = $_POST['complemento'];
 $cidade = $_POST['cidade'];
 $fullname =$_POST['fullname'];

 include_once('connection.php');
 if (isset($_POST['submit'])){
 $result = mysqli_query($conexion, "INSERT INTO usuarios (gmail, senha, datadenascimento, cpf, cep, cidade, rua, complemento) VALUES ('$email','$senha','$datanascimento','$cpf','$cep','$cidade','$rua','$complemento')");
 header("Location: login.html");
 exit();
 }
?>
