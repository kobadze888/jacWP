<?php
/**
 * JAC Motors Georgia functions and definitions
 */

function jac_setup_theme() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'jac'),
        'footer_menu'  => __('Footer Menu', 'jac'),
    ));
}
add_action('after_setup_theme', 'jac_setup_theme');

function jac_enqueue_scripts() {
    // Fonts & Icons
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@100..900&display=swap', array(), null);
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    
    // Main Styles (Basic Reset)
    wp_enqueue_style('main-style', get_stylesheet_uri());
    
    // მოდულური CSS ფაილები
    wp_enqueue_style('jac-header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.2');
    wp_enqueue_style('jac-footer', get_template_directory_uri() . '/assets/css/footer.css', array(), '1.2');

    if (is_front_page()) {
        wp_enqueue_style('jac-hero', get_template_directory_uri() . '/assets/css/hero.css', array(), '1.2');
        wp_enqueue_style('jac-explore', get_template_directory_uri() . '/assets/css/explore.css', array(), '1.2');
        wp_enqueue_style('jac-news', get_template_directory_uri() . '/assets/css/news.css', array(), '1.2');
    }

    // Scripts - Lucide-ს ვიყენებთ CDN-ით
    wp_enqueue_script('lucide', 'https://cdn.jsdelivr.net/npm/lucide@0.321.0/dist/umd/lucide.min.js', array(), '0.321.0', true);
    
    // მოდულური JS
    wp_enqueue_script('jac-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('lucide'), '1.2', true);
    
    if (is_front_page()) {
        wp_enqueue_script('jac-hero-slider', get_template_directory_uri() . '/assets/js/hero-slider.js', array(), '1.2', true);
        wp_enqueue_script('jac-explore-slider', get_template_directory_uri() . '/assets/js/explore-slider.js', array(), '1.2', true);
        wp_enqueue_script('jac-news-slider', get_template_directory_uri() . '/assets/js/news-slider.js', array('lucide'), '1.0', true);
    }

    // Lucide-ს აიქონების (გლობუსის) გააქტიურება
    wp_add_inline_script('lucide', 'lucide.createIcons();');
}
add_action('wp_enqueue_scripts', 'jac_enqueue_scripts');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

if (function_exists('pll_register_string')) {
    pll_register_string('jac_theme', 'All Models', 'JAC Buttons');
    pll_register_string('jac_theme', 'All News', 'JAC Buttons');
    pll_register_string('jac_theme', 'Discover JAC Models', 'JAC Headings');
    pll_register_string('jac_theme', 'Discover JAC', 'JAC Headings');
}

// Admin Bar-ის გათიშვა
add_filter('show_admin_bar', '__return_false');