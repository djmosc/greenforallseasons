<?php
$paged = ( !empty($_GET['page']) ) ? $_GET['page'] : 1;
$limit = 20;
$offset = ($limit * ( $paged - 1));

$products = array();
$folders = array();
$api = RS()->api;
if(is_tax('product_cat')) {
	$term = get_queried_object();
	
	if( !empty($term) ) {
		$folder = get_field('rewardstyle_folder', 'product_cat_'.$term->term_id);
		$folders[] = $folder;
	}
} else {
	$folders[] = 'Currently Obsessed';
	// $terms = get_terms('product_cat', array('hide_empty' => 0));

	// if(!empty($terms)) {
	// 	foreach($terms as $term) {
	// 		if($folder = get_field('rewardstyle_folder', 'product_cat_'.$term->term_id)) {
	// 			$folders[] = $folder;
	// 		}
	// 	}
	// }
}

$data = (!empty($folders)) ? $api->get('/favorites', array('folder' => $folders, 'limit' => $limit, 'offset' => $offset)) : null;
$products = ( isset($data->favorites) ) ? $data->favorites : null;

if(!empty($products)) :
?>
<?php foreach($products as $product): ?>
	<?php
	//$link = $api->get('/get_link', array('product' => $product->product_id)); ?>
	<article id="product-<?php echo $product->product_id; ?>" class="product">
		
		<a href="<?php if(isset($product->product_url)) echo $product->product_url; ?>" target="_blank" class="product-btn overlay-btn btn">
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
	</article>
<?php endforeach; ?>
<?php else: ?>
<!--div class="not-found">
	<h3 class="title"><?php _e("No products found", THEME_NAME); ?></h3>
</div-->
<?php endif; ?>	