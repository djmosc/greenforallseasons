<?php get_header(); ?>
		<div id="author-archive">

		</div>


<section id="author-archive">
	<div class="container inner">
		
		<div class="posts clearfix">
			<div class="filters">
				<div class="inner">
					<h2 class="title"><?php _e("Archive", THEME_NAME); ?></h2>
					<p class="label">
						<?php _e("Viewing:", THEME_NAME); ?>

						<span class="red"><?php echo (single_term_title('', false)) ? single_term_title() : 'All'; ?></span>
					</p>
					<form mathod="GET">
						<div class="field">
							<?php wp_dropdown_categories(array('class' => 'category', 'show_option_all' => __("All Categories", THEME_NAME))); ?>
						</div>
						<div class="field">
							<select class="date">
								<option value=""><?php _e("Select a date", THEME_NAME); ?></option>
								<?php wp_get_archives(array('format' => 'option')); ?>
							</select>
						</div>
						<div class="field">
							<input type="text" class="query" name="s" placeholder="Search" value="<?php echo esc_attr( get_search_query() ); ?>" />
							<button type="submit" class="submit-btn search-btn" ></button>
						</div>
					</form>
				</div>
			</div>
			
			<img class="featured-image" src="http://lorempixel.com/460/460/people/" />
			<h3 class="name">Carl Brown</h3>
			<span class="title">Head Bartender at Dishoom</span>
			<p>Suspendisse vestibulum dignissim quam. Integer vel augue. Phasellus nulla purus, interdum ac, venenatis non, varius rutrum, leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis a eros. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce magna mi, porttitor quis, convallis eget, sodales ac, urna. Phasellus luctus venenatis magna. Vivamus eget lacus. Nunc tincidunt convallis tortor. Duis eros mi, dictum vel, fringilla sit amet, fermentum id, sem. Phasellus nunc enim, faucibus ut, laoreet in, consequat id, metus. Vivamus dignissim. Cras lobortis tempor velit. Phasellus nec diam ac nisl lacinia tristique. Nullam nec metus id mi dictum dignissim. Nullam quis wisi non sem lobortis condimentum. Phasellus pulvinar, nulla non aliquam eleifend, tortor wisi scelerisque felis, in sollicitudin arcu ante lacinia leo.</p>

			<ul class="socials">
				<li>
					<a class="twitter" href="">@carlbrown</a>
				</li>
				<li>
					<a class="facebook" href="">http://facebook.com/carlbrown</a>
				</li>
				<li>
					<a class="web" href="">http://dishoom.com</a>
				</li>
			</ul>	

			<?php if(have_posts()): ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php if( has_post_thumbnail() ): ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<a class="overlay-btn btn" href="<?php the_permalink(); ?>">
                    <div class="thumbnail">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <div class="overlay">
                        <header class="header">
                            <h5 class="title"><?php the_title();?></h5>
                            <div class="meta"><span class="date"><?php the_time(get_option('date_format')); ?></span></div>
                            <span class="primary-btn arrow-right-btn read-more-btn"><?php _e("Read", THEME_NAME); ?></span>
                        </header>
                    </div>
                </a>
			</article>
			<?php endif; ?>
			<?php endwhile; // end of the loop. ?>
			<?php else: ?>
			<div class="not-found">
				<h3 class="title"><?php _e("No posts found", THEME_NAME); ?></h3>
			</div>
			<?php endif; ?>
		</div>
		<footer class="archive-footer footer">
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
		</footer>
	</div>
</section><!-- #page -->
<?php get_footer(); ?>