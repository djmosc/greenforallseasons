<div class="product-item <?php echo ( !empty($class)) ? $class : ''; ?>">
	<a href="<?php echo $url; ?>" class="btn product-btn overlay-btn">
		<div class="product-image image">
			<img src="<?php echo $image_url; ?>" />
		</div>
		<?php
		include_module('product-header', array(
			'title' => $title,
			'url' => $url,
			'designer' => $designer,
			'price' => $price,
		)); ?>
	</a>
</div>