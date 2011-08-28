<?php
// controller for the home page, and nothing else?
class Home {

	public static function index(){
		global $template;
		$template->render("pages","home","","nav");
	}
	
	public static function error(){
		global $template;
		$template->set_title('Error');
		$template->render("error");
	}
	
}