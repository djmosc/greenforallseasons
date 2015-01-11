<?php if($url = get_field('_external_url')): ?>
<a href="<?php echo $url; ?>" target="_blank" class="product-btn overlay-btn btn">
<?php endif; ?>
    <div class="thumbnail">
    	<?php 
		if(has_post_thumbnail()): 
		$image_id = get_post_thumbnail_id($post->ID);
		$image_attributes = wp_get_attachment_image_src( $image_id );
		$image_url = $image_attributes[0];
		else:
		$image_url = get_field('rewardstyle_product_image_url'); 
		endif;
		?>
		
		<img src="<?php echo bfi_thumb($image_url, array('width' => 200, 'height' => 200)); ?>">
    </div>
    <div class="overlay">
        <header class="header">
            <h5 class="title"><?php the_title();?></h5>
            <!--div class="meta"><span class="price"><?php echo get_product_price(); ?></span></div-->
            <span class="white-btn read-more-btn arrow-right-btn"><?php _e("Buy now", THEME_NAME); ?></span>
        </header>
    </div>
<?php if( isset($url) ): ?>
</a>
<?php endif; ?>