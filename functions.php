<?php

function jac_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@100..900&display=swap', array(), null);
    
    // FontAwesome
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    
    // Main Style
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Lucide Icons (Script)
    wp_enqueue_script('lucide', 'https://unpkg.com/lucide@latest', array(), null, false);

    // Custom JS
    wp_enqueue_script('jac-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'jac_enqueue_scripts');

?>