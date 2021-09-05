<?php
//Constant for size of exerpt length
define("exerptLength", 45);
define("titleLength", 20);
// Register Nav Walker class_alias
require_once 'wp_bootstrap_navwalker.php';

// Theme Support
function wpb_theme_setup()
{
    add_theme_support('post-thumbnails');

    // Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
}

add_action('after_setup_theme', 'wpb_theme_setup');

// Excerpt Length Control
function set_excerpt_length()
{
    return exerptLength;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Widget Locations
function wpb_init_widgets($id)
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Box1',
        'id' => 'box1',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Box2',
        'id' => 'box2',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Box3',
        'id' => 'box3',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar( array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
}

add_action('widgets_init', 'wpb_init_widgets');

// Customizer File
require get_template_directory() . '/inc/customizer.php';

function register_my_menus()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
        'extra-menu' => __('Extra Menu')
    ));
}
add_action('init', 'register_my_menus');
// Adds Open Sans font
function add_google_fonts()
{
    wp_enqueue_style(
        'add_google_fonts',
        ' https://fonts.googleapis.com/css?family=Open+Sans:300,400',
        false
    );
}
add_action('wp_enqueue_scripts', 'add_google_fonts');

function max_title_length( $title ) {
    $max = 20;
        if( strlen( $title ) > $max ) {
        return substr( $title, 0, $max ). " &hellip;";
        } else {
        return $title;
    }
}

// add arrows to menu parent 
function oenology_add_menu_parent_class( $items ) {
 
 $parents = array();
 foreach ( $items as $item ) {
 if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
 $parents[] = $item->menu_item_parent;
 }
 }
 
 foreach ( $items as $item ) {
 if ( in_array( $item->ID, $parents ) ) {
 $item->classes[] = 'has-children';
 }
 }
 
 return $items;
}
add_filter( 'wp_nav_menu_objects', 'oenology_add_menu_parent_class' );
