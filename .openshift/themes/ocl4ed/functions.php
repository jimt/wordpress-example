<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
	wp_enqueue_style( 'parent-style',
	       	get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'wikieducator',
		get_stylesheet_directory_uri() . '/js/wikieducator.js',
		array( 'jquery' ),
		'0.0.1',
		true );
}

