<?php

namespace Gutenberg_Courses\Theming;

// Enqueue CSS and JS
require_once( __DIR__ . '/lib/enqueue-assets.php' );

// Add Theme Support
require_once( __DIR__ . '/lib/theme-support.php' );

add_filter( 'body_class', __NAMESPACE__ . '\add_gutenberg_compatible_body_class' );
/**
 * Add custom class for Gutenberg Compatible template
 */
function add_gutenberg_compatible_body_class( $classes ) {
    if( is_page_template('page-full-width.php') )
        $classes[] = 'gutenberg-compatible-template';
    return $classes;
}