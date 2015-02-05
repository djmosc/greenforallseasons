<?php get_header(); ?>
<?php wp_enqueue_script('expander'); ?>
<div id="single">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php $featured_image_position = get_field('featured_image_position'); ?>
		<?php $author_img_url = get_avatar_url ( get_the_author_meta('ID'), $size = '50' ); ?>
		<?php $category = get_post_category(); ?>

		<?php $image_size = ($featured_image_position == 'top') ? array('width' => 800, 'height' => 530) : array('width' => 400, 'height' => 530); ?>

			<?php $image = get_post_thumbnail_src($image_size); ?>

		<div class="sidebar-container">

			<div id="content">
				<?php $class = (has_post_thumbnail()) ? 'has-featured-image' : 'no-featured-image'; ?>

				<?php $class .= ' post-item ' . $featured_image_position . '-layout'; ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>

					<?php include_module('single-post-header', array(
						'title' => get_the_title(),
						'image_url' => $image,
						'author' => array(
							'name' => 'Words by ' .get_the_author(),
							'image_url' => $author_img_url,
						),
						'excerpt' => get_the_excerpt(),
						'category' => array(
								'name' => $category->name,
							) 
					)); ?>


					<div class="post-content">
						<?php the_content(); ?>
						<div class="written-by">
							<?php _e('Written by '); ?><?php the_author_link(); ?>
						</div>
					</div>						
				</article>

				<?php include_module('post-share'); ?>
	
				<?php get_template_part('inc/modules/post-navigation'); ?>

				<?php get_template_part('inc/modules/post-comments'); ?>
		
				<?php get_template_part('inc/modules/post-more-in-category'); ?>				
			</div>
			<?php get_sidebar(); ?>
		</div>
	<?php endwhile; // end of the loop. ?>
	<?php //get_template_part('inc/modules/related-posts'); ?>
</div><!-- #single -->

<?php get_footer(); ?>
