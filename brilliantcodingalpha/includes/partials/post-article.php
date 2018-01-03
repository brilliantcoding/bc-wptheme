<?php
/**
 * The content block for post/article content-type
 *
 * @package Brilliantcoding
 */
?>
<?php $post = get_query_var( 'template_post'); ?>
<!-- post-article -->
<article id="post-<?php echo $post['id']; ?>" class="h-entry row mt-5 bc-post-article">

	<div class="col-md-2 text-md-left text-center mt-5">
		<div class="bc-metadata">
			<?php set_query_var( 'template_post', $post ); ?>
			<?php get_template_part( 'includes/partials/post-metadata' ); ?>
		</div>
	</div>
	<div class="col-md-8 text-md-left text-center ml-3 pb-5 bc-border">

		<h2 class="p-name">
			<a class="u-url" data-anchorjs-icon"#" href="<?php echo $post['permalink'] ?>"><?php echo $post['title'] ?></a>
		</h2>


		<div class="p-summary">
			<?php echo $post['content'] ?>
		</div>


	</div>
	<a id="bc-skippy" class="sr-only sr-only-focusable" href="<?php echo $post['permalink']; ?>">
		<span class="bc-skiplink-text"><?php echo $post['title']; ?></span>
	</a>

</article>
