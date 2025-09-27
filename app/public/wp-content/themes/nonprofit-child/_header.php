<?php
/**
 * 親テーマ用：簡易ヘッダー
 */

$header_layout = get_theme_mod('header_layout', '');        // 管理画面の設定を取得
$layout_header_title = get_theme_mod('layout_header_title', ''); // 管理画面の設定を取得
$alt = get_theme_mod('header_image_alt', '');               // 画像のalt属性

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="masthead" class="site-header <?php echo esc_attr($header_layout); ?>">
    <?php if ( has_custom_logo() ) : ?>
        <div class="site-logo"><?php the_custom_logo(); ?></div>
    <?php endif; ?>

    <?php if ( !empty($layout_header_title) ) : ?>
        <h1 class="site-title"><?php echo esc_html($layout_header_title); ?></h1>
    <?php else : ?>
        <h1 class="site-title"><?php bloginfo('name'); ?></h1>
    <?php endif; ?>

    <?php if ( get_header_image() ) : ?>
        <div class="header-image">
            <img src="<?php header_image(); ?>" alt="<?php echo esc_attr($alt); ?>">
        </div>
    <?php endif; ?>
</header>
