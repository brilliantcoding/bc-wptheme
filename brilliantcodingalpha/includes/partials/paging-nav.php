<?php
/**
 * The content block for paging navigation
 *
 * @package Brilliantcoding
 */
?>
<?php $paging_data = get_query_var( 'paging_data' ); ?>
<?php if ( $paging_data ): ?>
	<nav class="collapse bd-links" id="bd-docs-nav">
		<ul class="nav bd-sidenav">
			<li>
				<a href="<?php echo $paging_data['next_posts_link']; ?>"><span class="meta-nav">&larr;</span><?php echo $paging_data['next_posts_text']; ?></a>
			</li>
			<li>
				<a href="<?php echo $paging_data['previous_posts_link']; ?>"><?php echo $paging_data['previous_posts_text']; ?><span class="meta-nav">&rarr;</span></a>
			</li>
		</ul>
	</nav>
<?php endif; ?>