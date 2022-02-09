<?php
    $args = array(
        'category' => '52',
        'post_type' => 'post',
        'post_per_page' => 3,
    );
    $myposts = new WP_query($args);
        if( $myposts -> have_posts()):
            while( $myposts -> have_posts()):
                $myposts -> the_post();
                ?>
                <?php get_template_part('content'); ?>
            <?php
                endwhile;
                endif;
                wp_reset_postdata();
            ?>