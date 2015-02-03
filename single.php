<?php get_header(); ?>
<?php wp_enqueue_script('expander'); ?>
<div id="single">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php $featured_image_position = get_field('featured_image_position'); ?>
		<?php $thumbnail_id = get_post_thumbnail_id(); ?>
		<div class="sidebar-container">

			<div id="content">
				<?php $class = (has_post_thumbnail()) ? 'has-featured-image' : 'no-featured-image'; ?>
				<?php $class .= ' post-item'; ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>

					<div class="category">
						<span class="name category-name green-label">Bites</span>
					</div>
					<?php  if($featured_image_position == 'top') : ?>
						<?php $image = wp_get_attachment_image_src($thumbnail_id, array(800, 530, 'bfi_thumb' => true)); ?>
						<?php if($image): ?>
							<div class="image">
								<a href="" class="" data-id="<?php echo $thumbnail_id; ?>">
									<img src="<?php echo $image[0]; ?>" />
								</a>
							</div>
						<?php endif; ?>
					<?php else: ?>
						<?php $image = wp_get_attachment_image_src($thumbnail_id, array(800, 530, 'bfi_thumb' => true)); ?>
						<?php if($image): ?>
							<div class="image">
								<a href="" class="" data-id="<?php echo $thumbnail_id; ?>">
									<img src="<?php echo $image[0]; ?>" />
								</a>
							</div>
						<?php endif; ?>						
					<?php endif; ?>
					<div class="inner container">						
						<header class="header post-header">
							<div class="author">
								<div class="image circle">
									<img src="http://lorempixel.com/100/100" />
								</div>
								<span class="name"><?php _e('Words by ','greenforallseasons'); ?><?php the_author(); ?></span>
							</div>

							<h3 class="title post-title"><a><?php the_title(); ?></a></h3>
							<?php if (get_the_excerpt()): ?>
								<div class="excerpt">
									<?php the_excerpt(); ?>
								</div>
							<?php endif; ?>
							<div class="content">
								<?php the_content(); ?>
								<div class="written-by">
									<?php _e('Written by '); ?><?php the_author_link(); ?>
								</div>
							</div>
						</header>
					</div><!-- inner -->
				</article>

				<?php get_template_part('inc/modules/post-share'); ?>
	
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
