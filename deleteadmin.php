<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "1234";
$dbname = "users";
$user=$_GET['user'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM users WHERE username='$user'";
echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location: admin.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
