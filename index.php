<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body class="container-fluid p-0 min-vh-100 d-flex flex-column">

<?php include 'php/navbar.php';?>

<main class="container my-4 flex-grow-1">
    <button onclick="request()">Click me</button>
    <div id="content" class="content">
        <h1>Welcome to my website</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget sapien vel odio bibendum eleifend. Ut
            semper
            urna vel luctus fringilla. Sed at ultricies risus. Nullam pretium commodo dui, id hendrerit enim bibendum
            nec.
            Nullam euismod fringilla dui vel dapibus. Nam in sem in metus pharetra faucibus a a mi. Sed sed malesuada
            velit.
            Suspendisse potenti. Donec non suscipit est.</p>
    </div>
</main>

<footer class="bg-light text-center py-3">
    <p>&copy; 2023 My Website. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>