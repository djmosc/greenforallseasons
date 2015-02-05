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

    $custom_query = new WP_Query($args);
if ( $custom_query->have_posts() ) : ?>
<div class="more-from">
    <div class="inner">
        <header class="header lined-header">
            <h3 class="title skew"><span><?php _e("More in", THEME_NAME); ?> <?php echo $first_cat_name; ?></span></h3>
        </header>
        <ul class="posts clearfix">
            <?php
            $i = 0;
            while ( $custom_query->have_posts() ) : $custom_query->the_post(); 
            ?>
            <li class="span one-fourth">
                <div class="post-item">
                    <div class="category">
                        <span class="name category-name green-label">Bites</span>
                    </div>
                    <div class="image">
                        <a href="<?php the_permalink(); ?>">
                            <img src="http://lorempixel.com/190/190" />
                        </a>
                    </div>
                    <header class="header post-header">
                        <h3 class="title post-title"><a>4 Flattering dresses</a></h3>
                        <div class="excerpt">
                            <p>Vivamus lobortis leo eget viverra ornare. Pellentesque tempus nibh sit amet tincidunt lobortis...</p>
                        </div>
                        <a class="primary-btn"><?php _e("Read More", THEME_NAME); ?></a>
                    </header>
                </div>
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