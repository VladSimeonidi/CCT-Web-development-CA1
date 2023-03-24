<?php
echo "
<h5 class='card-title mb-3'>$title</h5>

<div class='row'>
    <div class='col-sm-12 col-lg-9'>
        <form class='needs-validation' method='post' action='contact.php'>
          <input name='mivieId' type='hidden' value='$movie_id' />
          <div class='mb-3'>
            <label for='email' class='form-label'>Email address</label>
            <input name='email' type='email' class='form-control' id='email' aria-describedby='email' required>
            <div id='emailHelp' class='form-text'>We'll never share your email with anyone else.</div>
          </div>
          <div class='mb-3'>
            <label for='name' class='form-label'>Name</label>
            <input name='name' type='text' class='form-control' id='name' aria-describedby='name' required>
          </div>
          <div class='mb-3'>
            <label for='address' class='form-label'>Address</label>
            <input name='address' type='text' class='form-control' id='address' aria-describedby='address' required>
          </div>
          <button type='submit' class='btn btn-primary'>Book</button>
    </form>
    </div>
    <div class='col-sm-12 mt-sm-4 col-lg-3'>
        <img class='image' src='$poster' alt=''>
    </div>
</div>";