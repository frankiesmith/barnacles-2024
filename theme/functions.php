<?php

add_theme_support( 'title-tag' );

function fivehd_enqueue_scripts_styles() {
  // wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=' );
  // wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', array(), false, true );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"' );
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"' );

     wp_enqueue_style( 'fivehdstarter', get_stylesheet_directory_uri() . '/theme.css', array(), filemtime(get_stylesheet_directory() . '/theme.css'));

    wp_enqueue_script('jQuerycdn', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, false, true );

     wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/theme.js', array('jquery'), filemtime(get_stylesheet_directory() . '/js/theme.js'), true );

}
add_action( 'wp_enqueue_scripts', 'fivehd_enqueue_scripts_styles' );

function fivehd_register_nav_menus() {
    register_nav_menus( array(
        'main-navigation' => __( 'Primary Menu', 'fivehdstarter' ),
    ) );
}
add_action( 'after_setup_theme', 'fivehd_register_nav_menus' );

function fivehd_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'main-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'fivehd_widgets_init' );

// Gutenberg custom stylesheet
add_theme_support('editor-styles');
add_editor_style( 'editor-style.css' ); // make sure path reflects where the file is located

