<header class="header post-header">
	<?php 
	if( !empty( $author) ):
		include_module('author', array(
			'name' => $author['name'],
			'image_url' => $author['image_url']
		)); 
	endif;
	?>
	
	<h3 class="title post-title"><a href="<?php echo $url; ?>"><?php echo $title; ?></a></h3>
	
	<?php if( !empty($excerpt) ): ?>
	<div class="excerpt post-excerpt"><?php echo $excerpt; ?></div>
	<?php endif; ?>
	<?php 
	if( !empty($date) ) : 
	include_module('post-meta', array('date' => $date));
	endif; ?>
	<?php if( !empty($read_more) ) : ?>
	<a class="primary-btn" href="<?php echo $url; ?>"><?php _e("Read More", THEME_NAME); ?></a>
	<?php endif; ?>
</header>
