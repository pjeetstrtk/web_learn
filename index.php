<?php
    
    $servername = "localhost"; // Change if using a remote server
    $username = "root"; // Your MySQL username
    $password = ""; // Your MySQL password
    $database = "web_learn_db"; //The database you want to connect to
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>database connected successfully</h1>
</body>
</html>
