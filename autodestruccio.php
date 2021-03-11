<?php
//llevam el valor que tenen en el mateix moment les variables de sessió y després redirigim cap a la pàgina principal
session_start();
unset($_SESSION['username']);
unset($_SESSION['rol']);
header("Location:index.php");
?>
