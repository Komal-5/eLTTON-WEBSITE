<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer>
		<div class="footer">
        <div class="container">
          <div class="footer-cont">
            <div class="logo-footer">
              <h1 class="logo-1"><a href="#">Sitename</a></h1>
              <p style="margin-bottom: 10px">
                We are always pleased to hear from high-calibre individuals &
                organisations
              </p>
              <div class="footericons">
			  <?php if ( is_active_sidebar( 'footer-icons' ) ) : ?>
	                    <?php dynamic_sidebar( 'footer-icons' ); ?>
	                <?php endif; ?>
              </div>
            </div>
            <div class="ourservices-footer">
              <h3 style="margin-bottom: 10px">Our Services</h3>
              <ul>
                <li>Scaling Business & Start-ups</li>
                <li>Permanent & Temporary Recruitment</li>
                <li>Talent & Executive Search</li>
              </ul>
            </div>
            <div class="quick-links">
              <h3 style="margin-bottom: 10px">Quick Links</h3>
              <?php wp_nav_menu( array( 'menu_class' => 'navigation', 'container' => false, 'theme_location' => 'quick-links' ) ); ?>
            </div>
            <div class="contact-us">
              <h3 style="margin-bottom: 10px">Contact Us</h3>
              <?php if ( is_active_sidebar( 'footer-contact' ) ) : ?>
	                    <?php dynamic_sidebar( 'footer-contact' ); ?>
	                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>
          Copyright &copy; 2023 Elton Mayo’s. All rights reserved.Design &
          Developed by:<span>Web Desk Pty Ltd.</span>
        </p>
      </div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
