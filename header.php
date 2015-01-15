<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package greenforallseasons
 * @since greenforallseasons 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html xmlns:fb="http://ogp.me/ns/fb#" class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 7]>         <html xmlns:fb="http://ogp.me/ns/fb#" class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html xmlns:fb="http://ogp.me/ns/fb#" class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html xmlns:fb="http://ogp.me/ns/fb#" class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html xmlns:fb="http://ogp.me/ns/fb#" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href="<?php echo get_template_directory_uri(); ?>/images/misc/favicon.png" rel="shortcut icon" type="image/x-icon">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div id="tortilla">
	<div id="lightbox" class="lightbox">
		<button class="close-btn"></button>
		<div class="preloader"></div>
		<div class="content"></div>
		<div class="overlay"></div>
	</div>
	<header id="header" role="banner">
		<div class="top">
			<div class="inner container">
				<h1 class="logo-container">
					<span class="tagline"><?php echo esc_attr( get_bloginfo( 'description', 'display' ) ); ?></span>
					<a class="icon icon-logo" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a>
				</h1>
				<div class="menu-btn-container">
					<a class="menu-btn"></a>
				</div>
				<?php wp_nav_menu( array( 'depth' => 0, 'theme_location' => 'primary', 'menu_class' => 'clearfix menu', 'container' => 'nav', 'container_class' => 'primary-navigation navigation' )); ?>
			</div>
		</div>
		<div class="bottom">
			<div class="inner container">
				<div class="info">
					<?php get_search_form(); ?>
					<span class="follow-us"><?php _e('Follow us', 'greenforallseasons') ?></span>
					<?php include_module('social-links'); ?>
				</div>
			</div>
		</div>
	</header><!-- #header -->
	<div id="main" class="site-main" role="main">
