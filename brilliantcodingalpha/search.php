<?php
/**
 * The template for displaying search results pages.
 *
 * @package Brilliantcoding
 */

require_once( 'includes/load-wpdata.php');
$data['theme']['template_name'] = 'search';

set_query_var( 'template_data', $data );
get_template_part( 'includes/layout', 'default' );

?>

