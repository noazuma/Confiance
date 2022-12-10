<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confiance</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="c-wrapper">
<?php wp_body_open(); ?>
<!-- ヘッダー -->
    <header class="l-header">
        <div class="p-title">
        <h1 class="c-text c-text--top" ><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <?php bloginfo( 'name' ); ?>
    </a></h1>
        <h3 class="c-text c-text--sub">〜コンフィアンス〜</h3>
        <h2 class="c-text c-text--tel">電話　0745ー86ー1106</h2>
        </div>
        <!-- <div> -->
    </header>