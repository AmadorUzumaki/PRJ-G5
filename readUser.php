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
$sql = "SELECT password FROM users where username='$username'";
$result_select = $conn->query($sql);
$passwords=$result_select->fetch_assoc();
//echo $passwords['password'];
//comprovam si l'usuari existeix comparant els resultats
//echo "Verificació:", pwdVerfication($password,$passwords['password']);
if ($passwords && pwdVerification($password,$passwords['password'])) {
  echo "Pots inciar sessió amb aquest usuari.";
}
elseif(!pwdVerification($password,$passwords['password'])) {
	echo "La contrasenya no és correcta";
}else {
  echo "Aquest usuari no existeix.";
}
//if (pwdVerification($password,$passwords['password'])) {
 //   echo '¡La contraseña es válida!';
//} else {
  //  echo 'La contraseña no es válida.';
//}
$conn->close();
?>
