<html>
<head>
  <title>USERS</title>
</head>
<body>
  <table border="10" align="center">

    <tr>

      <th>Nom</th>

      <th>Email</th>

      <th>Pasword</th>

      <th>Rol</th>

      <th>Accions</th>

    </tr>
<?php
//crear la connexió amb la base de dades
$db = new mysqli('localhost','phpmyadmin','1234','users');
//comprovar si la connexió funciona, i si funciona, tenim un botó per tornar a la pàgina principal
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}else{
        echo "<a href='index.php'>Return to main page</a><br>";
}
//feim la query que mostrarà tots els usuaris registrats
$sql = "SELECT * FROM users";
//executam la query
$resultat = $db->query($sql);
//feim una taula que mostrarà tots els usuaris registrats mitjançant la query que fa el select
while($row = $resultat->fetch_assoc()) {
      echo "<tr><td>" . $row["username"]. "</td>".
           "<td>" . $row["email"]."</td>".
           "<td>" . $row["password"]. "</td><br>".
           "<td>" . $row["rol"]. "</td><br>";
        $user=  $row["username"];
        $email=  $row["email"];
        $pass=  $row["password"];
        $rol=  $row["rol"];
      echo "<td>";
      //cream botons que redirigiran a les pàgines que faran el canvi seleccionat, amb tots els camps necessaris com a paràmetres
      echo "<a href='updateform.php?user=$user&email=$email&pass=$pass&rol=$rol'> EDITAR </a> ";
      echo "<a href='deleteadmin.php?user=$user'> ELIMINAR </a>";
      echo "</td></tr>";
}
?>
</body>
<html>
