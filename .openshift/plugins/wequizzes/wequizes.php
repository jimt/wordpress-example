<?php
/**
 * Plugin Name: WEquizzes
 * Plugin URI: https://gitorious.org/wikieducator/wequizzeswp
 * Description: Support WikiEducator quizzing
 * Version: 0.1.0
 * Author: Jim Tittsler
 * Author URI: http://WikiEducator.org/User:JimTittsler
 * License: MIT
 */

defined('ABSPATH') or die("This is a Wordpress plugin.");

function wequizzes_add($posts) {
	if (empty($posts)) return $posts;

	foreach ($posts as $post) {
		if (stripos($post->post_content, 'class="weQuiz') !== false) {
			wp_enqueue_style( 'wequiz',
				plugin_dir_url( __FILE__ ) . '/css/WEquizzes.css');
			wp_enqueue_script( 'wenotes',
				plugin_dir_url( __FILE__ ) . '/js/WEquizzes.js',
				array( 'jquery' ),
				'0.0.1',
				true );
		}
	}
	return $posts;
}
add_filter('the_posts', 'wequizzes_add');
