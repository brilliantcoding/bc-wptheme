<?php
/**
 * The content blockl for a post/link content type
 *
 * @package Brilliantcoding
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('excerpt'); ?>>
	<header class="entry-header">

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( brilliantcoding_get_link_url() ) ), '</a></h1>' ); ?>
		<div class="entry-meta">
			<?php brilliantcoding_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'brilliantcoding' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'brilliantcoding' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="entry-format">
		<?php brilliantcoding_entry_format(); ?>
	</div>
</article><!-- #post-## -->