<?php
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