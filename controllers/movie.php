<?php
// create a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinema";
$conn = new mysqli($servername, $username, $password, $dbname);

$movie_id = basename(rtrim($_SERVER['REQUEST_URI'], '/'));

// check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// create a SQL query
$sql = "SELECT * FROM movies WHERE id = $movie_id";
$count = "SELECT COUNT(*) as count FROM movies;";

// execute the query and get the result set
$result = $conn->query($sql);
$result2 = $conn->query($count);
$row = $result2->fetch_assoc();
$total = $row["count"];

$movie = $result->fetch_assoc();
$video = $movie["video"];
$desc = $movie["desc"];
$poster = $movie["poster"];
$title = $movie["movie"];

// close the connection
$conn->close();

echo "<h5 class='card-title mb-3'>$title</h5>";

echo "<div class='row'>";
echo "<div class='col-sm-3'><img class='image' src='$poster' alt=''></div>";
echo "<div class='col-sm-4 mt-4'>$desc</div>";
echo "<div class='col-sm-5'>$video</div>";
echo "</div>";
echo '<div class="d-flex justify-content-center mt-4">';

if($movie_id > 1) {
    echo '<button onclick="prevMovie()" type="button" class="btn btn-outline-primary">Prev</button>';
}

if($movie_id < $total) {
    echo '<button onclick="nextMovie()" type="button" class="btn btn-outline-primary ms-1">Next</button>';
}

echo '<button type="button" class="btn btn-outline-primary ms-1">Book</button>';
echo '</div>';
?>