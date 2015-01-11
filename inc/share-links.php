<?php
	$url = get_permalink(); 
	$title = get_the_title();
	$excerpt = get_the_excerpt();
	$image_url = get_image_url(get_post_thumbnail_id(), 'full');
?>
<div class="share-links">
	<a class="facebook-btn share-popup-btn" target="_blank" href="http://www.facebook.com/share.php?u=<?php echo urlencode($url); ?>&title=<?php echo urlencode($title); ?>"></a>
	<a class="twitter-btn share-popup-btn" target="_blank" href="http://twitter.com/home?status=<?php echo urlencode($title); ?>+<?php echo urlencode($url); ?>"></a>
	<a class="pinterest-btn share-popup-btn" target="_blank" href="http://www.pinterest.com/pin/create/button/?url=<?php echo urlencode($url); ?>&media=<?php echo urlencode($image_url); ?>&description=<?php echo urlencode(get_the_excerpt()); ?>" ></a>
	<a class="tumblr-btn share-popup-btn" target="_blank" href="https://www.tumblr.com/share/link?url=<?php echo urlencode($url); ?>&name=<?php echo urlencode($title); ?>&description=<?php echo urlencode($excerpt); ?>"></a>
	<!--a class="share-popup-btn googleplus-btn" target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($url); ?>" ></a-->
	<!--a class="email-btn" href="mailto:?subject=<?php echo urlencode($title); ?>&amp;body=Check out this site: <?php echo urlencode($url); ?>." ></a-->
</div>