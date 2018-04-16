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
			'content' => 'JavaOne is one of the biggest annual conferences to discuss Java technologies.  It was inaugurated in 1996 by Sun Microsystems, and now is run during Oracle OpenWorld after the 2010 acquisition of Sun by Oracle Corporation.  This year there was more excitement than usual around the JavaOne event, usually the event focuses on the technical topics and does not offer much in the way of product announcements.  People were hoping for something different this year.
<span id="more-252"></span>
<div class="alignright" style="font-size:65%">
<img src="https://brilliantcoding.com/wp-content/uploads/2016/10/8057216330_5138be27ba_b.jpg" style="border: 1px solid #000;"/><p>JavaOne Keynote with Gosling in 2012<br/>
<a target="_blank" href="https://flickr.com/photos/steveonjava/8057216330">flickr photo by steveonjava shared under a Creative Commons</a></p></div>
This year there was hope that Oracle would present the roadmap for <a target="_blank" href="https://en.wikipedia.org/wiki/Java_Platform,_Enterprise_Edition">Java EE</a>.  Java EE, which was once known more commonly as "J2EE", is an extension of the Java language that provides an API for object-relational mapping, distributed and multi-tier architectures, and web services.  It hasn\'t seen a release since version 7 all the way back in 2013.  This gap in progress has <a target="_blank" href="http://arstechnica.com/information-technology/2016/07/not-dead-yet-oracle-promises-big-plans-for-java-ee/">lead people to speculate if it was dead.</a> Many businesses still actively use and rely on Java EE, so pundits aside, it has remained alive.

At JavaOne, Oracle did present a new roadmap and pledged <a target="_blank" href="https://www.infoq.com/news/2016/09/java-ee-delayed-2017">renewed commitment to the Java EE platform</a>, but progress is still very slow.  Partly due to the lack of news from Oracle and overall slow progress, the Java EE community has started splintering. Specifically, two of the most notable factions include <a target="_blank" href="https://javaee-guardians.io/">Java EE Guardians</a>, led by former Oracle Java EE evangelist <a target="_blank" href="http://blog.rahmannet.net/">Reza Rahman</a>, and <a target="_blank" href="https://microprofile.io/">Microprofile.io</a>, which has included participation from Red Hat and IBM.  Unfortunately the JavaOne announcement didn\'t appear to be a step towards unifying the Java EE community.  There still is a significant rift between Oracle and the Java EE Guardians.  After JavaOne, both groups posted their own <a target="_blank" href="https://javaee-guardians.io/java-ee-adoption-surveys/">community surveys</a> and appear to be working on differing sets of priorities.

<blockquote>Does an announcement about the future of Java EE excite you? - Drop your comments in the discussion below.</blockquote>

Another key aspect of Java EE is its modularity. So it was also significant that a new modularity platform was on the horizon at JavaOne this year.  Java modularity was proposed back in 2014 under the name <a target="_blank" href="http://openjdk.java.net/projects/jigsaw/">"project Jigsaw"</a> and it appears that Java 9 will include <a target="_blank" href="http://www.javaworld.com/article/2878952/java-platform/modularity-in-java-9.html">improved modularity</a> when it is released next year.  A modern, JPMS-based Java EE version still remains in the far distant future.  And while this is really what many people would like to see today, they will need to wait quite awhile.

<img class="alignleft" src="https://brilliantcoding.com/wp-content/uploads/2016/10/deltaspike-logo.jpg" />One key Java EE project to keep an eye on is <a target="_blank" href="https://deltaspike.apache.org/">Apache DeltaSpike</a>.  Deltaspike has continued to evolve independently mainly thanks to a small dedicated community.  Currently it relies on modularity though CDI, an older approach introduced in Java 6 EE, they could adopt a more modern approach using JPMS after Java 9 is released.  I think this might happen especially if Oracle misses roadmap milestones for Java EE project.

One frequent buzzword this year at JavaOne was the term "microservice".  A microservice is an independently deployable service component, which is a familiar concept if you are a long time Java EE developer.  Unfortunately there is alot of confusion around how a microservice architecture actually fits with Java EE.  <a target="_blank" href="http://www.mammatustech.com/java-microservices-architecture">I think Rick Hightower expressed it the best when he said:</a>
<quote><i>"If you are deploying a WAR file to a Java EE container then you are probably not doing microservice development. If you have more than one WAR file in the container or an EAR file, then you are definitely not doing microservice development. If you are deploying your service as an AMI or docker container and your microservice has a main method, then you might be writing a microservice."</i></quote>

Does an announcement about the future of Java EE excite you?  I guess it depends on your perspective.  If you have been using it for years and maintain thousands of lines of code that depend on it, this would be pretty exciting indeed.',
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
				8 => 'tag-java',
			),

		),

	),

	'bloginfo' => Array
	(
		'charset' => 'UTF-8',
		'name' => 'Brilliant Coding Blog',
		'description' => 'Be Brilliant',
		'language_attributes' => 'lang="en-US" prefix="og: http://ogp.me/ns#"',
		'home_url' => 'http://localhost:32771/',
	),

	'theme' => Array
	(
		'template_name' => 'single',
		'mod_gatrackingid' => null,
		'mod_disquisshortname' => null,
		'skip_text' => 'Skip to content',
		'copyright_html' => '© 2017 Matthew Jackowski',
		'powered_html' => 'Proudly powered by Wordpress',
	),

	'template' => Array
	(
		'directory_uri' => 'http://localhost:32771/wp-content/themes/brilliantcodingalpha',
		'directory' => '/var/www/html/wp-content/themes/brilliantcodingalpha',
		'body_class' => 'post-template-default single single-post postid-252 single-format-standard',
	),

	'paging' => Array
	(
		'title' => 'Posts navigation',
		'next_posts_text' => 'Older posts',
		'next_posts_link' => null,
		'previous_posts_text' => 'Newer posts',
		'previous_posts_link' => null,
	),

	'site' => Array
	(
		'icon_url' => 'http://localhost:32771/wp-content/uploads/2016/02/Brilliant-logo-v1-120x120.png',
	),

);

$data['wp_nav_menu'] = Array
	(
	'primary' => Array(
		(object) Array('ID' => 10,
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
				'0' => '',
			),

			'xfn' => '',
		),
		(object) Array('ID' => 11,
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
				'0' => '',
			),

			'xfn' => '',
		),
	),
	'social' => Array(
		(object) Array('ID' => 14,
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
				'0' => '',
			),

			'xfn' => '',
		),
		(object) Array('ID' => 15,
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
				'0' => '',
			),

			'xfn' => '',
		),
	),

	'categories' => Array(
		(object) Array('ID' => 14,
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
				'0' => '',
			),

			'xfn' => '',
		),
		(object) Array('ID' => 15,
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
				'0' => '',
			),

			'xfn' => '',
		),
	),
);

require_once 'test-functions.php';
chdir('../brilliantcodingalpha/');

require_once 'includes/enqueue-scripts.php';

set_query_var('template_data', $data);
get_template_part('includes/layout', 'default');

?>