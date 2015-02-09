<?php get_header(); ?>
<div class="sidebar-container">
	<div id="content">	
		<section id="author-archive">
				
			<div class="contributor clearfix">

				<?php 
					$author_id = get_the_author_meta( 'ID' );
					$author_image = get_field('image', 'user_'. $author_id);
				?>
		
				<img class="featured-image" src="<?php echo bfi_thumb($author_image['url'], array('width' => 460, 'height' => 460)); ?>">
				<h3 class="name"><?php the_author_meta( 'display_name', $author_id ); ?></h3>
				<span class="title"><?php the_field('position', 'user_'. $author_id); ?></span>
				<p>
					<?php the_author_meta( 'description', $author_id ); ?>
				</p>

				<ul class="socials">
					<?php if(get_the_author_meta('twitter')): ?>
						<li>
							<a class="twitter" href="https://twitter.com/<?php the_author_meta('twitter'); ?>" target="_blank"><?php _e('@'); ?><?php the_author_meta('twitter'); ?></a>
						</li>
					<?php endif; ?>
					<?php if(get_the_author_meta('facebook')): ?>
						<li>
							<a class="facebook" href="<?php if(the_author_meta('facebook')); ?>" target="_blank"><?php if(the_author_meta('facebook')); ?></a>
						</li>
					<?php endif; ?>
					<?php if(get_the_author_meta('user_url')): ?>
						<li>
							<a class="web" href="<?php if(the_author_meta('user_url')); ?>" target="_blank"><?php if(the_author_meta('user_url')); ?></a>
						</li>
					<?php endif; ?>
				</ul>	
			</div>

		<?php if(have_posts()): ?>
			<div class="more-from">
			    <div class="inner">
			        <header class="header lined-header">
			            <h3 class="title skew"><span><?php _e("More by", THEME_NAME); ?> <?php the_author_meta( 'display_name', $author_id ); ?></span></h3>
			        </header>
			        <ul class="posts clearfix">				
						<?php while ( have_posts() ) : the_post(); ?>

							<?php 
								$title =  get_the_title();
			                    $image_size = array('width' => 190, 'height' => 190);
			                    $image = get_post_thumbnail_src($image_size);							
								$excerpt = get_excerpt(150);
								$url = get_permalink();	
								$category = get_post_category();				
							?>


				            <li class="span one-third">
				                <?php include_module('post-item', array(
									'title' => $title,
									'excerpt' => $excerpt,
									'url' => $url,
									'image_url' => $image,
				                    'category' => array(
			                        	'name' => $category->name,
			                        ),
									'read_more' => $url
								)); ?>

				            </li>								
						<?php endwhile; // end of the loop. ?>
			        </ul>
			    </div>
			</div>							
			<?php else: ?>
				<div class="not-found">
					<h3 class="title"><?php _e("No posts found", THEME_NAME); ?></h3>
				</div>
		<?php endif; ?>

		</section><!-- #page -->

	</div>
	<?php get_sidebar(); ?>	
</div>

<?php include_module('related-posts'); ?>

<?php get_footer(); ?>