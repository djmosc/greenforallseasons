<?php $featured_image_position = get_field('featured_image_position'); ?>
<?php $thumbnail_id = get_post_thumbnail_id(); ?>

<?php  if($featured_image_position == 'top') : ?>
	<?php $image = wp_get_attachment_image_src($thumbnail_id, array(800, 530, 'bfi_thumb' => true)); ?>
<?php else: ?>
	<?php $image = wp_get_attachment_image_src($thumbnail_id, array(400, 530, 'bfi_thumb' => true)); ?>
<?php endif; ?>

<div class="category">
	<span class="name category-name green-label">Bites</span>
</div>

<div class="header-wrap">
	<?php if($image): ?>
		<div class="image">
			<a href="" class="" data-id="<?php echo $thumbnail_id; ?>">
				<img src="<?php echo $image[0]; ?>" />
			</a>
		</div>
	<?php endif; ?>	
						
	<div class="header">
		<div class="author">
			<div class="image circle">
				<img src="http://lorempixel.com/100/100" />
			</div>
			<span class="name"><?php _e('Words by ','greenforallseasons'); ?><?php the_author(); ?></span>
		</div>		
		<h3 class="title post-title"><a><?php the_title(); ?></a></h3>
	</div>
</div>