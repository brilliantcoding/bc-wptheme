<?php
/**
 * The main index template file.
 *
 * Nothing to see here.  Simply loads the data variable and passes it to the layout.
 *
 * @package Brilliantcoding
 */

require_once( 'includes/load-wpdata.php');
$data['theme']['template_name'] = 'index';

set_query_var( 'template_data', $data );
get_template_part( 'includes/layout', 'default' );

?>