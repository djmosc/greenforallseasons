<?php get_header(); ?>
<div id="attachment" class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="sidebar-container">

			<div class="sidebar-content">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php 
					$image_size = array('width' => 800);
					$image_url = get_post_thumbnail_src($image_size);
					?>
				
					<?php include_module('single-post-header', array(
						'title' => get_the_title(),
						'image_url' => $image_url,
						'excerpt' => get_the_excerpt()
					)); ?>

				</article>

			</div>
			<?php get_sidebar(); ?>
		</div>
	<?php endwhile; // end of the loop. ?>
</div><!-- #attachment -->
<?php get_footer(); ?>