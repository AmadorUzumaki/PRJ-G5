<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "1234";
$dbname = "users";
$user=$_GET['user'];


// crear la connexió
$conn = new mysqli($servername, $username, $password, $dbname);
// comprovar la connexió
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// cream la query per eliminar l'usuari
$sql = "DELETE FROM users WHERE username='$user'";
//si s'elimina correctament, redirigim cap a la pàgina que mostra tots els usuaris registrats
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location: admin.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
