<div class="share">
	<span class="label"><?php _e("Share", 'greenforallseasons'); ?></span>
	<?php include_module('share-links', array(
		'title' => $title,
		'url' => $url,
		'image_url' => $image_url,
		'excerpt' => $excerpt,
		'email' => true
	)); ?>
</div>