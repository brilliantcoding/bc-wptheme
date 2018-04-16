<?php
/**
 * Brilliantcoding Theme Customizer
 *
 * @package Brilliantcoding
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function brilliantcoding_customize_register($wp_customize) {

	$wp_customize->add_section('brilliantcoding_options',
		array(
			'title' => __('Brilliantcoding Theme Options', 'brilliantcoding'),
			'priority' => 35,
			'capability' => 'edit_theme_options',
			'description' => __('Allows you to customize some settings.', 'brilliantcoding'),
		)
	);

	$wp_customize->add_setting('gatrackingid',
		array(
			'default' => 'YOUR ID HERE',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brilliantcoding_gatrackingid',
			array(
				'label' => __('Enter your Google Analytic ID', 'brilliantcoding'),
				'section' => 'brilliantcoding_options',
				'settings' => 'gatrackingid',
				'type' => 'textbox',
			)
		)
	);

	$wp_customize->get_setting('blogname')->transport = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

}
add_action('customize_register', 'brilliantcoding_customize_register');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function brilliantcoding_customize_preview_js() {
	wp_enqueue_script('brilliantcoding_customizer', get_template_directory_uri() . '/customizer/customizer.js', array('customize-preview'), '20130508', true);
}
add_action('customize_preview_init', 'brilliantcoding_customize_preview_js');
