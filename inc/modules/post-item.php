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
		'date' => $date,
	);

	$data['author'] = ( !empty($author) ) ? $author : null; 
	
	include_module('post-header', $data); ?>

	<?php if( !empty($read_more) ) : ?>
	<div class="read-more">
		<a class="primary-btn read-more-btn" href="<?php echo $url; ?>"><?php _e("Read More", THEME_NAME); ?></a>
	</div>
	<?php endif; ?>

</div>