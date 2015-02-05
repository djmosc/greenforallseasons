<div class="post-share clearfix">
	<div class="share">
		<span class="title"><?php _e("Join the <i>Conversation</i>", THEME_NAME); ?></span>
		<?php if(is_single()): ?>
			<?php include_module('share-links-large'); ?>
		<?php else: ?>
			<?php include_module('share-links'); ?>
		<?php endif; ?>
	</div>
</div>