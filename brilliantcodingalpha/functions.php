<?php
/**
 * Brilliantcoding functions and definitions
 *
 * @package Brilliantcoding
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (!isset($content_width)) {
	$content_width = 660; /* pixels */
}

if (!function_exists('brilliantcoding_shortcode')):

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

if (!function_exists('brilliantcoding_setup')):
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
		load_theme_textdomain('brilliantcoding', get_template_directory() . '/languages');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'primary' => __('Primary Menu', 'brilliantcoding'),
			'social' => __('Social Links', 'brilliantcoding'),
			'categories' => __('Category Links', 'brilliantcoding'),
		));

		/*
			 * Switch default core markup for search form, comment form, and comments
			 * to output valid HTML5.
		*/
		add_theme_support('html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		));

		/*
			 * Enable support for Post Formats.
			 * See http://codex.wordpress.org/Post_Formats
		*/
		add_theme_support('post-formats', array(
			'aside', 'image', 'video', 'quote', 'link', 'audio', 'gallery', 'status',
		));

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		// Let's not mess around with the editor styling, or if we do, we need to give the user a way to turn it off
		// add_editor_style( array( 'editor-style.css', brilliantcoding_fonts_url() ) );

		add_theme_support('title-tag');
	}
endif; // brilliantcoding_setup exists?

add_action('after_setup_theme', 'brilliantcoding_setup');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */

// Sidebars are not supported in this theme

// wp-embed is to support older versions of WP, let's turn that off and just keep WP up-to-date
add_action('wp_footer', function () {wp_deregister_script('wp-embed');});
add_action('init', function () {

	// Remove the REST API endpoint.
	remove_action('rest_api_init', 'wp_oembed_register_route');

	// Turn off oEmbed auto discovery.
	// Don't filter oEmbed results.
	remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

	// Remove oEmbed discovery links.
	remove_action('wp_head', 'wp_oembed_add_discovery_links');

	// Remove oEmbed-specific JavaScript from the front-end and back-end.
	remove_action('wp_head', 'wp_oembed_add_host_js');
}, PHP_INT_MAX - 1);

// Remove pingback link from HTML
add_filter('bloginfo_url', function ($output, $property) {return ($property == 'pingback_url') ? null : $output;}, 11, 2);

// Remove extra links from HTML
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10);

// Turning off default emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Remove extra feed links
add_filter('feed_links_show_comments_feed', function () {return false;});

/**
 * Register Google Fonts
 */
function brilliantcoding_fonts_url() {
	$fonts_url = '';

	$opensans = _x('on', 'Open Sans font: on or off', 'brilliantcoding');

	$opensanscond = _x('on', 'Open Sans Condensed font: on or off', 'brilliantcoding');

	$font_families = array();

	if ('off' !== $opensans) {

		$font_families[] = 'Open Sans:300,400,700,700italic,400italic,300italic';

	}

	if ('off' !== $opensanscond) {

		$font_families[] = 'Open Sans Condensed:700,700italic';

	}

	if ('off' !== $opensanscond || 'off' !== $opensans) {

		$query_args = array(
			'family' => urlencode(implode('|', $font_families)),
			'subset' => urlencode('latin,latin-ext'),
		);

		$fonts_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
	}

	return $fonts_url;

}
function brilliantcoding_pre_content() {
	if (is_feed()) {
		return;
	}

	ob_start('brilliantcoding_modify_buffer');
}

function brilliantcoding_post_content() {
	if (is_feed()) {
		return;
	}

	ob_end_flush();
}

function brilliantcoding_modify_buffer($buffer) {
	// minify HTML
	if (!class_exists('Minify_HTML')) {
		require_once 'min/lib/Minify/HTML.php';
		$buffer = Minify_HTML::minify($buffer);
	}
	return $buffer;
}

add_action('init', 'brilliantcoding_pre_content', 99999);
add_action('wp_footer', 'brilliantcoding_post_content', 99999);

// Ondemand function to generate tinyurl
function brilliantcoding_tiny_url($url) {
	$tinyurl = file_get_contents("http://tinyurl.com/api-create.php?url=" . $url);
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
	$has_url = get_url_in_content($content);

	return ($has_url) ? $has_url : apply_filters('the_permalink', get_permalink());
}

add_filter('tiny_mce_before_init', 'brilliantcoding_TinyMCE_init');

/**
 * Sets config for editor
 *
 * Sets the settings for TinyMCE.
 * Specifically this sets some encoding defaults to convert entities
 *
 * @return array settings
 */
function brilliantcoding_TinyMCE_init($in) {
	$in['entity_encoding'] = 'named';
	$in['entities'] = '160,nbsp,161,iexcl,162,cent,163,pound,164,curren,165,yen,166,brvbar,167,sect,168,uml,169,copy,170,ordf,'
		+'171,laquo,172,not,173,shy,174,reg,175,macr,176,deg,177,plusmn,178,sup2,179,sup3,180,acute,181,micro,182,para,'
		+'183,middot,184,cedil,185,sup1,186,ordm,187,raquo,188,frac14,189,frac12,190,frac34,191,iquest,192,Agrave,193,Aacute,'
		+'194,Acirc,195,Atilde,196,Auml,197,Aring,198,AElig,199,Ccedil,200,Egrave,201,Eacute,202,Ecirc,203,Euml,204,Igrave,'
		+'205,Iacute,206,Icirc,207,Iuml,208,ETH,209,Ntilde,210,Ograve,211,Oacute,212,Ocirc,213,Otilde,214,Ouml,215,times,'
		+'216,Oslash,217,Ugrave,218,Uacute,219,Ucirc,220,Uuml,221,Yacute,222,THORN,223,szlig,224,agrave,225,aacute,226,acirc,'
		+'227,atilde,228,auml,229,aring,230,aelig,231,ccedil,232,egrave,233,eacute,234,ecirc,235,euml,236,igrave,237,iacute,'
		+'238,icirc,239,iuml,240,eth,241,ntilde,242,ograve,243,oacute,244,ocirc,245,otilde,246,ouml,247,divide,248,oslash,'
		+'249,ugrave,250,uacute,251,ucirc,252,uuml,253,yacute,254,thorn,255,yuml,402,fnof,913,Alpha,914,Beta,915,Gamma,916,Delta,'
		+'917,Epsilon,918,Zeta,919,Eta,920,Theta,921,Iota,922,Kappa,923,Lambda,924,Mu,925,Nu,926,Xi,927,Omicron,928,Pi,929,Rho,'
		+'931,Sigma,932,Tau,933,Upsilon,934,Phi,935,Chi,936,Psi,937,Omega,945,alpha,946,beta,947,gamma,948,delta,949,epsilon,'
		+'950,zeta,951,eta,952,theta,953,iota,954,kappa,955,lambda,956,mu,957,nu,958,xi,959,omicron,960,pi,961,rho,962,sigmaf,'
		+'963,sigma,964,tau,965,upsilon,966,phi,967,chi,968,psi,969,omega,977,thetasym,978,upsih,982,piv,8226,bull,8230,hellip,'
		+'8242,prime,8243,Prime,8254,oline,8260,frasl,8472,weierp,8465,image,8476,real,8482,trade,8501,alefsym,8592,larr,8593,uarr,'
		+'8594,rarr,8595,darr,8596,harr,8629,crarr,8656,lArr,8657,uArr,8658,rArr,8659,dArr,8660,hArr,8704,forall,8706,part,8707,exist,'
		+'8709,empty,8711,nabla,8712,isin,8713,notin,8715,ni,8719,prod,8721,sum,8722,minus,8727,lowast,8730,radic,8733,prop,8734,infin,'
		+'8736,ang,8743,and,8744,or,8745,cap,8746,cup,8747,int,8756,there4,8764,sim,8773,cong,8776,asymp,8800,ne,8801,equiv,8804,le,8805,ge,'
		+'8834,sub,8835,sup,8836,nsub,8838,sube,8839,supe,8853,oplus,8855,otimes,8869,perp,8901,sdot,8968,lceil,8969,rceil,8970,lfloor,'
		+'8971,rfloor,9001,lang,9002,rang,9674,loz,9824,spades,9827,clubs,9829,hearts,9830,diams,338,OElig,339,oelig,352,Scaron,353,scaron,'
		+'376,Yuml,710,circ,732,tilde,8194,ensp,8195,emsp,8201,thinsp,8204,zwnj,8205,zwj,8206,lrm,8207,rlm,8211,ndash,8212,mdash,8216,lsquo,'
		+'8217,rsquo,8218,sbquo,8220,ldquo,8221,rdquo,8222,bdquo,8224,dagger,8225,Dagger,8240,permil,8249,lsaquo,8250,rsaquo,8364,euro';
	return $in;
}

/**
 * Customizer additions.
 */
require get_template_directory() . '/customizer/customizer.php';

/**
 * Enqueue styles and scripts needed by the theme
 */
require_once get_template_directory() . '/includes/enqueue-scripts.php';