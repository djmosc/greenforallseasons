<?php 

class Editor extends WP_Widget {

	function Editor() {
		$widget_opts = array( 'description' => __('Use this widget is to show an Editor / Contributor in the Widget Areas.') );
		parent::WP_Widget(false, 'Editor', $widget_opts);
	}

	function form($instance) {
		$title = (isset($instance['title'])) ? esc_attr($instance['title']) : '';
		$user_id = (isset($instance['user_id'])) ? esc_attr($instance['user_id']) : '';
		$args = array(
			'role' => 'Editor'
		);
		$user_query = new WP_User_Query( $args );

	?>
		<p>
		 <?php if ( ! empty( $user_query->results ) ) : ?>
			
			<label>Choose Editor:
				<select name="<?php echo $this->get_field_name('user_id'); ?>" style="width: 170px;">
					<option value="">--None--</option>
					<?php foreach ( $user_query->results as $user ): ?>
						<option value="<?php echo $user->ID; ?>" <?php if($user->ID == $user_id) echo 'selected'; ?>><?php echo $user->display_name; ?></option>
					<?php endforeach; ?>
				</select>
			</label>
		<?php endif; ?>
		</p>
	<?php 
	}

	function update($new_instance, $old_instance){
		return $new_instance;
	}

	function widget($args, $instance) {
		global $post;
		$args['size'] = (isset($instance['size'])) ? $instance['size'] : 'small';
		$args['user_id'] = (isset($instance['user_id'])) ? $instance['user_id'] : null;


		echo $args['before_widget']; 
			$author_id = $args['user_id'];
			$author_image = get_field('image', 'user_'. $author_id);
			$author_img_url = get_avatar_url ( $author_id, $size = '40' );
			$excerpt = get_the_author_meta( 'description', $author_id );
			$excerpt = (strlen($excerpt) > 150) ? substr($excerpt,0,150).'...' : $excerpt;
		?>

			<img class="image" src="<?php echo bfi_thumb($author_image['url'], array('width' => 180, 'height' => 180)); ?>">
			<div class="script">
				<img src="<?php bloginfo('template_directory'); ?>/images/misc/editors-letter.png" alt="">	
			</div>
			<div class="author">
					<div class="image circle">
							<img src="<?php echo $author_img_url; ?>" />
					</div>
					<span class="name"><?php echo the_author_meta( "display_name", $author_id ); ?></span>
			</div>	
			<div class="date">
				february 01,2015
			</div>
			<p>
				<?php echo $excerpt; ?>	
				<a class="read-more" href="<?php echo get_author_posts_url($author_id); ?>">Read Further &raquo;</a>	
			</p>
		<? echo $args['after_widget'];	
		
		
	}
}

register_widget('Editor');
