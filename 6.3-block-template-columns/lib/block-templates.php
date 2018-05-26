<?php

namespace Gutenberg_Courses\Theming;

add_action( 'register_post_type_args', __NAMESPACE__ . '\block_templates', 20, 2 );
/**
 * Enqueue theme CSS and JavaScript .
 */
function block_templates( $args, $post_type ) {

	if ( 'post' === $post_type) {
		$args[ 'template' ] = [
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
			],
		];

	} elseif ( 'page' === $post_type ) {
	
		$args[ 'template' ] = [
			[
				'core/cover-image', [
					'align' => 'full',
				]
			],
			[
				'core/heading', [
					'placeholder' => __( 'Subheadline', 'gutenbergtheme' )
				]
			],
			[
				'core/columns', [
					'align' => 'wide'
				], 
				[
					[
						'core/paragraph', [
							'layout' => 'column-1',
							'placeholder' => 'Ipsum tempor amet incididunt consectetur sunt labore nulla veniam. Ipsum tempor amet incididunt consectetur sunt labore nulla veniam.'
						]
					],					
					[
						'core/quote', [
							'layout' => 'column-2'
						]
					],
				]
			],
			[
				'core/separator'
			],			
			[
				'core/heading', [
					'placeholder' => __( 'Main Content Heading', 'gutenbergtheme' )
				]
			],			
			[
				'core/paragraph', [
					'placeholder' => 'Ea sit et sit sit nulla pariatur quis cupidatat dolor elit adipisicing voluptate est deserunt. Irure exercitation cupidatat do amet et ad anim tempor ex. Eiusmod labore nostrud laborum irure nostrud id excepteur. Cupidatat laboris est et ullamco fugiat dolor officia cupidatat id quis et nisi do. Eiusmod quis minim ipsum sit aliquip ad adipisicing sint deserunt aute cillum.', 'gutenbergtheme'			
				]
			]
		];
	}

	return $args;	
}

