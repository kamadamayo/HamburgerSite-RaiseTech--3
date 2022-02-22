<?php
    //テーマサポート
    function custom_theme_support(){
        add_theme_support('html5',array(
            'search-form',
            'comment-form',
            'comment-list',
            'galley',
            'caption',
        ));
    add_theme_support('menus');//カスタムメニューの有効化
    add_theme_support('title-tag');//タイトルタグの自動出力
    add_theme_support('post-thumbnails');//アイキャッチ画像有効化
    add_theme_support('automatic-feed-links');//フィードリンクの有効化
    
    //メニューの有効化
    register_nav_menus( array( //register_nav_menu( $location, $description )
        'footermenu' => esc_html__('Footer Menu'),
        'side-menu' => esc_html__('Side Menu'),
        ));
    }
    add_action('after_setup_theme', 'custom_theme_support');

    //スタイルシートの読み込み
    function read_scripts(){
        wp_enqueue_style( 'style-name', get_template_directory_uri().'/css/style.css', array(), '');
        wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto&display=swap', array(), '');
        wp_enqueue_style( 'MPlus1', '//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;700&display=swap', array(), '');
        if(is_admin()) return; //管理画面ではスクリプトは読み込まない
        wp_deregister_script( 'jquery'); //デフォルトの jQuery は読み込まない
        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '', true);
        wp_enqueue_script( 'js', get_template_directory_uri().'/scripts/script.js', array(), '20220125', true );
    }
    add_action( 'wp_enqueue_scripts', 'read_scripts');

    //メニュー（メインループ）を投稿（古い）順に並べる.ただし全てのメインループに影響が出る
    function change_posts( $query ){
        if ($query->is_main_query()){
            $query-> set( 'order', 'ASC' );
            $query-> set( 'orderby', 'date' );//投稿日古い順。もし運用していく側だったらこの設定はやりにくい？
        }
    }
    add_action( 'pre_get_posts', 'change_posts' );

    //検索結果ページの最大表示件数を変更する
    function myPreGetPosts( $query ){
        if ( is_admin() || ! $query->is_main_query() ){
            return;
    }
        if ($query->is_search()){
        $query->set('posts_per_page', 5);
    }
    }
    add_action('pre_get_posts','myPreGetPosts');

    /**
     * サイト内検索の範囲に、カテゴリー名、タグ名、を含める
     * コピペのみ、中身全然理解できてない。
     */
    function custom_search($search, $wp_query) {
        global $wpdb;
        //サーチページ以外だったら終了
        if (!$wp_query->is_search)
        return $search;
        
        if (!isset($wp_query->query_vars))//isset(引数)
        return $search;

        // タグ名・カテゴリ名も検索対象に
        $search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
        if ( count($search_words) > 0 ) {
            $search = '';
            foreach ( $search_words as $word ) {
            if ( !empty($word) ) {
                $search_word = $wpdb->escape("%{$word}%");
                $search .= " AND (
                    {$wpdb->posts}.post_title LIKE '{$search_word}'
                    OR {$wpdb->posts}.post_content LIKE '{$search_word}'
                    OR {$wpdb->posts}.ID IN (
                    SELECT distinct r.object_id
                    FROM {$wpdb->term_relationships} AS r
                    INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
                    INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
                    WHERE t.name LIKE '{$search_word}'
                    OR t.slug LIKE '{$search_word}'
                    OR tt.description LIKE '{$search_word}'
                    )
                ) ";
            }
        }
        }
        return $search;
        }
        add_filter('posts_search','custom_search', 10, 2);
