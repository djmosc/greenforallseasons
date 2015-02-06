<?php global $wp_query; ?>
<?php get_header(); ?>

<section id="index">

	<div class="container">
		
		<div class="owl-carousel featured-carousel">
			<article <?php post_class('item'); ?>>
				<?php include_module('post-slide', array(
					'title' => 'Nourish banana &amp; pomegranate pancakes',
					'excerpt' => "In eget dolor augue. In vehicula, ex in efficitur scelerisque, nibh justo imperdiet magna, eu efficitur mauris orci ullamcorper lectus.",
					'url' => '#',
					'image_url' => 'http://lorempixel.com/840/470',
					'author' => array(
						'name' => 'victoria - anne bull',
						'image_url' => 'http://lorempixel.com/100/100'
					),
					'category' => array(
						'name' => "Bites"
					),
					'date' => 'the date'
				)); ?>
			</article>
					
		</div>

		
		<?php include_module('post-item', array(
			'title' => 'Nourish banana &amp; pomegranate pancakes',
			'excerpt' => "In eget dolor augue. In vehicula, ex in efficitur scelerisque, nibh justo imperdiet magna, eu efficitur mauris orci ullamcorper lectus.",
			'url' => '#',
			'image_url' => 'http://lorempixel.com/600/600',
			'author' => array(
				'name' => 'victoria - anne bull',
				'image_url' => 'http://lorempixel.com/100/100'
			),
			'category' => array(
				'name' => "Bites"
			),
			'read_more' => true
		)); ?>

		<p><input type="text" placeholder="Enter your email" /></p>

		<p><textarea placeholder="This is the placeholder"></textarea></p>

		<p><input type="submit" value="Submit" /></p>

		<p><buttton type="submit" value="Submit" /></p>

		<?php gravity_form(2, false); ?>

		<div id="editors-letter" class="widget widget_editors">
			<img class="image" src="http://lorempixel.com/180/180" />
			<div class="script">
				<img src="<?php bloginfo('template_directory'); ?>/images/misc/editors-letter.png" alt="">	
			</div>
			<div class="author">
				<div class="image circle">
					<img src="http://lorempixel.com/100/100" />
				</div>
				<span class="name">victoria - anne bull</span>
			</div>	
			<div class="date">
				february 01,2015
			</div>
			<p>
				“How work influences personal style and vice versa is an interesting question, and in this issue we have approached the subject from a number of different angles...”		
				<a class="read-more" href="">Read Further &raquo;</a>	
			</p>
			
		</div>

		<div class="widget widget_posts size-medium">
			<h5 class="widget-title">Most Popular</h5>
			<ul class="posts">
				<li <?php post_class(); ?>>
					<?php include_module('post-item', array(
						'title' => 'Nourish banana &amp; pomegranate pancakes',
						'excerpt' => "In eget dolor augue. In vehicula, ex in efficitur scelerisque, nibh justo imperdiet magna, eu efficitur mauris orci ullamcorper lectus.",
						'url' => '#',
						'image_url' => 'http://lorempixel.com/65/65',
						'class' => 'medium'
					)); ?>
				</li>

				<li <?php post_class(); ?>>
					<?php include_module('post-item', array(
						'title' => 'Nourish banana &amp; pomegranate pancakes',
						'excerpt' => "In eget dolor augue. In vehicula, ex in efficitur scelerisque, nibh justo imperdiet magna, eu efficitur mauris orci ullamcorper lectus.",
						'url' => '#',
						'image_url' => 'http://lorempixel.com/65/65',
						'class' => 'medium'
					)); ?>
				</li>

				<li <?php post_class(); ?>>
					<?php include_module('post-item', array(
						'title' => 'Nourish banana &amp; pomegranate pancakes',
						'excerpt' => "In eget dolor augue. In vehicula, ex in efficitur scelerisque, nibh justo imperdiet magna, eu efficitur mauris orci ullamcorper lectus.",
						'url' => '#',
						'image_url' => 'http://lorempixel.com/65/65',
						'class' => 'medium'
					)); ?>
				</li>
																				
			</ul>
		</div>	


		<div class="widget widget_posts size-small">
			<h5 class="widget-title">Must Read</h5>
			<div class="widget-description">
				The six things you need to see today
			</div>			
			<ul class="posts">
				<?php for( $i = 0; $i < 5; $i++) : ?>
				<li <?php post_class(); ?>>
					<?php include_module('post-item', array(
						'title' => 'Nourish banana &amp; pomegranate pancakes',
						'excerpt' => "In eget dolor augue. In vehicula, ex in efficitur scelerisque, nibh justo imperdiet magna, eu efficitur mauris orci ullamcorper lectus.",
						'url' => '#',
						'image_url' => 'http://lorempixel.com/100/100',
						'class' => 'small'
					)); ?>
				</li>
				<?php endfor; ?>										
			</ul>		
		</div>

		<div class="widget widget_social">
			<span><?php _e('Connect with us'); ?></span>
			<a href="https://twitter.com/G4ASeasons"><?php _e('@G4AS'); ?></a>
			<?php include_module('social-links'); ?>
		</div>

		<div class="widget widget_products">
			<h5 class="widget-title">Green's Most Wanted</h5>
			<div class="widget-description">
				Nullam sed bibendum nulla, id ultrices magna.
				<a href="#" class="primary-btn">Shop Now</a>
			</div>
			<ul>
				<li><a href=""><img src="http://lorempixel.com/160/240" /></a></li>
				<li><a href=""><img src="http://lorempixel.com/160/240" /></a></li>
				<li><a href=""><img src="http://lorempixel.com/160/240" /></a></li>
				<li><a href=""><img src="http://lorempixel.com/160/240" /></a></li>
			</ul>
		</div>	

		<div class="post-carousel owl-carousel">
			
			<?php for( $i = 0; $i < 5; $i++) : ?>
			<div class="item image-slide">
				<figure class="image">
					<img src="http://lorempixel.com/800/510" />
				</figure>
				<header class="header">
					<figcaption class="caption" >Personal style and vice versa</figcaption>
					<h5 class="title">1. Lorem ipsum dolor sit amet,</h5>
					<div class="description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
					</div>

					<div class="info">
						<?php include_module('share', array(
							'title' => get_the_title(),
							'url' => '',
							'image_url' => '',
							'excerpt' => ''
						)); ?>
						<div class="pages"><span class="page">1 of 6</span></div>
					</div>
				</header>
			</div>
			<?php endfor; ?>			
		</div>

		<div id="author-archive">
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
		</div>

		<div class="more-from">
		    <div class="inner">
		        <header class="header lined-header">
		            <h3 class="title skew"><span><?php _e("More by", THEME_NAME); ?> Author</span></h3>
		        </header>
		        <ul class="posts clearfix">
		            <li class="span one-third">
		                <?php include_module('post-item', array(
							'title' => '4 Flattering dresses',
							'excerpt' => "Vivamus lobortis leo eget viverra ornare. Pellentesque tempus nibh sit amet tincidunt lobortis...",
							'url' => '#',
							'image_url' => 'http://lorempixel.com/190/190',
							'category' => array(
								'name' => "Style"
							)
						)); ?>

		            </li>
		            		            		            			            
		        </ul>
		    </div>

		</div>

		<div class="post-ingredients">
			<header class="header">
				<h5 class="title"><?php _e("What you'll need", THEME_NAME); ?></h5>
			</header>
			<div class="content">
				<ul class="ingredient-list">
					<ki>Lorem ipsum dolor sit amet</li>
					<li>consectetur adipisicing elit</li>
					<li>sed do eiusmod</li>
					<li>tempor incididunt ut labore et dolore </li>
					<li>quis nostrud exercitation ullamco laboris</li>
					<li>consequat. Duis aute irure dolor in </li>
					<li>cillum dolore eu fugiat nulla pariatur proident</li>
					<li>sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
				</ul>
				<ul class="ingredient-list">
					<ki>Lorem ipsum dolor sit amet</li>
					<li>consectetur adipisicing elit</li>
					<li>sed do eiusmod</li>
					<li>tempor incididunt ut labore et dolore </li>
					<li>quis nostrud exercitation ullamco laboris</li>
					<li>consequat. Duis aute irure dolor in </li>
					<li>cillum dolore eu fugiat nulla pariatur proident</li>
					<li>sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
				</ul>
			</div>
			<footer class="footer">
				<?php include_module('share', array(
					'title' => get_the_title(),
					'url' => '',
					'image_url' => '',
					'excerpt' => ''
				)); ?>
				<a class="print-btn"><?php _e("Print Recipe", THEME_NAME); ?></a>
			</footer>
		</div>

		<div class="post-tips">
			<h4 class="title"><?php _e("A few tips", THEME_NAME); ?></h4>
			<ul class="tips">
				<li class="tip">Vivamus lobortis leo eget viverra ornare.</li>
				<li class="tip">Vivamus lobortis leo eget viverra ornare.</li>
				<li class="tip">Vivamus lobortis leo eget viverra ornare.</li>
			</ul>
		</div>

	</div>

	<div class="related-posts">
		<div class="container">
			<div class="widget-header">
				<h5 class="widget-title">You Might Also Like</h5>
				<a href="">see all archive »</a>
			</div>
			<ul class="posts">
				<li>
					<?php include_module('post-item', array(
						'title' => '4 Flattering dresses',
						'excerpt' => "Vivamus lobortis leo eget viverra ornare. Pellentesque tempus nibh sit amet tincidunt lobortis...",
						'url' => '#',
						'image_url' => 'http://lorempixel.com/190/190',
						'date' => 'the date',
						'author' => array(
							'name' => 'victoria - anne bull',
							'image_url' => 'http://lorempixel.com/100/100'
						),
						'category' => array(
							'name' => "Style"
						),
						'read_more' => true
					)); ?>			
				</li>

				<li>
					<?php include_module('post-item', array(
						'title' => '4 Flattering dresses',
						'excerpt' => "Vivamus lobortis leo eget viverra ornare. Pellentesque tempus nibh sit amet tincidunt lobortis...",
						'url' => '#',
						'image_url' => 'http://lorempixel.com/190/190',
						'date' => 'the date',
						'author' => array(
							'name' => 'victoria - anne bull',
							'image_url' => 'http://lorempixel.com/100/100'
						),
						'category' => array(
							'name' => "Style"
						),
						'read_more' => true
					)); ?>			
				</li>

				<li>
					<?php include_module('post-item', array(
						'title' => '4 Flattering dresses',
						'excerpt' => "Vivamus lobortis leo eget viverra ornare. Pellentesque tempus nibh sit amet tincidunt lobortis...",
						'url' => '#',
						'image_url' => 'http://lorempixel.com/190/190',
						'date' => 'the date',
						'author' => array(
							'name' => 'victoria - anne bull',
							'image_url' => 'http://lorempixel.com/100/100'
						),
						'category' => array(
							'name' => "Style"
						),
						'read_more' => true
					)); ?>			
				</li>
						
			</ul>			
		</div>
	</div>	

</section><!-- #index -->
<?php get_footer(); ?>
