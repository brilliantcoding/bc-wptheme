<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Brilliantcoding
 */

require_once( 'includes/load-wpdata.php'); 
$data['theme']['template_name'] = 'page';

set_query_var( 'template_data', $data );

get_template_part( 'includes/layout', 'default' );

?>
