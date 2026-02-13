<?php
/**
 * Single Post Template for News - Polylang Ready & No X (Twitter)
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); 
    
    // ==========================================
    // Polylang ლოგიკა სტატიკური ტექსტებისა და ლინკებისთვის
    // ==========================================
    $current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';
    
    // თქვენს მიერ მოწოდებული ზუსტი ლინკები
    $back_url = ($current_lang == 'en') ? home_url('/en/news/') : home_url('/news-ka/');
    $back_text = ($current_lang == 'en') ? 'Back to News' : 'ყველა სიახლე';
    $share_text = ($current_lang == 'en') ? 'Share:' : 'გაზიარება:';
?>

<div class="single-news-page">
    <div class="single-article-container">
        
        <article class="article-main-content">
            
            <a href="<?php echo esc_url($back_url); ?>" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i> <?php echo esc_html($back_text); ?>
            </a>

            <h1 class="article-title"><?php the_title(); ?></h1>
            
            <div class="article-meta-bar">
                <div class="date-block-horizontal">
                    <i class="fa-regular fa-calendar-days"></i>
                    <span><?php echo get_the_date('d.m.Y'); ?></span>
                </div>

                <div class="share-block-horizontal">
                    <span class="share-label"><?php echo esc_html($share_text); ?></span>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="share-icon fb"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="share-icon in"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="share-icon ig"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

            <div class="article-body-text">
                <?php 
                if (has_post_thumbnail()) {
                    echo '<img src="' . get_the_post_thumbnail_url(null, 'large') . '" alt="' . esc_attr(get_the_title()) . '" class="main-article-img">';
                }
                the_content(); 
                ?>
            </div>

            <?php 
            $gallery_images = get_field('news_gallery'); 
            if( $gallery_images ): 
            ?>
                <div class="news-single-gallery">
                    <?php foreach( $gallery_images as $image ): ?>
                        <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="news-gallery" class="gallery-item" data-caption="<?php echo esc_attr($image['caption']); ?>">
                            <img src="<?php echo esc_url($image['sizes']['medium_large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </article>
    </div>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>