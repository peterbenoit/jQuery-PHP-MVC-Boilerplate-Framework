<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<!--  The cake is a lie. -->
<head>
<meta charset="utf-8">
<title><?php $template->page_title(); ?></title>
<base href="<?php echo BASE_URL; ?>" /> 
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Play">
<?php /*<link rel="stylesheet" href="//cachedcommons.org/cache/960/0.0.0/stylesheets/960-min.css">*/ ?>
<?php /*<link rel="stylesheet" href="//code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" /> */ ?>
<link rel="stylesheet" href="min/g=css&debug=1" />
<link rel="shortcut icon" href="assets/images/favicon.ico"> 
<meta name="description" content="<?php echo APP_DESCRIPTION; ?>"> 
<meta name="keywords" content="<?php echo APP_KEYWORDS; ?>"> 
<link rel="canonical" href="<?php echo BASE_URL; ?>"> 
<script src="//cachedcommons.org/cache/modernizr/1.5.0/javascripts/modernizr-min.js"></script>
<script src="//code.jquery.com/jquery-1.6.min.js"></script>
<?php /*<script>window.Modernizr || document.write("<script src="/min/g=modernizr?<? echo time(); ?>">\x3C/script>")</script> */ ?>
</head>
<body role="application">
<div data-role="page" data-theme="c" class="container width_16 row" id="container">
	<header data-role="header" data-theme="a" role="banner">
		<h1><a href="./"><?php echo APP_NAME; ?></a></h1>
	</header>
	<div data-role="content" id="main" role="main" class="width_16 row">
		<?php $template->get_msg(); ?>