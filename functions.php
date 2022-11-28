<?php

// テーマサポート
function custom_theme_support(){
    add_theme_support('html5',array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('post-thumbnails');// アイキャッチ画像の有効化
    add_theme_support('title-tag');//titleタグのサポートを許可
    add_theme_support( 'automatic-feed-links' );
    register_nav_menus(array(
        'header-menu'=>'ヘッダーメニュー',
        'main-menu' => 'メインメニュー',
        'footer-menu' => 'フッターメニュー',
    ));
    add_theme_support('editor-styles');
    add_editor_style();
}
add_action('after_setup_theme','custom_theme_support');

//css,jQuery読み込み
function cf_script() {
    $locale = get_locale();
    $locale = apply_filters( 'theme_locale', $locale, 'cf' );
    wp_enqueue_style( 'font-awesome', get_theme_file_uri (),'/css/fontawesome.css',array(), );
    if( $locale == 'ja' ) {
    wp_enqueue_style( 'cf-mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() ); };
    wp_enqueue_style( 'cf-Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
    wp_enqueue_style( 'cf-normalize', get_theme_file_uri ( '/css/ress.css' ), array(), '4.5.0' );
    wp_enqueue_style( 'main-style', get_theme_file_uri ( '/css/style.css' ), array(), '1.0.0' );
    wp_enqueue_script( 'jquery', get_theme_file_uri() , '/js/jquery-3.6.1.min.js',array(), '3.6.1', true );
    wp_enqueue_script( 'js', get_theme_file_uri ('/js/script.js'), array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'cf_script' );



function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

//pタグ自動生成を止める

remove_filter('the_content', 'wpautop'); // 記事の自動整形を無効にする
remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形を無効にする