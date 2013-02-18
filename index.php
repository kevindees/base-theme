<!doctype html>
<!--[if lt IE 8]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <meta name="viewport" content="width=device-width">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <header>

  </header>
  <div role="main">

    <section class="main-content">
    <?php while(have_posts()) : the_post() ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1> 
        <?php the_content(); ?>
        <div class="tags"><?php the_tags(); ?></div>
        <?php wp_link_pages(); ?>
	      <?php comments_template( '', true ); ?>
      </div>
    <?php endwhile; ?>
    <?php posts_nav_link(); ?>
    </section>

    <section class="right-content">
      <?php dynamic_sidebar( 'footer-sidebar' ); ?>
    </section>

  </div>
  <footer>
    <?php dynamic_sidebar( 'footer-sidebar' ); ?>
  </footer>

  <?php wp_footer(); ?>

</body>
</html>