<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "1234";
$dbname = "users";
$comment=$_POST["comment"];
session_start();
$user=$_SESSION['username'];
// crear la connexió
$conn = new mysqli($servername, $username, $password, $dbname);
// comprovar la connexió
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//cream la query que insertarà el comentari a la base de dades, juntament amb l'usuari que ho ha comentat
$sql = "INSERT INTO comments VALUES ('$user' ,'$comment')";
//si la query s'executa correctament, ens redirigeix a la pàgina principal
if ($conn->query($sql) === TRUE) {
  header("Location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
