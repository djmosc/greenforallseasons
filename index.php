<?php get_header(); ?>
<section id="index" class="content-area container inner">
	<?php if ( have_posts() ) : ?>

		<header class="index-header">
			<h2 class="index-title"><?php _e('Archive'); ?></h2>
			<div class="index-name">
				<span class="label"><?php _e('Viewing'); ?></span> 
				<span class="value"><?php echo ( is_category() ) ? single_cat_title() : __("All", THEME_NAME); ?></span>
			</div>
			<div class="filters">
				<?php get_search_form(); ?>
				<select class="date">
					<option value=""><?php _e("Sort by date", THEME_NAME); ?></option>
					<?php wp_get_archives(array('format' => 'option')); ?>
				</select>
				<?php wp_dropdown_categories(array('class' => 'category', 'show_option_all' => __("All Categories", THEME_NAME), 'walker' => new Category_Dropdown_Url_Walker)); ?>
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
</section>
	

<?php get_footer(); ?>
