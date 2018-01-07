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
                    'content' => 'JavaOne is one of the biggest annual conferences to discuss Java technologies.  It was inaugurated in 1996 by Sun Microsystems, and now is run during Oracle OpenWorld after the 2010 acquisition of Sun by Oracle Corporation.  This year there was more excitement than usual around the JavaOne event, usually the event focuses on the technical topics and does not offer much in the way of product announcements.  People were hoping for something different this year.
 <a href="http://localhost:32771/2016/10/08/javaone-forgotten-java-edition/#more-252" class="more-link">Continue reading &gt;</a>',
                    'permalink' => 'http://localhost:32771/2016/10/08/javaone-forgotten-java-edition/',
                    'tags_list' => '<a href="http://localhost:32771/tag/java/" rel="tag">Java</a>',
                    'published_date_ISO8601' => '2016-10-08T05:00:29+00:00',
                    'published_date' => 'October 8, 2016',
                    'modified_date_ISO8601' => '2016-10-15T17:14:29+00:00',
                    'modified_date' => 'October 15, 2016',
                    'author_posts_url' => 'http://localhost:32771/author/mjjacko/',
                    'author' => 'Matthew Jackowski',
                    'class_excerpt' => 'excerpt'
                ),

            1 => Array
                (
                    'id' => 223,
                    'title' => 'Build a Static Website Using Python, Pelican, and Docker',
                    'content' => 'In this example I\'ll show you how you can build a static website for your open source project on <a href="https://pages.github.com/" target="_blank">GitHub pages</a> using the combination of <a href="https://www.python.org/" target="_blank">Python</a> (language), <a href="http://blog.getpelican.com/" target="_blank">Pelican</a> (generator), and <a href="https://www.docker.com/" target="_blank">Docker</a> (environment).  For this type of task, speed is important.  I want to avoid spending time thinking about designing a blog system or implementing a content management system.  My goal with this approach, is to focus on the content, and avoid worrying about installation, setup, or infrastructure. <a href="http://localhost:32771/2016/06/14/website-using-python-pelican-docker/#more-223" class="more-link">Continue reading &gt;</a>',
                    'permalink' => 'http://localhost:32771/2016/06/14/website-using-python-pelican-docker/',
                    'tags_list' => '<a href="http://localhost:32771/tag/python/" rel="tag">Python</a>',
                    'published_date_ISO8601' => '2016-06-14T07:23:06+00:00',
                    'published_date' => 'June 14, 2016',
                    'modified_date_ISO8601' => '2016-10-07T21:28:10+00:00',
                    'modified_date' => 'October 7, 2016',
                    'author_posts_url' => 'http://localhost:32771/author/mjjacko/',
                    'author' => 'Matthew Jackowski',
                    'class_excerpt' => 'excerpt'
                ),

            2 => Array
                (
                    'id' => 179,
                    'title' => 'List of Amazing Tech Talks on Software Development',
                    'content' => 'Building computer software is all about ideas. I find quite a bit of inspiration from listening to presentations and tech talks from other people in software development. You should be warned that some people might find the topics below fairly controversial!  But I feel that\'s good.  To me, if a presentation makes you pause to think and reflect, it is always worth the time to stop and listen.
 <a href="http://localhost:32771/2016/04/18/list-of-amazing-tech-talks-on-software-development/#more-179" class="more-link">Continue reading &gt;</a>',
                    'permalink' => 'http://localhost:32771/2016/04/18/list-of-amazing-tech-talks-on-software-development/',
                    'tags_list' => null,
                    'published_date_ISO8601' => '2016-04-18T06:24:39+00:00',
                    'published_date' => 'April 18, 2016',
                    'modified_date_ISO8601' => '2016-04-18T06:54:59+00:00',
                    'modified_date' => 'April 18, 2016',
                    'author_posts_url' => 'http://localhost:32771/author/mjjacko/',
                    'author' => 'Matthew Jackowski',
                    'class_excerpt' => 'excerpt'
                ),

            3 => Array
                (
                    'id' => 147,
                    'title' => 'Refactoring to Factory Function in PHP',
                    'content' => '<p style="text-align: left;">This is a quick example to show a simple PHP refactoring for object creation.  Specifically our goal is to use static functions to better encapsulate our object constructor calls.</p>
 <a href="http://localhost:32771/2016/04/04/refactoring-to-factory-methods-in-php/#more-147" class="more-link">Continue reading &gt;</a>',
                    'permalink' => 'http://localhost:32771/2016/04/04/refactoring-to-factory-methods-in-php/',
                    'tags_list' => '<a href="http://localhost:32771/tag/php/" rel="tag">PHP</a>',
                    'published_date_ISO8601' => '2016-04-04T05:49:52+00:00',
                    'published_date' => 'April 4, 2016',
                    'modified_date_ISO8601' => '2016-04-25T06:20:34+00:00',
                    'modified_date' => 'April 25, 2016',
                    'author_posts_url' => 'http://localhost:32771/author/mjjacko/',
                    'author' => 'Matthew Jackowski',
                    'class_excerpt' => 'excerpt'
                ),

            4 => Array
                (
                    'id' => 109,
                    'title' => 'Looking ahead: JVM Programming Languages',
                    'content' => '<img class="wp-image-119 alignright" style="border: 1px solid #000;" src="https://brilliantcoding.com/wp-content/uploads/2016/03/1e91b7f.jpg" alt="White laptop with cup of coffee isolated on white" width="388" height="222" />

In this article I take a look ahead at the future of four programming languages; Java, Scala, Clojure and Kotlin. All four of these languages are designed to run on the Java Virtual Machine ( JVM ), which is supported on practically every computer operating system. Most recently, JVM programming languages have become popular choices for building cloud applications.
 <a href="http://localhost:32771/2016/03/24/jvm-programming-languages/#more-109" class="more-link">Continue reading &gt;</a>',
                    'permalink' => 'http://localhost:32771/2016/03/24/jvm-programming-languages/',
                    'tags_list' => '<a href="http://localhost:32771/tag/clojure/" rel="tag">Clojure</a>, <a href="http://localhost:32771/tag/java/" rel="tag">Java</a>, <a href="http://localhost:32771/tag/kotlin/" rel="tag">Kotlin</a>, <a href="http://localhost:32771/tag/scala/" rel="tag">Scala</a>',
                    'published_date_ISO8601' => '2016-03-24T04:51:09+00:00',
                    'published_date' => 'March 24, 2016',
                    'modified_date_ISO8601' => '2016-04-10T21:08:30+00:00',
                    'modified_date' => 'April 10, 2016',
                    'author_posts_url' => 'http://localhost:32771/author/mjjacko/',
                    'author' => 'Matthew Jackowski',
                    'class_excerpt' => 'excerpt'
                ),

            5 => Array
                (
                    'id' => 62,
                    'title' => 'Refactoring a For-Loop to a Lambda in Java',
                    'content' => 'This is a quick example to show refactoring a \'for-loop\' over a List of objects by using a Lambda function instead.
 <a href="http://localhost:32771/2015/12/28/refactoring-a-for-loop-to-a-lambda-in-java/#more-62" class="more-link">Continue reading &gt;</a>',
                    'permalink' => 'http://localhost:32771/2015/12/28/refactoring-a-for-loop-to-a-lambda-in-java/',
                    'tags_list' => '<a href="http://localhost:32771/tag/java/" rel="tag">Java</a>',
                    'published_date_ISO8601' => '2015-12-28T07:47:49+00:00',
                    'published_date' => 'December 28, 2015',
                    'modified_date_ISO8601' => '2016-04-25T06:21:22+00:00',
                    'modified_date' => 'April 25, 2016',
                    'author_posts_url' => 'http://localhost:32771/author/mjjacko/',
                    'author' => 'Matthew Jackowski',
                    'class_excerpt' => 'excerpt'
                )
        ),

    'bloginfo' => Array
        (
            'charset' => 'UTF-8',
            'name' => 'Brilliant Coding Blog',
            'description' => 'Be Brilliant',
            'language_attributes' => 'lang="en-US"',
            'home_url' => '/'
        ),

    'theme' => Array
        (
            'template_name' => 'index',
            'mod_gatrackingid' => null,
            'skip_text' => 'Skip to content',
            'copyright_html' => '© 2017 Matthew Jackowski',
            'powered_html' => 'Proudly powered by Wordpress'
        ),

    'template' => Array
        (
            'directory_uri' => 'http://localhost:32771/wp-content/themes/brilliantcodingalpha',
            'body_class' => 'home blog'
        ),

    'site' => Array
        (
            'icon_url' => 'http://localhost:8000/assets/brand/Brilliant-logo-120x120.png'
        ),
     'wp_nav_menu' => Array
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
            )
            ),
     'paging' => Array
     	(
     		'title' => 'Posts navigation',
			'next_posts_text' => 'Older posts',
			'next_posts_link' => '#',
			'previous_posts_text' => 'Newer posts',
			'previous_posts_link' => '#'
     	)
);

require_once('test-functions.php');
chdir('../brilliantcodingalpha/');

require_once('includes/enqueue-scripts.php');

set_query_var( 'template_data', $data );
get_template_part( 'includes/layout', 'default' );

?>