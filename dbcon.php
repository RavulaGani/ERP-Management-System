<?php
$servername = "localhost";
$username = "Gani";
$password = "Ganesh@4598";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>