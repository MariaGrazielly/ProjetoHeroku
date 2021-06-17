<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atividadebd";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname; cherset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (Aluno, Disciplina, Nota_1, Nota_2)
  VALUES ('John', 'Doe', '9', '8')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Aluno cadastrado com sucesso";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>




