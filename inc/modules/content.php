<div class="content">
	<?php $id = (isset($id)) ? $id : $post->ID;?>

	<?php if($content = get_the_content($id)): ?>
	<div class="post-content">
		<?php the_content(); ?>
	</div>
	<?php endif; ?>

	<?php $i = 0; ?>
	<?php if(get_field('content', $id)): ?>
		<?php while (has_sub_field('content', $id)) : ?>
		<?php

			$layout = get_row_layout();

			switch($layout) :

				case 'flexible':	
					if(get_sub_field('column')):
		?>
					<div class="row">
		
						<div class="inner clearfix">

						<?php $total_columns = count( get_sub_field('column', $id)); ?>
						<?php while (has_sub_field('column', $id)) : ?>
							<?php
							switch($total_columns){
								case 2:
									$class = 'five';
									break;
								case 3:
									$class = 'one-third';
									break;
								case 4:
									$class = 'one-fourth';
									break;
								case 5:
									$class = 'one-fifth';
									break;
								case 1:
								default:
									$class = 'ten';
									break;
							} ?>
							<div class="break-on-tablet span <?php echo $class; ?>" >
								<?php 
								$sub_layout = get_row_layout(); 
								switch($sub_layout):
									
									case 'text':
										the_sub_field('text');
										break;
									case 'image':
										$image_id = get_sub_field('image_id');
										$image_attributes = wp_get_attachment_image_src( $image_id, array( 500, 700, 'bfi_thumb' => true) );
								?>
									<img src="<?php echo $image_attributes[0]; ?>">
								<?php
										break;
								
								endswitch; ?>
							</div>
						<?php endwhile; ?>
						</div>
					</div>
					<?php endif; ?>
				<?php break;
				case 'image':	
				
					$image_id = get_sub_field('image_id');
					$image_attributes = wp_get_attachment_image_src( $image_id, array( 900, 900, 'bfi_thumb' => true) );

					if($image_attributes) :
					?>
					<div class="single-image image">
						<img src="<?php echo $image_attributes[0]; ?>">
					</div>
					<?php endif; ?>
				<?php 
				break;
				case 'text':	
					$text = get_sub_field('text');
					if($text) :
				?>
					<div class="row">
						<div class="inner"><?php echo $text ?></div>
					</div>							
					<?php endif; ?>
				<?php break; ?>
				
			<?php endswitch ?>
		<?php $i++; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>