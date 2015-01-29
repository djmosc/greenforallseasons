<?php global $wp_query; ?>
<?php get_header(); ?>

<section id="index">

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
				<img src="http://lorempixel.com/600/600" />
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
		<div class="widget_editors-letter">
			<img class="image" src="http://lorempixel.com/180/180" />
			<div class="script">
				<img src="<?php bloginfo('template_directory'); ?>/images/misc/editors-letter.png" alt="">	
			</div>
			<div class="author">
				<img src="http://lorempixel.com/37/37" />
				victoria-anne bull
			</div>
			<div class="date">
				february 01,2015
			</div>
			<p>
				“How work influences personal style and vice versa is an interesting question, and in this issue we have approached the subject from a number of different angles...”		
				<a class="read-more" href="">Read Further &raquo;</a>	
			</p>
			
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

</section><!-- #index -->
<?php get_footer(); ?>
