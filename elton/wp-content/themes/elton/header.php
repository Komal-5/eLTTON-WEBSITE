<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,700;1,600&family=Oswald&family=Poppins:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" />
    <title>Document</title>
  </head>




<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


	<header >
	<div class="contact-header">
        <div class="container">
		<?php if ( is_active_sidebar( 'header-phone' ) ) : ?>
	                    <?php dynamic_sidebar( 'header-phone' ); ?>
	                <?php endif; ?>
					
          <div class="icons-header">
		  <?php if ( is_active_sidebar( 'header-icons' ) ) : ?>
	                    <?php dynamic_sidebar( 'header-icons' ); ?>
	                <?php endif; ?>
          </div>
        </div>
      </div>

      <section>
        <div class="container">
          <h1 class="logo"><a href="#">Sitename</a></h1>
          <nav>
		  <?php wp_nav_menu( array( 'menu_class' => 'navigation', 'container' => false, 'theme_location' => 'primary' ) ); ?>
          </nav>
        </div>
      </section>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
