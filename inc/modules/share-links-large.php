<ul class="share-links">
	<li>
		<a class="leave-comment-btn" href="#" ><?php _e('Leave a comment', 'greenforallseasons'); ?></a>
	</li>
	<li>
		<a class="facebook-btn large share-popup-btn" target="_blank" href="http://www.facebook.com/share.php?u=<?php echo urlencode($url); ?>&title=<?php echo urlencode($title); ?>"></a>
	</li>
	<li>
		<a class="twitter-btn large share-popup-btn" target="_blank" href="http://twitter.com/home?status=<?php echo urlencode($title); ?>+<?php echo urlencode($url); ?>"></a>
	</li>
	<li>
		<a class="pinterest-btn large share-popup-btn" target="_blank" href="http://www.pinterest.com/pin/create/button/?url=<?php echo urlencode($url); ?>&media=<?php echo urlencode($image_url); ?>&description=<?php echo urlencode($excerpt); ?>" ></a>
	</li>
</ul>