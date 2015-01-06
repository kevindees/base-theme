<?php
add_action('wp_enqueue_scripts', 'add_scripts_styles');

function add_scripts_styles() {
	global $wp_styles;

	if(!is_admin()) :
		// JS
		wp_register_script( 'modernizr', THEME_DIR . '/js/libs/modernizr.min.js', array(), '1.0' );
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script("jquery");

		wp_register_script( 'main-plugins', THEME_DIR . '/js/plugins.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'main-plugins' );

		wp_register_script( 'main-script', THEME_DIR . '/js/script.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'main-script' );

		// CSS
		wp_enqueue_style( 'comments-style', THEME_DIR . '/css/comments.css' );
		wp_enqueue_style( 'main-style', THEME_DIR . '/style.css' );
		wp_enqueue_style( 'custom-style', THEME_DIR . '/css/style.css' );

		// IE CSS
		//wp_enqueue_style( 'main-ie', THEME_DIR . '/css/ie.css', array( 'main-style' ) );
		//$wp_styles->add_data( 'main-ie', 'conditional', 'lt IE 9' );

		// WP
		wp_enqueue_script( 'comment-reply');
	endif;
}
