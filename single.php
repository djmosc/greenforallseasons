<?php get_header(); ?>
<?php wp_enqueue_script('expander'); ?>
<div id="single">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php $featured_image_position = get_field('featured_image_position'); ?>
		<div class="sidebar-container">

			<div id="content">
				<?php $class = (has_post_thumbnail()) ? 'has-featured-image' : 'no-featured-image'; ?>

				<?php $class .= ' post-item ' . $featured_image_position . '-layout'; ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>

					<?php include_module('post-item', array(
						'title' => 'Nourish banana &amp; pomegranate pancakes',
						'excerpt' => "In eget dolor augue. In vehicula, ex in efficitur scelerisque, nibh justo imperdiet magna, eu efficitur mauris orci ullamcorper lectus.",
						'image_url' => 'http://lorempixel.com/600/600',
						'author' => array(
							'name' => 'victoria - anne bull',
							'image_url' => 'http://lorempixel.com/100/100'
						),
						'category' => array(
							'name' => "Bites"
						)
					)); ?>

					<?php //get_template_part('inc/modules/post-header'); ?>
						
						<div class="post-content">
							<header class="header">
								<?php if (get_the_excerpt()): ?>
									<div class="excerpt">
										<?php the_excerpt(); ?>
									</div>
								<?php endif; ?>
							</header>						
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
