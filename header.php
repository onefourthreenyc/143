<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie8"></html>
<![endif]--><!--[if IE 9]>
<html class="ie9"></html>
<![endif]--><!--[if (gte IE 9)|!(IE)]<!-->
<html class="no-js">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
	<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	  <meta name="google-site-verification" content="m648XKv22ZZ8RkySQ2_qTNI65OggVohM4ToaVJeX_iE" />
    <title>143 | <?php if( is_front_page() ) { echo 'Home'; } else { echo get_the_title(); } ?></title>
	  <meta name="title" content="143 | <?php if( is_front_page() ) { echo 'Home'; } else { echo get_the_title(); } ?>">
	  <meta name="description" content="143 is an online publication dedicated to the art of the DJ. We invite DJs to play an intimate private session at our Brooklyn loft that culminates in an in-depth interview and a mixtape reflective of their influence and taste.">
	  <meta property="og:title" content="<?php if( is_front_page() ) { echo 'Home'; } else { echo get_the_title(); } ?>" />
	  <meta property="og:type" content="article" />
	  <meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
	  <meta property="og:image" content="<?php if( is_page() ) { echo get_bloginfo('template_directory') . '/images/about.jpg'; } else { echo  the_field('cover_image'); } ?>" />
	  <meta property="og:description" content="143 is an online publication dedicated to the art of the DJ. We invite DJs to play an intimate private session at our Brooklyn loft that culminates in an in-depth interview and a mixtape reflective of their influence and taste." />

    <link rel="stylesheet" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
  <!--[if lt IE 9]>
	  <script src="<?php echo get_bloginfo('template_directory');?>/javascripts/vendor/html5shim.js"></script>
  <![endif]-->
	<script src="<?php echo get_bloginfo('template_directory');?>/javascripts/vendor/modernizr.js"></script>
  </head>
  <body class="<?php if(is_single()) { echo 'session'; } else { echo 'index'; } ?>">
  <div class="container-page">
    <header>
	    <div class="new-container">
		    <div class="logo">
			    <a href="/">143</a>
		    </div>
		    <div class="social">
			    <ul>
				    <li>
					    <a href="https://facebook.com/onefourthreenyc" target="_blank"><i class="icon-facebook"></i></a>
				    </li>
				    <li>
					    <a href="https://twitter.com/onefourthreenyc" target="_blank"><i class="icon-twitter"></i></a>
				    </li>
				    <li>
					    <a href="http://instagram.com/onefourthreenyc" target="_blank"><i class="icon-instagram"></i></a>
				    </li>
			    </ul>
		    </div>
		    <div class="navigation">
			    <ul>
				    <li>
					    <a href="/about">ABOUT</a>
				    </li>
			    </ul>
		    </div>
	    </div>
    </header>
