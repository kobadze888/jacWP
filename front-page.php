<?php
/**
 * Template Name: Front Page
 */
get_header(); ?>

<main>
    <?php 
    // Hero Slider სექცია
    get_template_part('template-parts/content', 'hero'); 

    // Explore სექცია
    get_template_part('template-parts/content', 'explore');

    // News სექცია
    get_template_part('template-parts/content', 'news');
    ?>
</main>

<?php get_footer(); ?>