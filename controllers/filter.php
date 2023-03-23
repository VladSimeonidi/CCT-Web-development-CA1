<?php

// get inout data
function getQuery() {
    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body, true);

    $item = $data['queries'];
   return $item;
}

$queries = getQuery();

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
$sql = "SELECT id, genre, actor, movie, location, price FROM movies WHERE actor LIKE '%$queries[0]%' AND movie LIKE '$queries[1]%'";

// execute the query and get the result set
$result = $conn->query($sql);

// check if the query was successful
if ($result === false) {
    die("Error: " . $conn->error);
}

// iterate over the result set and display the data

// close the connection
$conn->close();

include 'components/table.php';
?>

