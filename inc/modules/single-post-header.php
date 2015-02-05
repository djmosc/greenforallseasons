<div class="single-post-header">	
	<?php if( !empty( $category) ): ?>
	<?php include_module('post-category', array(
		'name' => $first_cat_name,
	)) ?>
	<?php endif; ?>
	<?php if( !empty( $image_url) ): ?>	
		<div class="post-image image">
			<img src="<?php echo $image_url; ?>" />
		</div>
	<?php endif; ?>
	<?php $data =  array(
		'title' => $title,
		'excerpt' => $excerpt,
	);

	$data['author'] = ( !empty($author) ) ? $author : null;

	include_module('post-header', $data); ?>
</div>