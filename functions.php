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


//お知らせ
function create_post_type_news(){
        register_post_type( 
        'news',
        array(
        'labels' => array(
        'name' => 'お知らせ'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title','editor','thumbnail','author'),
        'show_in_rest' => true,
        )
        );
    }
    add_action( 'init', 'create_post_type_news' );

        function shortcode_news_list() {
            global $post;
            $args = array(
            'posts_per_page' => 3,  // 一覧に表示させる件数
            'post_type' => 'news',  // お知らせのスラッグ
            'post_status' => 'publish'
            );
            $the_query = new WP_Query( $args );
            // お知らせ一覧用HTMLコード作成
            if ( $the_query->have_posts() ) {
            $html .= '<ul>';
            while ( $the_query->have_posts() ) :
            $the_query->the_post();
            $url = get_permalink();
            $title = get_the_title();
            $date = get_the_date('Y/m/d');
            $html .= '<li>';
            $html .= '<a href="'.$url.'">';
            $html .= '<p class="news_date">'.$date.'</p>';
            $html .= '<h3 class="news_title">'.$title.'</h3>';
            $html .= '</a></li>';
            endwhile;
            $html .= '</ul>';
            }
            return $html;
        }
        add_shortcode("news_list", "shortcode_news_list");   