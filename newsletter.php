<?php
/*
Template Name: Newsletter
*/
?>
<?php get_header(); ?>
<?php

if( function_exists( 'mc4wp_form' ) ) {
	mc4wp_form();
}
?>
<?php get_footer(); ?>