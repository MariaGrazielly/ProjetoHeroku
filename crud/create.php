

<?php
$fname_POST=['fname'];
$lname_POST=['lname'];
//Pagina de cadastro de usuário 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atividadebd";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (Aluno, Disciplina, Nota_1, Nota_2)
  VALUES ('$fname', '$lname');
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Aluno cadastrado com sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
  

$conn = null;
?>