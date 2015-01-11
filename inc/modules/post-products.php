
<?php if($code = get_field('shop_the_post_code')): ?>
<div class="post-products">
	<header class="post-products-header">
		<h5 class="title"><?php _e('<span class="miller-italic">Shop</span> the Post', THEME_NAME) ?></h5>
		<?php $products_page = get_post(6798); ?>
		<a href="<?php echo get_permalink($products_page->ID); ?>" class="boutique-btn"><?php _e('Shop the Boutique', THEME_NAME) ?></a>
	</header>
	<?php echo do_shortcode(htmlspecialchars_decode($code)); ?>
</div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>