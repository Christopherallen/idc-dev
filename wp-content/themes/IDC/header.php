<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo("name"); ?> <?php wp_title("&bull;"); ?></title>
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/app.css" />
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/idc.css" />
		
		<?php wp_head(); ?>
		
	</head>

<body <?php body_class(); ?>>
<!--Menu Start-->
<header class="large-12 columns header fixed">
	<div class="row">
		<nav class="fullmenu">
    <?php wp_nav_menu( array('menu' => 'Main Menu' )); ?>  
  		</nav>
	</div>
</header>
<!--Menu End-->

	