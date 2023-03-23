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

// execute the query and get the result set
$result = $conn->query($sql);

$movie = $result->fetch_assoc();
$poster = $movie["poster"];
$title = $movie["movie"];
// close the connection
$conn->close();

echo "
<h5 class='card-title mb-3'>$title</h5>

<form method='post' action='contact.php'>
  <div class='mb-3'>
    <label for='email' class='form-label'>Email address</label>
    <input name='email' type='email' class='form-control' id='email' aria-describedby='emailHelp'>
    <div id='emailHelp' class='form-text'>We'll never share your email with anyone else.</div>
  </div>
  <div class='mb-3'>
    <label for='name' class='form-label'>Name</label>
    <input name='name' type='text' class='form-control' id='name' aria-describedby='emailHelp'>
  </div>
  <div class='mb-3'>
    <label for='address' class='form-label'>Address</label>
    <input name='address' type='text' class='form-control' id='address' aria-describedby='emailHelp'>
  </div>
  <button type='submit' class='btn btn-primary'>Book</button>
</form>
";
