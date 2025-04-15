<?php
if (isset($_POST['submit']) ){
    // post envia do front pro back e os comandos sql do back pro bd
    include_once("connection.php");//inclui o conexão
     $email = $_POST['email'];//atribui o valor digitado do usuario para a variavel $email
     $password = $_POST['password'];//atribui o valor digitado do usuario para a variavel $password
 
    $sql = "SELECT *  FROM users WHERE email = '$email' AND senha = '$password' ";//verificação se o usuario está no banco de dados
     $result = $conexion->query($sql);//query manda pro bd
    if(mysqli_num_rows($result) < 1){//verifica se tem no banco de dados o email e senha
        header("Location: login.html");
       // encaminha pra um lugar igual o href
    }else{
    
        header("Location: pg.php");//se tiver no banco de dados envia pro site
    }
}
?>