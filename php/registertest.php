<?php
 $email = $_POST['email'];//verificando o tipo email
 $tipo = $_POST['tipo'];
 $senha = $_POST['password'];
 $cpf = $_POST['cpf']
 $datanacimento = $_POST['data_nascimento']
 $rua = $_POST['rua']
 $cep = $_POST['cep']
 $complemento = $_POST['complemento']
 $cidade = $_POST['cidade']
 $fullname =$_POST['fullname']

 include_once('connection.php');
 if (isset($_POST['submit'])){
 $result = mysqli_query($conexion, "INSERT INTO usuarios (email, senha, tipo) VALUES ('$email','$senha','$tipo')");
 header("Location: login.html");
 exit();
 }
?>
