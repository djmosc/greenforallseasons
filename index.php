<?php global $wp_query; ?>
<?php get_header(); ?>

<section id="index">

<div class="container">
	
	<div class="aaaowl-carousel">
		<article <?php post_class('clearfix post-slide item'); ?>>
			<div class="container inner">
				<div class="post-header">
					<span class="header"><?php _e('Top Stories', 'greenforallseasons' );  ?></span>
					<div class="post-item">
						<div class="category">
							<span class="name category-name green-label">Bites</span>
						</div>
						<h2 class="post-title"><a href="<?php the_permalink(); ?>">Nourish banana &amp; pomegranate pancakes</a></h2>
						<div class="post-excerpt">
						 	In eget dolor augue. In vehicula, ex in efficitur scelerisque, nibh justo imperdiet magna, eu efficitur mauris orci ullamcorper lectus. 
							<?php //echo get_excerpt(60); ?>
						</div>
						<div class="author">
							<div class="image circle">
								<img src="http://lorempixel.com/100/100" />
							</div>
							<span class="name">victoria - anne bull</span>
						</div>						
						<div class="read-more">
							<a class="read-more-btn secondary-btn" href="<?php the_permalink(); ?>"><?php _e("Read More", THEME_NAME); ?></a>
						</div>
						<?php get_template_part('inc/post-meta'); ?>
					</div>
				</div>
				<figure class="thumbnail">
					<a href="<?php the_permalink(); ?>" class="overlay-btn">
						<img src="http://lorempixel.com/840/470" />
					</a>
				</figure>
			</div>
		</article>
	</div>

	<div class="container">

		<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</h1>
		<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</h2>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</h3>
		<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</h4>
		<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</h5>
		<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</h6>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>

		<p><a class="primary-btn">Hello</a></p>

		<a class="category-btn overlay-btn" >
			<span class="name category-name green-label">Bites</span>
			<div class="image">
				<img src="http://lorempixel.com/400/200" />
			</div>
			<div class="overlay">
				<h4 class="sub-name">Sub title</h4>
				<span class="primary-btn"><?php _e("Read all features &raquo;", THEME_NAME); ?></span>
			</div>
		</a>

		<div class="author">
			<div class="image circle">
				<img src="http://lorempixel.com/100/100" />
			</div>
			<span class="name">This is a very long name</span>
		</div>

		<div class="post-item">
			<div class="category">
				<span class="name category-name green-label">Bites</span>
			</div>
			<div class="image">
				<a href="<?php the_permalink(); ?>">
					<img src="http://lorempixel.com/600/600" />
				</a>
			</div>
			<header class="header post-header">
				<div class="author">
					<div class="image circle">
						<img src="http://lorempixel.com/100/100" />
					</div>
					<span class="name">This is a very long name</span>
				</div>

				<h3 class="title post-title"><a>This is the post title and it is very long</a></h3>
				<div class="excerpt">
					<p>Lorem ipsum dolor sit amet, dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco...</p>
				</div>
				<div class="post-meta">
					<span class="date">13th Februray, 2014</span>
				</div>
				<a class="primary-btn"><?php _e("Read More", THEME_NAME); ?></a>
			</header>
		</div>

		<p><input type="text" placeholder="Enter your email" /></p>

		<p><textarea placeholder="This is the placeholder"></textarea></p>

		<p><input type="submit" value="Submit" /></p>

		<p><buttton type="submit" value="Submit" /></p>


		<?php gravity_form(2, false); ?>

		<div id="editors-letter" class="widget widget_editors-letter">
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

		<div id="popular-posts" class="widget widget_popular_posts">
			<h5 class="widget-title">Most Popular</h5>
			<ul class="posts">
				<li <?php post_class('clearfix post-item medium'); ?>>
					<div class="image">
						<a href="<?php the_permalink(); ?>">
							<img src="http://lorempixel.com/65/65" />
						</a>
					</div>
					<header class="header post-header">
						<h3 class="title post-title"><a>This is the post title and</a></h3>
						<div class="excerpt">
							<p>Lorem ipsum dolor sit amet, dolore magna aliqua. Ut enim ad minim veniam...</p>
						</div>
					</header>
				</li>
				<li <?php post_class('clearfix post-item medium'); ?>>
					<div class="image">
						<a href="<?php the_permalink(); ?>">
							<img src="http://lorempixel.com/65/65" />
						</a>
					</div>
					<header class="header post-header">
						<h3 class="title post-title"><a>This is the post title and it is very long</a></h3>
						<div class="excerpt">
							<p>Lorem ipsum dolor sit amet, dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco...</p>
						</div>
					</header>
				</li>	
				<li <?php post_class('clearfix post-item medium'); ?>>
					<div class="image">
						<a href="<?php the_permalink(); ?>">
							<img src="http://lorempixel.com/65/65" />
						</a>
					</div>
					<header class="header post-header">
						<h3 class="title post-title"><a>This is the post title and </a></h3>
						<div class="excerpt">
							<p>Lorem ipsum dolor sit amet, dolore magna aliqua. Ut enim ad minim veniam,
							...</p>
						</div>
					</header>
				</li>																
			</ul>
		</div>	


		<div id="must-read" class="widget widget_must-read">
			<h5 class="widget-title">Must Read</h5>
			<ul class="posts">
				<li <?php post_class('clearfix post-item small'); ?>>
					<div class="image">
						<a href="<?php the_permalink(); ?>">
							<img src="http://lorempixel.com/95/95" />
						</a>
					</div>
					<header class="header post-header">
						<h3 class="title post-title"><a>Style.com</a></h3>
						<div class="excerpt">
							<p>Lorem ipsum dolor sit amet, dolore magna aliqua.</p>
						</div>
					</header>
				</li>
				<li <?php post_class('clearfix post-item small'); ?>>
					<div class="image">
						<a href="<?php the_permalink(); ?>">
							<img src="http://lorempixel.com/95/95" />
						</a>
					</div>
					<header class="header post-header">
						<h3 class="title post-title"><a>ELLE UK</a></h3>
						<div class="excerpt">
							<p>Lorem ipsum dolor sit amet, dolore magna aliqua.</p>
						</div>
					</header>
				</li>
				<li <?php post_class('clearfix post-item small'); ?>>
					<div class="image">
						<a href="<?php the_permalink(); ?>">
							<img src="http://lorempixel.com/95/95" />
						</a>
					</div>
					<header class="header post-header">
						<h3 class="title post-title"><a>ELLE UK</a></h3>
						<div class="excerpt">
							<p>Lorem ipsum dolor sit amet, dolore magna aliqua.</p>
						</div>
					</header>
				</li>	
				<li <?php post_class('clearfix post-item small'); ?>>
					<div class="image">
						<a href="<?php the_permalink(); ?>">
							<img src="http://lorempixel.com/95/95" />
						</a>
					</div>
					<header class="header post-header">
						<h3 class="title post-title"><a>Style.com</a></h3>
						<div class="excerpt">
							<p>Lorem ipsum dolor sit amet, dolore magna aliqua.</p>
						</div>
					</header>
				</li>
				<li <?php post_class('clearfix post-item small'); ?>>
					<div class="image">
						<a href="<?php the_permalink(); ?>">
							<img src="http://lorempixel.com/95/95" />
						</a>
					</div>
					<header class="header post-header">
						<h3 class="title post-title"><a>ELLE UK</a></h3>
						<div class="excerpt">
							<p>Lorem ipsum dolor sit amet, dolore magna aliqua.</p>
						</div>
					</header>
				</li>
				<li <?php post_class('clearfix post-item small'); ?>>
					<div class="image">
						<a href="<?php the_permalink(); ?>">
							<img src="http://lorempixel.com/95/95" />
						</a>
					</div>
					<header class="header post-header">
						<h3 class="title post-title"><a>ELLE UK</a></h3>
						<div class="excerpt">
							<p>Lorem ipsum dolor sit amet, dolore magna aliqua.</p>
						</div>
					</header>
				</li>							
			</ul>		
		</div>

		<div id="connect-with-us" class="widget widget_connect-with-us">
			<span><?php _e('Connect with us'); ?></span>
			<a href="https://twitter.com/G4ASeasons"><?php _e('@G4AS'); ?></a>
			<?php include_module('social-links'); ?>
		</div>

		<div id="shop-now" class="widget widget_shop-now">
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



		<div class="widget_newsletter">
			

		</div>

		<div class="post-carousel owl-carousel">
			<div class="item image-slide">
				<figure class="image">
					<img src="http://lorempixel.com/800/510" />
					<figcaption class="caption" >Personal style and vice versa</figcaption>
				</figure>
				<header class="header">
					<h5 class="title">1. Lorem ipsum dolor sit amet,</h5>
					<div class="description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
					</div>

					<div class="info">
						<?php include_module('share'); ?>
						<span class="page">1 of 6</span>
					</div>
				</header>
			</div>
		</div>
	</div>

</section --><!-- #page -->
<?php get_footer(); ?>
