<?php
get_header();
$category = get_post_category();
?>

	<section id="category" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="category-header">
				<h1 class="category-title"><?php _e('Archive'); ?></h1>
				<div class="category-name"><?php _e('Viewing '); ?><span><?php echo $category->name; ?></span></div>
				<div class="filters">
					<div class="inner">
						<form mathod="GET">
							<div class="field">
								<input type="text" class="query" name="s" placeholder="Search" value="<?php echo esc_attr( get_search_query() ); ?>" />
								<button type="submit" class="submit-btn search-btn" ></button>
							</div>						
							<div class="field">
								<?php wp_dropdown_categories(array('class' => 'category', 'show_option_all' => __("All Categories", THEME_NAME))); ?>
							</div>
							<div class="field">
								<select class="date">
									<option value=""><?php _e("Sort by date", THEME_NAME); ?></option>
									<?php wp_get_archives(array('format' => 'option')); ?>
								</select>
							</div>
						</form>
					</div>
				</div>				
			</header>

			<ul class="posts">
				<?php 
				$i = 0;
				while ( have_posts() ) : the_post(); ?>

					<?php 
						$title =  get_the_title();
						if ($i == 0) {
							$image_size = array('width' => 515, 'height' => 345);
						} else {
							$image_size = array('width' => 250, 'height' => 250);
						}
	                    $image = get_post_thumbnail_src($image_size);							
						$excerpt = get_excerpt(150);
						$url = get_permalink();	
						$author_img_url = get_avatar_url ( get_the_author_meta('ID'), $size = '40' );
						$author_id = get_the_author_meta('ID');
						$date = get_the_time('F d, Y')		
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

		</main>
	</section>

<?php get_footer(); ?>
