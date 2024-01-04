<?php
$servername = "localhost";
$username = "rashmi";
$password = "rashmi@123";
$db = "sih";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>