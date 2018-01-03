<?php
/**
 * The content block that appears on search results
 *
 * @package Brilliantcoding
 */
?>
<?php $data = get_query_var( 'template_data' ); ?>

<!-- content-search -->
<div class=blog-content bc-content">
	<div class="container">
			
		<h2><?php __("Search Terms", "brilliantcoding"); ?><?php echo " ".$data['search']['query']; ?></h2>
		<?php foreach ($data['posts'] as $post): ?>

			<?php set_query_var( 'template_post', $post ); ?>
			<?php get_template_part( 'includes/partials/'.$data['post_type'], $data['post_format'] ); ?>

		<?php endforeach ?>

		<?php set_query_var( 'paging_data', $data['paging'] ); ?>
		<?php get_template_part( 'includes/partials/paging-nav'); ?>

	</div>
</div>
