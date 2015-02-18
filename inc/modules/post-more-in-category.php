<?php   
global $post;
$category = get_post_category();
$args = array(
    'category__in' => array( $category->term_id ),
    'post__not_in' => array( $post->ID ),
    'posts_per_page' => 4
);

$query = new WP_Query($args);

if ( $query->have_posts() ) : ?>
<div class="more-from">
    <header class="more-from-header header">
        <h3 class="title"><span><?php _e("More in", THEME_NAME); ?> <?php echo $category->name; ?></span></h3>
    </header>
    <div class="posts">
        <ul class="post-list">
            <?php
            $i = 0;
            while ( $query->have_posts() ) : $query->the_post();
                $sub_category = get_post_sub_category();
                $class = array();
                if( $sub_category ) {
                    $category = $sub_category;
                    $class[] = 'has-sub-category';
                }
            ?>
            <li class="post">
                <?php include_module('post-item', array(
                    'title' => get_the_title(),
                    'image_url' => get_post_thumbnail_src(array('width' => 190, 'height' => 190)),
                    'excerpt' => get_excerpt(50),
                    'category' => array(
                        'name' => $category->name,
                    ),
                    'url' => get_permalink(),
                    'read_more' => true,
                    'class' => implode(' ', $class)
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