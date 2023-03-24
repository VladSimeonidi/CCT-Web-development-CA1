<?php

require_once __DIR__.'/router.php';

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
get('/', 'views/index.php');

// Dynamic GET. Example with 1 variable
// The $id will be available in user.php
get('/movie/$id', 'views/movie.php');

get('/movie/book/$id', 'controllers/book.php');

post('/controllers/filter.php', 'controllers/filter.php');

post('/movie/contact.php', 'controllers/contact.php');

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','views/404.php');
