<?php

/**
 * Oriental_Bakery functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Oriental_Bakery
 */


/**
 * Enqueue scripts and styles.
 */
function feedback_form_scripts()
{
	wp_enqueue_style('feedback-form-style', get_stylesheet_uri());
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awesome.min.css', array());

	
	
}
add_action('wp_enqueue_scripts', 'feedback_form_scripts');




