<?php get_header(); ?>
<!-- トップ画面 -->
    <main class="l-main">
        <div class="p-front__top">
            <h1 class="p-front__title c-text c-shadow"><?php bloginfo( 'description' ); ?></h1>
            <P class="c-text c-shadow u-padding20">テキストが入ります。テキストが入ります。</P>
        </div>
        <div class="p-box--news">
            <ul class="p-box u-font-size">
                
                <li class="p-box--news__group u-font-size">
                        <p class=""><?php echo do_shortcode('[showwhatsnew]'); ?>
</p>
                    
                </li>
            </ul>
        </div>
        <div class="p-box--menu u-padding20">
        
        <div class="p-box--menu__open u-margin20 u-font-size__main u-padding__5 c-shadow"
        ><a    class="c-text" href="
        <?php echo esc_url (home_url('business/open'));?>"><?php //子ページの場合「/」で親ページからのパスを指定する。
    $page_id = get_page_by_path('business/open'); //固定ページのスラッグ名を入れます 
    $page = get_post( $page_id );
    echo $page -> post_title; //タイトルを取得したい時
    ?></a>
    </div>
            <div class="p-box--menu__support u-margin20 u-font-size__main u-padding__5 c-text c-shadow">
            <a    class="c-text" href="
        <?php echo esc_url (home_url('business/support'));?>"><?php //子ページの場合「/」で親ページからのパスを指定する。
    $page_id = get_page_by_path('business/support'); //固定ページのスラッグ名を入れます 
    $page = get_post( $page_id );
    echo $page -> post_title; //タイトルを取得したい時
    ?></a>
            </div>
        </div>
    </main>
    
<?php get_footer(); ?>