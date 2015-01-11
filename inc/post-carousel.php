<?php $images = get_post_images(); ?>
<?php if( !empty($images) ): ?>
<?php $i = 0; ?>
<div class="post-carousel owl-carousel">
	<?php foreach($images as $image): ?>
	<?php $image_data = wp_get_attachment_image_src($image->ID, array('height' => 700, 'bfi_thumb' => true)); ?>
	<div class="item" data-id="<?php echo $image->ID; ?>"  data-index="<?php echo $i; ?>">
		<img src="<?php echo $image_data[0]; ?>"/>
		<?php if( $image->post_title || $image->post_excerpt ):  ?>
		<div class="content">
			<h3 class="title"><?php echo $image->post_title; ?></h3>
			<div class="description"><?php echo $image->post_excerpt; ?></div>
		</div>
		<?php endif; ?>
	</div>
	<?php $i++; ?>
	<?php endforeach; ?>
</div>
<?php endif; ?>