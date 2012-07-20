<?php
// define template dir/uri
define('TEMP', get_template_directory_uri());

// set content width for no reason at all (not even joking right now)
if ( ! isset( $content_width ) ) $content_width = 900;

// setup theme support
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

// add JS the right way
add_action('wp_enqueue_scripts', 'add_site_scripts');
function add_site_scripts() {
	if(!is_admin()) :
		// Moderizer
		wp_register_script( 'modernizr', TEMP . '/js/libs/modernizr-2.5.3.min.js', array(), '1.0' );
		wp_enqueue_script( 'modernizr' );
		// jQuery
		wp_enqueue_script("jquery");
		// plug-ins
		wp_register_script( 'plug_ins', TEMP . '/js/plugins.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'plug_ins' );
		// site-specific
		wp_register_script( 'site_script', TEMP . '/js/script.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'site_script' );
	endif;

	if ( is_singular() ) wp_enqueue_script( 'comment-reply');
}

// register sidebars
register_sidebar(array(
  'name' => 'Right Hand Sidebar',
  'id' => 'right-sidebar',
  'description' => 'Widgets in this area will be shown on the right-hand side.',
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));

register_sidebar(array(
  'name' => 'Footer Sidebar',
  'id' => 'footer-sidebar',
  'description' => 'Widgets in this area will be shown in the footer.',
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));

// comments
comments_template();