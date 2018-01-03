<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Brilliantcoding
 */

// Load the 404 page id 
//$ID = get_theme_mod( '404pageid' );
$ID = 8;
global $wp_query;
$wp_query = new WP_Query( array(
	'post_type'         => 'page',
	'p'       => $ID
));
require_once( 'includes/load-wpdata.php');

$data['theme']['template_name'] = 'page';

set_query_var( 'template_data', $data );

get_template_part( 'includes/layout', 'open' );

?>
