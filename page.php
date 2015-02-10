<?php get_header(); ?>

<div id="page">
	<div class="inner container">
		<?php while ( have_posts() ) : the_post(); ?>

		<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), array(1160, 460, 'bfi_thumb' => true)); ?>
		<?php if($image): ?>
		<div class="featured-image">
			<img src="<?php echo $image[0]; ?>" />
		</div>
		<?php endif; ?>
		<div id="content">
			<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
				<header class="header post-header">
					<h1><?php the_title(); ?></h1>
					<div class="excerpt">
						<?php the_excerpt(); ?>
					</div>			
				</header>		
				<?php the_content(); ?>
				
				<?php get_template_part('inc/content'); ?>
			
			</article>
		</div>
	<?php endwhile; // end of the loop. ?>

</div><!-- #single -->
<?php get_footer(); ?>