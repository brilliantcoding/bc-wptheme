<?php
/**
* This is the theme's default layout
*
* Overall page structure is set from this template
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

	<a id="bc-skippy" class="sr-only sr-only-focusable" href="#content">
		<span class="bc-skiplink-text"><?php echo($data['theme']['skip_text']);  ?></span>
	</a>

	<header class="bc-navbar nav navbar navbar-expand navbar-dark flex-column flex-md-row">

		<?php set_query_var( 'template_data', $data ); ?>
		<?php get_template_part('includes/partials/global', 'header'); ?>

	</header>
	<div class="blog-title mt-2">
		<div class="container d-flex">
			<div>
				<span class="float-left mr-3">
					<?php if (  $data['site']['icon_url'] ) : ?>
						<img src="<?php echo $data['site']['icon_url'] ?>" />
					<?php endif; ?>
				</span>
			</div>
			<div class="align-self-end">
				<h1 class="site-title">
					<?php echo $data['bloginfo']['name']; ?>	
				</h1>				
				<p class="site-description mb-0"><?php echo $data['bloginfo']['description']; ?></p>
			</div>
		</div>
	</div>

	<?php get_template_part( 'includes/partials/content', $data['theme']['template_name'] ); ?>

	<footer id="colophon" class="bc-footer" role="contentinfo">
		<div class="container">
			<?php set_query_var( 'template_data', $data ); ?>
			<?php get_template_part('includes/partials/global', 'footer'); ?>

			<?php wp_footer(); ?>
		</div>
	</footer>
</body>
</html>