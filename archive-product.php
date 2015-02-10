<?php get_header(); ?>
<section id="archive-product">
	<div class="container inner">
		<header class="products-header">
			<?php $page = get_queried_page(); ?>
			<figure class="products-image image">
				<img src="<?php echo get_image(get_post_thumbnail_id($page->ID), array(1100, 300)); ?>" />
			</figure>
			<h2 class="products-title title"><?php echo $page->post_title; ?></h2>
			<div class="products-excerpt excerpt"><?php echo $page->post_excerpt; ?></div>
			
		</header>
		<div class="filters product-filters">
			<div class="viewing">
				<span class="label"><?php _e('Viewing'); ?></span> 
				<span class="value"><?php echo ( is_tax('product_cat') ) ? single_cat_title() : __("All", THEME_NAME); ?></span>
			</div>
		</div>
		<?php if ( have_posts() ) : ?>
	
		<ul class="products">
			<?php 
			$i = 0;
			while ( have_posts() ) : the_post(); ?>

				<li>
	                <?php 
	    //             include_module('product-item', array(
					// 	'title' => get_the_title(),
					// 	'designer' => get_field('designer'),
					// 	'price' => get_field('price'),
					// 	'url' => get_permalink(),
					// 	'image_url' => get_post_thumbnail_src(array('width' => 210, 'height' => 300))
					// )); 

					include_module('product-item', array(
						'title' => get_the_title(),
						'designer' => 'Designer',
						'price' => '£50',
						'url' => '#',
						'image_url' => 'http://lorempixel.com/210/300'
					)); 
					?>

	            </li>								
			<?php 
			$i++; 
			endwhile; // end of the loop. ?>
		</ul>

		<?php else: ?>
			<div class="not-found">
				<h3 class="title"><?php _e("No products found", THEME_NAME); ?></h3>
			</div>
		<?php endif; ?>

		<?php include_module('pagination'); ?>

		<?php include_module('categories'); ?>
	</div>
	
</section>
	

<?php get_footer(); ?>
