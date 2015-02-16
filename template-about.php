<?php
/*
 * Template Name: About us
 */
?>
<?php get_header(); ?>

<div id="page-about">
	<div class="inner container">
		<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php include_module('single-post-header', array(
				'title' => get_the_title(),
				'image_url' => get_post_thumbnail_src(array('width' => 1160, 'height' => 460)),
				'excerpt' => get_the_excerpt(),
			)); ?>		
			<div class="page-content">
				<?php the_content(); ?>
			</div>
			<?php include_module('categories'); ?>
			<?php gravity_form(1, true, true, true, '', true, 12); ?>
			<?php include_module('subscribe'); ?>
		</article>
	<?php endwhile; // end of the loop. ?>
	</div>

</div><!-- #single -->
<?php get_footer(); ?>