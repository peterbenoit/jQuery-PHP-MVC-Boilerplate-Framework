<?php
// main controller for application
// called with each page request
class App {

	
	function __construct(){
		global $database, $template, $user, $db;
		session_start();
		$db = new db;
		//$db->connect($database);
		//$this->check_tables();
		$template = new TemplateModel;
		$user = new UserModel;
		$this->init();
		//$db->close();
	}
	// determines the path to the file being loaded
	// IE: user/login
	function init(){
		//$uri = str_replace(BASE_URL,"","http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
		$uri = str_replace(BASE_URL,"","//" . HOST . REQUEST);
		$this->route($uri);
	}
	
	function route($uri){
		$uri = $this->check_pages(explode('/',$uri));
		$model = $uri[0];
		$action = $uri[1] ? $uri[1] : 'index';
		$var = $uri[2];
		$var2 = $uri[3];
		$var3 = $uri[4];
		
		if($model && $model != "index.php"){
			if($model == "page"){
				// if it's just a page, just load the page
				// see controllers/user.php for possible usage
				$page = new Page;
				$page->load_page($action);
			}elseif(file_exists(LIB_DIR.'/controllers/'.$model.'.php')){
				// home (if /home called) || user
				// echo "model: $model";
				$$model = new $model;
				if(method_exists($$model,$action)){
					//echo "$$model->$action($var, $var2, $var3)";
					// IE $user->index();
					$$model->$action($var, $var2, $var3);
				}
				else Home::error();
			}else Home::error();
		}else Home::index();
	}
	
	function check_pages($name = array()){
		if(file_exists(LIB_DIR.'/views/pages/'.$name[0].'.php')){
			$str[0] = "page";
			$str[1] = $name[0];
			return $str;
		}else return $name;
	}

	function check_tables(){
		global $db;
		
		$query = "CREATE TABLE IF NOT EXISTS users (
				user_id int(9) NOT NULL AUTO_INCREMENT,
				name varchar(255) DEFAULT NULL,
				email varchar(255) DEFAULT NULL,
				password varchar(255) DEFAULT NULL,
				status int(1) NOT NULL DEFAULT 1,
				created_ip varchar(255) NOT NULL,
				created_on timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
				last_logged_ip varchar(255) DEFAULT NULL,
				last_logged_on timestamp NULL DEFAULT NULL,
				admin tinyint(1) NOT NULL DEFAULT 0,
				PRIMARY KEY (user_id));
		";
		$db->query($query) or die(mysqli_error());
	}
}