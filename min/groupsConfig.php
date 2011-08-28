<?php
	
require_once('../config.php');

/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/** 
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 **/
$home = dirname(__FILE__);
return array(
    // 'js' => array('//js/file1.js', '//js/file2.js'),
    // 'css' => array('//css/file1.css', '//css/file2.css'),

	'css' => array($home.'/../assets/css/reset.css',
				$home.'/../assets/css/font.css',
				$home.'/../assets/css/css3.css',
				$home.'/../assets/css/general.css',
				$home.'/../assets/css/grid.css',
				$home.'/../assets/css/forms.css',
				$home.'/../assets/css/main.css'),
	//'css' => array(APP_DIR.'/assets/css/reset.css'),
	
		
    // custom source example
    /*'js2' => array(
        dirname(__FILE__) . '/../min_unit_tests/_test_files/js/before.js',
        // do NOT process this file
        new Minify_Source(array(
            'filepath' => dirname(__FILE__) . '/../min_unit_tests/_test_files/js/before.js',
            'minifier' => create_function('$a', 'return $a;')
        ))
    ),//*/

    /*'js3' => array(
        dirname(__FILE__) . '/../min_unit_tests/_test_files/js/before.js',
        // do NOT process this file
        new Minify_Source(array(
            'filepath' => dirname(__FILE__) . '/../min_unit_tests/_test_files/js/before.js',
            'minifier' => array('Minify_Packer', 'minify')
        ))
    ),//*/
);