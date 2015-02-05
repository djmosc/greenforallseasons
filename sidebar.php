<?php
/**
 * The template for displaying the sidebar.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package greenforallseasons
 * @since greenforallseasons 1.0
 */
?>

<div id="sidebar" >
	<button class="mobile-sidebar-btn menu-btn"></button>
	<?php dynamic_sidebar('default'); ?>

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

		<div id="popular-posts" class="widget widget_posts">
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

		<div id="connect-with-us" class="widget widget_connect-with-us">
			<span><?php _e('Connect with us'); ?></span>
			<a href="https://twitter.com/G4ASeasons"><?php _e('@G4AS'); ?></a>
			<?php include_module('social-links'); ?>
		</div>		


		<div id="must-read" class="widget widget_posts">
			<h5 class="widget-title">Must Read</h5>
			<div class="widget-description">
				The six things you need to see today
			</div>			
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



</div>