<?php
/**
 * Enqueue Theme scripts and styles
 *
 * Most scripts and styles should be added here
 * The only exception are any scripts that require access to the PHP "data" var
 * Scripts using dynamic content will be included directly in the template files
 *
 * @package Brilliantcoding
 */

function brilliantcoding_scripts() {

	wp_enqueue_style('bc-' . md5(get_template_directory_uri() . '/assets/css/bc.min.css'), get_template_directory_uri() . '/assets/css/bc.min.css', array(), null);

	wp_enqueue_script('bc-' . md5(get_template_directory_uri() . '/assets/js/bc.min.js'), get_template_directory_uri() . '/assets/js/bc.min.js', array(), null);

}

add_action('wp_enqueue_scripts', 'brilliantcoding_scripts');
