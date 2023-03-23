<?php
// create a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinema";
$conn = new mysqli($servername, $username, $password, $dbname);

// check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// create a SQL query
$sql = "SELECT id, genre, actor, movie, location, price FROM movies";

// execute the query and get the result set
$result = $conn->query($sql);

// check if the query was successful
if ($result === false) {
    die("Error: " . $conn->error);
}

// close the connection
$conn->close();

include 'components/table.php';
?>