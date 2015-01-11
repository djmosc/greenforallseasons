<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package overthemoonblog
 * @since overthemoonblog 1.0
 */
?>
	</div><!-- #main .site-main -->
	<?php
	//$images = get_instagram_images(10, 1523373132);
	$images = get_instagram_images(10, 1170070486);

	if( !empty($images) ):
	?>
	<div id="instagram">
		<header class="header">
			<h2 class="title"><?php _e("Instagram", THEME_NAME); ?></h2>
			<a class="white-btn" href="http://instagram.com/otmblog" target="_blank"><i class="icon-instagram"></i> @otmblog</a>
		</header>
		
		<div class="images clearfix">
			<?php foreach($images as $image): ?>
			<a class="image overlay-btn" href="<?php echo $image['link']; ?>" target="_blank">
				<img src="<?php echo $image['url']; ?>" />
			</a>
			<?php endforeach; ?>
		</div>
	</div>
	<?php endif; ?>
	
	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="top">
			<div class="container inner">
				<h1 class="logo-container">
					<a class="logo" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a>
				</h1>

				<?php wp_nav_menu( array( 'depth' => 1, 'theme_location' => 'footer_primary', 'menu_class' => 'clearfix menu', 'container' => 'nav', 'container_class' => 'primary-navigation navigation' )); ?>
				<div class="clearfix"></div>
				<?php wp_nav_menu( array( 'depth' => 1, 'theme_location' => 'footer_secondary', 'menu_class' => 'clearfix menu', 'container' => 'nav', 'container_class' => 'secondary-navigation navigation' )); ?>

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