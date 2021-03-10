<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "1234";
$dbname = "users";
$comment=$_POST["comment"];
session_start();
$user=$_SESSION['username'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO comments VALUES ('$user' ,'$comment')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>COMMENTS</title>
  </head>
  <body>
    <table border="10" align="center">

      <tr>

        <th>USERNAME</th>

        <th>COMMENT</th>
      </tr>
<?php
      $db1 = new mysqli('localhost','phpmyadmin','1234','users');

      if ($db1->connect_error) {
        die("Connection failed: " . $db1->connect_error);
      }else{
              echo "Funciona<br>";
      }

      $sql1 = "SELECT * FROM comments";
      $resultat = $db1->query($sql1);
      while($row = $resultat->fetch_assoc()) {
            echo "<tr><td>" . $row["username"]. "</td>".
                 "<td>" . $row["comment"]."</td></tr>";
      }
      ?>
  </body>
</html>
