<sidebar class="l-sidebar">
        
        <button class="c-button">
            <span class="c-line c-button__br"></span>
            <span class="c-line c-button__br"></span>
            <span class="c-line c-button__br"></span>
            </button>
        <nav class="p-menu">
        <?php 
    wp_nav_menu( array( 
    'theme_location' => 'main-menu',
    'container' => '',
    'container_id' => '',
    'container_class' => '',
    'items_wrap'   => '<ul>%3$s</ul>',
    'menu_class' => 'l-sidebar',
    // 'walker' => new custom_walker_main_menu,

    ) ); 
?>
        <!-- <ul class="u-padding10"><a href="#" class="c-text">事業内容</a></ul>
        <ul class="u-padding10"><a href="#" class="c-text">会社概要</a></ul>
        <ul class="u-padding10"><a href="#" class="c-text">お問合せ</a></ul> -->
    <!-- </div> -->
        </nav>
</sidebar>