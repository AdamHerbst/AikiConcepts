<?php

// Loads Stylesheets
function load_css()
{
    wp_register_style(
        'bootstrap',
        get_template_directory_uri() . '/css/bootstrap.min.css',
        [],
        false,
        'all'
    );
    wp_enqueue_style('bootstrap');

    wp_register_style(
        'magnific',
        get_template_directory_uri() . '/css/magnific-popup.css',
        [],
        false,
        'all'
    );
    wp_enqueue_style('magnific');

    wp_register_style(
        'main',
        get_template_directory_uri() . '/css/main.css',
        [],
        false,
        'all'
    );
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

// Loads Javascript
function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script(
        'bootstrap',
        get_template_directory_uri() . '/js/bootstrap.min.js',
        'jquery',
        false,
        true
    );
    wp_enqueue_script('bootstrap');

    wp_register_script(
        'magnific',
        get_template_directory_uri() . '/js/jquery.magnific-popup.min.js',
        'jquery',
        false,
        true
    );
    wp_enqueue_script('magnific');

    wp_register_script(
        'custom',
        get_template_directory_uri() . '/js/custom.js',
        'jquery',
        false,
        true
    );
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_js');

// Enables wordpress theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus([
    // Enables different types, locations and styles of menu's
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',
]);

// Custom Image Sizes
add_image_size('blog-large', 800, 600, false);
add_image_size('blog-small', 300, 200, true);

// Registers Sidebars within wordpress
function my_sidebars()
{
    register_sidebar([
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);

    register_sidebar([
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
}
add_action('widgets_init', 'my_sidebars');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');
