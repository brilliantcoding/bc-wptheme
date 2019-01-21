<?php
/**
 * Load Wordpress data into theme vars
 *
 * Instead of having calls to Wordpress functions throughout the theme
 * we load all Wordpress content into theme "vars"
 * These vars are passed to the partial view files in order to render the pages.
 *
 * @package Brilliantcoding
 */

$post_format = (get_post_format()) ? get_post_format() : 'article';

$data = array(
	'post_format' => $post_format,
	'post_type' => get_post_type(),
	'posts' => array(),
	'bloginfo' => array(),
	'theme' => array(),
);

$data['bloginfo']['charset'] = get_bloginfo('charset');
$data['bloginfo']['name'] = get_bloginfo('name');
$data['bloginfo']['description'] = get_bloginfo('description');
$data['bloginfo']['language_attributes'] = get_language_attributes();
$data['bloginfo']['home_url'] = esc_url(home_url('/'));

$data['template']['directory_uri'] = get_template_directory_uri();
$data['template']['directory'] = get_template_directory();
$data['template']['body_class'] = join(' ', get_body_class());

$data['theme']['mod_gatrackingid'] = get_theme_mod('gatrackingid');
$data['theme']['skip_text'] = __('Skip to content', 'brilliantcoding');
$data['theme']['copyright_html'] = __('© 2018 Matthew Jackowski');
$data['theme']['powered_html'] = __('- Powered by the <a href="https://github.com/brilliantcoding/bc-wptheme">Brilliant Coding Wordpress Theme</a>');

// $data['yoast']['breadcrumb'] = ( function_exists('yoast_breadcrumb')? yoast_breadcrumb('<p id="breadcrumbs">','</p>'):'';

$data['categories'] = array_reduce(get_categories('orderby=count&order=DESC'), function ($c, $i) {
	$item = (array) $i;
	$carry = $c;
	$item['url'] = get_category_link($item['cat_ID']);
	array_push($carry, $item);
	return $carry;
}, array());

$menu_name = 'primary'; // specify custom menu slug
if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
	$menu = wp_get_nav_menu_object($locations[$menu_name]);
	$data['wp_nav_menu'][$menu_name] = wp_get_nav_menu_items($menu->term_id);
}

$menu_name = 'social'; // specify custom menu slug
if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
	$menu = wp_get_nav_menu_object($locations[$menu_name]);
	$data['wp_nav_menu'][$menu_name] = wp_get_nav_menu_items($menu->term_id);
}

$menu_name = 'categories'; // specify custom menu slug
if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
	$menu = wp_get_nav_menu_object($locations[$menu_name]);
	$data['wp_nav_menu'][$menu_name] = wp_get_nav_menu_items($menu->term_id);
}

if ($GLOBALS['wp_query']->max_num_pages > 1) {
	$data['paging']['is_displayed'] = true;
	$data['paging']['title'] = __('Posts navigation', 'brilliantcoding');
	$data['paging']['next_posts_text'] = __('Older posts', 'brilliantcoding');
	$data['paging']['next_posts_link'] = get_next_posts_link();
	$data['paging']['previous_posts_text'] = __('Newer posts', 'brilliantcoding');
	$data['paging']['previous_posts_link'] = get_previous_posts_link();
	$data['paging']['previous_post_link'] = get_previous_post_link();
	$data['paging']['next_post_link'] = get_next_post_link();

}

$data['site']['icon_url'] = get_site_icon_url(60);
$data['search']['query'] = get_search_query();

if (is_category()) {
	$data['archive']['title'] = single_cat_title("", false);

} elseif (is_tag()) {
	$data['archive']['title'] = single_tag_title("", false);

} elseif (is_author()) {
	$data['archive']['title'] = get_the_author();

} elseif (is_day()) {
	$data['archive']['title'] = get_the_date();

} elseif (is_month()) {
	$data['archive']['title'] = get_the_date(__('F Y', 'brilliantcoding'));

} elseif (is_year()) {
	$data['archive']['title'] = get_the_date(__('Y', 'brilliantcoding'));

} elseif (is_tax('post_format', 'post-format-aside')) {
	$data['archive']['title'] = __('Asides', 'brilliantcoding');

} elseif (is_tax('post_format', 'post-format-gallery')) {
	$data['archive']['title'] = __('Galleries', 'brilliantcoding');

} elseif (is_tax('post_format', 'post-format-image')) {
	$data['archive']['title'] = __('Images', 'brilliantcoding');

} elseif (is_tax('post_format', 'post-format-video')) {
	$data['archive']['title'] = __('Videos', 'brilliantcoding');

} elseif (is_tax('post_format', 'post-format-quote')) {
	$data['archive']['title'] = __('Quotes', 'brilliantcoding');

} elseif (is_tax('post_format', 'post-format-link')) {
	$data['archive']['title'] = __('Links', 'brilliantcoding');

} elseif (is_tax('post_format', 'post-format-status')) {
	$data['archive']['title'] = __('Statuses', 'brilliantcoding');

} elseif (is_tax('post_format', 'post-format-audio')) {
	$data['archive']['title'] = __('Audios', 'brilliantcoding');

} elseif (is_tax('post_format', 'post-format-chat')) {
	$data['archive']['title'] = __('Chats', 'brilliantcoding');

} else {
	$data['archive']['title'] = __('Archives', 'brilliantcoding');
}

$data['archive']['description'] = term_description();

if (have_posts()):
	while (have_posts()): the_post();
		$post = array(
			'id' => get_the_ID(),
			'title' => get_the_title(),
			'name' => get_post_field('post_name', get_the_ID()),
			'content' => apply_filters('the_content', get_the_content('Continue reading &gt;')),
			'excerpt' => get_the_excerpt(),
			'permalink' => esc_url(get_permalink()),
			'tags_list' => get_the_tag_list('', ', '),
			'published_date_ISO8601' => esc_attr(get_the_date('c')),
			'published_date' => esc_html(get_the_date()),
			'modified_date_ISO8601' => esc_attr(get_the_modified_date('c')),
			'modified_date' => esc_html(get_the_modified_date()),
			'author_posts_url' => esc_url(get_author_posts_url(get_the_author_meta('ID'))),
			'author' => esc_html(get_the_author()),
			'class_excerpt' => get_post_class('excerpt'),
		);

		$post['tinyurl'] = brilliantcoding_tiny_url(get_permalink());
		$data['posts'][] = $post;
	endwhile;
else:
	echo wpautop('Sorry, no posts were found');
endif;
