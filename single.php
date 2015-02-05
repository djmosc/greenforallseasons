<?php get_header(); ?>
<?php wp_enqueue_script('expander'); ?>
<div id="single">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php $featured_image_position = get_field('featured_image_position'); ?>
		<?php $thumbnail_id = get_post_thumbnail_id(); ?>
		<div class="sidebar-container">

			<div id="content">
				<?php $class = (has_post_thumbnail()) ? 'has-featured-image' : 'no-featured-image'; ?>

				<?php $class .= ' post-item ' . $featured_image_position . '-layout'; ?>
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

						<?php $image = wp_get_attachment_image_src($thumbnail_id, array(400, 530, 'bfi_thumb' => true)); ?>
						<div class="split-header">
							<?php if($image): ?>
								<div class="image">
									<a href="" class="" data-id="<?php echo $thumbnail_id; ?>">
										<img src="<?php echo $image[0]; ?>" />
									</a>
								</div>
							<?php endif; ?>	
							<div class="head">
								<h3 class="title post-title"><a><?php the_title(); ?></a></h3>
								<div class="author">
									<div class="image circle">
										<img src="http://lorempixel.com/100/100" />
									</div>
									<span class="name"><?php _e('Words by ','greenforallseasons'); ?><?php the_author(); ?></span>
								</div>
							</div>
						</div>

					<?php endif; ?>
					<div class="inner container">						
						<header class="header post-header">
							<?php  if($featured_image_position == 'top') : ?>
								<div class="author">
									<div class="image circle">
										<img src="http://lorempixel.com/100/100" />
									</div>
									<span class="name"><?php _e('Words by ','greenforallseasons'); ?><?php the_author(); ?></span>
								</div>

								<h3 class="title post-title"><a><?php the_title(); ?></a></h3>
							<?php endif; ?>
							<?php if (get_the_excerpt()): ?>
								<div class="excerpt">
									<?php the_excerpt(); ?>
								</div>
							<?php endif; ?>
						</header>
						<div class="content">
							<?php the_content(); ?>
							<div class="written-by">
								<?php _e('Written by '); ?><?php the_author_link(); ?>
							</div>
						</div>						
					</div><!-- inner -->
				</article>

				<?php include_module('post-header', array(
					'title' => get_the_title(),
					''
				)); ?>

				<?php include_module('post-share'); ?>
	
				<?php include_module('post-navigation'); ?>

				<?php include_module('post-comments'); ?>
		
				<?php include_module('post-more-in-category'); ?>				
			</div>
			<?php get_sidebar(); ?>
		</div>
	<?php endwhile; // end of the loop. ?>
	<?php //include_module('related-posts'); ?>
</div><!-- #single -->

<?php get_footer(); ?>
