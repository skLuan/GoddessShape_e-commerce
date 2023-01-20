<?php
function init_template()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
    // ---------------------- Register menus ----------------------
    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal', // Menu pricipal de desktop
            'mobile_menu' => 'Mobile sideBar' // Menu hamburguesa de versión mobile
        )
    );

    // ---------------------- Register Styles ----------------------
    if(!is_admin()) {
        wp_enqueue_style('fonts', get_stylesheet_directory_uri() . '/assets/css/fonts.css', '1.0', 'all');
        wp_enqueue_style('tailwind', get_stylesheet_directory_uri() . '/assets/css/tailwind.css', 'fonts', '1.0', 'all');
    }
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/style.css', 'tailwind', '1.0', 'all');

    // ---------------------- Register Scripts ----------------------
    wp_enqueue_script('lodash', 'https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js', 'lodash', '1.0', 'all');
    wp_enqueue_script('iconify', 'https://code.iconify.design/iconify-icon/1.0.0-beta.2/iconify-icon.min.js', '', '1.0', 'all');
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', ['slickjs', 'lodash', 'iconify'], '1.8.1', 'all');
}
add_action('after_setup_theme', 'init_template');
?>