<?php   
    global $post;
    $categories = get_the_category( $post->ID );
    $first_cat = $categories[0]->cat_ID;
    $first_cat_name = $categories[0]->name;
    $args = array(
        'category__in' => array( $first_cat ),
        'post__not_in' => array( $post->ID ),
        'posts_per_page' => 4
    );

    $category = get_post_category();


    $custom_query = new WP_Query($args);
if ( $custom_query->have_posts() ) : ?>
<div class="more-from">
    <header class="more-from-header header">
        <h3 class="title"><span><?php _e("More in", THEME_NAME); ?> <?php echo $first_cat_name; ?></span></h3>
    </header>
    <ul class="posts clearfix">
        <?php
        $i = 0;
        while ( $custom_query->have_posts() ) : $custom_query->the_post(); 
        ?>
        <li class="span one-fourth">
            <?php 
                $image_size = array('width' => 190, 'height' => 190);
                $image = get_post_thumbnail_src($image_size);
             ?>

            <?php include_module('post-item', array(
                'title' => get_the_title(),
                'image_url' => $image,
                'excerpt' => get_excerpt(100),
                'category' => array(
                        'name' => $category->name,
                    ),
                'url' => get_permalink(),
                'read_more' => true,
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
<?php endif; ?>