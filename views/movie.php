<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="container-fluid p-0 min-vh-100 d-flex flex-column">

<?php include 'includes/navbar.php'; ?>

<main class="container my-4 flex-grow-1">

    <div id="content" class="content">
        <div class="card">
            <div class="card-body">
                <?php include 'controllers/movie.php'; ?>
            </div>
        </div>
    </div>
</main>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/index.js"></script>
</body>
</html>