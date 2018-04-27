<?php
/**
 * The content block for any single pages (posts)
 *
 * @package Brilliantcoding
 */
?>
<?php $data = get_query_var('template_data');?>

<?php $post = $data['posts'][0];?>

<!-- post-single-article -->
<div class="bc-content">
	<div class="container-fluid">
		<article id="post-<?php echo $post['id']; ?>" class="h-entry row mt-5 row flex-xl-nowrap bc-post-article">

			<div id="left_gutter" class="d-none d-xl-block col-xl-1"></div>
			<div class="col-md-12 col-xl-9 pl-4 pr-4 pb-4">
				<h2 class="p-name"><?php echo $post['title'] ?></h2>
				<?php get_template_part('includes/partials/' . $data['theme']['template_name'], 'metadata');?>

				<div class="e-content">
					<?php echo $post['content'] ?>
				</div>

			</div>
			<div class="d-none d-xl-block col-xl-2 p-0 bc-sidebar">
				<h6><?php echo __("Categories", "brilliantcoding"); ?></h6>
				<ul class="section">
				<?php foreach ($data['categories'] as $category): ?>
					<li class="list-item">
						<a class="list-link " href="<?php echo $category['url']; ?>" onclick="ga('send', 'event', 'Navbar', 'Category links', 'Bootstrap');">
							<span><?php echo ($category['name'] . ' (' . $category['category_count'] . ')'); ?>
						</a>
					</li>
				<?php endforeach;?>
			</ul>
		</div>
			<a id="bc-skippy" class="sr-only sr-only-focusable" href="<?php echo $post['permalink']; ?>">
				<span class="bc-skiplink-text"><?php echo $post['title']; ?></span>
			</a>

		</article>
	</div>
</div>