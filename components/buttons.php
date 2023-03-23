<?php
echo "<div class='d-flex justify-content-center mt-5'>";

if ($movie_id > 1) {
    echo '<button onclick="prevMovie()" type="button" class="btn btn-outline-primary">Prev</button>';
}

if ($movie_id < $total) {
    echo '<button onclick="nextMovie()" type="button" class="btn btn-outline-primary ms-1">Next</button>';
}

echo "<button onclick='clickBook($movie_id)' type='button' class='btn btn-outline-primary ms-1'>Book</button>";
echo "</div>";