<?php
    $host = 'mysql';
    $user = 'root';
    $password = 'root';
    $database = 'testdb';

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected to MySQL successfully!";
?>
