
<?php
    $paged = get_query_var('paged')? get_query_var('paged'): 1;//現在のページ送り番号（何ページ目か）を取得する記述
    $args= new WP_Query( array(
                'post_type' => 'post',
                'paged' => $paged,
                'nopaging' => false,
                'ignore_sticky_posts' => false,
            ));
    if ( $args ->have_posts() ) :
?>
<?php
    if( function_exists('wp_pagenavi') ) {
            wp_pagenavi(array('query' => $args));
    }
?>
<?php endif;?>