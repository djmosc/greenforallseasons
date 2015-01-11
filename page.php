<?php get_header(); ?>

<div id="page">
	<div class="inner container">
		<?php while ( have_posts() ) : the_post(); ?>

		<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), array(1200, 450, 'bfi_thumb' => true)); ?>
		<?php if($image): ?>
		<div class="featured-image">
			<img src="<?php echo $image[0]; ?>" />
		</div>
		<?php endif; ?>
		<div class="sidebar-container">
			
			<div id="content">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<?php get_template_part('inc/content'); ?>
				
				</article>
			</div>

			<?php get_sidebar(); ?>	
		</div>
	<?php endwhile; // end of the loop. ?>

</div><!-- #single -->
<?php get_footer(); ?>