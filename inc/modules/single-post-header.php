<div class="single-post-header">	
	<?php if( !empty( $category) ): ?>
	<?php include_module('post-category', array(
		'name' => $category['name'],
	)) ?>
	<?php endif; ?>
	<div class="header-container">
		<?php if( !empty( $image_url) ): ?>	
			<div class="post-image image">
				<img src="<?php echo $image_url; ?>" />
			</div>
		<?php endif; ?>
		<?php $data =  array(
			'title' => $title
		);

		$data['author'] = ( !empty($author) ) ? $author : null;

		include_module('post-header', $data); ?>
	</div>

	<?php include_module('post-excerpt', array('excerpt' => $excerpt)); ?>
</div>