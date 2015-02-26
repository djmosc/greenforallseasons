<ul class="share-links">
	<li>
		<a class="facebook-btn share-popup-btn" target="_blank" href="http://www.facebook.com/share.php?u=<?php echo urlencode($url); ?>&title=<?php echo urlencode($title); ?>"></a>
	</li>
	<li>
		<a class="twitter-btn share-popup-btn" target="_blank" href="http://twitter.com/home?status=<?php echo urlencode($title); ?>+<?php echo urlencode($url); ?>"></a>
	</li>
	<li>
		<a class="pinterest-btn share-popup-btn" target="_blank" href="http://www.pinterest.com/pin/create/button/?url=<?php echo urlencode($url); ?>&media=<?php echo urlencode($image_url); ?>&description=<?php echo urlencode($excerpt); ?>" ></a>
	</li>
	<?php if( !empty($email)): ?>
	<li>
		<a class="email-btn" target="_blank" href="mailto:?subject=<?php echo urlencode($title); ?>&amp;body=Check out this site: <?php echo urlencode($url); ?>" ></a>
	</li>
	<?php endif; ?>
</ul>