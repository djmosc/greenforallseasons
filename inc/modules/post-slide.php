<div class="post-slide">
	<span class="label"><?php _e('Top Stories', 'greenforallseasons' );  ?></span>
	
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
				include_module('author', array(
					'name' => $author['name'],
					'image_url' => $author['image_url']
				)); 
			endif;
			?>
			<a class="secondary-btn read-more-btn" href="<?php echo $url; ?>"><?php _e("Read More", THEME_NAME); ?></a>
		</div>
	</div>
	<figure class="thumbnail">
		<a href="<?php echo $url; ?>">
			<img src="<?php echo $image_url; ?>" />
		</a>
	</figure>
</div>