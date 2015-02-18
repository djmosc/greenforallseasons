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
				<div class="mid">
					<div class="nav">
						<?php wp_nav_menu( array( 'depth' => 1, 'theme_location' => 'secondary', 'menu_class' => 'clearfix menu', 'container' => 'nav', 'container_class' => 'secondary-navigation navigation' )); ?>
					</div>
					<div class="copyright">
						<?php _e("All rights reserved.", THEME_NAME); ?> &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>
					</div>
				</div>			
				<div class="last">
					<?php include_module('social-links'); ?>	
					<div class="by">
						<span>
							<?php _e("Design by ", THEME_NAME); ?> <a href="http://www.parkandcube.com/" target="_blank">Park &amp; Cube</a></span>
						<span>
							<?php _e("Site by ", THEME_NAME); ?> <a href="http://www.mindblownmedia.com" target="_blank">Mind Blown Media</a>
						</span>
					</div>
				</div>			
			</div>
		</div>		
		<div class="bottom">
			<div class="container inner">
				<?php wp_nav_menu( array( 'depth' => 1, 'theme_location' => 'primary', 'menu_class' => 'clearfix menu', 'container' => 'nav', 'container_class' => 'footer-primary-navigation navigation' )); ?>
			</div>
		</div>
	</footer><!-- #footer .site-footer -->
</div><!-- #wrap -->

<?php wp_footer(); ?>
</body>
</html>