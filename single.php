<?php get_header(); ?>
<?php wp_enqueue_script('expander'); ?>
<div id="single">
	<div class="inner container">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php $featured_image_position = get_field('featured_image_position'); ?>
		<?php $thumbnail_id = get_post_thumbnail_id(); ?>
		<?php  if($featured_image_position == 'top') : ?>
		<?php $image = wp_get_attachment_image_src($thumbnail_id, array(1200, 600, 'bfi_thumb' => true)); ?>
		<?php if($image): ?>
		<figure class="featured-image">
			<a href="<?php echo $image[0]; ?>" class="btn gallery-btn" data-id="<?php echo $thumbnail_id; ?>">
				<img src="<?php echo $image[0]; ?>" />
			</a>
		</figure>
		<?php endif; ?>
		<?php endif; ?>
		<div class="sidebar-container">

			<div id="content">
				<?php $class = (has_post_thumbnail()) ? 'has-featured-image' : 'no-featured-image'; ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>
					<?php  if($featured_image_position == 'left') : ?>
					<?php $image = wp_get_attachment_image_src($thumbnail_id, array(820, 400, 'bfi_thumb' => true)); ?>
					<?php if($image): ?>
					<figure class="featured-image">
						<a href="<?php echo $image[0]; ?>" class="btn gallery-btn" data-id="<?php echo $thumbnail_id; ?>">
							<img src="<?php echo $image[0]; ?>" />
						</a>
					</figure>
					<?php endif; ?>
					<?php endif; ?>

					<header class="post-header">
						<?php get_template_part('inc/post-category'); ?>
						<h2 class="post-title"><?php the_title(); ?></h2>
						<div class="meta">
							<span class="post-date"><?php the_date(); ?></span>
						</div>
						<hr />
					</header>
					
					<?php get_template_part('inc/modules/post-share'); ?>
		
					<?php get_template_part('inc/modules/post-navigation'); ?>

					<?php get_template_part('inc/modules/post-comments'); ?>
			
					<?php get_template_part('inc/modules/post-more-in-category'); ?>

				</article>
			</div>
			<?php get_sidebar(); ?>
		</div>
	<?php endwhile; // end of the loop. ?>
	</div><!-- inner -->
	<?php //get_template_part('inc/modules/related-posts'); ?>


	<div class="related-posts">
		<div class="container">
			<div class="widget-header">
				<h5 class="widget-title">You Might Also Like</h5>
				<a href="">see all archive »</a>
			</div>
			<ul class="posts">
				<li>
					<div class="post-item">
						<div class="top-category">
							<span class="category-name green-label">Bite</span>
						</div>					
						<div class="category">
							<span class="name category-name green-label">Bites</span>
						</div>
						<div class="image">
							<a href="<?php the_permalink(); ?>">
								<img src="http://lorempixel.com/310/310" />
							</a>
						</div>
						<header class="header post-header">
							<div class="author">
								<div class="image circle">
									<img src="http://lorempixel.com/100/100" />
								</div>
								<span class="name">This is a very long name</span>
							</div>

							<h3 class="title post-title"><a>This is the post title and it is very long</a></h3>
							<div class="excerpt">
								<p>Lorem ipsum dolor sit amet, dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco...</p>
							</div>
							<a class="primary-btn"><?php _e("Read More", THEME_NAME); ?></a>
						</header>
					</div>					
				</li>
				<li>
					<div class="post-item">
						<div class="top-category">
							<span class="category-name green-label">Bite</span>
						</div>					
						<div class="category">
							<span class="name category-name green-label">Recipe</span>
						</div>
						<div class="image">
							<a href="<?php the_permalink(); ?>">
								<img src="http://lorempixel.com/310/310" />
							</a>
						</div>
						<header class="header post-header">
							<div class="author">
								<div class="image circle">
									<img src="http://lorempixel.com/100/100" />
								</div>
								<span class="name">This is a very long name</span>
							</div>

							<h3 class="title post-title"><a>This is the post title and it is very long</a></h3>
							<div class="excerpt">
								<p>Lorem ipsum dolor sit amet, dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco...</p>
							</div>
							<a class="primary-btn"><?php _e("Read More", THEME_NAME); ?></a>
						</header>
					</div>					
				</li>
				<li>
					<div class="post-item">
						<div class="top-category">
							<span class="category-name green-label">Bite</span>
						</div>					
						<div class="category">
							<span class="name category-name green-label">Bites</span>
						</div>
						<div class="image">
							<a href="<?php the_permalink(); ?>">
								<img src="http://lorempixel.com/310/310" />
							</a>
						</div>
						<header class="header post-header">
							<div class="author">
								<div class="image circle">
									<img src="http://lorempixel.com/100/100" />
								</div>
								<span class="name">This is a very long name</span>
							</div>

							<h3 class="title post-title"><a>This is the post title and it is very long</a></h3>
							<div class="excerpt">
								<p>Lorem ipsum dolor sit amet, dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco...</p>
							</div>
							<a class="primary-btn"><?php _e("Read More", THEME_NAME); ?></a>
						</header>
					</div>					
				</li>				
			</ul>			
		</div>
	</div>
</div><!-- #single -->
<?php get_footer(); ?>
