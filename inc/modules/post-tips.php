<?php if( have_rows('tips') ): ?>
<div class="post-tips">
	<h4 class="title"><?php _e("A few tips", THEME_NAME); ?></h4>
	<ul class="tips">
		<?php while ( have_rows('tips') ) : the_row(); ?>
		<li class="tip"><?php the_sub_field('tip'); ?></li>
		<?php endwhile; ?>
	</ul>
</div>
<?php endif; ?>