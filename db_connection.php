<?php
$servername = "localhost";
$username = "root";
$database = "web_learn";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}       





?>