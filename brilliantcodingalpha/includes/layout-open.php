<?php
/**
* Open layout
*
* The open layout does not have header banners and navigation,
* only the global footer is retained.
*
* @package Brilliantcoding
*/
?>

<?php $data = get_query_var( 'template_data' ); ?>

<!DOCTYPE html>
<html <?php echo $data['bloginfo']['language_attributes']; ?>>
<!-- layout-default -->
<head>
	<?php get_template_part('includes/partials/global', 'head'); ?>
	<?php wp_head(); ?>
</head>

<body class="<?php echo $data['template']['body_class']; ?>">

	<!--div id="page" class="hfeed site"-->
	<a id="bc-skippy" class="sr-only sr-only-focusable" href="#content">
		<span class="bc-skiplink-text"><?php echo($data['theme']['skip_text']);  ?></span>
	</a>

	<?php get_template_part( 'includes/partials/content', $data['theme']['template_name'] ); ?>

	<footer id="colophon" class="bc-footer" role="contentinfo">
		<div class="container">
			<?php set_query_var( 'template_data', $data ); ?>
			<?php get_template_part('includes/partials/global', 'footer'); ?>

			<?php wp_footer(); ?>
		</div>
	</footer>
	<!-- <?php print_r($data); ?> -->
</body>
</html>