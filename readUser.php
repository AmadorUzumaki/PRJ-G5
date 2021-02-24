<?php
include ("createUser.php");
//si l'usuari no és nul ni té un valor en blanc
if ($_GET["username"]!=null && $_GET["username"]!=""){
    //crear variables amb els valors del formulari
    $username = $_GET["username"];
    $password = encryptPass($_GET["password"]);
}
//fer la connexió amb la base de dades
$conn = new mysqli("localhost", "phpmyadmin", "1234", "users");
//el select que utilitzarem per cercar l'usuari a la base de dades.
$sql = "SELECT password FROM users WHERE username='$username'";
$result_select = $conn->query($sql);
$passwords=$result_select->fetch_object();
echo var_dump($passwords);
$num_files = mysqli_num_rows($sql);
// comprovar si la connexió funciona
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//comprovam si l'usuari existeix comparant els resultats
if ($num_files!=0) {
  echo "Pots inciar sessió amb aquest usuari.";
} else {
  echo "Aquest usuari no existeix.";
}
$conn->close();
?>
