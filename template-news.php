<?php
/**
 * Template Name: News Archive
 */
get_header();

// ==========================================
// Polylang ლოგიკა სტატიკური ტექსტებისთვის
// ==========================================
$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';

$page_title = ($current_lang == 'en') ? 'All News' : 'ყველა სიახლე';
$load_more_text = ($current_lang == 'en') ? 'Load More' : 'მეტის ჩატვირთვა';
$not_found_text = ($current_lang == 'en') ? 'No news found.' : 'სიახლეები არ მოიძებნა.';

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// მოაქვს მხოლოდ მიმდინარე ენის პოსტები
$news_query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 9, 
    'paged' => $paged,
    'lang' => $current_lang // Polylang-ის ფილტრი
));
?>

<header class="archive-hero-header">
    <div class="archive-header-overlay"></div>
    <div class="archive-header-content">
        <h1 class="archive-hero-title"><?php echo esc_html($page_title); ?></h1>
    </div>
</header>

<section class="news-section" style="min-height: 80vh;">
    <div class="news-slider-wrapper" style="overflow: visible;">
        
        <div class="news-archive-grid" id="newsArchiveGrid">
            <?php 
            if($news_query->have_posts()):
                while($news_query->have_posts()): $news_query->the_post();
                    // ვიძახებთ საერთო ქარდს
                    get_template_part('template-parts/card', 'news');
                endwhile; 
            else:
                // თუ სიახლე არ მოიძებნა ენის მიხედვით
                echo '<p style="text-align:center; width:100%; grid-column: 1 / -1; font-size: 18px;">' . esc_html($not_found_text) . '</p>';
            endif; 
            ?>
        </div>
        
        <?php if($news_query->max_num_pages > 1): ?>
            <div class="load-more-container">
                <button class="btn-black-pill btn-load-more" id="loadMoreBtn" data-page="1" data-max="<?php echo $news_query->max_num_pages; ?>">
                    <span><?php echo esc_html($load_more_text); ?></span>
                    <i class="fa-solid fa-spinner fa-spin" style="display: none; margin-left: 8px;"></i>
                </button>
            </div>
        <?php endif; wp_reset_postdata(); ?>

    </div>
</section>

<?php get_footer(); ?>