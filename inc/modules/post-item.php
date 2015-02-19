<div class="post-item <?php echo ( !empty($class)) ? $class : ''; ?>">
	<?php 
		$date = ( !empty($date) ) ? $date : null;
		$title = ( !empty($title) ) ? $title : null;
		$excerpt = ( !empty($excerpt) ) ? $excerpt : null; 
		$top_category = ( !empty($top_category) ) ? $top_category : null; 
	?>

	<?php if( !empty( $category) ): ?>
	<?php include_module('post-category', array(
		'category_name' => $category['name'],
		'top_category_name' => $top_category['name']
	)); ?>
	<?php endif; ?>
	<div class="post-image image">
		<a href="<?php echo $url; ?>" class="image-btn overlay-btn btn">
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