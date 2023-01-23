<!doctype html>
<html lang="en">
<head>    

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php bloginfo('name'); ?> <?php wp_title(" - ",true); ?></title>
	<meta name="viewport" content="width=device-width" /> 
	<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/favicon.ico"/>	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">	
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url');?>/img/favicon.png">	  
	  
	<meta property="og:locale" content="en" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Demo by Dmitry Borovitsky" />
	<meta property="og:description" content="Test for position WordPress Design and Development" />
	<meta property="og:url" content="<?php bloginfo('stylesheet_url'); ?>" />
	<meta property="og:image" content="<?php bloginfo('template_url');?>/screenshot.png" />
	<meta property="og:site_name" content="Demo by Dmitry Borovitsky" /> 
	<?php wp_head(); ?>
	
</head>
<body>

<div class="wrap"></div>

<div class="paddingleft paddingright" align="center">
	<a href="<?php echo esc_url(get_home_url()); ?>">
		<img class="logo" src="<?php bloginfo('template_url');?>/img/logo.svg">
	</a>
</div>

<div class="wrap"></div>
