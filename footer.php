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
	
	<div class="related-posts">
		<div class="container">
			<div class="widget-header">
				<h5 class="widget-title">You Might Also Like</h5>
				<a href="">see all archive »</a>
			</div>
			<ul class="posts">
				<li>
					<div class="post-item">
						<div class="top-category">
							<span class="category-name green-label">Bite</span>
						</div>					
						<div class="category">
							<span class="name category-name green-label">Bites</span>
						</div>
						<div class="image">
							<a href="<?php the_permalink(); ?>">
								<img src="http://lorempixel.com/310/310" />
							</a>
						</div>
						<header class="header post-header">
							<div class="author">
								<div class="image circle">
									<img src="http://lorempixel.com/100/100" />
								</div>
								<span class="name">This is a very long name</span>
							</div>

							<h3 class="title post-title"><a>This is the post title and it is very long</a></h3>
							<div class="excerpt">
								<p>Lorem ipsum dolor sit amet, dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco...</p>
							</div>
							<a class="primary-btn"><?php _e("Read More", THEME_NAME); ?></a>
						</header>
					</div>					
				</li>
				<li>
					<div class="post-item">
						<div class="top-category">
							<span class="category-name green-label">Bite</span>
						</div>					
						<div class="category">
							<span class="name category-name green-label">Recipe</span>
						</div>
						<div class="image">
							<a href="<?php the_permalink(); ?>">
								<img src="http://lorempixel.com/310/310" />
							</a>
						</div>
						<header class="header post-header">
							<div class="author">
								<div class="image circle">
									<img src="http://lorempixel.com/100/100" />
								</div>
								<span class="name">This is a very long name</span>
							</div>

							<h3 class="title post-title"><a>This is the post title and it is very long</a></h3>
							<div class="excerpt">
								<p>Lorem ipsum dolor sit amet, dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco...</p>
							</div>
							<a class="primary-btn"><?php _e("Read More", THEME_NAME); ?></a>
						</header>
					</div>					
				</li>
				<li>
					<div class="post-item">
						<div class="top-category">
							<span class="category-name green-label">Bite</span>
						</div>					
						<div class="category">
							<span class="name category-name green-label">Bites</span>
						</div>
						<div class="image">
							<a href="<?php the_permalink(); ?>">
								<img src="http://lorempixel.com/310/310" />
							</a>
						</div>
						<header class="header post-header">
							<div class="author">
								<div class="image circle">
									<img src="http://lorempixel.com/100/100" />
								</div>
								<span class="name">This is a very long name</span>
							</div>

							<h3 class="title post-title"><a>This is the post title and it is very long</a></h3>
							<div class="excerpt">
								<p>Lorem ipsum dolor sit amet, dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco...</p>
							</div>
							<a class="primary-btn"><?php _e("Read More", THEME_NAME); ?></a>
						</header>
					</div>					
				</li>				
			</ul>			
		</div>
	</div>	
	
	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="top">
			<div class="container inner">
				<h1 class="logo-container">
					<span class="tagline"><?php echo esc_attr( get_bloginfo( 'description', 'display' ) ); ?></span>
					<a class="icon icon-logo" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a>				
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