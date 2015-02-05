<div class="post-item <?php echo $class; ?>">
	<div class="top-category">
		<span class="category-name green-label">Shape</span>
	</div>		
	<?php if( !empty( $category) ): ?>
	<?php include_module('post-category', array(
		'name' => $category['name']
	)) ?>
	<?php endif; ?>
	<div class="post-image image">
		<a href="<?php echo $url; ?>">
			<img src="<?php echo $image_url; ?>" />
		</a>
	</div>
	<?php $data =  array(
		'title' => $title,
		'url' => $url,
		'excerpt' => $excerpt,
		'read_more' => $read_more,
	);

	if( !empty($author) ) {
		$data['author'] = array(
			'image_url' => $author['image_url'],
			'name' => $author['name'],
		);
	}

	include_module('post-header', $data); ?>
</div>