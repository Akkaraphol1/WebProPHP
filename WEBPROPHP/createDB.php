<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if(mysqli_query($conn, $sql)){
echo "Database created successfully";
}
else {
    echo "Error created successfully".mysqli_error($conn);
}
mysqli_close($conn);

?>