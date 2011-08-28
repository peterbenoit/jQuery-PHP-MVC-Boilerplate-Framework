<?php
//error_reporting(E_ALL);
//ini_set('display_errors','On');

// Global Variables
define("APP_NAME","jQuery PHP MVC Boilerplate Framework, 2011");
define("APP_DESCRIPTION","jQuery PHP MVC boilerplate framework");
define("APP_KEYWORDS","jquery, php mvc, jquery php, jquery framework, php framework");
define("PASSWORD_SALT","z4PhNX7vuL3xVChQ1m2AB9Yg5AULVxXcg/SpIdNs6c5H0NE8XYXysP+DGNKHfuwvY7kxvUdBeoGlODJ6+SfaPg==");
define("CACHE_ENABLE",false);
define("LIB_DIR",dirname(__FILE__));
define("VIEWS_DIR", LIB_DIR."/views/");

define("BASE_URL","//".HOST.APP_DIR."/");
define("COOKIE_DOMAIN","http://".HOST);
define("REQUEST", $_SERVER['REQUEST_URI']);

// Database Config
$database = array (
	"user"  => "db125734",
	"pass"  => "lMuRr2gQlUeCoez7j",
	"host"  => "internal-db.s125734.gridserver.com",
	"dbname" => "db125734_taggedtown"
);

// The following controllers/actions will not be cached:
$do_not_cache = array("user","");

require_once(LIB_DIR."/functions.php");
require_once(LIB_DIR."/models/cache.php");
require_once(LIB_DIR."/models/database.php");
require_once(LIB_DIR."/models/user.php");
require_once(LIB_DIR."/models/template.php");