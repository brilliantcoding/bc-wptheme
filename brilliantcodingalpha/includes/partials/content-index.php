<?php
/**
 * The content blocks that appear on index page(s)
 *
 * @package Brilliantcoding
 */
?>
<?php $data = get_query_var( 'template_data' ); ?>

<!-- content-index -->

<div class="blog-content bc-content">
	<div class="container">
		<?php foreach ($data['posts'] as $post): ?>			
			<?php set_query_var( 'template_post', $post ); ?>
			<?php get_template_part( 'includes/partials/'.$data['post_type'], $data['post_format'] ); ?>

		<?php endforeach ?>

		<?php set_query_var( 'paging_data', $data['paging'] ); ?>
		<?php get_template_part( 'includes/partials/paging-nav'); ?>
	</div>
</div>