<?php

namespace Gutenberg_Courses\Theming;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_theme_assets' );
/**
 * Enqueue theme CSS and JavaScript .
 */
function enqueue_theme_assets() {
	
	wp_enqueue_style(
		'parent-style',
		get_template_directory_uri() . '/style.css'
	);

}

