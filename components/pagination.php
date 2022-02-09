<?php
    $paged = get_query_var('paged')? get_query_var('paged'): 1;//現在のページ送り番号（何ページ目か）を取得する記述
    $information= new WP_Query( array(//$informationは任意の変数,
                'post_type' => 'post',
                'paged' => $paged,
                'post_status' => 'publish',
                'posts_per_page' => 10,//1ページあたりに表示したい記事数を指定する。管理画面の表示するページ数と一致させる用に！
            ));
    if ( $information ->have_posts() ) :
?>
<?php
    if( function_exists('wp_pagenavi') ) {
            wp_pagenavi(array('query' => $information));
    }
?>
<?php endif;?>
