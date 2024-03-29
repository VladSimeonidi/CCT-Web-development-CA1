<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/table.css">
</head>
<body class="container-fluid p-0 min-vh-100 d-flex flex-column">

<?php include 'components/navbar.php'; ?>

<main class="container my-4 flex-grow-1">

    <div class="card">
        <div class="card-body">

            <h1 class="mb-4">Welcome to my website</h1>

            <div class="row mb-4">
                <div class="col-12 col-lg-3">
                    <input id="actorInput" oninput="throttle(searchByActorAndMivie, 1000)" type="text"
                           class="form-control"
                           placeholder="Actor" aria-label="actor">
                </div>
                <div class="col-12 mt-4 mt-lg-0 col-lg-3">
                    <input id="movieInput" oninput="throttle(searchByActorAndMivie, 1000)" type="text" class="form-control"
                           placeholder="Movie" aria-label="movie">
                </div>
            </div>

            <div id="content" class="content">
                <?php include 'controllers/listing.php'; ?>
            </div>

        </div>
    </div>
</main>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>
