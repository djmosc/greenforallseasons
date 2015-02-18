
<?php   

global $post;

$args = array();    
$tags = wp_get_post_tags($post->ID);


if (!empty($tags)) {  

    $tag_ids = array();  
    foreach($tags as $individual_tag) {
        $tag_ids[] = $individual_tag->term_id;
    }
}
//if(isset($tag_ids)){
    $args = array(  
        'post_type' => array('post'),
        // 'tag__in' => $tag_ids,  
        // 'post__not_in' => array($post->ID),  
        'showposts' => 3,  // Number of related posts that will be shown.
        'ignore_sticky_posts'=>1  
    );
//}

$custom_query = new WP_Query($args);
if ( $custom_query->have_posts() ) : ?>
<div id="related-posts" class="related-posts">
    <div class="container inner">
        <div class="widget-header">
            <h4 class="widget-title"><?php _e("You Might Also Like", THEME_NAME); ?></h4>
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"><?php _e("See all archive &raquo;", THEME_NAME) ?></a>
        </div>
        <ul class="posts clearfix">
            <?php
            $i = 0;
            while ( $custom_query->have_posts() ) : $custom_query->the_post(); 
            ?>

                        <?php 
                            $title =  get_the_title();
                            $image_size = array('width' => 320, 'height' => 320);
                            $image = get_post_thumbnail_src($image_size);                           
                            $excerpt = get_excerpt(150);
                            $url = get_permalink(); 
                            $author_img_url = get_avatar_url ( get_the_author_meta('ID'), $size = '40' );
                            $author_id = get_the_author_meta('ID');
                            $date = get_the_time('F d, Y');
                            $category = get_post_category();     
                        ?>            
            <li>
                <?php include_module('post-item', array(
                    'title' => $title,
                    'excerpt' => $excerpt,
                    'url' => $url,
                    'image_url' => $image,
                    'date' => $date,
                    'author' => array(
                        'name' => 'Words by ' .get_the_author(),
                        'image_url' => $author_img_url,
                        'url' => get_author_posts_url($author_id),
                    ),                          
                    'category' => array(
                        'name' => $category->name,
                    ),
                    'read_more' => $url,
                )); ?>
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