<?php 

class Instagram extends WP_Widget {

	function Instagram() {
		$widget_opts = array( 'description' => __('Use this widget is to show products') );
		parent::WP_Widget(false, 'Instagram', $widget_opts);
	}

	function form($instance) {
		$title = (isset($instance['title'])) ? esc_attr($instance['title']) : '';
		$sub_title = (isset($instance['sub_title'])) ? esc_attr($instance['sub_title']) : '';
	?>
		<p>
			<label>Title: <input class="widefat" name="<?php echo $this->get_field_name('title') ?>" type="text" value="<?php echo $title; ?>" /></label>
		</p>
		<p>
			<label>Sub Title: <input class="widefat" name="<?php echo $this->get_field_name('sub_title') ?>" type="text" value="<?php echo $sub_title; ?>" /></label>
		</p>
		
	<?php 
	}

	function update($new_instance, $old_instance){
		return $new_instance;
	}

	function widget($args, $instance) {
		
		$images = get_instagram_images(10, 1523373132);

		if( !empty($images) ) :
		echo $args['before_widget'].$args['before_title'].$instance['title'].$args['after_title']; ?>

		<?php if( !empty($instance['sub_title'])) : ?>
		<span class="widget-sub-title"><?php echo $instance['sub_title']; ?></span>
		<?php endif; ?>
		<div class="box">
			<div class="images clearfix owl-carousel">
				<?php foreach($images as $image): ?>
				<div class="image item">
					<a class="overlay-btn" href="<?php echo $image['link']; ?>" target="_blank">
						<img src="<?php echo $image['url']; ?>" />
					</a>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
					
		<?php
		echo $args['after_widget'];	
		//wp_reset_postdata();
		//wp_reset_query();
		endif;
	}
}

register_widget('Instagram');