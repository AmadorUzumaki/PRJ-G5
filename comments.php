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
  echo header("Location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
