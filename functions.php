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
    if (is_page_template('page-models.php')) {
        wp_enqueue_style('jac-showroom', get_template_directory_uri() . '/assets/css/showroom.css', array(), '1.1');
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
        wp_enqueue_style('jac-history-teaser', get_template_directory_uri() . '/assets/css/service-teaser.css', array(), '1.0');
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

    // E30X Model გვერდის სტილები
    // რადგან ფაილი models საქაღალდეშია, გზაშიც ვუთითებთ 'models/page-e30x.php'
    if (is_page_template('models/page-e30x.php')) {
        // CSS გზის განახლება
        wp_enqueue_style('jac-e30x', get_template_directory_uri() . '/assets/css/models/e30x.css', array(), '1.0');
        
        // JS გზის განახლება
        wp_enqueue_script('jac-e30x-js', get_template_directory_uri() . '/assets/js/models/e30x.js', array(), '1.0', true);
    }
    
    /* 2. T9 MODEL SECTION */
    // T9 Model გვერდის სტილები
    if (is_page_template('models/page-t9.php')) {
        // CSS გზის განახლება
        wp_enqueue_style('jac-t9', get_template_directory_uri() . '/assets/css/models/t9.css', array(), '1.0');
        
        // JS გზის განახლება
        wp_enqueue_script('jac-t9-js', get_template_directory_uri() . '/assets/js/models/t9.js', array(), '1.0', true);
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

// Disable Polylang ACF Sync
add_filter('pll_sync_post_metas', '__return_empty_array');
add_filter('pll_copy_post_metas', '__return_empty_array');


/**
 * ავტომატური სინქრონიზაცია ქართული მოდელებიდან ინგლისურზე
 */
add_action('acf/save_post', 'sync_jac_models_ka_to_en', 20);

function sync_jac_models_ka_to_en($post_id) {
    // ვამოწმებთ, რომ ვინახავთ ზუსტად ქართულ "Models" გვერდს
    if ($post_id != 260) {
        return;
    }

    // ვიღებთ ახალ მონაცემებს
    $models = get_field('showroom_models', $post_id);

    if ($models) {
        // დროებით ვთიშავთ ამავე ფუნქციას, რომ update_field-მა ხელახლა არ გამოიძახოს ის
        remove_action('acf/save_post', 'sync_jac_models_ka_to_en', 20);
        
        // ვაახლებთ ინგლისურ გვერდს
        update_field('showroom_models', $models, 334);
        
        // ისევ ვაბრუნებთ ფუნქციას მოქმედებაში
        add_action('acf/save_post', 'sync_jac_models_ka_to_en', 20);
    }
}


/* ========================================================
   კომენტარების ძირფესვიანად გათიშვა (DISABLE ALL COMMENTS)
======================================================== */

// 1. ვთიშავთ კომენტარების მხარდაჭერას ყველა პოსტ-ტიპისთვის (Post, Page, ა.შ.)
add_action('admin_init', function () {
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// 2. ვხურავთ კომენტარებს და პინგებს ფრონტზე (Frontend)
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// 3. ვმალავთ უკვე არსებულ (ძველ) კომენტარებს ფრონტზე, თუკი სადმე შემორჩა
add_filter('comments_array', '__return_empty_array', 10, 2);

// 4. ვშლით "Comments" მენიუს ადმინ პანელიდან (Dashboard მარცხენა მენიუ)
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// 5. ვშლით კომენტარების აიქონს ზედა შავი ადმინ ბარიდან (Admin Bar)
add_action('wp_before_admin_bar_render', function () {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
});