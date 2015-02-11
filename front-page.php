<?php get_header(); ?>
<section id="front-page">
	<div class="inner container">

		<div class="owl-carousel featured-carousel">
			<?php for($i = 0; $i < 5; $i++) : ?>
			<article <?php post_class('item'); ?>>
				<?php include_module('post-slide', array(
					'title' => 'Nourish banana &amp; pomegranate pancakes',
					'excerpt' => "In eget dolor augue. In vehicula, ex in efficitur scelerisque, nibh justo imperdiet magna, eu efficitur mauris orci ullamcorper lectus.",
					'url' => '#',
					'image_url' => 'http://lorempixel.com/840/470',
					'author' => array(
						'name' => 'victoria - anne bull',
						'image_url' => 'http://lorempixel.com/100/100'
					),
					'category' => array(
						'name' => "Bites"
					),
					'date' => 'the date'
				)); ?>
			</article>
			<?php endfor; ?>
		</div>
		
		<?php include_module('categories'); ?>

		<div class="sidebar-container">
			<div class="sidebar-content">		
				<div class="homepage-widgets-top">
					<?php dynamic_sidebar('homepage_top'); ?>
				</div>
				<?php include_module('subscribe'); ?>
				<div class="homepage-widgets-bottom">
					<?php dynamic_sidebar('homepage_sidebar'); ?>
				</div>
			</div>
			<?php get_sidebar(); ?>	
		</div>
	</div>
</section>
<?php get_footer(); ?>
