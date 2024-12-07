<?php
function connectToDatabase() {
    $servername = "127.0.0.1:4306";
    $username = "root";   
    $password = "12345";        
    $dbname = "contact";    

    try {
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }

        $createTableSQL = "CREATE TABLE IF NOT EXISTS contact_us (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,
            message TEXT NOT NULL
        )";

        if (!$conn->query($createTableSQL)) {
            throw new Exception("Error creating table: " . $conn->error);
        }

        return $conn;
    } catch (Exception $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
?>
