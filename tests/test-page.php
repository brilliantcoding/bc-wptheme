<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Brilliantcoding
 */

$data = Array(
    'post_format' => 'article',
    'post_type' => 'post',
    'posts' => Array
        (
            0 => Array
                (
                    'id' => 252,
                    'title' => 'JavaOne and the forgotten Java edition',
                    'name' => 'javaone-forgotten-java-edition',
                    'content' => ' Wow! It\'s been a year since my last update. I was fairly happy with the original site. However running Wordpress on live servers in AWS proven to be a hassle. Even with Docker images, I ended up still needing to ssh into the server for various config or system tweaking. The one great thing that came out of this however is that I built out a Varnish-based edge server in front of it. This gave me the idea that really the edge server was the key part of this system that I had not developed.So back to the drawing board and a year later we are now on an OpenResty-based edge server and my content is still authored on Wordpress, but then static published to GitHub pages. If your curious you can find it here: https://github.com/brilliantcoding/bc-staticNext on my list is to write a few new posts and give this site an overhaul the visual design!Last update: October 15th 2017 ',
                    'permalink' => 'http://localhost:32771/2016/10/08/javaone-forgotten-java-edition/',
                    'tags_list' => '<a href="http://localhost:32771/tag/java/" rel="tag">Java</a>',
                    'published_date_ISO8601' => '2016-10-08T05:00:29+00:00',
                    'published_date' => 'October 8, 2016',
                    'modified_date_ISO8601' => '2016-10-15T17:14:29+00:00',
                    'modified_date' => 'October 15, 2016',
                    'author_posts_url' => 'http://localhost:32771/author/mjjacko/',
                    'author' => 'Matthew Jackowski',
                    'class_excerpt' => Array
                        (
                            0 => 'excerpt',
                            1 => 'post-252',
                            2 => 'post',
                            3 => 'type-post',
                            4 => 'status-publish',
                            5 => 'format-standard',
                            6 => 'hentry',
                            7 => 'category-programming-languages',
                            8 => 'tag-java'
                        )

                )

        ),

    'bloginfo' => Array
        (
            'charset' => 'UTF-8',
            'name' => 'Brilliant Coding Blog',
            'description' => 'Be Brilliant',
            'language_attributes' => 'lang="en-US" prefix="og: http://ogp.me/ns#"',
            'home_url' => 'http://localhost:32771/'
        ),

    'theme' => Array
        (
            'template_name' => 'single',
            'mod_gatrackingid' => null,
            'mod_disquisshortname' => null,
            'skip_text' => 'Skip to content',
            'copyright_html' => '© 2017 Matthew Jackowski',
            'powered_html' => 'Proudly powered by Wordpress'
        ),

    'template' => Array
        (
            'directory_uri' => 'http://localhost:32771/wp-content/themes/brilliantcodingalpha',
            'directory' => '/var/www/html/wp-content/themes/brilliantcodingalpha',
            'body_class' => 'post-template-default single single-post postid-252 single-format-standard'
        ),

    'paging' => Array
        (
            'title' => 'Posts navigation',
            'next_posts_text' => 'Older posts',
            'next_posts_link' => null,
            'previous_posts_text' => 'Newer posts',
            'previous_posts_link' => null
        ),

    'site' => Array
        (
            'icon_url' => 'http://localhost:32771/wp-content/uploads/2016/02/Brilliant-logo-v1-120x120.png'
        )

);

   
$data['wp_nav_menu'] = Array
        (
            'primary' => Array(
    (object) Array ( 'ID' => 10,
                            'post_author' => 1,
                            'post_date' => '2016-02-21 06:28:57',
                            'post_date_gmt' => '2016-02-21 06:28:57',
                            'post_content' => '',
                            'post_title' => '',
                            'post_excerpt' => '',
                            'post_status' => 'publish',
                            'comment_status' => 'closed',
                            'ping_status' => 'closed',
                            'post_password' => '',
                            'post_name' => 10,
                            'to_ping' => '',
                            'pinged' => '',
                            'post_modified' => '2016-02-21 06:28:57',
                            'post_modified_gmt' => '2016-02-21 06:28:57',
                            'post_content_filtered' => '',
                            'post_parent' => 0,
                            'guid' => 'http://192.168.99.100:32769/?p=10',
                            'menu_order' => 1,
                            'post_type' => 'nav_menu_item',
                            'post_mime_type' => '',
                            'comment_count' => 0,
                            'filter' => 'raw',
                            'db_id' => 10,
                            'menu_item_parent' => 0,
                            'object_id' => 8,
                            'object' => 'page',
                            'type' => 'post_type',
                            'type_label' => 'Page',
                            'url' => 'http://localhost:32771/now/',
                            'title' => 'Now',
                            'target' => '',
                            'attr_title' => '',
                            'description' => '',
                            'classes' => Array
                                (
                                    '0' => ''
                                ),

                            'xfn' => ''
    ),
     (object) Array ( 'ID' => 11,
                            'post_author' => 1,
                            'post_date' => '2016-02-21 06:28:57',
                            'post_date_gmt' => '2016-02-21 06:28:57',
                            'post_content' => '',
                            'post_title' => '',
                            'post_excerpt' => '',
                            'post_status' => 'publish',
                            'comment_status' => 'closed',
                            'ping_status' => 'closed',
                            'post_password' => '',
                            'post_name' => 10,
                            'to_ping' => '',
                            'pinged' => '',
                            'post_modified' => '2016-02-21 06:28:57',
                            'post_modified_gmt' => '2016-02-21 06:28:57',
                            'post_content_filtered' => '',
                            'post_parent' => 0,
                            'guid' => 'http://192.168.99.100:32769/?p=10',
                            'menu_order' => 1,
                            'post_type' => 'nav_menu_item',
                            'post_mime_type' => '',
                            'comment_count' => 0,
                            'filter' => 'raw',
                            'db_id' => 10,
                            'menu_item_parent' => 0,
                            'object_id' => 8,
                            'object' => 'page',
                            'type' => 'post_type',
                            'type_label' => 'Page',
                            'url' => 'http://localhost:32771/about/',
                            'title' => 'About',
                            'target' => '',
                            'attr_title' => '',
                            'description' => '',
                            'classes' => Array
                                (
                                    '0' => ''
                                ),

                            'xfn' => ''
    )
            ),
'social' => Array(
    (object) Array ( 'ID' => 14,
                            'post_author' => 1,
                            'post_date' => '2016-02-21 06:28:57',
                            'post_date_gmt' => '2016-02-21 06:28:57',
                            'post_content' => '',
                            'post_title' => 'Google+',
                            'post_excerpt' => '',
                            'post_status' => 'publish',
                            'comment_status' => 'closed',
                            'ping_status' => 'closed',
                            'post_password' => '',
                            'post_name' => 'google',
                            'to_ping' => '',
                            'pinged' => '',
                            'post_modified' => '2016-02-21 06:28:57',
                            'post_modified_gmt' => '2016-02-21 06:28:57',
                            'post_content_filtered' => '',
                            'post_parent' => 0,
                            'guid' => 'http://192.168.99.100:32769/?p=14',
                            'menu_order' => 1,
                            'post_type' => 'nav_menu_item',
                            'post_mime_type' => '',
                            'comment_count' => 0,
                            'filter' => 'raw',
                            'db_id' => 14,
                            'menu_item_parent' => 0,
                            'object_id' => 14,
                            'object' => 'custom',
                            'type' => 'custom',
                            'type_label' => 'Custom Link',
                            'url' => 'https://plus.google.com/101801437148778837314/',
                            'title' => 'Google+',
                            'target' => '',
                            'attr_title' => '',
                            'description' => '',
                            'classes' => Array
                                (
                                    '0' => 'fa',
                                    '1' => 'fa-github'
                                ),

                            'xfn' => ''
    ),
     (object) Array ( 'ID' => 15,
                            'post_author' => 1,
                            'post_date' => '2016-02-21 06:28:57',
                            'post_date_gmt' => '2016-02-21 06:28:57',
                            'post_content' => '',
                            'post_title' => 'Github',
                            'post_excerpt' => '',
                            'post_status' => 'publish',
                            'comment_status' => 'closed',
                            'ping_status' => 'closed',
                            'post_password' => '',
                            'post_name' => 'github',
                            'to_ping' => '',
                            'pinged' => '',
                            'post_modified' => '2016-02-21 06:28:57',
                            'post_modified_gmt' => '2016-02-21 06:28:57',
                            'post_content_filtered' => '',
                            'post_parent' => 0,
                            'guid' => 'http://192.168.99.100:32769/?p=15',
                            'menu_order' => 4,
                            'post_type' => 'nav_menu_item',
                            'post_mime_type' => '',
                            'comment_count' => 0,
                            'filter' => 'raw',
                            'db_id' => 15,
                            'menu_item_parent' => 0,
                            'object_id' => 8,
                            'object' => 'custom',
                            'type' => 'custom',
                            'type_label' => 'Custom link',
                            'url' => 'https://github.com/brilliantcoding',
                            'title' => 'Github',
                            'target' => '',
                            'attr_title' => '',
                            'description' => '',
                            'classes' => Array
                                (
                                    '0' => 'fa',
                                    '1' => 'fa-github'
                                ),

                            'xfn' => ''
    )
            )
            );

require_once('test-functions.php');
chdir('../brilliantcodingalpha/');

require_once('includes/enqueue-scripts.php');

set_query_var( 'template_data', $data );
get_template_part( 'includes/layout', 'default' );

?>