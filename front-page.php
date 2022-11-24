<?php get_header(); ?>
<!-- トップ画面 -->
    <main class="l-main">
        <div class="p-front__top">
            <h1 class="p-front__title c-text c-shadow"><?php bloginfo( 'description' ); ?></h1>
            <P class="c-text c-shadow u-padding20">テキストが入ります。テキストが入ります。</P>
        </div>
        <div class="p-box--news">
            <ul class="p-box u-font-size">
                <p>お知らせ</p>
                <li class="p-box--news__group u-font-size">
                    <a href="#">
                        <p class="">2020/4/15</p>
                        <p class="">ここにお知らせが入りますここにお知らせが入りますここにお知らせが入ります</p>
                    </a>
                </li>
                <li class="p-box--news__group u-font-size">
                    <a href="#">
                        <p class="">2020/4/15</p>
                        <p class="">ここにお知らせが入りますここにお知らせが入りますここにお知らせが入ります</p>
                    </a>
                </li>
                <li class="p-box--news__group u-font-size">
                    <a href="#">
                        <p class="">2020/4/15</p>
                        <p class="">ここにお知らせが入りますここにお知らせが入りますここにお知らせが入ります</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="p-box--menu u-padding20">
            <div class="p-box--menu__open u-margin20 u-font-size__main u-padding__5 c-text c-shadow">
                事業開業・開設支援
            </div>
            <div class="p-box--menu__support u-margin20 u-font-size__main u-padding__5 c-text c-shadow">
                経営・運営改善
            </div>
        </div>
    </main>
    
    <?php get_sidebar();?>
    <?php get_footer(); ?>