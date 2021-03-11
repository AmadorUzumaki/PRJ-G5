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
