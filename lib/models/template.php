<?php

class TemplateModel {

	var $variables = array();
	var $title;
	var $msg;
	var $msg_type;

	function load($file){
		global $user, $template;
		include_once VIEWS_DIR . "$file.php";
	}
	
	function render($model = "", $action = "", $html = false, $nav = ""){
		global $user, $template;
		$profile = $user->get_info();
		extract($this->variables);
		
		include_once(VIEWS_DIR . "header.php");
		
		$cache = new CacheModel;
		$cache->start();
		
		$file = VIEWS_DIR;
		if($model) $file .= $model;
		if($action) $file .= '/'.$action;
		$file .= '.php';
		
		if($nav) $nav = VIEWS_DIR . $nav . '.php';
		if(file_exists($nav)) include_once $nav;
		if($html) echo "<div id=\"model\" class=\"$model width_12 col\">";
		if(file_exists($file)) include_once $file;
		if($html) echo '</div>';
		
		include_once(VIEWS_DIR . "footer.php");
		
		$cache->end();
	}
	
	function assign($name, $value){
		$this->variables[$name] = $value;
	}
	
	function set_title($title){
		$this->title = $title;
	}

	function page_title(){
		if($this->title) $str = $this->title.' - '.APP_NAME.'.com';
		else $str = APP_NAME.'.com - '.APP_KEYWORDS;
		echo $str;
	}

	function set_msg($the_msg, $type = null){
		$this->msg = $the_msg;
		$this->msg_type = $type;
	}

	function get_msg(){
		if(isset($this->msg_type)){
			if($this->msg_type) $style = 'success';
			else $style = 'error';
		}
		if($this->msg) echo "<div class=\"status message $style width_15 col\">".$this->msg."</div>\n";
	}

}