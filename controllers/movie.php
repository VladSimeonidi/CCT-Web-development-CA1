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

// close the connection
    $conn->close();

    echo "<h5 class='card-title mb-3'>$title</h5>
          <div class='row'>
            <div class='col-sm-12 d-flex justify-content-center justify-content-sm-center col-lg-3'><img class='image' src='$poster' alt=''></div>
            <div class='col-sm-12 col-lg-4 my-4'>$desc</div>
            <div class='col-sm-12 col-lg-5'>$video</div>
          </div>";

    include 'components/buttons.php';
}

?>