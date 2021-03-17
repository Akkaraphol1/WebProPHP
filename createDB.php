<?php
$servername = "localhost";
$username = "root";
$password = "12345";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDBS";
if(mysqli_query($conn, $sql)){
echo "Database created successfully";
}
else {
    echo "Error created successfully".mysqli_error($conn);
}
mysqli_close($conn);

?>