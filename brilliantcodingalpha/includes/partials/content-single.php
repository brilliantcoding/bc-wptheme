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
			<div class="d-none d-xl-block col-xl-2 bc-sidebar">
				<span><?php echo __("Categories", "brilliantcoding"); ?></span>
				<ul class="section">
				<?php foreach ((array) $data['wp_nav_menu']['categories'] as $key => $menu_item): ?>
					<li class="list-item">
						<a class="list-link " href="<?php echo $menu_item->url; ?>" onclick="ga('send', 'event', 'Navbar', 'Category links', 'Bootstrap');">
							<span class="font-weight-bold"><?php echo $menu_item->title; ?></span>
						</a>
					</li>
				<?php endforeach;?>
			</ul>
		</div>
		<div class="col-md-12 col-xl-10 pl-5 pr-xl-1 pr-5">
				<h2 class="p-name"><?php echo $post['title'] ?></h2>
				<?php get_template_part('includes/partials/' . $data['theme']['template_name'], 'metadata');?>

				<div class="e-content">
					<?php echo $post['content'] ?>
				</div>

			</div>
			<a id="bc-skippy" class="sr-only sr-only-focusable" href="<?php echo $post['permalink']; ?>">
				<span class="bc-skiplink-text"><?php echo $post['title']; ?></span>
			</a>

		</article>
	</div>
</div>