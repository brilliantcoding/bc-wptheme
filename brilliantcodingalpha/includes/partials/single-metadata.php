<?php
/**
 * The content block for post metadata
 *
 * @package Brilliantcoding
 */
?>
<?php $data = get_query_var('template_data');?>
<?php $post = $data['posts'][0];?>

<div class="pl-2 bc-metadata">
	<?php if ($post['author'] && $post['author_posts_url']): ?>
		<span class="clearfix"></span>
		<a class="p-author h-card" href="<?php echo $post['author_posts_url'] ?>">
			<?php echo $post['author']; ?>
		</a>
		<?php if ($post['published_date_ISO8601'] && $post['published_date']): ?>
			<span><?php echo __(' | ', 'brilliantcoding'); ?></span>
			<time class="dt-published" datetime="<?php echo $post['published_date_ISO8601']; ?>">
				<?php echo $post['published_date']; ?>
			</time>
			<?php if ($post['tags_list']): ?>
				<span><?php echo __(' | ', 'brilliantcoding'); ?></span>
				<span class="tag-list"><?php echo ($post['tags_list']); ?></span>
			<?php endif;?>
		<?php endif;?>

	<?php endif;?>

	<?php if ($post['modified_date_ISO8601'] && $post['modified_date']): ?>
		<span class="d-none">
			<time class="dt-updated" datetime="<?php echo $post['modified_date_ISO8601']; ?>">
				<?php echo $post['modified_date']; ?>
			</time>
		</span>
	<?php endif;?>
</div>