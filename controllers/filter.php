<?php

// function to get data from input
function getQuery() {
    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body, true);

    $item = $data['queries'];
   return $item;
}

try {
// create a connection to the database
    require_once 'db/config.php';
// get input data
    $queries = getQuery();

// create a SQL query
    $sql = "SELECT id, genre, actor, movie, location, price FROM movies WHERE actor LIKE '%$queries[0]%' AND movie LIKE '$queries[1]%'";

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

