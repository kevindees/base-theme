<?php
add_action('wp_enqueue_scripts', 'add_scripts_styles');

function add_scripts_styles() {
	if(!is_admin()) :
		// JS
                wp_enqueue_script( 'modernizr', THEME_DIR . '/js/libs/modernizr.min.js', array(), '1.0' ); // shiv and svg
		wp_enqueue_script("jquery");
                wp_enqueue_script( 'main-plugins', THEME_DIR . '/js/plugins.js', array('jquery'), '1.0', true );
                wp_enqueue_script( 'main-script', THEME_DIR . '/js/script.js', array('jquery'), '1.0', true );

		// CSS
		wp_enqueue_style( 'main-style', THEME_DIR . '/style.css' );
		wp_enqueue_style( 'custom-style', THEME_DIR . '/css/style.css' );

		// WP
		wp_enqueue_script( 'comment-reply');
	endif;
}
