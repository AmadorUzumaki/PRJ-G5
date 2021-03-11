<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "1234";
$dbname = "users";
$user=$_GET['username'];
$email=$_GET['email'];
$rol=$_GET['rol'];

// cream la connexió
$conn = new mysqli($servername, $username, $password, $dbname);
// comprova si funciona
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//feim la query que volem executar
$sql = "UPDATE users  SET  email='$email', rol='$rol' WHERE username='$user'";
//comprovam que la query funciona, i si funciona, mos redirigeix a la pàgina de l'admin
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location: admin.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
