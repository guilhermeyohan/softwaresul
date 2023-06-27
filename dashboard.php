<?php

include('head.php');
include('./motores/connect.php');

$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

if (!$conn) {
    die('Erro ao conectar ao MySQL: ' . mysqli_connect_error());
}

$id_user = $_SESSION['ID_USER'];
$sql = "SELECT * FROM USERS WHERE ID_USER='$id_user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $_SESSION['EMAIL'] = $row['EMAIL']; 
}

echo "Seu ID &eacute;: " . $_SESSION['ID_USER'] . "<br>";
echo "Seu nome &eacute;: " . $_SESSION['NOME'] . "<br>";
echo "Seu e-mail &eacute;: " . $_SESSION['EMAIL'] . "<br>";

mysqli_close($conn);

?>
