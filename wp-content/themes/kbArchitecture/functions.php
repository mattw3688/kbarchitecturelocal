<?php

//Change kbArchitecture to theme name in all occurrences

if (! function_exists('kbArchitecture_setup')):

    function kbArchitecture_setup() {
        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain( 'kbArchitecture', get_template_directory() . '/languages' );

        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support( 'automatic-feed-links' );

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );

        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus( array(
            'top-menu' => __('Top Menu', 'kbArchitecture'),
            'footer-left' => __('Left Footer', 'kbArchitecture'),
            'footer-middle' => __('Middle Footer', 'kbArchitecture'),
            'footer-right' => __('Right Footer', 'kbArchitecture'),

        ) );

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

        add_theme_support( 'title-tag' );

        add_theme_support('widgets');

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
            )
        );


    }


    // image sizing
    add_image_size('customer-page', '300', '200', false);
    add_image_size('large-header', '1600', '800', true);

    // Register Sidebars
    function theme_sidebars()
    {
        register_sidebar(
            array(
                'name' => 'Page Sidebar',
                'id' => 'page-sidebar',
                'before_title' => '<h4 class"widget-title">',
                'after_title' => '</h4>'

            )
        );
    }
    add_action('widgets_init', 'theme_sidebars');

endif;
// Theme setup
add_action( 'after_setup_theme', 'kbArchitecture_setup' );

add_theme_support( 'custom-logo', array(
    'height'      => 500,
    'width'       => 500,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


/**
 * load stylesheets
 */
function load_stylesheets() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css',
        array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('maincss', get_template_directory_uri() . '/assets/css/main.css',
        [], false, 'all');
    wp_enqueue_style('maincss');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');

/**
 * load js
 */

function loadjs() {

    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), 'null', 'true');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', ['jquery'], false, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', [], 1, true);
    wp_enqueue_script('mainjs');


}
add_action('wp_enqueue_scripts', 'loadjs');

// Add Font Awesome
add_action('wp_enqueue_scripts', 'add_font_awesome');
function add_font_awesome(){

    wp_enqueue_script('font-awesome-script', 'https://kit.fontawesome.com/34047c7ac7.js', array(), NULL, true);

};

// Add Google Fonts

//function add_google_fonts(){
//
//    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap', false);
//
//}