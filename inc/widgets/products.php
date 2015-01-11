<?php 

class Products extends WP_Widget {

	function Products() {
		$widget_opts = array( 'description' => __('Use this widget is to show products') );
		parent::WP_Widget(false, 'Products', $widget_opts);
	}

	function form($instance) {
		$title = (isset($instance['title'])) ? esc_attr($instance['title']) : '';
		$sub_title = (isset($instance['sub_title'])) ? esc_attr($instance['sub_title']) : '';
		$rewardstyle_folder = (isset($instance['rewardstyle_folder'])) ? esc_attr($instance['rewardstyle_folder']) : '';
	?>
		<p>
			<label>Title: <input class="widefat" name="<?php echo $this->get_field_name('title') ?>" type="text" value="<?php echo $title; ?>" /></label>
		</p>
		<p>
			<label>Sub Title: <input class="widefat" name="<?php echo $this->get_field_name('sub_title') ?>" type="text" value="<?php echo $sub_title; ?>" /></label>
		</p>
		<p>
			<label>rewardStyle Folder: <input class="widefat" name="<?php echo $this->get_field_name('rewardstyle_folder') ?>" type="text" value="<?php echo $rewardstyle_folder; ?>" /></label>
		</p>
		
	<?php 
	}

	function update($new_instance, $old_instance){
		return $new_instance;
	}

	function widget($args, $instance) {
		
		$products = get_transient('widget_' . $args['widget_id']. '_products');
		
		if(empty($products)){
			
			$folder = $instance['rewardstyle_folder'];;

			if( $folder ) {
				$products = get_rs_products($folder, 6);

				if($products){
				
					set_transient('widget_' . $args['widget_id']. '_products', $products, 60*60*24);
				}
			}		
		}

    	if($products):
		echo $args['before_widget'].$args['before_title'].$instance['title'].$args['after_title']; ?>

		<?php if( !empty($instance['sub_title'])) : ?>
		<span class="widget-sub-title"><?php echo $instance['sub_title']; ?></span>
		<?php endif; ?>
		<div class="box">
			<ul class="products clearfix">
			<?php foreach($products as $product): ?>
				<li id="product-<?php echo $product->product_id; ?>" class="product slide">
					
					<a href="<?php if(isset($product->product_url)) echo $product->product_url; ?>" target="_blank" class="product-btn overlay-btn btn">
					    <div class="thumbnail">
					    	<?php $image_url = $product->product_image; ?>
							
							<img src="<?php echo bfi_thumb($image_url, array('width' => 200, 'height' => 200)); ?>">
					    </div>
					    <div class="overlay">
					        <header class="header">
					            <h5 class="title"><?php echo $product->product_name; ?></h5>
								<span class="meta">
						            <span class="price"><?php echo $product->currency.$product->price; ?></span>
					         	</span> 
					            <!--span class="white-btn read-more-btn"><?php _e("Buy now", THEME_NAME); ?></span-->
					        </header>
					    </div>
					</a>
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
		<!--div class="shopthepost-widget" data-widget-id="92234"><script type="text/javascript">!function(d,s,id){var e, p = /^http:/.test(d.location) ? 'http' : 'https';if(!d.getElementById(id)) {e = d.createElement(s);e.id = id;e.src = p + '://' + 'd27mzdfpkg2pgg.cloudfront.net' + '/js/shopthepost.js';d.body.appendChild(e);}if(typeof window.__stp === 'object') if(d.readyState === 'complete') {window.__stp.init();}}(document, 'script', 'shopthepost-script');</script><div class="rs-adblock"><img src="//d2q5ul2d7qoxgj.cloudfront.net/images/search/350.gif" onerror="this.parentNode.innerHTML='Turn off your ad blocker to view content'" style="width: 15px; height: 15px;" /><noscript>Turn on your JavaScript to view content</noscript></div></div-->
					
		<?php
		echo $args['after_widget'];	
		//wp_reset_postdata();
		//wp_reset_query();
		endif;
	}
}

register_widget('Products');