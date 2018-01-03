<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Brilliantcoding
 */

require_once( 'includes/load-wpdata.php');
$data['theme']['template_name'] = 'archive';

set_query_var( 'template_data', $data );
get_template_part( 'includes/layout', 'default' );

?>
