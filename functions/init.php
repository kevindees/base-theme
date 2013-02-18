<?php

// set content width for no reason at all (not even joking right now)
if ( ! isset( $content_width ) ) $content_width = 900;

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

remove_action('wp_head', 'wp_generator');