<?php
// define template dir/uri for easy access
define('THEME_DIR', get_template_directory_uri());
define('THEME_DIR_CHILD', get_stylesheet_directory_uri());

// RUNNING COMPOSER?
// require 'vendor/autoload.php';

include('functions/init.php');
include('functions/js_css.php');
include('functions/sidebars.php');
include('functions/menus.php');