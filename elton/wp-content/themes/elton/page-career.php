<?php
/*
Template Name:Career
 */
?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<section class="career-page-banner" style="background: url(<?php the_field('career_page_banner_bg'); ?>) no-repeat;">
      <h2><?php the_field('career_page_banner_heading'); ?></h2>
      <?php the_field('career_page_banner_para'); ?>
</section>

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
    <section class="prof-section">
      <div class="container">
        <div class="prof">
          <img src="<?php the_field('prof_image_career_page_img'); ?>" alt="prof-img" />
          <div style="padding-top: 48px">
            <h3><?php the_field('prof_section_career_page_heading'); ?></h3>
            <?php the_field('prof_section_career_page_para'); ?>
            <a href="<?php the_field('prof_section_career_page_link'); ?>">Let's Connect</a>
          </div>
        </div>
      </div>
    </section>
    <?php wp_reset_query(); ?>
    <section class="recruitment-section">
      <div class="container">
        <div class="recruitment-div">
          <h3><?php the_field('recruitment_section_career_page_heading'); ?></h3>
          <?php the_field('recruitment_section_career_page_ul_li'); ?>
          <a href="<?php the_field('recruitment_section_career_page_link'); ?>">Let's Connect</a>
        </div>
        <img src="<?php the_field('recruitment_page_career_page_img'); ?>" alt="prof-img" />
      </div>
    </section>

<?php get_footer(); ?>
