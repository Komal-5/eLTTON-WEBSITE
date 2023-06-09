<?php
/*
Template Name:Connect Us
 */
?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<section class="connect-page-banner" style="background: url(<?php the_field('connect_us_banner_page_bg'); ?>) no-repeat;">
      <h2><?php the_field('connect_us_banner_page_heading'); ?></h2>
      <?php the_field('connect_us_banner_page_para'); ?>
</section>
<?php wp_reset_query(); ?>
<section class="contactForum">
    <div class="container">
    <div class="question">
    <h2> <?php the_field('have_any_question_heading'); ?></h2>
    <?php the_field('have_any_question_para'); ?>
    </div>
    <div class="contactForm">
    <?php the_field('contact_form'); ?>
    </div>
</div>
</section>


<?php wp_reset_query(); ?>
<section class="map" style="background: url(<?php the_field('lets_connect_map_bg_image'); ?>) no-repeat">
      <div class="container">
        <div class="contacts-div">
          <div class="contacts">
          <?php if ( is_active_sidebar( 'connect-us-address' ) ) : ?>
	                    <?php dynamic_sidebar( 'connect-us-address' ); ?>
	                <?php endif; ?>
          </div>
          <div class="contacts">
          <?php if ( is_active_sidebar( 'connect-us-phone' ) ) : ?>
	                    <?php dynamic_sidebar( 'connect-us-phone' ); ?>
	                <?php endif; ?>
            
          </div>
          <div class="contacts">
          <?php if ( is_active_sidebar( 'connect-us-email' ) ) : ?>
	                    <?php dynamic_sidebar( 'connect-us-email' ); ?>
	                <?php endif; ?>
            
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
