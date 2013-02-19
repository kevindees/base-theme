<footer>
	<?php if(is_active_sidebar('footer-sidebar')) dynamic_sidebar( 'footer-sidebar' ); ?>

	<?php wp_nav_menu( array( 'theme_location' => 'footer')); ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>