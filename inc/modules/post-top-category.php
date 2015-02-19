<?php if( !empty($name) ) : ?>
<div class="post-top-category">
	<?php 
	include_module('post-category', array(
		'name' => $name
	));
	?>
</div>
<?php endif; ?>