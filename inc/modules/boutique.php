<?php 
//$products = get_transient('widget_boutiuqe');
		
// if(empty($products)){
// 	$api = RS()->api;

// 	$folder = get_field('rewardstyle_folder', 'options');

// 	$data = ( !empty($folder) ) ? $api->get('/search', array('folders[]' => $folder)) : null;

// 	$products = ( isset($data->products) ) ? $data->products : null;

// 	if($products){
// 		foreach($products as $product){
// 			$link = $api->get('/get_link', array('product' => $product->product_id));

// 			$product->link = $link->link;
// 		}

// 		set_transient('widget_boutiuqe', $products);

// 	}
// }

// if(!empty($products)):

?>
<div class="boutique box">
	<div class="inner clearfix">
		<header class="boutique-header">
			<h4 class="title"><span class="italic">Shop</span> the Boutique</h4>
			<p class="description">A curated selection from the blog</p>
			<p class="cta-container">
				<?php $products_page = get_field('products_page', 'options'); ?>
				<?php //$products_page = get_post(6798); ?>
				<a class="primary-btn skew" href="<?php echo get_permalink($products_page->ID); ?>"><span><?php _e("Shop Now", THEME_NAME); ?></span></a>
			</p>
		</header>

		<?php echo do_shortcode(htmlspecialchars_decode(get_field('rewardstyle_shopthepost_code', 'options'))); ?>
		
		<?php if(false): ?>
		<div class="products flexslider">
			<ul class="slides">
			<?php foreach($products as $product): ?>
				<li id="product-<?php echo $product->product_id; ?>" class="product slide">
					
					<a href="<?php if(isset($product->link)) echo $product->link; ?>" target="_blank" class="product-btn overlay-btn btn">
					    <div class="thumbnail">
					    	<?php $image_url = $product->product_image; ?>
							
							<img src="<?php echo bfi_thumb($image_url, array('width' => 200, 'height' => 200)); ?>">
					    </div>
					    <div class="overlay">
					        <header class="header">
					            <h5 class="title"><?php echo $product->product_name; ?></h5>
					            <span class="primary-btn read-more-btn arrow-right-btn"><?php _e("Buy now", THEME_NAME); ?></span>
					        </header>
					    </div>
					</a>
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
		<?php endif; ?>
		<!--div class="shopthepost-widget products" data-widget-id="92226"><script type="text/javascript">!function(d,s,id){var e, p = /^http:/.test(d.location) ? 'http' : 'https';if(!d.getElementById(id)) {e = d.createElement(s);e.id = id;e.src = p + '://' + 'd27mzdfpkg2pgg.cloudfront.net' + '/js/shopthepost.js';d.body.appendChild(e);}if(typeof window.__stp === 'object') if(d.readyState === 'complete') {window.__stp.init();}}(document, 'script', 'shopthepost-script');</script><div class="rs-adblock"><img src="//d2q5ul2d7qoxgj.cloudfront.net/images/search/350.gif" onerror="this.parentNode.innerHTML='Turn off your ad blocker to view content'" style="width: 15px; height: 15px;" /><noscript>Turn on your JavaScript to view content</noscript></div></div-->
	</div>
</div>

<?php //endif; ?>