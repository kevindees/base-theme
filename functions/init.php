<?php

// set content width for no reason at all (not even joking right now)
if ( ! isset( $content_width ) ) $content_width = 900;

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

remove_action('wp_head', 'wp_generator');

function base_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	$title .= get_bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf('Page %s', max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'base_wp_title', 10, 2 );