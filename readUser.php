<?php
include ("functions.php");
//si l'usuari no és nul ni té un valor en blanc
if ($_GET["username"]!=null && $_GET["username"]!=""){
    //crear variables amb els valors del formulari
    $username = $_GET["username"];
    $password = $_GET["password"];
}
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
//comprovam si la contrasenya (en forma de hash) per l'usuari dins la base de dades coincideix amb la contrasenya introduïda al formulari, i si es així, crea les variables de sessió amb les dades necessàries de l'usuari i redirigeix cap a la pàgina principal.
if (pwdVerification($password,$user['password'])) {
  session_start();
  $_SESSION['username']=$user['username'];
  $_SESSION['rol']=$user['rol'];
  header("Location: index.php");
}
//en cas que no sigui correcta, i si l'usuari existeix, guardam un missatge que després s'executarà en altre pàgina
elseif(!pwdVerification($password,$user['password']) && $user['username']) {
	$loginMsg="La contrasenya no és correcta.";
//en cas que no coincideixi res, significa que l'usuari no existex, per la qual cosa guardarà un altre missatge
}else {
  $loginMsg="Aquest usuari no existeix.";
}
//si detecta que la variable del missatge està inicialitzada, redirigeix a la pàgina d'error que mostrarà per pantalla quin ha sigut l'error quan hem fet login
if($loginMsg!=null)
header("Location: error-log.php?error=$loginMsg");
$conn->close();
?>
