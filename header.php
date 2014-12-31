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
    <title>143 | <?php if( is_front_page() ) { echo 'Home'; } else { echo get_the_title(); } ?></title>
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
					    <a href=""><i class="icon-facebook"></i></a>
				    </li>
				    <li>
					    <a href=""><i class="icon-twitter"></i></a>
				    </li>
				    <li>
					    <a href=""><i class="icon-instagram"></i></a>
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
