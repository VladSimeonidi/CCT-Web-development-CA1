<?php

try {
// create a connection to the database
    require_once 'db/config.php';

//  get movie id from URI
    $movie_id = basename(rtrim($_SERVER['REQUEST_URI'], '/'));

// create a SQL query
    $sql = "SELECT * FROM movies WHERE id = $movie_id";

// execute the query and get the result set
    $result = $conn->query($sql);

    $movie = $result->fetch_assoc();
    $poster = $movie["poster"];
    $title = $movie["movie"];
// close the connection
    $conn->close();

    include 'components/booking.php';
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}

