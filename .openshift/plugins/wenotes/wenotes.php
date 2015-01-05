<?php
/**
 * Plugin Name: WEnotes
 * Plugin URI: https://gitorious.org/wikieducator/wenoteswp
 * Description: Adds WikiEducator WEnotes display to a Wordpress page
 * Version: 0.1.0
 * Author: Jim Tittsler
 * Author URI: http://WikiEducator.org/User:JimTittsler
 * License: MIT
 */

defined('ABSPATH') or die("This is a Wordpress plugin.");

function wenotes_add($posts) {
	if (empty($posts)) return $posts;

	foreach ($posts as $post) {
		if (stripos($post->post_content, 'class="WEnotes') !== false) {
			wp_enqueue_style( 'wenotes',
				plugin_dir_url( __FILE__ ) . '/css/WEnotes.css');
			wp_enqueue_script( 'wenotes',
				plugin_dir_url( __FILE__ ) . '/js/wenotes.js',
				array( 'jquery' ),
				'0.0.1',
				true );
		}
	}
	return $posts;
}
add_filter('the_posts', 'wenotes_add');
