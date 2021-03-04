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

    </tr>
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
      echo "<tr><td>" . $row["username"]. "</td>"
           "<td>" . $row["email"]."</td>"
           "<td>" . $row["password"]. "</tr></td><br>";
}
?>
</body>
<html>
