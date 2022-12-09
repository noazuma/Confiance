<?php get_header(); ?>

<!-- トップ画面 -->
    <main class="l-main">
        <div class="p-front__top">
        <h1 class="p-front__title c-text c-shadow"><?php bloginfo( 'description' ); ?></h1>
        </div>
        <div class="p-box--menu u-padding20">
            <div class="u-margin20 u-font-size__main u-padding__5 c-text c-shadow">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full',array('class' => 'u-thumbnail')); ?>
        <?php else: ?>
            <?php endif; ?>
            </div>
        </div>
        <div class="p-box--text">
            <ul class="p-box">
                </li>
                <li class="p-box--news__group">
                <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                        <p class="u-font-size">
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                        <?php else: ?>
                            
            <?php endif; ?>
                </li>
            </ul>
        </div>
    </main>
<?php get_footer(); ?>