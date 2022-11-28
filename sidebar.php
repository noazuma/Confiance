<sidebar class="l-sidebar">
        
        <button class="c-button">
            <span class="c-line c-button__br"></span>
            <span class="c-line c-button__br"></span>
            <span class="c-line c-button__br"></span>
            </button>
        <!-- <nav class="p-menu"> -->
        <?php 
    wp_nav_menu( array( 
    'theme_location' => 'main-menu',
    'container' => 'nav',
    'container_id' => '',
    'container_class' => '',
    // 'items_wrap'   => '<li>%3$s</li>',
    'menu_class' => 'p-menu',
    'add_li_class' => 'c-text', // liタグへclass追加
    // 'walker' => new custom_walker_main_menu,

    ) ); 
?>
        <!-- <ul class="u-padding10"><a href="#" class="c-text">事業内容</a></ul>
        <ul class="u-padding10"><a href="#" class="c-text">会社概要</a></ul>
        <ul class="u-padding10"><a href="#" class="c-text">お問合せ</a></ul> -->
    <!-- </div> -->
        <!-- </nav> -->
</sidebar>