<?php get_header(); ?>
<section id="front-page">
	<div class="inner container">

		<div class="featured">
			<span class="label"><?php _e('Top Stories', 'greenforallseasons' );  ?></span>
			<div class="owl-carousel featured-carousel">
				<?php dynamic_sidebar('homepage_carousel'); ?>
			</div>
		</div>
		
		<?php include_module('categories'); ?>

		<div class="sidebar-container">
			<div class="sidebar-content">
				<h5 class="sidebar-content-title title"><?php _e("lastest Stories", THEME_NAME); ?></h5>
				<div class="homepage-widgets-top">
					<?php dynamic_sidebar('homepage_top'); ?>
				</div>
				<?php include_module('subscribe'); ?>
				<div class="homepage-widgets-bottom">
					<?php dynamic_sidebar('homepage_bottom'); ?>
				</div>
			</div>
			<?php get_sidebar(); ?>	
		</div>

		<?php include_module('featured-products'); ?>
	</div>
</section>
<?php get_footer(); ?>
