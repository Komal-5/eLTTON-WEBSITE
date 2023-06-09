<?php
/*
Template Name:Services
 */
?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<section class="blogs-banner" style="background: url(<?php the_field('blog_page_banner_section_img'); ?>) no-repeat;">
      <h2><?php the_field('blog_page_banner_section_heading'); ?></h2>
      <?php the_field('blog_page_banner_section_para'); ?>
</section>

<section class="blog-page-section">
      <div class="container">
        <div class="blogs">
        <?php
		            $args = array(
		              'post_type' => 'blogs-page',
		              'numberposts' => -1,
		              'posts_per_page' => -1,
		               
		              
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
      </div>
    </section>
<?php get_footer(); ?>
