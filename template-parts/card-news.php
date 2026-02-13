<?php
/**
 * Single News Card Component
 */
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