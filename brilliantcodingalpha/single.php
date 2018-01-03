<?php
/**
 * The template for displaying all single posts.
 *
 * @package Brilliantcoding
 */

require_once( 'includes/load-wpdata.php'); 
$data['theme']['template_name'] = 'single';

set_query_var( 'template_data', $data );
get_template_part( 'includes/layout', 'default' );
?>