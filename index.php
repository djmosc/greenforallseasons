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

		<div class="widget widget_posts">
			<h5 class="widget-title">Most Popular</h5>
			<ul class="posts size-medium">
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


		<div class="widget widget_posts">
			<h5 class="widget-title">Must Read</h5>
			<div class="widget-description">
				The six things you need to see today
			</div>			
			<ul class="posts size-small">
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
</section><!-- #index -->

		<?php include_module('related-posts'); ?>

<?php get_footer(); ?>
