<?php

namespace Gutenberg_Courses\Theming;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_theme_assets' );
/**
 * Enqueue theme CSS and JavaScript on Frontend only.
 */
function enqueue_theme_assets() {

	wp_enqueue_style(
		'parent-style',
		get_template_directory_uri() . '/style.css'
	);

	wp_enqueue_style(
		'gbtheming-style',
		get_stylesheet_uri(),
		['parent-style'],
        time() // Change for production
	);

	wp_enqueue_script(
		'gbtheming-js',
		get_stylesheet_directory_uri() . '/js/theme.js',
		[ 'jquery' ],
		time() // Change for production
	);

}

// add_action( 'enqueue_block_assets', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue theme CSS and JavaScript in Editor and Frontend.
 */
function enqueue_assets() {
	
	wp_enqueue_style(
		'gbtheming-blocks-css',
		get_stylesheet_directory_uri() . '/css/blocks.css',
		null,
        time() // Change for production
	);

	wp_enqueue_script(
		'gbtheming-blocks-js',
		get_stylesheet_directory_uri() . '/js/blocks.js',
		[ 'wp-i18n', 'wp-element', 'wp-blocks', 'wp-components' ],
		time() // Change for production
	);
}

// add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_block_editor_assets' );
/**
 * Enqueue theme CSS and JavaScript in Editor only.
 */
function enqueue_block_editor_assets() {

	wp_enqueue_style(
		'gbtheming-editor-css',
		get_stylesheet_directory_uri() . '/css/editor.css',
		null,
        time() // Change for production
    );

	wp_enqueue_script(
		'gbtheming-editor-js',
		get_stylesheet_directory_uri() . '/js/editor.js',
		[ 'wp-i18n', 'wp-element', 'wp-blocks', 'wp-components' ],
		time() // Change for production
	);
}