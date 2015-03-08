<?php
/*
Template Name: Newsletter
*/
?>
<?php get_header(); ?>
<?php AnythingPopup('1'); ?>
<?php

if( function_exists( 'mc4wp_form' ) ) {
	mc4wp_form();
}
?>
<?php get_footer(); ?>