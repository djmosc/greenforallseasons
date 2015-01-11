<ul class="social-links">
	<?php if($twitter_url = 'https://twitter.com/otmblog'): ?>
	<li>
		<a class="twitter-btn" href="<?php echo $twitter_url;?>" target="_blank"></a>
	</li>
	<?php endif; ?>
	<?php if($facebook_url = 'https://www.facebook.com/otmblog'): ?>
	<li>
		<a class="facebook-btn" href="<?php echo $facebook_url;?>" target="_blank"></a>
	</li>
	<?php endif; ?>
	
	<?php if($instagram_url = 'http://instagram.com/otmblog'): ?>
	<li>
		<a class="instagram-btn" href="<?php echo $instagram_url;?>" target="_blank"></a>
	</li>
	<?php endif; ?>
	
	<?php if(false): ?>
	<li>
		<a class="tumblr-btn" href="<?php echo $tumblr_url;?>" target="_blank"></a>
	</li>
	<?php endif; ?>
	
	<?php if($pinterest_url = 'http://www.pinterest.com/otmblog'): ?>
	<li>
		<a class="pinterest-btn" href="<?php $pinterest_url;?>" target="_blank"></a>
	</li>
	<?php endif; ?>
</ul>