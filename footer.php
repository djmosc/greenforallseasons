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
					<a class="logo" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a>
				</h1>

				<?php wp_nav_menu( array( 'depth' => 1, 'theme_location' => 'secondary', 'menu_class' => 'clearfix menu', 'container' => 'nav', 'container_class' => 'primary-navigation navigation' )); ?>
				<div class="clearfix"></div>
				<?php wp_nav_menu( array( 'depth' => 1, 'theme_location' => 'primary', 'depth' => 1, 'menu_class' => 'clearfix menu', 'container' => 'nav', 'container_class' => 'secondary-navigation navigation' )); ?>

			</div>
		</div>		
		<div class="bottom">
			<div class="container inner">
				
				<div class="span info right">
					<?php get_template_part('inc/social-links'); ?>
				</div>
				<div class="span details">
					<p>
						<span class="copyright">
							<?php _e("All rights reserved.", THEME_NAME); ?> &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>
						</span>
						<span class="by">
							&bull; <?php _e("Site by ", THEME_NAME); ?> <a href="http://www.mindblownmedia.com" target="_blank">Mind Blown Media</a>
						</span>
					</p>
				</div>
			</div>
		</div>
	</footer><!-- #footer .site-footer -->
</div><!-- #wrap -->

<?php wp_footer(); ?>

<script src="//s7.addthis.com/js/300/addthis_widget.js"></script>

</body>
</html>