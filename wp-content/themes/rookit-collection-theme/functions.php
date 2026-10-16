<?php
if (!defined('ABSPATH')) {
    exit;
}

function rookit_collection_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption', 'style', 'script'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'rookit-collection'),
    ));
}
add_action('after_setup_theme', 'rookit_collection_setup');

function rookit_collection_enqueue_styles() {
    wp_enqueue_style('rookit-style', get_stylesheet_uri(), array(), '1.2.0');
    wp_enqueue_style(
        'rookit-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array('rookit-style'),
        '1.2.0'
    );
}
add_action('wp_enqueue_scripts', 'rookit_collection_enqueue_styles');

function rookit_collection_enqueue_scripts() {
    wp_enqueue_script(
        'rookit-navigation',
        get_template_directory_uri() . '/assets/js/navigation.js',
        array(),
        '1.2.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'rookit_collection_enqueue_scripts');

/**
 * Display a short delivery estimate below the product price.
 */
function rookit_collection_delivery_note() {
    echo '<p class="rookit-delivery-note">';
    echo esc_html__('Estimated delivery: 3–5 business days.', 'rookit-collection');
    echo '</p>';
}
add_action('woocommerce_single_product_summary', 'rookit_collection_delivery_note', 11);

/**
 * Return a URL for a theme image if the file exists.
 * Images live in assets/img, not in the WordPress uploads folder.
 */
function rookit_collection_image_url($filename) {
    $relative_path = '/assets/img/' . $filename;

    if (!file_exists(get_template_directory() . $relative_path)) {
        return '';
    }

    return get_template_directory_uri() . $relative_path;
}

function rookit_collection_shop_url() {
    if (function_exists('wc_get_page_permalink')) {
        return wc_get_page_permalink('shop');
    }

    return home_url('/shop/');
}
