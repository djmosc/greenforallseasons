<div class="post-share clearfix">
	<div class="share">
		<span class="title"><?php _e("Join the", THEME_NAME); ?><i><?php _e(" Conversation:", THEME_NAME); ?></i></span>
		<?php if(is_single()): ?>
			<?php get_template_part('inc/modules/share-links-large'); ?>
		<?php else: ?>
			<?php get_template_part('inc/modules/share-links'); ?>
		<?php endif; ?>
	</div>
</div>