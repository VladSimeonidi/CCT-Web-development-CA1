<?php
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];

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
$sql = "INSERT INTO contacts(email, name, address) VALUES('$email','$name','$address')";

// execute the query and get the result set
$result = $conn->query($sql);

if ($result) {

    echo "Query executed successfully.";

} else {

    echo "Query execution failed: " . mysqli_error($conn);

}

// close the connection
$conn->close();