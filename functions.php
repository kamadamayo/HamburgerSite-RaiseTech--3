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


