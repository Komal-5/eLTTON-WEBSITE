<?php
/*
Template Name:Why us
 */
?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<section class="why-us-page-banner" style="background: url(<?php the_field('why_us_banner_section_image_bg'); ?>) no-repeat;">
      <h2><?php the_field('why_us_banner_section_heading'); ?></h2>
      <?php the_field('why_us_banner_section_para'); ?>
</section>
<?php wp_reset_query(); ?>
<section class="people">
      <div class="container">
        <div class="andy">
          <img src="<?php the_field('why_us_people_image-1'); ?>" alt="andy-img" />
          <div>
            <h3><?php the_field('why_us_people_name-1'); ?></h3>
            <?php the_field('why_us_people_about-1'); ?>
          </div>
        </div>

        <div class="fady">
          <img src="<?php the_field('why_us_people_image-2'); ?>" alt="fady-img" />
          <div>
            <h3><?php the_field('why_us_people_name-2'); ?></h3>
            <?php the_field('why_us_people_about-2'); ?>
          </div>
        </div>
      </div>
    </section>

    <section class="vision-section">
      <div class="container">
        <div class="why-us-connect">
          <img src="<?php the_field('why_us_page_lets_connect_image'); ?>" alt="mission-img" />
          <?php the_field('why_us_page_lets_connect_para'); ?>
          <div>
            <a href="<?php the_field('why_us_lets_connect_link'); ?>">Let's Connect</a>
          </div>
        </div>
        <div class="vision">
          <h2><?php the_field('our_vision_heading'); ?></h2>
          <?php the_field('our_vision_para'); ?>
          <h2><?php the_field('our_mission_heading'); ?></h2>
          <?php the_field('our_mission_para'); ?>
          <h2><?php the_field('our_values_heading'); ?></h2>
          <?php the_field('our_values_about'); ?>
        </div>
      </div>
    </section>
    
<?php get_footer(); ?>
