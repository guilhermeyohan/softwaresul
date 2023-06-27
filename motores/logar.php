<?php

// Obter os valores do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

include('connect.php');

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM USERS WHERE EMAIL = '$email' AND SENHA_HASH = SHA2('$senha', 256)";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // O usuário e a senha são válidos, faça o login
  $row = $result->fetch_assoc(); 
  session_start();
  $_SESSION['loggedin'] = true;
  $_SESSION['NOME'] = $row['NOME']; 
  $_SESSION['ID_USER'] = $row['ID_USER']; 
  header("Location: ../dashboard.php");
  exit;
} else {
  // O usuário ou a senha são inválidos, mostre uma mensagem de erro
  echo "<b><Center><font color='red'>Usuário ou senha inválidos </b></font> <br>
 <style>
  
  .loader {
  width: 12em;
  height: 1em;
  border-radius: 8px;
  background-color: #47a7ff44;
}

.loader div {
  height: 100%;
  width: 100%;
  border-radius: 8px;
  background-color: #47a7ff;
  animation: width7435 5s linear infinite;
  transition: all;
}

@keyframes width7435 {
  from {
    /*width: 0;*/
    transform: scaleX(0);
  }

  to {
    transform: scaleX(1);
  }
}
</style>

<div class='loader'>
    <div></div>
</div> ";
}

$conn->close();

?>
<meta http-equiv='refresh' content='4;url=../login.php'> 