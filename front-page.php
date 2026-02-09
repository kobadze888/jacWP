<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>

    <section class="hero-slider">
        <?php 
        if( have_rows('hero_slider') ): 
            $slide_index = 0;
            while( have_rows('hero_slider') ): the_row(); 
                
                // --- 1. მონაცემების წამოღება ---
                $bg_type = get_sub_field('bg_type'); // 'image' ან 'video'
                
                // ვიდეო
                $video_link = get_sub_field('video_url');

                // ფოტოები (ატვირთული და ლინკი)
                $uploaded_image = get_sub_field('image_url');       // ეს არის Image Object ან URL
                $external_image_link = get_sub_field('image_url_source'); // ეს არის ტექსტური ლინკი

                // ტექსტები
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                $btn_text = get_sub_field('btn_text');
                $btn_link = get_sub_field('btn_link');
                
                $active_class = ($slide_index === 0) ? 'active' : '';

                // --- 2. ფოტოს ლოგიკა (პრიორიტეტები) ---
                $final_image_url = '';

                if( !empty($external_image_link) ) {
                    // თუ გარე ლინკია მითითებული, ვიყენებთ მას
                    $final_image_url = $external_image_link;
                } elseif ( !empty($uploaded_image) ) {
                    // თუ არა, ვიყენებთ ატვირთულ ფოტოს
                    if( is_array($uploaded_image) ) {
                        $final_image_url = $uploaded_image['url']; // თუ Array აბრუნებს
                    } else {
                        $final_image_url = $uploaded_image; // თუ პირდაპირ URL-ს აბრუნებს
                    }
                } else {
                    // Fallback (თუ ცარიელია)
                    $final_image_url = 'https://via.placeholder.com/1920x1080.png?text=No+Image';
                }

                // ფონის სტილის მომზადება
                $bg_style = '';
                if($bg_type == 'image') {
                    $bg_style = 'style="background-image: url(' . esc_url($final_image_url) . ');"';
                }
        ?>
            <div class="slide <?php echo $active_class; ?>" <?php echo $bg_style; ?>>
                
                <?php 
                // ვიდეოს გამოჩენა
                if($bg_type == 'video' && !empty($video_link)): 
                ?>
                    <video class="bg-video" autoplay muted loop playsinline>
                        <source src="<?php echo esc_url($video_link); ?>" type="video/mp4">
                    </video>
                <?php endif; ?>
                
                <div class="hero-content">
                    <?php if($title): ?>
                        <h1 class="hero-title"><?php echo $title; ?></h1>
                    <?php endif; ?>
                    
                    <?php if($subtitle): ?>
                        <p class="hero-subtitle"><?php echo $subtitle; ?></p>
                    <?php endif; ?>
                    
                    <?php if($btn_text && $btn_link): ?>
                        <a href="<?php echo esc_url($btn_link); ?>" class="btn-white-pill"><?php echo $btn_text; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php 
            $slide_index++;
            endwhile; 
        endif; 
        ?>

        <div class="slider-indicators">
            <?php 
            if( have_rows('hero_slider') ):
                $count = count(get_field('hero_slider'));
                for($i = 0; $i < $count; $i++):
            ?>
                <div class="indicator-line <?php echo ($i === 0) ? 'active' : ''; ?>" onclick="manualSlide(<?php echo $i; ?>)">
                    <div class="indicator-progress"></div>
                </div>
            <?php endfor; endif; ?>
        </div>
    </section>

    <section class="explore-section">
        <h2 class="section-title">
            <?php if(function_exists('pll_e')) { pll_e('Discover JAC Models'); } else { echo 'Discover JAC Models'; } ?>
        </h2>

        <?php
        $terms = get_terms(array(
            'taxonomy' => 'vehicle_type',
            'hide_empty' => true,
        ));

        $js_vehicles_data = array();
        ?>

        <div class="type-tabs">
            <?php 
            if(!empty($terms) && !is_wp_error($terms)):
                foreach($terms as $index => $term): 
                    $active_tab = ($index === 0) ? 'active' : '';
                    $icon_class = 'fa-car';
                    
                    if(strpos($term->slug, 'truck') !== false) $icon_class = 'fa-truck';
                    if(strpos($term->slug, 'pickup') !== false) $icon_class = 'fa-truck-pickup';
            ?>
                <div class="type-tab <?php echo $active_tab; ?>" data-type="<?php echo $term->slug; ?>">
                    <i class="fa-solid <?php echo $icon_class; ?> tab-icon"></i>
                    <span><?php echo $term->name; ?></span>
                </div>
            <?php endforeach; endif; ?>
        </div>

        <div class="model-nav"></div>

        <div class="slider-wrapper">
            <button class="arrow-btn arrow-prev" id="prevBtn"><i data-lucide="chevron-left"></i></button>
            <img src="" alt="Vehicle" class="car-img" id="carImage">
            <button class="arrow-btn arrow-next" id="nextBtn"><i data-lucide="chevron-right"></i></button>
        </div>

        <button class="btn-black-pill">
            <?php if(function_exists('pll_e')) { pll_e('All Models'); } else { echo 'All Models'; } ?>
        </button>

        <?php
        if(!empty($terms) && !is_wp_error($terms)):
            foreach($terms as $term):
                $args = array(
                    'post_type' => 'vehicles',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'vehicle_type',
                            'field' => 'slug',
                            'terms' => $term->slug,
                        ),
                    ),
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );
                $query = new WP_Query($args);
                
                $models_list = array();
                $first_image = '';

                if($query->have_posts()):
                    while($query->have_posts()): $query->the_post();
                        $img_url = get_field('vehicle_image'); 
                        if(!$img_url) $img_url = 'https://via.placeholder.com/800x400.png?text=No+Image';
                        if(empty($first_image)) $first_image = $img_url;

                        $models_list[] = array(
                            'name' => get_the_title(),
                            'image' => $img_url,
                            'link' => get_permalink()
                        );
                    endwhile;
                    wp_reset_postdata();
                endif;

                $js_vehicles_data[$term->slug] = array(
                    'image' => $first_image, 
                    'models' => $models_list
                );

            endforeach;
        endif;
        ?>

        <script>
            const dynamicVehicles = <?php echo json_encode($js_vehicles_data); ?>;
        </script>

    </section>

    <section class="news-section">
        <div class="news-header">
            <h2 class="news-title">
                <?php if(function_exists('pll_e')) { pll_e('Discover JAC'); } else { echo 'Discover JAC'; } ?>
            </h2>
        </div>

        <div class="news-grid" id="newsGrid">
            <?php 
            $news_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
            );
            $news_query = new WP_Query($news_args);

            if($news_query->have_posts()):
                $n = 0;
                while($news_query->have_posts()): $news_query->the_post();
                $active_class = ($n === 0) ? 'active' : '';
            ?>
                <div class="news-card <?php echo $active_class; ?>">
                    <div class="news-img-container">
                        <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="<?php the_title(); ?>" class="news-img">
                            <?php else: ?>
                                <img src="https://via.placeholder.com/800x600.png?text=News" alt="News" class="news-img">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="news-date"><?php echo get_the_date('Y/m/d'); ?></div>
                    <a href="<?php the_permalink(); ?>">
                        <div class="news-item-title"><?php the_title(); ?></div>
                    </a>
                </div>
            <?php 
                $n++;
                endwhile; 
                wp_reset_postdata();
            endif; 
            ?>
        </div>

        <div class="news-mobile-controls">
            <div class="news-nav-btn" id="newsPrev"><i data-lucide="chevron-left"></i></div>
            <div class="news-dots" id="newsDots"></div>
            <div class="news-nav-btn" id="newsNext"><i data-lucide="chevron-right"></i></div>
        </div>

        <button class="btn-black-pill">
            <?php if(function_exists('pll_e')) { pll_e('All News'); } else { echo 'All News'; } ?>
        </button>
    </section>

    <div style="height: 100px; background: #fff;"></div>

<?php get_footer(); ?>