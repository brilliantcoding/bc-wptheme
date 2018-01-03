<?php
/**
 * The content block for post metadata
 *
 * @package Brilliantcoding
 */
?>
<?php $post = get_query_var( 'template_post'); ?>
<span class="clearfix">
<?php if ( $post['published_date_ISO8601'] && $post['published_date'] ): ?>
	<span class="clearfix">
		<time class="dt-published" datetime="<?php echo $post['published_date_ISO8601']; ?>">
			<?php echo $post['published_date']; ?>
		</time>
	</span>
<?php endif; ?>
<?php if ( $post['modified_date_ISO8601'] && $post['modified_date'] ): ?>
	<span class="d-none">
		<time class="dt-updated" datetime="<?php echo $post['modified_date_ISO8601']; ?>">
			<?php echo $post['modified_date']; ?>
		</time>
	</span>
<?php endif; ?>

	<div class="clearfix bc-tags"><?php echo $post['tags_list'] ?></div>

<?php if ( $post['author'] && $post['author_posts_url'] ): ?>
	<div class="clearfix bc-author">
		<a class="p-author h-card" href="<?php echo $post['author_posts_url'] ?>">
			<?php echo $post['author']; ?>	
		</a>
	</div>
<?php endif; ?>