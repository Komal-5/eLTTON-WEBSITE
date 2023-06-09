<?php
/*
Template Name:Services
 */
?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<section class="service-banner" style="background: url(<?php the_field('services_page_banner_bg'); ?>) no-repeat;">
      <h2><?php the_field('services_page_banner_heading'); ?></h2>
      <?php the_field('services_page_banner_para'); ?>
    </section>

    <!-- services-page -->
    <section class="ourServices">
      <h2>Our Services</h2>
      <div class="container">
      <?php
		            $args = array(
		              'post_type' => 'services-page',
		              'numberposts' => -1,
		              'posts_per_page' => -1,
		               
		              
		              'order' => 'ASC'
		          );
		            $myquery = new WP_Query($args);
		              if($myquery->have_posts()) :
		                  while($myquery->have_posts()) :
		                     $myquery->the_post();
		          ?>
        <div class="services">
        <?php the_post_thumbnail('full'); ?>
          <div class="contentPart">
            <h4><?php the_title(); ?></h4>
            <?php the_content(); ?>
          </div>

          <a href="<?php the_permalink() ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/roundArrow.png" alt="" /></a>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </section>
<?php get_footer(); ?>
