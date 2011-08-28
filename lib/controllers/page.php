<?php
// controller for all non-user pages, except the home page..
class Page {

	// called from App->route
	public static function load_page($name){
		global $template;
		$standard = array("faq", "terms", "about", "home");
		$proper = array("Frequently Asked Questions", "Terms of Service", "About Us", "There's no place like...");
		$template->set_title(ucwords(str_replace($standard, $proper, $name)));
		$template->render("pages", $name, true, "nav");
	}
	
}
