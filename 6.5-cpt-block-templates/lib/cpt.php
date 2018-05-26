<?php

namespace Gutenberg_Courses\Theming;

add_action( 'init', __NAMESPACE__ . '\custom_post_types' );
/**
 * Create Custom Post Types
 */
function custom_post_types() {
    register_post_type( 'case_studies',
      [
        'labels' => [
          'name' => __( 'Case Studies' ),
          'singular_name' => __( 'Case Study' )
        ],
        'public' => true,
        'rewrite' => [ 'slug' => 'case-studies' ],
        'show_in_rest' => true,
		'rest_base' => 'case-studies',		
        'template' => [
			[
				'core/heading', [
					'placeholder' => __( 'Subheadline', 'gutenbergtheme' )
				]
			],
			[
				'core/image', [
					'align' => 'right',
				]
			],			
			[
				'core/paragraph', [
					'align' => 'left',
					'placeholder' => __( 'Incididunt aliquip culpa dolore amet sunt voluptate excepteur aliqua deserunt in cillum ullamco est sit.', 'gutenbergtheme' )
				]
			],
			[
				'core/paragraph', [
					'align' => 'left',
					'placeholder' => __( 'Incididunt aliquip culpa dolore amet sunt voluptate excepteur aliqua deserunt in cillum ullamco est sit.', 'gutenbergtheme' )
				]
			],
			[
				'core/separator'
			],			
			[
				'core/cover-image', [
					'align' => 'full',
				]
			],
			[
				'core/heading', [
					'placeholder' => __( 'Another Subheadline', 'gutenbergtheme' )
				]
			],			
			[
				'core/text-columns', [
					'columns' => '3'					
				]
			],
			[
				'core/paragraph', [					
					'placeholder' => __( 'Irure minim velit dolore sint tempor officia. Cupidatat enim dolore sunt enim pariatur et minim eiusmod Lorem id exercitation reprehenderit. In deserunt voluptate commodo officia adipisicing adipisicing voluptate culpa magna fugiat ullamco. Proident excepteur excepteur pariatur irure voluptate quis in est aute nulla cillum quis consectetur. Reprehenderit eiusmod commodo excepteur ipsum laboris voluptate.', 'gutenbergtheme' )
				]
			]
		]    
      ]
    );
  }
