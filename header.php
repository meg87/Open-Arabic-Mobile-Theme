<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
	<head profile="http://gmpg.org/xfn/11">
		<title><?php bloginfo('name');?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<meta name="viewport" content="width=device-width,user-scalable=no" />
		<script type="text/javascript">
			function resize(multiplier) 
			{ 
				if (document.body.style.fontSize == "") 
					document.body.style.fontSize = "1.0em"; 
	
				document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em"; 
			}
		</script>
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="wrap">
			<div id="header">
				<h1><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" alt=""/> <?php bloginfo('name'); ?></a></h1>
				<!--<span class="font-resize"><a href="javascript:void(0);" onclick="resize(1)">زيادة حجم الخط</a> | <a href="javascript:void(0);" onclick="resize(-1)">انقاص حجم الخط</a></span>-->
			</div>
