<?php
register_sidebar(array(
	'name' => 'Header Sidebar',
  'description' => 'Widgets in this area will be shown in the header.',
	'id' => 'header-sidebar',
  'class' => 'header-sidebar',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
));

register_sidebar(array(
	'name' => 'Main Sidebar',
  'description' => 'Widgets in this area will be shown on the content area.',
	'id' => 'main-sidebar',
  'class' => 'main-sidebar',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
));

register_sidebar(array(
	'name' => 'Footer Sidebar',
  'description' => 'Widgets in this area will be shown in the footer.',
	'id' => 'footer-sidebar',
  'class' => 'footer-sidebar',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
));