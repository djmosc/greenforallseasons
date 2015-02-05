<div class="post-item <?php echo ( !empty($class)) ? $class : ''; ?>">
	<!-- <div class="top-category">
		<span class="category-name green-label">Shape</span>
	</div>	 -->
	<?php if( !empty( $category) ): ?>
	<?php include_module('post-category', array(
		'name' => $category['name']
	)); ?>
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
	);

	$data['author'] = ( !empty($author) ) ? $author : null; 
	$data['read_more'] = ( !empty($read_more) ) ? $read_more : null; 

	include_module('post-header', $data); ?>
</div>