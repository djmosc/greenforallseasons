<?php 

class Products extends WP_Widget {

	function Products() {
		$widget_opts = array( 'description' => __('Use this widget is to show posts') );
		parent::WP_Widget(false, 'Products', $widget_opts);
	}

	function form($instance) {
		$title = (isset($instance['title'])) ? esc_attr($instance['title']) : '';
		$description = (isset($instance['description'])) ? esc_attr($instance['description']) : '';
		$size = (isset($instance['size'])) ? esc_attr($instance['size']) : '';
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
				<div class="widget-description"><?php echo $instance['description']; ?></div>
				<?php endif; ?>
			<?php endif; ?>

			<ul class="products">
			<?php foreach($posts as $post) : ?>
				<?php setup_postdata($post); ?>
				<?php 
					$class = array(); 
					$class[] = (has_post_thumbnail()) ? 'has-thumbnail' : '';
				?>
				<li <?php post_class(); ?>>
					
					<?php include_module('product-item', array(
						'title' => get_the_title(),
						'url' => get_permalink(),
						'image_url' => get_post_thumbnail_src($image_size),
						'class' => implode(' ', $class)
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

register_widget('Products');
