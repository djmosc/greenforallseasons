<?php 

class Letter extends WP_Widget {

	function Letter() {
		$widget_opts = array( 'description' => __('Use this widget is to show an Editors Letter.') );
		parent::WP_Widget(false, 'Letter', $widget_opts);
	}

	function form($instance) {
	?>
		<p>
			<label>Choose the Editors Letter you want to show</label>
		</p>
	<?php 
	}

	function update($new_instance, $old_instance){
		return $new_instance;
	}

	function widget($args, $instance) {
		global $post;
		
		$post = get_field('post', 'widget_'.$args['widget_id']);


		if( $post ) :
			setup_postdata($post);
			
			$author_id = get_the_author_meta('ID');

			$excerpt = get_the_excerpt();
			$excerpt = (strlen($excerpt) > 150) ? '"'.substr($excerpt,0,150).'" ...' : $excerpt;
			
			echo $args['before_widget']; 
			
			?>
			<a href="<?php the_permalink(); ?>" class="letter-btn">
				<figure class="circle image">
					<?php the_post_thumbnail( array(150, 150) ); ?>
				</figure>
			</a>
			<?php include_module('author', array(
				'name' => get_the_author(),
				'image_url' => get_avatar_url ( get_the_author_meta('ID'), 40 ),
				'url' => get_author_posts_url($author_id),
			)); ?>

			<div class="post-date date"><?php echo get_the_date(); ?></div>
			
			<div class="excerpt">
				<?php echo get_excerpt(150); ?>
				<a class="read-more" href="<?php the_permalink(); ?>">Read Further &raquo;</a>	
			</div>
			<? 
			echo $args['after_widget'];	
		endif;
		
		
	}
}

register_widget('Letter');
