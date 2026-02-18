<?php

/**
 * JAC Motors Georgia functions and definitions
 */

function jac_setup_theme()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    // ვარეგისტრირებთ მენიუს ლოკაციებს
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'jac'),
        'footer_col_1' => __('Footer: Models (მოდელები)', 'jac'),
        'footer_col_3' => __('Footer: Company (კომპანია)', 'jac'),
        'footer_col_4' => __('Footer: News (სიახლეები)', 'jac'),
        'footer_col_5' => __('Footer: Contact (კონტაქტი)', 'jac'),
    ));
}
add_action('after_setup_theme', 'jac_setup_theme');

function jac_enqueue_scripts()
{
    // Fonts & Icons
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@100..900&display=swap', array(), null);
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');

    // Main Styles
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // CSS მოდულები
    wp_enqueue_style('jac-header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.2');
    wp_enqueue_style('jac-footer', get_template_directory_uri() . '/assets/css/footer.css', array(), '1.6');
    wp_enqueue_style('jac-news', get_template_directory_uri() . '/assets/css/news.css', array(), '1.6');
    if (is_page_template('page-contact.php')) {
        wp_enqueue_style('jac-contact', get_template_directory_uri() . '/assets/css/contact.css', array(), '1.2');
    }
    // სერვისის გვერდის სტილები
    if (is_page_template('page-service.php')) {
        wp_enqueue_style('jac-service', get_template_directory_uri() . '/assets/css/service.css', array(), '1.0');
    }
    // კომპანიის გვერდის სტილი
    if (is_page_template('page-company.php')) {
        wp_enqueue_style('jac-company', get_template_directory_uri() . '/assets/css/company.css', array(), '1.0');
    }
    // ისტორიის გვერდის სტილი
    if (is_page_template('page-history.php')) {
        wp_enqueue_style('jac-history', get_template_directory_uri() . '/assets/css/history.css', array(), '1.0');
    }
    if (is_single()) {
        wp_enqueue_style('jac-single', get_template_directory_uri() . '/assets/css/single.css', array(), '1.2');
        wp_enqueue_style('fancybox-css', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css', array(), '5.0');
        wp_enqueue_script('fancybox-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array(), '5.0', true);
        wp_add_inline_script('fancybox-js', 'document.addEventListener("DOMContentLoaded", function() { Fancybox.bind("[data-fancybox]", {}); });');
    }

    if (is_front_page()) {
        wp_enqueue_style('jac-hero', get_template_directory_uri() . '/assets/css/hero.css', array(), '1.2');
        wp_enqueue_style('jac-explore', get_template_directory_uri() . '/assets/css/explore.css', array(), '1.2');
    }

    // Scripts
    wp_enqueue_script('lucide', 'https://cdn.jsdelivr.net/npm/lucide@0.321.0/dist/umd/lucide.min.js', array(), '0.321.0', true);
    wp_enqueue_script('jac-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('lucide'), '1.3', true);

    if (is_front_page()) {
        wp_enqueue_script('jac-hero-slider', get_template_directory_uri() . '/assets/js/hero-slider.js', array(), '1.2', true);
        wp_enqueue_script('jac-explore-slider', get_template_directory_uri() . '/assets/js/explore-slider.js', array(), '1.2', true);
        wp_enqueue_script('jac-news-slider', get_template_directory_uri() . '/assets/js/news-slider.js', array('lucide'), '1.0', true);
    }

    if (is_page_template('template-news.php') || is_archive()) {
        wp_enqueue_script('jac-ajax-news', get_template_directory_uri() . '/assets/js/ajax-news.js', array(), '1.0', true);
        wp_localize_script('jac-ajax-news', 'jac_ajax', array('ajax_url' => admin_url('admin-ajax.php')));
    }

    wp_add_inline_script('lucide', 'lucide.createIcons();');
}
add_action('wp_enqueue_scripts', 'jac_enqueue_scripts');

// ACF OPTIONS გვერდი ენების მხარდაჭერით
if (function_exists('acf_add_options_page')) {
    $current_lang = 'ka';
    if (is_admin() && isset($_GET['lang'])) {
        $current_lang = $_GET['lang'];
    } elseif (function_exists('pll_current_language')) {
        $current_lang = pll_current_language();
    }

    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'post_id'       => 'options_' . $current_lang,
    ));
}

if (function_exists('pll_register_string')) {
    pll_register_string('jac_theme', 'All Models', 'JAC Buttons');
    pll_register_string('jac_theme', 'All News', 'JAC Buttons');
    pll_register_string('jac_theme', 'Discover JAC Models', 'JAC Headings');
}

add_filter('show_admin_bar', '__return_false');

// AJAX LOAD MORE NEWS
function jac_load_more_news()
{
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $query = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 9,
        'paged'          => $page,
        'post_status'    => 'publish'
    ));
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            get_template_part('template-parts/card', 'news');
        }
    }
    wp_reset_postdata();
    die();
}
add_action('wp_ajax_load_more_news', 'jac_load_more_news');
add_action('wp_ajax_nopriv_load_more_news', 'jac_load_more_news');

/**
 * JAC Motors - Models Slider-ის ავტომატური სინქრონიზაცია (KA -> EN)
 */
add_action('acf/save_post', 'sync_jac_models_repeater', 20);

function sync_jac_models_repeater($post_id) {
    // არაფერი გავაკეთოთ, თუ პოსტი ავტომატურად ინახება
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // შემოწმება არის თუ არა Polylang აქტიური
    if (!function_exists('pll_get_post_language') || !function_exists('pll_get_post')) return;

    $current_lang = pll_get_post_language($post_id);
    
    // სინქრონიზაცია მოხდეს მხოლოდ მაშინ, როცა ინგლისურ გვერდს ვინახავთ
    if ($current_lang == 'en') {
        
        // ვიპოვოთ შესაბამისი ქართული გვერდი
        $georgian_post_id = pll_get_post($post_id, 'ka');

        if ($georgian_post_id && $georgian_post_id != $post_id) {
            
            $repeater_slug = 'models_slider';

            // ავიღოთ მონაცემები ქართულიდან
            $georgian_values = get_field($repeater_slug, $georgian_post_id);
            
            // ავიღოთ მიმდინარე ინგლისური მონაცემები
            $english_values = get_field($repeater_slug, $post_id);

            // თუ ინგლისური ვერსია ცარიელია, გადავაკოპიროთ ქართულიდან
            if (empty($english_values) && !empty($georgian_values)) {
                
                // ACF-ს სჭირდება სუფთა მასივი update_field-ისთვის
                update_field($repeater_slug, $georgian_values, $post_id);
            }
        }
    }
}