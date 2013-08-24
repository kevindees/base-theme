<?php
// define template dir/uri for easy access
define('TEMP', get_template_directory_uri());
define('TEMP_CHILD', get_stylesheet_directory_uri());

// RUNNING COMPOSER?
// In the acpt package, once downloaded. Make set the config.php path
// for ACPT_FOLDER_NAME to vendor/robojuice/acpt in the framework.
// require 'vendor/autoload.php';

include('functions/init.php');
include('functions/js_css.php');
include('functions/sidebars.php');
include('functions/menus.php');