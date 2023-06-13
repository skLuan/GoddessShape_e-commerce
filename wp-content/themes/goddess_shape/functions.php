<?php

define('IMAGE', get_stylesheet_directory_uri( ).'/assets/img/');
function my_theme_load_theme_textdomain()
{
    load_theme_textdomain('goddess');
}
function init_template()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
    // ---------------------- Register menus ----------------------
    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal', // Menu pricipal de desktop
            'mobile_menu' => 'Mobile sideBar', // Menu hamburguesa de versión mobile
            'footer_menu' => 'Footer Menu' // Menu del footer
        )
    );

    // ---------------------- Register Styles ----------------------
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/style.css', 'tailwind', '1.0', 'all');
    if(!is_admin()) {
        wp_enqueue_style('fonts', get_stylesheet_directory_uri() . '/assets/css/fonts.css', '1.0', 'all');
        wp_enqueue_style('tailwind', get_stylesheet_directory_uri() . '/assets/css/tailwind.css', 'fonts', '1.0', 'all');
        wp_enqueue_style('swipercss', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', 'tailwind', '1.0', 'all');
        wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', 'tailwind', '1.0', 'all');
    }

    // ---------------------- Register Scripts ----------------------
    wp_enqueue_script('jquery');
    wp_enqueue_script('lodash', 'https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js', array(), '4.17.21', true);
    wp_enqueue_script('iconify', 'https://code.iconify.design/iconify-icon/1.0.0-beta.2/iconify-icon.min.js', '', '1.0', 'all');
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', '', '1.0', 'all');
    wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/assets/js/mainjquery.js', ['jquery', 'iconify', 'lodash', 'swiper'], '1.8.1', 'all');
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', ['iconify', 'lodash', 'swiper'], '1.8.1', 'all');
    wp_enqueue_script('HomeProducts', get_stylesheet_directory_uri() . '/assets/js/containersHomeProducts.js', ['main'], '1.8.1', 'all');
    wp_enqueue_script('swipers', get_stylesheet_directory_uri() . '/assets/js/swipers.js', ['main'], '1.8.1', 'all');
    wp_enqueue_script('singleColor', get_stylesheet_directory_uri() . '/assets/js/singleColorManage.js', ['main'], '1.8.1', 'all');
    
}
add_action('after_setup_theme', 'init_template');
add_action('after_setup_theme', 'my_theme_load_theme_textdomain');

add_action('gs_cart_buton', 'woocommerce_template_single_add_to_cart');
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

if (is_product_category()) {
    remove_action('woocommerce_before_shop_loop','woocommerce_output_all_notices', 10);
}


// Función para registrar el custom post type de preguntas frecuentes
function registrar_post_type_preguntas_frecuentes()
{
    $labels = array(
        'name'               => 'Preguntas Frecuentes',
        'singular_name'      => 'Pregunta Frecuente',
        'menu_name'          => 'Preguntas Frecuentes',
        'name_admin_bar'     => 'Pregunta Frecuente',
        'add_new'            => 'Agregar Nueva',
        'add_new_item'       => 'Agregar Nueva Pregunta Frecuente',
        'new_item'           => 'Nueva Pregunta Frecuente',
        'edit_item'          => 'Editar Pregunta Frecuente',
        'view_item'          => 'Ver Pregunta Frecuente',
        'all_items'          => 'Todas las Preguntas Frecuentes',
        'search_items'       => 'Buscar Preguntas Frecuentes',
        'not_found'          => 'No se encontraron Preguntas Frecuentes.',
        'not_found_in_trash' => 'No se encontraron Preguntas Frecuentes en la papelera.',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-editor-help',
        'supports'            => array('title', 'editor'),
        'rewrite'             => array('slug' => 'preguntas-frecuentes'),
        'has_archive'         => true,
        'block_editor'        => true,
    );

    register_post_type('preguntas_frecuentes', $args);
}
add_action('init', 'registrar_post_type_preguntas_frecuentes');




function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
