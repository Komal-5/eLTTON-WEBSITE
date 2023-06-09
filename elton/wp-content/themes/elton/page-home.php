<?php
/*
Template Name:Home
 */
?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<section class="banner-section" style="background: url(<?php the_field('where_talent_image'); ?>) no-repeat;">
      <div class="container">
        <div class="banner-cont">
          <h2><?php the_field('where_talent_heading'); ?></h2>
          <?php the_field('we_make_para'); ?>
          <a href="<?php the_field('build_your_team_link'); ?>">Build Your Team</a>
        </div>
      </div>
    </section>
    <?php wp_reset_query(); ?>

	<section class="we-inspire">
      <div class="container">
        <img src="<?php the_field('back_image'); ?>" alt="31-img" class="img-31" />
        <img src="<?php the_field('rear_image'); ?>" alt="30-img" class="img-30" />
        <div class="we-inspire-div">
          <h2><?php the_field('we_inspire_heading'); ?></h2>
          <?php the_field('we_inspire_para'); ?>
          <a href="<?php the_field('know_more_link'); ?>">Know More</a>
        </div>
      </div>
      <div class="we-are-ready">
        <img src="<?php the_field('we_assist_image'); ?>" alt="girl-img" />
        <h3><?php the_field('we_assist_heading'); ?></h3>
      </div>
    </section>
    <?php wp_reset_query(); ?>

    <!-- featured jobs section -->
    <section class="featured-job-section">
      <div class="colorGrey">
        <h2>Featured Jobs</h2>
      </div>
      <!-- featured-jobs-page -->
      <div class="container">
        <div class="featured-jobs">
        <?php
		            $args = array(
		              'post_type' => 'featured-jobs-page',
		              'numberposts' => -1,
		              'posts_per_page' => -1,
		               
		              
		              'order' => 'ASC'
		          );
		            $myquery = new WP_Query($args);
		              if($myquery->have_posts()) :
		                  while($myquery->have_posts()) :
		                     $myquery->the_post();
		          ?>
          <div class="job">
          <?php the_post_thumbnail('full'); ?>
            <div>
              <h3> <?php the_title(); ?> </h3>
              <?php the_content(); ?>
              <a href="<?php the_permalink() ?>">View Details</a>
            </div>
          </div>
          <?php endwhile; endif; ?>
          
        </div>
      </div>
    </section>
    <?php wp_reset_query(); ?>
	<!-- most peope choose <section></section> -->
    <section class="people-choose-section">
      <div class="container">
        <img src="<?php the_field('most_people_like_image'); ?>" alt="people-choose-img" />
        <div class="choose-mayo">
          <h2><?php the_field('most_people_like_heading'); ?></h2>
          <?php the_field('most_people_like_about'); ?>
          <div class="professional-div">
            <i class="material-icons" style="font-size: 22px">&#xe876;</i>
            <div class="professional">
              <h3><?php the_field('professional_award_heading'); ?></h3>
              <?php the_field('professional_award_about'); ?>
            </div>
          </div>
          <div class="awards-div">
            <i class="material-icons" style="font-size: 22px">&#xe876;</i>
            <div class="awards">
              <h3><?php the_field('awards_winner_heading'); ?></h3>
              <?php the_field('awards_winner_about'); ?>
            </div>
          </div>
        </div>
      </div>
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
    <?php wp_reset_query(); ?>
    <!-- contact us section -->
    <section class="contact-us-section" style="background: url(<?php the_field('contact_us_bg'); ?>) no-repeat;">
      <div class="container">
      <?php the_field('trusted_heading'); ?>
        <a href="<?php the_field('contact_us_link'); ?>">Contact Us</a>
      </div>
    </section>

    <!-- blog <section></section> -->
    <section class="blog-section">
      <h2>Blogs</h2>
      <div class="container">
        <div class="blogs">
        <?php
		            $args = array(
		              'post_type' => 'blogs-page',
		              'numberposts' => 2,
		              'posts_per_page' => 3,
		               
		              
		              'order' => 'ASC'
		          );
		            $myquery = new WP_Query($args);
		              if($myquery->have_posts()) :
		                  while($myquery->have_posts()) :
		                     $myquery->the_post();
		          ?>
          <div class="blog">
            <?php the_post_thumbnail('full'); ?>
            <div>
              <h3><?php the_title(); ?></h3>
              <hr />
              <?php the_content(); ?>
              <a href="<?php the_permalink() ?>"><i class="material-icons">&#xe8e4;</i></a>
            </div>
          </div>
          <?php endwhile; endif; ?>
          </div>
          <?php wp_reset_query(); ?>
        <div class="looking-for">
          <div class="looking-for-talent">
            <div>
              <h3><?php the_field('looking_for_talent_heading_'); ?></h3>
              <?php the_field('looking_for_talent_about'); ?>
              <a href="<?php the_field('learn_more_common'); ?>">Learn More</a>
            </div>
            <img
              src="<?php the_field('looking_talent_image'); ?>"
              alt="looking-for-talent-img"
            />
          </div>
          <div class="looking-for-jobs">
            <div>
              <h3><?php the_field('looking_for_job_heading'); ?></h3>
              <?php the_field('looking_for_job_about'); ?>
              <a href="<?php the_field('learn_more_common'); ?>">Learn More</a>
            </div>
            <img
              src="<?php the_field('looking_for_job_img'); ?>"
              alt="looking-for-jobs-img"
            />
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
