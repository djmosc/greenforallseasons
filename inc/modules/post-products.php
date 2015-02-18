
<?php if($products = get_field('products')): ?>
<div class="post-products">
	<header class="post-products-header">
		<h3 class="title"><?php _e('Shop the Post', THEME_NAME) ?></h3>
		<p class="description">
			<?php _e("Lorem ipsum dolor sit amet, consectetur adipisici.", THEME_NAME) ?>
		</p>
		<div class="view-all">
			<?php $products_page = get_post(get_option('products_page')); ?>
			<a href="<?php echo get_permalink($products_page->ID); ?>" class="primary-btn btn"><?php _e('View all', THEME_NAME) ?></a>
		</div>
		
	</header>
	<div class="products">
		<ul class="product-list">
		<?php foreach( $products as $product ) : ?>
			<li class="product">
			<?php include_module('product-item', array(
				'title' => get_the_title($product->ID),
				'designer' => get_field('designer', $product->ID),
				'price' => get_field('price', $product->ID),
				'url' => get_field('external_url', $product->ID),
				'image_url' => get_image(get_post_thumbnail_id($product->ID), array('height' => 260))
			)); ?>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
