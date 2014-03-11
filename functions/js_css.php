<?php
add_action('wp_enqueue_scripts', 'add_scripts_styles');

function add_scripts_styles() {
	global $wp_styles;

	if(!is_admin()) :
		// JS
		wp_register_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr.min.js', array(), '1.0' );
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script("jquery");

		wp_register_script( 'main-plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'main-plugins' );

		wp_register_script( 'main-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'main-script' );

		// CSS
		wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/style.css' );

		// IE CSS
		//wp_enqueue_style( 'main-ie', get_template_directory_uri() . '/css/ie.css', array( 'main-style' ) );
		//$wp_styles->add_data( 'main-ie', 'conditional', 'lt IE 9' );

		// WP
		wp_enqueue_script( 'comment-reply');
	endif;
}