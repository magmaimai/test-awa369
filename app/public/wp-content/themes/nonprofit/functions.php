<?php
/**
 * VSLMD functions and definitions
 *
 * @package cornerstone
 */

// Core Constants.
define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load functions to secure your WP install.
 */
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

/**
* Load Visualmodo Framework functions.
*/
require get_template_directory() . '/vslmd/assets/theme-functions.php';

// カスタマイザーに設定を追加
function my_theme_customize_register( $wp_customize ) {
    // ヘッダーのレイアウト設定
    $wp_customize->add_section( 'my_theme_header_section', array(
        'title'    => __( 'Header Settings', 'my_theme' ),
        'priority' => 30,
    ) );

    // ヘッダーのレイアウト
    $wp_customize->add_setting( 'header_layout', array(
        'default'   => 'default',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'header_layout', array(
        'label'    => __( 'Header Layout', 'my_theme' ),
        'section'  => 'my_theme_header_section',
        'type'     => 'radio',
        'choices'  => array(
            'default' => __( 'Default', 'my_theme' ),
            'layout1' => __( 'Layout 1', 'my_theme' ),
            'layout2' => __( 'Layout 2', 'my_theme' ),
        ),
    ) );

    // ヘッダーのタイトル
    $wp_customize->add_setting( 'layout_header_title', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'layout_header_title', array(
        'label'    => __( 'Header Title', 'my_theme' ),
        'section'  => 'my_theme_header_section',
        'type'     => 'text',
    ) );
}
add_action( 'customize_register', 'my_theme_customize_register' );
