<?php

include('connect.php');

  $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

  if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
  }

  $nomeCompleto = $_POST['nomeCompleto'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $Telefone = $_POST['Telefone'];
  $cnpj = $_POST['cnpj'];


   $sql = 
   "INSERT INTO USERS VALUES(null, '$nomeCompleto', '$email', SHA2('$senha', 256))";
if (mysqli_query($conn, $sql)) { 
   
    echo "<head> 

    </head>
    <body>
    
    <br><center>
    <font color='green'> <b>Dados cadastrados com sucesso.</b></font> <br> Você sera redirecionado para a proxima pagina</center><center><br><br>
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
</div></body>
    </center>
    <meta http-equiv='refresh' content='4;url=../login.php'> 
    ";
  } else {
    echo "<center>E-mail ja cadastrado. Tente outro
          </center>
              <meta http-equiv='refresh' content='3;url=../index.php'> 
          ";
  }


  mysqli_close($conn);
  
  
?>

