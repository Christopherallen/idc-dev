<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
	
	
		<meta charset="utf-8">
		
		<title><?php bloginfo("name"); ?> <?php wp_title("&bull;"); ?></title>
		
		<!--<meta name="viewport" content="width=device-width">-->
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/app.css" />
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/idc.css" />
		
		<!-- LOAD SCRIPTS -->

		<?php wp_head(); ?>
		
	</head>
	

	<body <?php body_class(); ?>>
	<!--Menu Start-->
	<header class="large-12 columns header fixed">
  	<div class="row">
  		<nav class="top-bar no-pad head">
  		  <ul class="title-area">
  		    <li class="name"><h1><a href="index.html">IDC Oregon</a></h1></li>
  		    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  		  </ul>
  		  <section class="top-bar-section">
  		    <ul class="right">

<!-- Nav Link 1 -->
  		       <li class="divider"></li>
  		       <li class="has-dropdown"><a href="#">About US</a>
               <ul class="dropdown">
                 <li class="divider"></li>
                 <li><a href="#">Meet the Collaborative</a></li>
                 <li class="divider"></li>
                 <li><a href="#">FAQs</a></li>
                 <li class="divider"></li>
               </ul>
             </li>
  		       <li class="divider"></li>

<!-- Nav Link 2 -->
  		       <li class="has-dropdown"><a href="#">News & Events</a>
               <ul class="dropdown">
                 <li class="divider"></li>
                 <li><a href="#">Blog</a></li>
                 <li class="divider"></li>
                 <li><a href="#">Calendar</a></li>
                 <li class="divider"></li>
                 <li><a href="#">Photo Gallery</a></li>
                 <li class="divider"></li>
               </ul>
             </li>
  	         <li class="divider"></li>

<!-- Nav Link 3 -->
             <li class="has-dropdown"><a href="#">Legislation</a>
               <ul class="dropdown">
                <li class="divider"></li>
                 <li><a href="#">Oregon</a></li>
                 <li class="divider"></li>
                 <li><a href="#">National</a></li>
               </ul>
             </li>
					   <li class="divider"></li>

<!-- Nav Link 4 -->
  		       <li class="has-dropdown"><a href="#">Get Involved</a>
               <ul class="dropdown">
                <li class="divider"></li>
                 <li><a href="#">Volunteer</a></li>
                 <li class="divider"></li>
                 <li><a href="#">Petition</a></li>
                 <li class="divider"></li>
                 <li><a href="#">Request a Presentation</a></li>
                 <li class="divider"></li>
                 <li><a href="#">Write a Letter</a></li>
                 <li class="divider"></li>
                 <li><a href="#">Meet Your Legislator</a></li>
                 <li class="divider"></li>
               </ul>
             </li>
		         <li class="divider"></li>

<!-- Nav Link 5 -->
	           <li class="has-dropdown"><a href="#">Resources</a>
               <ul class="dropdown">
                <li class="divider"></li>
                 <li><a href="#">Experience</a></li>
                 <li class="divider"></li>
                 <li><a href="#">Education</a></li>
                 <li class="divider"></li>
                 <li><a href="#">Exams</a></li>
                 <li class="divider"></li>
                 <li><a href="#">CEUs</a></li>
                 <li class="divider"></li>
               </ul>
             </li>
			       <li class="divider"></li>

<!-- Nav Link 6 -->
             <li class=""><a href="contact.html">Contact</a></li>
             <li class="divider"></li>

  		    </ul>
  		  </section>

  		</nav>
  	</div>
  </header>
<!--Menu End-->

	