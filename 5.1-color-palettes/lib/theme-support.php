<?php

namespace Gutenberg_Courses\Theming;

add_action( 'after_setup_theme', __NAMESPACE__ . '\theme_support' );
/**
 * Enqueue theme CSS and JavaScript .
 */
function theme_support() {

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add support for custom color palettes
    add_theme_support( 'editor-color-palette', [
        [
            'name'  => esc_html__( 'JS Yellow', 'gutenbergtheme' ),
            'slug'  => 'yellow',
            'color' => '#f7b733',
        ],
        [
            'name'  => esc_html__( 'Dark', 'gutenbergtheme' ),
            'slug'  => 'dark',
            'color' => '#222222',
        ],
        [
            'name'  => esc_html__( 'Blue', 'gutenbergtheme' ),
            'slug'  => 'blue',
            'color' => '#1AABDA',
        ],
        [
            'name'  => esc_html__( 'White', 'gutenbergtheme' ),
            'slug'  => 'white',
            'color' => '#ffffff',
        ]
    ]);

}
