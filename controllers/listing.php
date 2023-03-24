<?php

try {
// create a connection to the database
    require_once 'db/config.php';

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

} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}
?>