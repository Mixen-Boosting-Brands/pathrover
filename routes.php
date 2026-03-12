<?php
require_once('./config/config.php');
require_once __DIR__.'/router.php';

// $basePath='/sapisa';
// get("$basePath/", 'views/index.php');
// get("$basePath/page1", 'views/page1.php');
// any("$basePath/404", 'views/404.php');

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'views/index.php');
get('/sectores/$sector', 'views/sector.php');

// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','views/404.php');
