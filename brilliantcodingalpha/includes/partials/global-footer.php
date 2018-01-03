<?php
/**
 * The global content footer
 *
 * @package Brilliantcoding
 */
?>

<?php $data = get_query_var( 'template_data' ); ?>

<div class="bc-social-icons">
		<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
			<?php foreach ((array) $data['wp_nav_menu']['social'] as $key => $menu_item) : ?>
						<li class="navbar-item">

			<a class="nav-link " href="<?php echo $menu_item->url; ?>" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Bootstrap');">
			<i class="<?php echo (implode(" ", $menu_item->classes)); ?>" aria-hidden="true"></i>
			<?php echo $menu_item->title; ?>
			</a>
			</li>
			<?php  endforeach; ?>
		</ul>
</div>
<div class="bc-copyright">
	<span><?php echo $data['theme']['copyright_html'] ?></span>
	<span><?php echo $data['theme']['powered_html'] ?></span>
</div>