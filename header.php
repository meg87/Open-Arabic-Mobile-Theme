<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head profile="http://gmpg.org/xfn/11">
		<title><?php bloginfo('name');?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/low/reset-low.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/low/baseStyles-low.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<?php wp_head(); ?>
	</head>
	<body>
	<div id="wrap">
		<div id="header">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<!--<h2><?php //bloginfo('description'); ?></h2>-->
		</div>
