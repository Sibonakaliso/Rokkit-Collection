<?php
if (!defined('ABSPATH')) { exit; }

function ue_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(array('primary' => __('Primary Menu', 'rookit-collection')));
}
add_action('after_setup_theme', 'ue_setup');

function ue_assets() {
    wp_enqueue_style('ue-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('ue-main', get_template_directory_uri() . '/assets/css/main.css', array('ue-style'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'ue_assets');

function ue_delivery_note() {
    echo '<p class="ue-delivery-note">' . esc_html__('Estimated delivery: 3–5 business days.', 'rookit-collection') . '</p>';
}
add_action('woocommerce_single_product_summary', 'ue_delivery_note', 11);
