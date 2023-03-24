<?php

try {
// create a connection to the database
    require_once 'db/config.php';
// get id of the movie from URI
    $movie_id = basename(rtrim($_SERVER['REQUEST_URI'], '/'));

// create a SQL query
    $sql = "SELECT * FROM movies WHERE id = $movie_id";
    $count = "SELECT COUNT(*) as count FROM movies;";

// execute the query and get the result set
    $result = $conn->query($sql);
    $countResult = $conn->query($count);
    $row = $countResult->fetch_assoc();
    $total = $row["count"];

    $movie = $result->fetch_assoc();
    if ($result->num_rows == 0) {
        echo 'SUCH MOVIE DOES NOT EXIST!';
    } else {
        $video = $movie["video"];
        $desc = $movie["desc"];
        $poster = $movie["poster"];
        $title = $movie["movie"];

        include 'components/movie.php';
    }

// close the connection
    $conn->close();
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}
?>