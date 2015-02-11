<?php
get_header();

?>
<section id="category">
	<div class="sidebar-container">
		<div class="sidebar-content">		
		<?php if ( have_posts() ) : ?>

			<ul class="posts">
				<?php 
				$i = 0;
				while ( have_posts() ) : the_post(); ?>

					<?php 
						$title =  get_the_title();
						if ($i == 0) {
							$image_size = array('width' => 656, 'height' => 525);
						} else {
							$image_size = array('width' => 320, 'height' => 222);
						}
	                    $image = get_post_thumbnail_src($image_size);							
						$excerpt = get_excerpt(150);
						$url = get_permalink();	
						$author_img_url = get_avatar_url ( get_the_author_meta('ID'), $size = '40' );
						$author_id = get_the_author_meta('ID');
						$date = get_the_time('F d, Y');
						$category = get_post_category();
					?>

		            <li>
		                <?php include_module('post-item', array(
							'title' => $title,
							'excerpt' => $excerpt,
							'url' => $url,
							'image_url' => $image,
							'author' => array(
								'name' => 'Words by ' .get_the_author(),
								'image_url' => $author_img_url,
								'url' => get_author_posts_url($author_id),
							),							
		                    'category' => array(
	                        	'name' => $category->name,
	                        ),
							'read_more' => $url,
							'date' => $date,
						)); ?>
		            </li>								
				<?php 
				$i++; 
				endwhile; // end of the loop. ?>
			</ul>

			<?php else: ?>
				<div class="not-found">
					<h3 class="title"><?php _e("No posts found", THEME_NAME); ?></h3>
				</div>
			<?php endif; ?>

			<?php include_module('pagination'); ?>

		</div>
		<?php get_sidebar(); ?>	
	</div>

	<?php include_module('related-posts'); ?>

</section>
<?php get_footer(); ?>
