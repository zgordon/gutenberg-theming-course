	wp_enqueue_style(
		'parent-style',
		get_template_directory_uri() . '/style.css'
	);

	wp_enqueue_style(
		'block-styles',
		get_stylesheet_directory_uri() . '/blocks.css'
	);

	wp_enqueue_script( 
		'fitvids-js', 
		get_stylesheet_directory_uri(). '/lib/fitvids.jquery.js', 
		array( 'jquery' )
	);

	wp_enqueue_script( 
		'gutenbergtheme-scripts-js', 
		get_stylesheet_directory_uri(). '/lib/scripts.js', 
		array( 'fitvids-js' )
	);
