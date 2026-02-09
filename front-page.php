/**
 * Template Name: Front Page
 */

<?php get_header(); ?>

    <section class="hero-slider">
        <?php 
        if( have_rows('hero_slider') ): 
            $slide_index = 0;
            while( have_rows('hero_slider') ): the_row(); 
                $bg_type = get_sub_field('bg_type'); // 'video' or 'image'
                $video = get_sub_field('video_url');
                $image = get_sub_field('image_url');
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                $btn_text = get_sub_field('btn_text');
                $btn_link = get_sub_field('btn_link');
                $active_class = ($slide_index === 0) ? 'active' : '';
        ?>
            <div class="slide <?php echo $active_class; ?>" <?php if($bg_type == 'image') echo 'style="background-image: url('.$image.');"'; ?>>
                <?php if($bg_type == 'video' && $video): ?>
                    <video class="bg-video" autoplay muted loop playsinline>
                        <source src="<?php echo $video; ?>" type="video/mp4">
                    </video>
                <?php endif; ?>
                
                <div class="hero-content">
                    <h1 class="hero-title"><?php echo $title; ?></h1>
                    <p class="hero-subtitle"><?php echo $subtitle; ?></p>
                    <?php if($btn_text): ?>
                        <a href="<?php echo $btn_link; ?>" class="btn-white-pill"><?php echo $btn_text; ?></a>
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
        <h2 class="section-title"><?php pll_e('Discover JAC Models'); // პოლილანგის სტრინგი ?></h2>

        <?php
        // 1. ტაქსონომიების (ტიპების) წამოღება
        $terms = get_terms(array(
            'taxonomy' => 'vehicle_type',
            'hide_empty' => true,
        ));

        // JS-ისთვის მონაცემების მოსამზადებელი მასივი
        $js_vehicles_data = array();
        ?>

        <div class="type-tabs">
            <?php 
            if(!empty($terms)):
                foreach($terms as $index => $term): 
                    $active_tab = ($index === 0) ? 'active' : '';
                    $icon_class = 'fa-car'; // დეფოლტ აიკონი
                    
                    // აიკონების ლოგიკა (შეგიძლია ACF-ითაც გააკეთო ტაქსონომიაზე)
                    if($term->slug == 'truck') $icon_class = 'fa-truck';
                    if($term->slug == 'pickup') $icon_class = 'fa-truck-pickup';
            ?>
                <div class="type-tab <?php echo $active_tab; ?>" data-type="<?php echo $term->slug; ?>">
                    <i class="fa-solid <?php echo $icon_class; ?> tab-icon"></i>
                    <span><?php echo $term->name; ?></span>
                </div>
            <?php endforeach; endif; ?>
        </div>

        <div class="model-nav">
            </div>

        <div class="slider-wrapper">
            <button class="arrow-btn arrow-prev" id="prevBtn"><i data-lucide="chevron-left"></i></button>
            <img src="" alt="Vehicle" class="car-img" id="carImage">
            <button class="arrow-btn arrow-next" id="nextBtn"><i data-lucide="chevron-right"></i></button>
        </div>

        <button class="btn-black-pill"><?php pll_e('All Models'); ?></button>

        <?php
        // 2. მონაცემების მომზადება JS-ისთვის
        if(!empty($terms)):
            foreach($terms as $term):
                // თითოეული კატეგორიისთვის მანქანების წამოღება
                $args = array(
                    'post_type' => 'vehicles',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'vehicle_type',
                            'field' => 'slug',
                            'terms' => $term->slug,
                        ),
                    ),
                    'posts_per_page' => -1, // ყველა
                );
                $query = new WP_Query($args);
                
                $models_list = array();
                $first_image = '';

                if($query->have_posts()):
                    while($query->have_posts()): $query->the_post();
                        $img_url = get_field('vehicle_image'); // ACF ველი
                        // თუ მანქანას სურათი არ აქვს, Placeholder
                        if(!$img_url) $img_url = 'https://via.placeholder.com/800x400';
                        
                        // პირველი მანქანის სურათი კატეგორიისთვის
                        if(empty($first_image)) $first_image = $img_url;

                        $models_list[] = array(
                            'name' => get_the_title(),
                            'image' => $img_url,
                            'link' => get_permalink()
                        );
                    endwhile;
                    wp_reset_postdata();
                endif;

                // JS ობიექტის შევსება
                $js_vehicles_data[$term->slug] = array(
                    'image' => $first_image, // დეფოლტ სურათი კატეგორიისთვის (პირველი მანქანა)
                    'models' => $models_list
                );

            endforeach;
        endif;
        ?>

        <script>
            // ეს ცვლადი ჩაანაცვლებს შენს main.js-ში არსებულ vehicle ობიექტს
            const dynamicVehicles = <?php echo json_encode($js_vehicles_data); ?>;
        </script>

    </section>

    <section class="news-section">
        <div class="news-header">
            <h2 class="news-title"><?php pll_e('Discover JAC'); ?></h2>
        </div>

        <div class="news-grid" id="newsGrid">
            <?php 
            // ბოლო 3 სიახლე (სტანდარტული პოსტები)
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
                                <img src="https://via.placeholder.com/800x600" alt="News" class="news-img">
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

        <button class="btn-black-pill"><?php pll_e('All News'); ?></button>
    </section>

    <div style="height: 100px; background: #fff;"></div>

<?php get_footer(); ?>