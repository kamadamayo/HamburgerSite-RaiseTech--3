
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
    }
    add_action('after_setup_theme', 'custom_theme_support');
    //スタイルシートの読み込み
    function hamburger_scripts() {
            $locale = get_locale();//言語情報を取得している
            $locale = apply_filters( 'theme_locale', $locale, 'wpbeg' );//日本語を日本語圏内のみで表示させる設定
            if( $locale == 'ja' ) {
                wp_enqueue_style( 'wpbeg-mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
            }
        wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto&display=swap', array(), '');
        wp_enqueue_style( 'MPlus1', '//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;700&display=swap', array(), '');
        wp_enqueue_style( 'style-name', get_template_directory_uri().'/css/style.css', array(), '');// サイト共通のCSSの読み込み
        if(is_admin()) return; //管理画面ではスクリプトは読み込まない
        wp_deregister_script( 'jquery'); //デフォルトの jQuery は読み込まない
        //CDN から読み込む
        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
        wp_enqueue_script( 'mayo', get_template_directory_uri().'/scripts/script.js', array(), '20220125', true ); //この行をコピペしてパスを変更したり任意の名前を変更して追加していく
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_scripts' );
