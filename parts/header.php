<?php get_template_part( 'parts/head' ); ?>

<header>
  <?php wp_nav_menu( array( 'theme_location' => 'primary')); ?>
  <?php get_template_part('parts/sidebars/header'); ?>
</header>
