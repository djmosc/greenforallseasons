
<?php   
$args = array();    
$tags = wp_get_post_tags($post->ID);  

if (!empty($tags)) {  
    $tag_ids = array();  
    foreach($tags as $individual_tag) {
        $tag_ids[] = $individual_tag->term_id;
    }
}
if(isset($tag_ids)){
    $args = array(  
        'post_type' => array('post'),
        'tag__in' => $tag_ids,  
        'post__not_in' => array($post->ID),  
        'showposts' => 4,  // Number of related posts that will be shown.
        'ignore_sticky_posts'=>1  
    );
}

$custom_query = new WP_Query($args);
if ( $custom_query->have_posts() ) : ?>
<div class="related-posts">
    <div class="inner">
        <header class="header lined-header">
            <h3 class="title skew"><span><?php _e("You may also like", THEME_NAME); ?></span></h3>
        </header>
        <ul class="posts clearfix">
            <?php
            $i = 0;
            while ( $custom_query->have_posts() ) : $custom_query->the_post(); 
            ?>
            <li class="span one-fourth break-on-mobile">
                <a <?php post_class('overlay-btn'); ?>>
                    <div class="thumbnail">
                        <?php the_post_thumbnail(array(200, 250, 'bfi_thumb' => true)); ?>
                    </div>
                    <div class="overlay">
                        <header class="header">
                            <h5 class="title"><?php the_title();?></h5>
                            <div class="meta"><span class="date"><?php the_time(get_option('date_format')); ?></span></div>
                            <span href="<?php the_permalink(); ?>" class="primary-btn read-more-btn"><?php _e("Read", THEME_NAME); ?></span>
                        </header>
                    </div>
                </a>
            </li>
            <?php
            $i++;
            endwhile;
        wp_reset_query();
        wp_reset_postdata();
        ?>
        </ul>
    </div>
</div>
<?php endif; ?>