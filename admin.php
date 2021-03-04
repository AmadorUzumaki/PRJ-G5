<?php
$db = new mysqli('10.100.66.90','phpmyadmin','1234','users');

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}else{
        echo "Funciona<br>";
}

$sql = "SELECT * FROM users";
$resultat = $db->query($sql);
while($row = $resultat->fetch_assoc()) {
         echo "Username: " . $row["username"]. " Email: " . $row["email"]. " Password: " . $row["password"]. "<br>";
}
?>
