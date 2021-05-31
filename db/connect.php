<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atividadebd";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname"; cherset=utf8, $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conentado com, sucesso!";
} catch(PDOException $e) {
  echo "Falha na conexão" . $e->getMessage();
}
?> 