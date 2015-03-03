<?php global $post; ?>
<?php $posts = get_field('featured_products', 'options'); ?>
<?php if( $posts ) : ?>
<div id="featured-products" class="featured-products">
	<div class="inner">
		<div class="widget-header">
	        <h4 class="widget-title"><?php _e("Shop on G4AS", THEME_NAME); ?></h4>
	        <p class="description">
	        	Lorem ipsum dolor sit amet, consectetur adipisicing elit
	        	<a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"><?php _e("Shop Now", THEME_NAME) ?></a>
	        </p>
	    </div>

		<ul class="products">
		<?php foreach($posts as $post) : ?>
			<?php setup_postdata($post); ?>
			<?php 
				$class = array(); 
				$class[] = (has_post_thumbnail()) ? 'has-thumbnail' : '';
			?>
			<li <?php post_class(); ?>>
				<?php include_module('product-item', array(
					'title' => get_the_title(),
					'designer' => get_field('designer'),
					'price' => get_field('price'),
					'url' => get_field('external_url'),
					'image_url' => get_post_thumbnail_src(array('height' => 200))
				)); ?>
			</li>
			<?php endforeach;	?>
		</ul>
	<?php 
		wp_reset_postdata();
		wp_reset_query(); 
	?>
	</div>
</div>
<?php endif; ?>