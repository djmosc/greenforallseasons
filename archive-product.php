<?php get_header(); ?>
<?php wp_enqueue_script('infinitescroll'); ?>
<section id="archive-product">
	<div class="container inner">
		<header class="products-header">
			<?php $page = get_page(get_field('products_page', 'options')); ?>
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
			<?php wp_dropdown_categories(array('class' => 'category', 'show_option_all' => __("All Categories", THEME_NAME), 'walker' => new Category_Dropdown_Url_Walker, 'taxonomy' => 'product_cat')); ?>
		</div>
		<?php if ( have_posts() ) : ?>
		<div class="products">
			<ul class="product-list" data-category=<?php echo get_query_var('product_cat'); ?>></ul>
		</div>
		
		<nav class="products-navigation navigation">
			<?php next_posts_link() ?>
		</nav>

		<?php else: ?>
			<div class="not-found">
				<h3 class="title"><?php _e("No products found", THEME_NAME); ?></h3>
			</div>
		<?php endif; ?>

		<?php include_module('categories'); ?>
	</div>
	
</section>

<script type="text/html" id="product-item-template">
	<li class="item product">
	<?php include_module('product-item', array(
		'title' => '{title}',
		'designer' => '{designer}',
		'price' => '{price}',
		'url' => '{external_url}',
		'image_url' => '{image_url}'
	)); ?>
	</li>
</script>

	<?php 
    
	?>
	

<?php get_footer(); ?>
