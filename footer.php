<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package greenforallseasons
 * @since greenforallseasons 1.0
 */
?>
	</div><!-- #main .site-main -->
	
	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="top">
			<div class="container inner">
				<h1 class="logo-container">
					<span class="tagline"><?php echo esc_attr( get_bloginfo( 'description', 'display' ) ); ?></span>
					<a class="icon icon-logo logo" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a>				
				</h1>		
					<?php wp_nav_menu( array( 'depth' => 1, 'theme_location' => 'secondary', 'menu_class' => 'clearfix menu secondary-navigation navigation', 'container' => '', )); ?>
					<?php include_module('social-links'); ?>	
					<div class="created-by">
						<span>
							<?php _e("Design by ", THEME_NAME); ?> <a href="http://www.parkandcube.com/" target="_blank"><?php _e('Park &amp; Cube', THEME_NAME) ?></a></span>
						<span>
							<?php _e("Site by ", THEME_NAME); ?> <a href="http://www.mindblownmedia.com" target="_blank"><?php _e('Mind Blown Media', THEME_NAME) ?></a>
						</span>
					</div>
					<div class="copyright">
						<?php _e("All rights reserved.", THEME_NAME); ?> &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>
					</div>						
			</div>
		</div>		
		<div class="bottom">
			<div class="container inner">
				<?php wp_nav_menu( array( 'depth' => 1, 'theme_location' => 'primary', 'menu_class' => 'clearfix menu footer-primary-navigation navigation', 'container' => '')); ?>
			</div>
		</div>
	</footer><!-- #footer .site-footer -->
</div><!-- #wrap -->

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5675377-17', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>