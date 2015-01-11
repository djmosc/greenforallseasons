<?php
/**
 * The template for displaying the sidebar.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package overthemoonblog
 * @since overthemoonblog 1.0
 */
?>

<div id="sidebar" >
	<button class="mobile-sidebar-btn menu-btn"></button>
	<?php dynamic_sidebar('default'); ?>
</div>