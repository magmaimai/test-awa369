<?php
/*-----------------------------------------------------------------------------------*/
/*  Register style.css
/*-----------------------------------------------------------------------------------*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-theme-styles', get_stylesheet_directory_uri() . '/style.css', array(), $the_theme->get( 'Version' ) );
}

/*-----------------------------------------------------------------------------------*/
/*  Custom Logo
/*-----------------------------------------------------------------------------------*/

// ロゴを差し替える
function my_custom_logo_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'my_custom_logo_setup', 11 );

/*-----------------------------------------------------------------------------------*/
/*  Custom Functions
/*-----------------------------------------------------------------------------------*/
