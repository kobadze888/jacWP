<section class="news-section">
    <div class="news-header"><h2 class="news-title"><?php if(function_exists('pll_e')) { pll_e('Discover JAC'); } else { echo 'Discover JAC'; } ?></h2></div>
    <div class="news-grid" id="newsGrid">
        <?php 
        $news_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3));
        if($news_query->have_posts()):
            $n = 0;
            while($news_query->have_posts()): $news_query->the_post();
            $active_class = ($n === 0) ? 'active' : '';
        ?>
            <div class="news-card <?php echo $active_class; ?>">
                <div class="news-img-container">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'medium_large') : 'https://via.placeholder.com/800x600.png?text=News'; ?>" alt="<?php the_title(); ?>" class="news-img">
                    </a>
                </div>
                <div class="news-date"><?php echo get_the_date('Y/m/d'); ?></div>
                <a href="<?php the_permalink(); ?>"><div class="news-item-title"><?php the_title(); ?></div></a>
            </div>
        <?php $n++; endwhile; wp_reset_postdata(); endif; ?>
    </div>
    <div class="news-mobile-controls">
        <div class="news-nav-btn" id="newsPrev"><i data-lucide="chevron-left"></i></div>
        <div class="news-dots" id="newsDots"></div>
        <div class="news-nav-btn" id="newsNext"><i data-lucide="chevron-right"></i></div>
    </div>
    <button class="btn-black-pill"><?php if(function_exists('pll_e')) { pll_e('All News'); } else { echo 'All News'; } ?></button>
</section>
<div style="height: 100px; background: #fff;"></div>