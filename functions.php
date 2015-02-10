<?php

define('THEME_NAME', 'greenforallseasons');

$template_directory = get_template_directory();

$template_directory_uri = get_template_directory_uri();

require( $template_directory . '/inc/default/functions.php' );

require( $template_directory . '/inc/default/hooks.php' );

require( $template_directory . '/inc/default/shortcodes.php' );

// Custom Actions

add_action( 'after_setup_theme', 'custom_setup_theme' );

add_action( 'init', 'custom_init');

add_action( 'wp', 'custom_wp');

add_action( 'widgets_init', 'custom_widgets_init' );

add_action( 'wp_enqueue_scripts', 'custom_scripts', 30);

add_action( 'wp_print_styles', 'custom_styles', 30);

add_action( 'wp_ajax_post_carousel', 'custom_ajax_post_carousel' );

add_action( 'wp_ajax_nopriv_post_carousel', 'custom_ajax_post_carousel' );

// Custom Filters

add_filter( 'the_content_feed', 'custom_the_content_feed', 10, 2);

add_filter( 'pre_option_link_manager_enabled', '__return_true' );

add_filter( 'comment_form_defaults', 'custom_comment_form_defaults');

add_filter( 'body_class', 'custom_body_classes', 10, 2 );




//add_filter('parse_query', 'custom_parse_query');

//Custom shortcodes

remove_shortcode('gallery');

add_shortcode( 'gallery', 'custom_gallery' );


function custom_setup_theme() {
	
	add_theme_support( 'automatic-feed-links' );
	
	add_theme_support( 'post-thumbnails' );
	
	add_theme_support( 'html5' );

	add_theme_support('editor_style');

	add_post_type_support('page', 'excerpt');


	register_nav_menus( array(
		'primary' => __( 'Primary', THEME_NAME ),
		'secondary' => __( 'Secondary', THEME_NAME ),
	) );

	add_editor_style('css/editor-style.css');

}

function custom_init(){
	global $template_directory;

	require( $template_directory . '/inc/classes/bfi-thumb.php' );

	require( $template_directory . '/inc/classes/custom-post-type.php' );

	if(function_exists('get_field')) {

			
		$products_uri = get_page_uri(get_field('products_page', 'options'));

		$products = new Custom_Post_Type( 'Product', 
			array(
				'rewrite' => array('with_front' => false, 'slug' => $products_uri),
				'capability_type' => 'post',
				'publicly_queryable' => true,
				'has_archive' => true, 
				'hierarchical' => true,
				'menu_position' => null,
				'menu_icon' => 'dashicons-products',
				'supports' => array('title',  'page-attributes', 'thumbnail'),
				'plural' => "Products",		
			)
		);

		$products->register_taxonomy("Product Category",
			array(
				'name' => 'product_cat'
			),
			array(
				'plural' => "Product Categories"
			)
		);

		$products->register_post_type();
	}
}

if( function_exists('acf_add_options_page') ) acf_add_options_page();

function custom_wp(){
	
}

function custom_widgets_init() {
	global $template_directory;

	require( $template_directory . '/inc/widgets/post.php' );

	require( $template_directory . '/inc/widgets/products.php' );

	require( $template_directory . '/inc/widgets/category.php' );

	require( $template_directory . '/inc/widgets/posts.php' );

	require( $template_directory . '/inc/widgets/socials.php' );
	
	register_sidebar( array(
		'name' => __( 'Default', THEME_NAME ),
		'id' => 'default',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',	
	) );

	register_sidebar( array(
		'name' => __( 'Homepage', THEME_NAME ),
		'id' => 'homepage',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>'
	) );

	register_sidebar( array(
		'name' => __( 'Categories', THEME_NAME ),
		'id' => 'categories',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>'
	) );

	
}

function custom_scripts() {
	global $template_directory_uri, $post;

	wp_enqueue_script('jquery');

	wp_enqueue_script('modernizr', $template_directory_uri.'/js/libs/modernizr.min.js', null, '', true);
	//wp_enqueue_script('plugins', $template_directory_uri.'/js/plugins.js', array('jquery', 'modernizr'), '', true);
	wp_enqueue_script('owlcarousel', $template_directory_uri.'/js/plugins/jquery.owlcarousel.js', array('jquery'), '', true);
	wp_enqueue_script('imagesloaded', $template_directory_uri.'/js/plugins/jquery.imagesloaded.js', array('jquery'), '', true);
	wp_enqueue_script('main', $template_directory_uri.'/js/main.js', array('jquery', 'modernizr'), '', true);

	wp_localize_script( 'main', 'url', array(
		'template' => $template_directory_uri,
		'base' => site_url(),
		'ajax' => admin_url('admin-ajax.php')
	));

	if( !empty($post) ) {
		wp_localize_script( 'main', 'post', array(
			'id' => $post->ID
		));
	}

	wp_register_script('ajaxposts', $template_directory_uri.'/js/plugins/min/jquery.ajaxposts.js', array('jquery'), '', true);
	wp_register_script('expander', $template_directory_uri.'/js/plugins/jquery.expander.js', array('jquery'), '', true);
}


function custom_styles() {
	global $wp_styles, $template_directory_uri;

	wp_enqueue_style( 'style', $template_directory_uri . '/css/style.css' );	
	wp_enqueue_style( 'fonts', '//fast.fonts.net/cssapi/50464cb2-8cdc-4173-9dd4-112199df03a0.css' );	

}

function custom_the_content_feed($content, $type){
	ob_start();
    get_template_part('inc/content');
    $content = ob_get_contents();
    ob_end_clean();

	return $content;
}

function get_featured_post(){
	if($featured_post = get_field('featured_post', 'options')) return $featured_post;
	return get_latest_post();
}

function get_post_images() {
	global $post, $posts, $wpdb;

	$url = $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	$urls = array($url);

	if($images = get_field('images')) {
		foreach($images as $image) {
			$url = $image['url'];
			if($url != $thumbnail_url) $urls[] = $url; 
		}
	} else {
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		
		$post_images = ( !empty($matches[1]) ) ? $matches[1] : null;
		$images = array();

		if( $post_images ) {
			

			foreach($post_images as $post_image) {
				$url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $post_image );
				if($url != $thumbnail_url) $urls[] = $url; 
			}

			
		}
	}

	$guids = implode("', '", $urls);
	$images = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE guid IN ('$guids') ORDER BY FIELD(guid, '$guids')");

	return $images;
}


function get_rs_products($folder, $limit = 100) {
	$api = RS()->api;

	$data = ( !empty($folder) ) ? $api->get('/favorites', array('folder' => $folder, 'limit' => $limit)) : null;

	return ( isset($data->favorites) ) ? $data->favorites : null;
}

function custom_comment_form_defaults($args){
	$args['title_reply'] = '<span class="title">'.__( 'Join the conversation' ).'</span>';
	$args['title_reply_to'] = '<span class="title">'.__( 'Join the conversation' ).'</span>';
	$args['comment_notes_before'] = '';
	//$args['cancel_reply_link'] = __( 'Cancel reply' );
	//$args['label_submit'] = __( 'Post Comment' );
	return $args;
}

function custom_ajax_post_carousel(){
	global $wp_query, $post;

	$post_id = (isset($_POST['post_id'])) ? $_POST['post_id'] : null;

	if($post_id) {
		query_posts(array('p' => $post_id));
		if(have_posts()) {
			while(have_posts()) {
				the_post();
				get_template_part('inc/post-carousel');
			}
		}
	}
	exit;
}

function custom_gallery( $atts ) {

	$output = '';

    extract(shortcode_atts(array(
        'ids'      => array()
    ), $atts));

    $ids = explode(',', $atts['ids']);

   	if( !empty($ids) ){
   		ob_start();
	    ?>
	    <div class="post-carousel owl-carousel" >
			
		<?php foreach($ids as $id):
			
			$image = wp_get_attachment_image_src($id, array('height' => 500, 'bfi_thumb' => true));
			$image_info = get_post($id);
			?>
			<div class="item">
				<img src="<?php echo $image[0]; ?>" data-id="<?php echo $id; ?>" />
				<?php if($image_info->post_title || $image_info->post_excerpt ): ?>
				<div class="content">
					<?php if( $image_info->post_title ): ?>
					<h4 class="title"><?php echo $image_info->post_title; ?></h4>
					<?php endif; ?>
					<?php if( $image_info->post_excerpt ): ?>
					<div class="description"><?php echo $image_info->post_excerpt; ?></div>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	    </div>
	    <?php
	    $output = ob_get_contents();
		ob_end_clean();
    }
	return $output;
}

function get_post_category($id = '') {
	global $post;

	$id = ( $id ) ? $id : $post->ID;
	
	$terms = get_the_terms($id, 'category');
	if( !empty($terms) ) {
		$term = array_pop($terms);
		$term_id = ( !empty($term->term_id) ) ? $term->term_id : 0;

		return get_top_level_term($term_id, 'category');
	}

	return null;
}

function get_avatar_url($author_id, $size){
    $get_avatar = get_avatar( $author_id, $size );
    preg_match("/src='(.*?)'/i", $get_avatar, $matches);
    return ( $matches[1] );
}


function custom_body_classes( $wp_classes, $extra_classes )
{
    $blacklist = array( 'author' );

    $wp_classes = array_diff( $wp_classes, $blacklist );
	return array_merge( $wp_classes, (array) $extra_classes );
}

