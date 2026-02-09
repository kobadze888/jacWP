<?php

function jac_setup_theme() {
    // თამბნეილების მხარდაჭერა
    add_theme_support('post-thumbnails');

    // დინამიური სათაური
    add_theme_support('title-tag');

    // ლოგოს მხარდაჭერა
    add_theme_support('custom-logo', array(
        'height'      => 50,
        'width'       => 150,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // მენიუების რეგისტრაცია
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'jac'),
        'footer_menu'  => __('Footer Menu', 'jac'),
    ));
}
add_action('after_setup_theme', 'jac_setup_theme');

// სტილების და სკრიპტების ჩატვირთვა
function jac_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@100..900&display=swap', array(), null);
    
    // FontAwesome
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    
    // Main Style
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Lucide Icons
    wp_enqueue_script('lucide', 'https://unpkg.com/lucide@latest', array(), null, false);

    // Custom JS
    wp_enqueue_script('jac-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);

    // მონაცემების გადაწოდება JS-ისთვის (AJAX-ისთვის ან დინამიური ცვლადებისთვის)
    wp_localize_script('jac-main-js', 'jacData', array(
        'siteUrl' => get_site_url(),
        'themeUrl' => get_template_directory_uri()
    ));
}
add_action('wp_enqueue_scripts', 'jac_enqueue_scripts');

// ACF Options Page (გლობალური პარამეტრებისთვის, მაგ: ფუტერი, სოციალური ქსელები)
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

// Polylang String Translation (რეგისტრაცია)
if (function_exists('pll_register_string')) {
    pll_register_string('jac_theme', 'See More', 'JAC Buttons');
    pll_register_string('jac_theme', 'All Models', 'JAC Buttons');
    pll_register_string('jac_theme', 'All News', 'JAC Buttons');
}

?>