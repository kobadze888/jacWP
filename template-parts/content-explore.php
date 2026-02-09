<section class="explore-section">
    <h2 class="section-title">
        <?php if(function_exists('pll_e')) { pll_e('Discover JAC Models'); } else { echo 'Discover JAC Models'; } ?>
    </h2>
    <?php
    $terms = get_terms(array('taxonomy' => 'vehicle_type', 'hide_empty' => true));
    $js_vehicles_data = array();
    ?>
    <div class="type-tabs">
        <?php if(!empty($terms) && !is_wp_error($terms)):
            foreach($terms as $index => $term): 
                $active_tab = ($index === 0) ? 'active' : '';
                $icon_class = (strpos($term->slug, 'truck') !== false) ? 'fa-truck' : ((strpos($term->slug, 'pickup') !== false) ? 'fa-truck-pickup' : 'fa-car');
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
    <button class="btn-black-pill"><?php if(function_exists('pll_e')) { pll_e('All Models'); } else { echo 'All Models'; } ?></button>
    <?php
    if(!empty($terms) && !is_wp_error($terms)):
        foreach($terms as $term):
            $query = new WP_Query(array('post_type' => 'vehicles', 'tax_query' => array(array('taxonomy' => 'vehicle_type', 'field' => 'slug', 'terms' => $term->slug)), 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC'));
            $models_list = array(); $first_image = '';
            if($query->have_posts()):
                while($query->have_posts()): $query->the_post();
                    $img_url = get_field('vehicle_image') ?: 'https://via.placeholder.com/800x400.png?text=No+Image';
                    if(empty($first_image)) $first_image = $img_url;
                    $models_list[] = array('name' => get_the_title(), 'image' => $img_url, 'link' => get_permalink());
                endwhile; wp_reset_postdata();
            endif;
            $js_vehicles_data[$term->slug] = array('image' => $first_image, 'models' => $models_list);
        endforeach;
    endif;
    ?>
    <script>const dynamicVehicles = <?php echo json_encode($js_vehicles_data); ?>;</script>
</section>