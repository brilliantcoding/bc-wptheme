<?php
/**
 * Displays aggragate archive page content lists 
 *
 * @package Brilliantcoding
 */
?>
<?php $data = get_query_var( 'template_data' ); ?>

<!-- content-index -->
<div class="bc-content">
	<div class="container"

		<h2><?php echo $data['archive']['title']; ?></h2>
		<p><?php echo $data['archive']['description']; ?></p>
		<?php foreach ($data['posts'] as $post): ?>

			<?php set_query_var( 'template_post', $post ); ?>
			<?php get_template_part( 'includes/partials/'.$data['post_type'], $data['post_format'] ); ?>

		<?php endforeach ?>

		<?php set_query_var( 'paging_data', $data['paging'] ); ?>
		<?php get_template_part( 'includes/partials/paging-nav'); ?>

	</div>
</div>
