<div class="post-slide">
	<div class="post-item">
		<span class="label"><?php _e('Top Stories', 'greenforallseasons' );  ?></span>
		
		<?php include_module('post-header', array(
			'title' => $title,
			'url' => $url,
			'excerpt' => $excerpt,
			'author' => array(
				'image_url' => $author['image_url'],
				'name' => $author['name'],
			),
			'category' => array(
				'name' => $category['name']
			),
			'date' => $date,
			'read_more' => true
		)); ?>
	</div>
	<figure class="thumbnail">
		<a href="<?php echo $url; ?>">
			<img src="<?php echo $image_url; ?>" />
		</a>
	</figure>
</div>