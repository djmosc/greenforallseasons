<ul class="share-links">
	<li>
		<a class="leave-comment-btn" href="#" ><?php _e('Leave a comment', 'greenforallseasons'); ?></a>
	</li>
	<li>
		<a class="facebook-btn share-popup-btn" target="_blank" href="http://www.facebook.com/share.php?u=<?php echo urlencode($url); ?>&title=<?php echo urlencode($title); ?>"><span><?php _e('Share', 'greenforallseasons'); ?></span></a>
	</li>
	<li>
		<a class="twitter-btn share-popup-btn" target="_blank" href="http://twitter.com/home?status=<?php echo urlencode($title); ?>+<?php echo urlencode($url); ?>"><span><?php _e('Tweet', 'greenforallseasons'); ?></span></a>
	</li>
	<li>
		<a class="pinterest-btn share-popup-btn" target="_blank" href="http://www.pinterest.com/pin/create/button/?url=<?php echo urlencode($url); ?>&media=<?php echo urlencode($image_url); ?>&description=<?php echo urlencode($excerpt); ?>" ><span><?php _e('Pin', 'greenforallseasons'); ?></span></a>
	</li>
</ul>