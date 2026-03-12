<?php
define('INCLUDES', dirname(__FILE__) . '/' );
require_once(INCLUDES.'init.php');

define('ROOT', INCLUDES.'../');
define('PLUGINS', INCLUDES . '../public/plugins/');
define('CLASSES', ROOT.'classes/');

define('URLIMAGES', URL.'images/');
define('URLJS', URL.'js/');
define('URLCSS', URL.'css/');
define('URLPLUGINS', URL.'plugins/');
define('VIEWS', INCLUDES.'../views/');

require_once(INCLUDES.'funcs.php');
require_once(INCLUDES.'blackbox.php');
?>
