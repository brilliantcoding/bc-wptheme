<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Brilliantcoding
 */

function set_query_var( $var, $value ) {
    global $wp_query;
    $wp_query = Array( $var => $value );
}

function get_query_var( $var, $default = null ) {
    global $wp_query;
    return $wp_query[$var];
}

function get_template_part( $slug, $name = null ) {
    global $wp_query;

    $template = null;
    $name = (string) $name;
    $template = ( '' !== $name )?"{$slug}-{$name}.php":"{$slug}.php";
         
    require( $template );

}

function get_template_directory_uri() {
    return '';
}

function get_template_directory() {
    return dirname(__FILE__);
}

function add_action($hook_name, $function_name ) {
    $function_name();
}

function wp_enqueue_style( $handle, $src = '', $deps = array(), $ver = false, $media = 'all') {
    global $wp_scripts;
    $wp_scripts['wp_head'] = is_array($wp_scripts['wp_head'])?$wp_scripts['wp_head']:Array ();
    $item = Array (
        'tag' =>  "<link rel='stylesheet' href='%s' type='text/css' media='all' />",
        'src' => $src
        );
    array_push($wp_scripts['wp_head'], $item);

}

function brilliantcoding_fonts_url() {
    return '//fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C700%2C700italic%2C400italic%2C300italic%7COpen+Sans+Condensed%3A700%2C700italic&#038;subset=latin%2Clatin-ext';
     }

function wp_enqueue_script($handle, $src = '', $deps = array(), $ver = false, $in_footer = false) {
    global $wp_scripts;
    $wp_scripts['wp_head'] = isset($wp_scripts['wp_head']) ? $wp_scripts['wp_head'] : Array();

    $item = Array (
        'tag' =>  "<script type='text/javascript' src='%s'></script>",
        'src' => $src
        );

    if ($in_footer) {
        array_push($wp_scripts['wp_footer'],$item);
    } else {
        array_push($wp_scripts['wp_head'],$item);
    }
}

function wp_head() { 
    global $wp_scripts;
    $wp_scripts['wp_head'] = isset($wp_scripts['wp_head']) ? $wp_scripts['wp_head'] : Array();
    foreach ($wp_scripts['wp_head'] as $script) {
        echo sprintf($script['tag'], $script['src']);
    }
}
function wp_footer() {  
    global $wp_scripts;
    $wp_scripts['wp_footer'] = isset($wp_scripts['wp_footer']) ?  $wp_scripts['wp_footer'] : Array();
    foreach ($wp_scripts['wp_footer'] as $script) {
        echo sprintf($script['tag'], $script['src']);
    }  
}

function __($s, $text_domain ) {
    return $s;
}

?>