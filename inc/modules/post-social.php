<div class="post-social clearfix">
	<div class="comments">
		<span class="title"><?php _e("Join the <i>Conversation</i>:", THEME_NAME); ?></span>
		<a class="comment-btn" href="#" ><?php _e('Leave a comment', 'greenforallseasons'); ?></a>
	</div>
	<?php include_module('share-links',  array(
		'title' => $title,
		'excerpt' => $excerpt,
		'url' => $url,
		'image_url' => $image_url	
	)); ?>
</div>