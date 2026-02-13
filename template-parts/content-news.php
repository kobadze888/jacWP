<?php
/**
 * News Slider Section - Date on Image
 */
$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';
$news_title = ($current_lang == 'ka') ? 'აღმოაჩინე JAC' : 'Discover JAC';
$btn_label  = ($current_lang == 'ka') ? 'ყველა სიახლე' : 'All News';
$btn_url    = ($current_lang == 'ka') ? home_url('/news/') : home_url('/en/news/');
?>

<section class="news-section">
    <div class="news-header">
        <h2 class="news-title"><?php echo esc_html($news_title); ?></h2>
    </div>

    <div class="news-slider-outer">
        <div class="news-grid" id="newsGrid">
            <?php 
            $news_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 6));
            if($news_query->have_posts()):
                while($news_query->have_posts()): $news_query->the_post();
            ?>
                <div class="news-card">
                    <div class="news-img-container">
                        <div class="news-date-badge">
                            <i class="fa-regular fa-calendar-days"></i> 
                            <?php echo get_the_date('d.m.Y'); ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'medium_large') : 'https://via.placeholder.com/800x600.png?text=News'; ?>" 
                                 alt="<?php the_title(); ?>" class="news-img">
                        </a>
                    </div>
                    
                    <div class="news-content-wrap">
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="news-item-title"><?php the_title(); ?></h3>
                        </a>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>

    <div class="news-controls">
        <div class="news-nav-btn" id="newsPrev"><i class="fa-solid fa-chevron-left"></i></div>
        <div class="news-dots" id="newsDots"></div>
        <div class="news-nav-btn" id="newsNext"><i class="fa-solid fa-chevron-right"></i></div>
    </div>

    <a href="<?php echo esc_url($btn_url); ?>">
        <button class="btn-black-pill"><?php echo esc_html($btn_label); ?></button>
    </a>
</section>
<div style="height: 60px; background: #fff;"></div>