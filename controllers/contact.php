<?php
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$movieId = $_POST['mivieId'];

try {
// create a connection to the database
    require_once 'db/config.php';
// create a SQL query
    $sql = "INSERT INTO booking(movieId, email, name, address) VALUES('$movieId','$email','$name','$address')";

// execute the query and get the result set
    $result = $conn->query($sql);

    if ($result) {
        // redirect to main page if result is true
        header("Location: http://localhost/");
        exit();
    } else {
        echo "Query execution failed: " . mysqli_error($conn);
    }

// close the connection
    $conn->close();
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}