<?php
/**
 * Brilliantcoding functions and definitions
 *
 * @package Brilliantcoding
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660; /* pixels */
}

if ( ! function_exists( 'brilliantcoding_shortcode' ) ) :

function brilliantcoding_shortcode() {
	$template_url = get_bloginfo('template_url');
	return <<<FORMAT
<style type="text/css"> @import url("$template_url/highlight/styles/monokai.css"); </style>
<script src="$template_url/highlight/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<style>
@font-face {
    font-family: "Iosevka";
    src: url($template_url/iosevka/iosevka-regular.ttf) format("truetype");
}
</style>
FORMAT;
}
endif; // brilliantcoding_shortcode
add_shortcode('format_code', 'brilliantcoding_shortcode');


if ( ! function_exists( 'brilliantcoding_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function brilliantcoding_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Brilliantcoding, use a find and replace
	 * to change 'brilliantcoding' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'brilliantcoding', get_template_directory() . '/languages' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'brilliantcoding' ),
		'social'  => __( 'Social Links', 'brilliantcoding' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'audio', 'gallery', 'status'
	) );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let's not mess around with the editor styling, or if we do, we need to give the user a way to turn it off
	// add_editor_style( array( 'editor-style.css', brilliantcoding_fonts_url() ) );
	
	add_theme_support( 'title-tag' );
}
endif; // brilliantcoding_setup exists?

add_action( 'after_setup_theme', 'brilliantcoding_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */

// Sidebars are not supported in this theme


// wp-embed is to support older versions of WP, let's turn that off and just keep WP up-to-date
add_action( 'wp_footer', function () { wp_deregister_script( 'wp-embed' ); } );
add_action( 'init', function() {

    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}, PHP_INT_MAX - 1 );

// Remove pingback link from HTML
add_filter('bloginfo_url', function($output, $property){ return ($property == 'pingback_url') ? null : $output;}, 11, 2);

// Remove extra links from HTML
remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action( 'wp_head', 'wlwmanifest_link');

// Turning off default emojis
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Remove extra feed links
add_filter('feed_links_show_comments_feed', function () { return false; });

/**
 * Register Google Fonts
 */
function brilliantcoding_fonts_url() {
    $fonts_url = '';

	$opensans = _x( 'on', 'Open Sans font: on or off', 'brilliantcoding' );

	$opensanscond = _x( 'on', 'Open Sans Condensed font: on or off', 'brilliantcoding' );

	$font_families = array();

	if ( 'off' !== $opensans ) {

		$font_families[] = 'Open Sans:300,400,700,700italic,400italic,300italic';

	}

	if ( 'off' !== $opensanscond ) {

		$font_families[] = 'Open Sans Condensed:700,700italic';

	}

	if ( 'off' !== $opensanscond || 'off' !== $opensans ) {

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}

	return $fonts_url;

}
function brilliantcoding_pre_content() {
	if ( is_feed() ) return;
	ob_start('brilliantcoding_modify_buffer');
}

function brilliantcoding_post_content() {
	if ( is_feed() ) return;
	ob_end_flush();
}

function brilliantcoding_modify_buffer($buffer) {
		// minify HTML
			if (!class_exists('Minify_HTML')) {
				require_once('min/lib/Minify/HTML.php');
				$buffer = Minify_HTML::minify($buffer);
			}
		return $buffer;
	}

add_action('init', 'brilliantcoding_pre_content', 99999);
add_action('wp_footer', 'brilliantcoding_post_content', 99999);

// Ondemand function to generate tinyurl
function brilliantcoding_tiny_url($url) {
	$tinyurl = file_get_contents("http://tinyurl.com/api-create.php?url=".$url);
	return $tinyurl;
}

/**
 * Returns the URL from the post.
 *
 * @uses get_the_link() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * @return string URL
 */
function brilliantcoding_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

/**
 * Customizer additions.
 */
require get_template_directory() . '/customizer/customizer.php';

/**
* Enqueue styles and scripts needed by the theme
*/
require_once get_template_directory() . '/includes/enqueue-scripts.php';