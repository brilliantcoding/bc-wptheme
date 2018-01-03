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



	foreach (glob(get_template_directory() . "/assets/css/vendor/*.css") as $cssfile) {
		wp_enqueue_style( 'bc-'.md5(get_template_directory_uri() . '/assets/css/vendor/' . basename($cssfile)), get_template_directory_uri() . '/assets/css/vendor/' . basename($cssfile), array( ), null );
	}

	// Load js dependencies
	foreach (glob(get_template_directory() . "/assets/js/vendor/dep/*.js") as $jsfile) {
		wp_enqueue_script( 'bc-'.md5(get_template_directory_uri() . '/assets/js/vendor/dep/' . basename($jsfile)), get_template_directory_uri() . '/assets/js/vendor/dep/' . basename($jsfile), array( ), null );
	}

	// Load vendor libraries
	// TODO list all deps from above in enqueue dep param
	foreach (glob(get_template_directory() . "/assets/js/vendor/*.js") as $jsfile) {
		wp_enqueue_script( 'bc-'.md5(get_template_directory_uri() . '/assets/js/vendor/' . basename($jsfile)), get_template_directory_uri() . '/assets/js/vendor/' . basename($jsfile), array( ), null );
	}

	wp_enqueue_style( 'bc-'.md5(get_template_directory_uri() . '/assets/css/bc.min.css'), get_template_directory_uri() . '/assets/css/bc.min.css', array(), null);    

	wp_enqueue_script( 'bc-'.md5(get_template_directory_uri() . '/assets/js/bc.min.js'), get_template_directory_uri() . '/assets/js/bc.min.js', array( ), null );

	wp_enqueue_style( 'bc-opensans', brilliantcoding_fonts_url(), array(), null );

}

add_action( 'wp_enqueue_scripts', 'brilliantcoding_scripts' );

