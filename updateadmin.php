<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "1234";
$dbname = "carstock";
$plate=$_GET['plate'];
$doors=$_GET['doors'];
$colour=$_GET['colour'];
$car_engine=$_GET['car_engine'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users  SET colour='$colour', doors='$doors', car_engine='$car_engine' WHERE plate='$plate'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
