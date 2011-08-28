<?php

class Upload {

	// views/upload
	function index(){
		global $template;
		login_required();
		$template->set_title('Upload');
		$template->render("mods","upload",true);
	}
}