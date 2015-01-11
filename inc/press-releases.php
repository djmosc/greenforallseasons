
<?php   
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(  
    'post_type' => array('press'),
    'showposts' => 4,
    'orderby' => 'date',
    'order' => 'desc',
    'paged' => $paged
);

$custom_query = new WP_Query($args);
if ( $custom_query->have_posts() ) : ?>
<div class="press-releases dotted-border">
    <div class="inner">
        <header class="header">
            <h3 class="title"><?php _e("Press", THEME_NAME); ?></h3>
            <div class="pagination">
                <?php 
                $big = 999999999;
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $custom_query->max_num_pages
                ) ); ?>
            </div>
        </header>
        <ul class="posts clearfix">
            <?php
            $i = 0;
            while ( $custom_query->have_posts() ) : $custom_query->the_post(); 
            ?>
            <li class="span five break-on-mobile">
                <div <?php post_class(); ?>>
                    <div class="thumbnail">
                        <?php the_post_thumbnail(array(500, 300, 'bfi_thumb' => true)); ?>
                    </div>
                    <header class="header">
                        <h5 class="title"><?php the_title();?></h5>
                        <div class="meta"><span class="date"><?php the_time('F Y'); ?></span></div>
                    </header>
                </div>
            </li>
            <?php
            $i++;
            endwhile;
        ?>
        </ul>
        <footer class="footer">
            <div class="pagination">
                <?php 
                $big = 999999999;
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $custom_query->max_num_pages
                ) ); ?>
            </div>
        </footer>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>