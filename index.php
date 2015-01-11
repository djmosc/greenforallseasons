<?php global $wp_query; ?>
<?php get_header(); ?>

<h2>Nourish 
banana & pomegranate pancakes</h2>
<section id="index">
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
<?php if($paged === 1 && is_front_page()): ?>
	<?php $featured_post = get_featured_post(); ?>

	<?php if($post = $featured_post): setup_postdata( $post ); ?>
	<article id="featured-post" <?php post_class('featured-post clearfix'); ?>>
		<div class="container inner">
			<div class="post-header">
				<?php get_template_part('inc/post-category'); ?>
				<?php $title = get_the_title(); ?>
				<h2 class="post-title <?php echo ( strlen($title) > 30 ) ? 'long' : ''; ?>"><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h2>
				<hr />
				
				<div class="post-excerpt">
					<?php echo get_excerpt(60); ?>
				</div>
				<div class="read-more">
					<a class="read-more-btn black-btn" href="<?php the_permalink(); ?>"><?php _e("Read More", THEME_NAME); ?></a>
				</div>
				<?php get_template_part('inc/post-meta'); ?>
			</div>
			<figure class="thumbnail">
				<a href="<?php the_permalink(); ?>" class="overlay-btn">
				<?php if ( $image = get_field('homepage_image') ) : ?>
					<img src="<?php echo bfi_thumb($image['url'], array('width' => 840, 'height' => 400)); ?>" />
				<?php elseif( has_post_thumbnail()): ?>
					<?php the_post_thumbnail(array( 840, 400, 'bfi_thumb' => true)); ?>
				<?php endif; ?>
				</a>
			</figure>
		</div>
	</article>
	<?php wp_reset_postdata(); ?>

	<div class="homepage-widgets">
		<div class="container inner">
			<?php dynamic_sidebar('homepage'); ?>
		</div>
	</div>

	<?php endif; ?>

<?php endif; ?>
	
	<?php if( !is_front_page() ): ?>
	<header class="container lined-header page-header">
		<h5 class="title"><?php single_cat_title(); ?></h5>
	</header>
	<?php endif; ?>

	<div class="sidebar-container container">
		<div id="content">
			<?php if( have_posts() ) : ?>
			<span class="latest">
				<?php echo ( get_query_var( 'paged' ) ) ? sprintf(__("Page %d"), get_query_var( 'paged' ) ) : __("Latest"); ?>
			</span>
			<div class="posts">
			<?php $i = 0; ?>
			<?php while ( have_posts() ) : the_post();
				if(isset($featured_post) && $featured_post->ID == $post->ID) continue;

				$layout = (function_exists('get_field')) ? get_field('layout') : 'large';
				$class = array('layout-'.$layout);
				$class[] = 'clearfix';
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(implode(' ', $class)); ?>>
					<figure class="featured-image">
						<a href="<?php the_permalink(); ?>" class="overlay-btn">
						<?php 
						switch($layout) :
							case 'large':
							default:

								the_post_thumbnail(array('width' => 820, 'bfi_thumb' => true));
							
							break;
							case 'medium':
								$images = get_post_images();
								if( $images ) :
									$images = array_slice($images, 0, 3);

									foreach($images as $image) :
										$image = wp_get_attachment_image_src($image->ID, array('width' => 260, 'height' => 260, 'bfi_thumb' => true));
									?>
										<img src="<?php echo $image[0]; ?>" />
									<?php
									endforeach;
								endif;
							break;
							case 'small':

								the_post_thumbnail(array('width' => 260, 'height' => 260, 'bfi_thumb' => true));

							break;
						endswitch;
						?>
						</a>
					</figure>	
					<header class="post-header">
						<?php get_template_part('inc/post-category'); ?>
						<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<hr />
						<div class="post-excerpt">
							<?php echo get_excerpt(60); ?>
						</div>
						<div class="read-more">
							<a class="read-more-btn black-btn" href="<?php the_permalink(); ?>"><?php _e("Read More", THEME_NAME); ?></a>
						</div>
						<?php get_template_part('inc/post-meta'); ?>
					</header>
				</article>
				<?php $i++; ?>
				<?php endwhile; // end of the loop. ?>
				
				<div class="pagination">
					<?php
					global $wp_query;

					$big = 999999999;
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages
					) );
					?>
				</div>
			</div>
			<?php else: ?>

			<div class="not-found">
				<h3><?php _e("Sorry, no posts found"); ?></h3>
			</div>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>		
	</div>
</section><!-- #page -->
<?php get_footer(); ?>