<?php get_template_part( 'head', 'index' ); ?>

<header>
	<?php wp_nav_menu( array( 'theme_location' => 'primary')); ?>
	<?php if(is_active_sidebar('header-sidebar')) dynamic_sidebar( 'header-sidebar' ); ?>
</header>