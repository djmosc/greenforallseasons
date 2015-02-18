<div class="post-meta">
	<?php if( !empty($date) ) : ?>
	<?php 
		$today = date('F d, Y');
		if($date == $today) {
		  $date = 'Today';
		} else {
		  $date = $date;
		}
	?>		
	<span class="post-date"><?php echo $date; ?></span>
	<?php endif; ?>
</div>