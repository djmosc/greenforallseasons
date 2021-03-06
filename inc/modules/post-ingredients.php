<?php if( $ingredients = get_field('ingredients') ): ?>
<?php $column_1 = array_slice($ingredients, 0, count($ingredients) / 2); ?>
<?php $column_2 = array_slice($ingredients, count($ingredients) / 2); ?>
<div class="post-ingredients">
	<header class="header">
		<h5 class="title"><?php _e("What you'll need", THEME_NAME); ?></h5>
	</header>
	<div class="content">
		
		<ul class="ingredient-list">
			<?php 
			foreach( $column_1 as $ingredient) : 
				$class = array();
				$class[] = ( $ingredient['highlight'] ) ? 'bold' : '';?>
			<li class="<?php echo implode( ' ', $class);  ?>"><?php echo $ingredient['ingredient']; ?></li>
			<?php endforeach; ?>
		</ul>
		<ul class="ingredient-list">
			<?php 
			foreach( $column_2 as $ingredient) :
				$class = array();
				$class[] = ( $ingredient['highlight'] ) ? 'bold' : '';
			?>
			<li class="<?php echo implode( ' ', $class);  ?>"><?php echo $ingredient['ingredient']; ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<footer class="footer">
		<?php include_module('share', array(
			'title' => get_the_title(),
			'url' => get_permalink(),
			'image_url' => get_post_thumbnail_src(),
			'excerpt' => get_the_excerpt(),
			'email' => true
		)); ?>
		<a class="print-btn"><?php _e("Print Recipe", THEME_NAME); ?></a>
	</footer>
</div>
<?php endif; ?>