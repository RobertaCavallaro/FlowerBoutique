<?php

$servername = "localhost";  // typically localhost when running on the same server
$username = "root";  // your database username
$password = "root";  // your database password
$database = "flowers";  // your database name
$port = 8889;
// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connection successful";
}

?>