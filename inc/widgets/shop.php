<?php 

class Shop extends WP_Widget {

	function Shop() {
		$widget_opts = array( 'description' => __('Use this widget is to show posts') );
		parent::WP_Widget(false, 'Shop', $widget_opts);
	}

	function form($instance) {
		$title = (isset($instance['title'])) ? esc_attr($instance['title']) : '';
		$description = (isset($instance['description'])) ? esc_attr($instance['description']) : '';
	?>
		<p>
			<label>Title: <input class="widefat" name="<?php echo $this->get_field_name('title') ?>" type="text" value="<?php echo $title; ?>" /></label>
		</p>
		<p>
			<label>Description: <input class="widefat" name="<?php echo $this->get_field_name('description') ?>" type="text" value="<?php echo $description; ?>" /></label>
		</p>
	<?php 
	}

	function update($new_instance, $old_instance){
		return $new_instance;
	}

	function widget($args, $instance) {
		global $post;
		
		$posts = get_field('products', 'widget_'.$args['widget_id']);

		if( $posts ) :

			echo $args['before_widget'];

			if( !empty($instance['title'])) : 
				echo $args['before_title'].$instance['title'].$args['after_title']; ?>
				<?php if( !empty($instance['description'])) : ?>
				<div class="widget-description">
					<?php echo $instance['description']; ?>
					<a href="<?php echo get_permalink( 19470 ); ?>" class="primary-btn">Shop Now</a>
				</div>
				<?php endif; ?>
			<?php endif; ?>

			<ul class="posts size-<?php echo $size; ?>">
			<?php foreach($posts as $post) : ?>
				<?php setup_postdata($post); ?>
				<?php 
					$image_size = array('width' => 170, 'height' => 220);
				?>
				<li <?php post_class(); ?>>
					
					<?php include_module('post-item', array(
						'url' => get_permalink(),
						'image_url' => get_post_thumbnail_src($image_size),
					)); ?>
				</li>
				<?php endforeach;	?>
			</ul>
			<?php
			echo $args['after_widget'];	
			wp_reset_postdata();
			wp_reset_query();
		endif;
	}
}

register_widget('Shop');
