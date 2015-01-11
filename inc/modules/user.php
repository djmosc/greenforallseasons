<div class="user" >
	<figure class="thumbnail">
		<?php echo get_avatar($user->ID, 320); ?>
	</figure>
	<div class="content">
		<h4 class="title"><?php echo $user->display_name; ?></h4>
		<?php if( !empty($user_meta['job_role']) ) : ?>
		<p class="job-role"><?php echo $user_meta['job_role']; ?></p>
		<?php endif; ?>
		<hr />
		<?php if( !empty($user_meta['description']) ) : ?>
		<div class="description">
			<?php echo $user_meta['description']; ?>
		</div>
		<?php endif; ?>
		<div class="read-more">
			<a class="primary-btn" href="<?php echo get_author_posts_url($id); ?>"><?php _e("View Articles"); ?></a>
		</div>
		<div class="social">
			<span class="label"><?php _e("Follow"); ?> <?php echo $user_meta['first_name']; ?></span>
			<ul class="social-links">
				<?php if( !empty($user_meta['facebook']) ): ?>
				<li>
					<a href="<?php echo $user_meta['facebook']; ?>" class="facebook-btn"></a>
				</li>
				<?php endif; ?>
				<?php if( !empty($user_meta['twitter']) ): ?>
				<li>
					<a href="<?php echo 'http://twitter.com/'.$user_meta['twitter']; ?>" class="twitter-btn"></a>
				</li>
				<?php endif; ?>
				<?php if( !empty($user_meta['instagram']) ): ?>
				<li>
					<a href="<?php echo 'http://instagram.com/'.$user_meta['instagram']; ?>" class="instagram-btn"></a>
				</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div>