<?php get_header(); ?>
<!-- トップ画面 -->
<main class="l-main">
        <div class="p-front__top">
            <h1 class="p-front__title c-text c-shadow"><?php bloginfo( 'description' ); ?></h1>
        </div>
        <div class="p-box--menu u-padding20">
            <div class="p-box--menu__single u-margin20 u-font-size__main u-padding__5 c-text c-shadow">
                お知らせ
            </div>
        </div>
        <div class="p-box--text">
            <ul class="p-box">
                </li>
                <li class="p-box--news__group">
                        <p class="u-font-size">
                        <?php wp_link_pages(); ?>
                        <?php the_content(); ?>
                        </p>
                    </a>
                </li>
            </ul>
        </div>
    </main>
    <?php get_footer(); ?>