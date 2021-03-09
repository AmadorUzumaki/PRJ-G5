<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "1234";
$dbname = "users";
$username=$_GET['username'];
$email=$_GET['email'];
$password=$_GET['password'];
$rol=$_GET['rol'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users  SET password='$password', email='$email', rol='$rol' WHERE username='$username'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
