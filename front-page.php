<?php get_header(); ?>
<section id="front-page">
	<div class="inner container">

		<div class="owl-carousel featured-carousel">
			<?php dynamic_sidebar('homepage_carousel'); ?>
		</div>
		
		<?php include_module('categories'); ?>

		<div class="sidebar-container">
			<div class="sidebar-content">		
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
	</div>
</section>
<?php get_footer(); ?>
