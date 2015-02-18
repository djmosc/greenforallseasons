<div class="post-slide" style="">
	
	<div class="post-item">
		<?php if( !empty( $category) ): ?>
		<?php include_module('post-category', array(
			'name' => $category['name']
		)); ?>
		<?php endif; ?>
		<?php include_module('post-header', array(
			'title' => $title,
			'url' => $url,
			'excerpt' => $excerpt,
		)); ?>

		<div class="post-meta">
			<?php 
			if( !empty( $author) ):
				include_module('author', $author); 
			endif;
			?>
			<a class="secondary-btn read-more-btn" href="<?php echo $url; ?>"><?php _e("Read More", THEME_NAME); ?></a>
		</div>
	</div>
	<figure class="thumbnail">
		<a href="<?php echo $url; ?>" class="overlay-btn btn">
			<img src="<?php echo $image_url; ?>" />
		</a>
	</figure>
</div>