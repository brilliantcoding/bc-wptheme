<?php
/**
 * The global content header
 *
 * @package Brilliantcoding
 */
?>
<?php $data = get_query_var('template_data');?>

<!-- content-head -->

<div class="navbar-nav-scroll">
	<ul class="navbar-nav d-flex align-items-center">

		<?php foreach ((array) $data['wp_nav_menu']['primary'] as $key => $menu_item): ?>
			<li class="navbar-item">
				<a class="nav-link " href="<?php echo $menu_item->url; ?>" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Bootstrap');">
					<span class="font-weight-bold"><?php echo $menu_item->title; ?></span>
				</a>
			</li>
		<?php endforeach;?>
	</ul>
</div>
<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
	<?php foreach ((array) $data['wp_nav_menu']['social'] as $key => $menu_item): ?>
		<li class="navbar-item">

			<a class="nav-link " href="<?php echo $menu_item->url; ?>" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Bootstrap');">
				<i class="<?php echo (implode(" ", $menu_item->classes)); ?>" aria-hidden="true"></i>
			</a>
		</li>
	<?php endforeach;?>
</ul>


