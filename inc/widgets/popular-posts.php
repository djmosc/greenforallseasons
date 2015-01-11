<?php 

class Popular_posts extends WP_Widget {

	function Popular_posts() {
		$widget_opts = array( 'description' => __('Use this widget is to show the most popular posts') );
		parent::WP_Widget(false, 'Popular posts', $widget_opts);
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
		global $post;
		
		$options = array('posts_per_page' => 4, 'post_type' => 'post');
		$custom_query = new WP_Query($options);

		if ( $custom_query->have_posts() ) :

			echo $args['before_widget'].$args['before_title'].$instance['title'].$args['after_title']; ?>

			<?php if( !empty($instance['sub_title'])) : ?>
			<span class="widget-sub-title"><?php echo $instance['sub_title']; ?></span>
			<?php endif; ?>
			<ul class="posts">
			<?php
				while ( $custom_query->have_posts() ) : $custom_query->the_post();
					if(has_post_thumbnail()):
				?>
				<li <?php post_class('clearfix'); ?>>
					<figure class="thumbnail featured-image">
						<a href="<?php the_permalink(); ?>" class="overlay-btn">
							<?php the_post_thumbnail(array('width' => 120, 'height' => 120, 'bfi_thumb' => true)); ?>
						</a>
					</figure>
					<header class="post-header">
						<?php get_template_part( 'inc/post-category'); ?>
						<h6 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h6>
						<span class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
					</header>
				</li>
				<?php
					endif;
				endwhile;
			?>
			</ul>
			<?php
			echo $args['after_widget'];	
			wp_reset_postdata();
			wp_reset_query();
		endif;
	}
}

register_widget('Popular_posts');
