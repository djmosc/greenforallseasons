<header class="header post-header">
	<?php 
	if( !empty( $author) ):
		include_module('author', array(
			'name' => $author['name'],
			'image_url' => $author['image_url']
		)); 
	endif;
	?>
	
	<h3 class="title post-title">
		<?php if (!empty($url)): ?>
			<a href="<?php echo $url; ?>"><?php echo $title; ?></a>
		<?php else: ?>
			<?php echo $title; ?>
		<?php endif; ?>
	</h3>
	
	<?php if( !empty($excerpt) ): ?>
	<?php include_module('post-excerpt', array('excerpt' => $excerpt)); ?>
	<?php endif; ?>
	<?php 
	if( !empty($date) ) : 
	include_module('post-meta', array('date' => $date));
	endif; ?>
	<?php if( !empty($read_more) ) : ?>
	<div class="read-more">
		<a class="primary-btn read-more-btn" href="<?php echo $url; ?>"><?php _e("Read More", THEME_NAME); ?></a>
	</div>
	<?php endif; ?>
</header>
