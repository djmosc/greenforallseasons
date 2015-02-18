<?php global $post; ?>
<?php get_header(); ?>
<div id="page">
	<div class="inner container">
		<?php while ( have_posts() ) : the_post(); ?>
		<div id="content">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php 
					$image_size = array('width' => 1160, 'height' => 460);
					$image = get_post_thumbnail_src($image_size);					
					?>
				
					<?php include_module('single-post-header', array(
						'title' => get_the_title(),
						'image_url' => $image,
						'excerpt' => $post->post_excerpt,
					)); ?>		
				<div class="page-content">
					<?php the_content(); ?>
				</div>
			
			</article>
		</div>
	<?php endwhile; // end of the loop. ?>

</div><!-- #single -->
<?php get_footer(); ?>