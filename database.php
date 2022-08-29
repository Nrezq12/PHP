<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurant";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
    header("location: 404.php");
    // die("Connection failed: " . mysqli_connect_error());
}
?>
