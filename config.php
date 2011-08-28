<?php
// used to get the directory the application resides
define("HOST", $_SERVER['HTTP_HOST']);
define("BASE_DIR",dirname(__FILE__));
$tmp = explode(str_replace("/home", "", $_SERVER['DOCUMENT_ROOT']), BASE_DIR);
define("APP_DIR", $tmp[1]);



//print_r( $_SERVER );