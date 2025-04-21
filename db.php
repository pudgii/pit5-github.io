<?php
$servername = "localhost";
$username = "root"; // default for XAMPP
$password = "";     // no password by default
$dbname = "my_db"; // use the database name you created

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
