<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20% auto;
        }

        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Welcome to Your Simple Web App!</h2>
    <p>This is a basic PHP web application running on a LAMP stack.</p>
    <p>MySQL connection test:</p>
    
    <?php
    $servername = "mysql";
    $username = "root";
    $password = "root";
    $dbname = "test_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "<p>Connected to MySQL successfully</p>";

    // Close connection
    $conn->close();
    ?>
</body>
</html>
