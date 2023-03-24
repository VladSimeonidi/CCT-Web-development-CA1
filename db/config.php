<?php

// MySQL database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinema";

// Create a MySQL connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
