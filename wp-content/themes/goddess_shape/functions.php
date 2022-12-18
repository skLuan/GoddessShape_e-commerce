<?php
function init_template()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
    // ---------------------- Register menus ----------------------
    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal',
            'mobile_menu' => 'Mobile sideBar'
        )
    );

    // ---------------------- Register Styles ----------------------
    wp_enqueue_style('tailwind', get_stylesheet_directory_uri() . '/assets/css/twOutput.css', '1.0', 'all');
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/style.css', 'tailwind', '1.0', 'all');

    // ---------------------- Register Scripts ----------------------
    wp_enqueue_script('iconify', 'https://code.iconify.design/iconify-icon/1.0.0-beta.2/iconify-icon.min.js', '', '1.0', 'all');
    // wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', 'slickjs', '1.8.1', 'all');
}
add_action('after_setup_theme', 'init_template');
?>