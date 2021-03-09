<?php
include ("functions.php");
//si l'usuari no és nul ni té un valor en blanc
//if ($_GET["username"]!=null && $_GET["username"]!=""){
    //crear variables amb els valors del formulari
    $username = $_GET["username"];
    $password = $_GET["password"];
//}
//fer la connexió amb la base de dades
$conn = new mysqli("localhost", "phpmyadmin", "1234", "users");
// comprovar si la connexió funciona
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//el select que utilitzarem per cercar l'usuari a la base de dades.
$sql = "SELECT * FROM users where username='$username'";
$result_select = $conn->query($sql);
$user=$result_select->fetch_assoc();
session_start();
$_SESSION['username']=$user['username'];
$_SESSION['rol']=$user['rol'];
//comprovam si l'usuari existeix comparant els resultats
if (pwdVerification($password,$user['password'])) {
  header("Location: index.php");
}
elseif(!pwdVerification($password,$user['password']) && $user['username']) {
	$loginMsg="La contrasenya no és correcta";
}else {
  $loginMsg="Aquest usuari no existeix.";
}
header("Location: error-log.php?error=$loginMsg");

$conn->close();
?>
