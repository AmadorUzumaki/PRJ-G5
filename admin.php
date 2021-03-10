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
$db = new mysqli('localhost','phpmyadmin','1234','users');

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}else{
        echo "Funciona<br>";
}

$sql = "SELECT * FROM users";
$resultat = $db->query($sql);
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
      echo "<a href='updateform.php?user=$user&email=$email&pass=$pass&rol=$rol'> EDITAR </a> ";
      echo "<a href='deleteadmin.php?user=$user'> ELIMINAR </a>";
      echo "</td></tr>";
}
?>
</body>
<html>
