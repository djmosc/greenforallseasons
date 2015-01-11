<div class="post-meta clearfix">
	<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
	<a class="comments-btn" href="<?php the_permalink(); ?>#comments"><?php comments_number( '0', '1', '%' ); ?></a>
	<?php endif; ?>
	<span class="shares-btn addthis_counter" addthis:url="<?php the_permalink(); ?>"><span></span></span>
	<span class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
</div>