<?php

add_theme_support( 'post-thumbnails' );

add_action( 'wp_enqueue_scripts', 'onefourthree_scripts' );

/**
 * Enqueue scripts and styles
 */
function onefourthree_scripts() {

	/*
	 * Enqueue Scripts
	 */
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	// jQuery
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'app', get_template_directory_uri() . '/javascripts/app.js', array( 'jquery' ), '6.0', true );
	wp_enqueue_script( 'html5shim', get_template_directory_uri() . '/javascripts/vendor/html5shim.js', array( 'jquery' ), '6.0', true );
}

