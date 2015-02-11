<?php
/*
Template Name: About us
*/
get_header(); ?>


<div id="page">
	<div class="inner container">
		<?php while ( have_posts() ) : the_post(); ?>
		<div id="content">
			<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>

				<?php 
					$image_size = array('width' => 1160, 'height' => 460);
					$image = get_post_thumbnail_src($image_size);					
					?>
				
					<?php include_module('single-post-header', array(
						'title' => get_the_title(),
						'image_url' => $image,
						'excerpt' => get_the_excerpt(),
					)); ?>		
				<div class="content">
					<?php the_content(); ?>
				</div>
				<div class="categories">
					<div class="widgets">
						<?php dynamic_sidebar('about-page'); ?>
					</div>
				</div>
				<div class="content">
					<?php gravity_form(1, true, true, true, '', true, 12); ?>
				</div>
			</article>
		</div>
	<?php endwhile; // end of the loop. ?>

</div><!-- #single -->
<?php get_footer(); ?>