<?php
/**
 * Explore Section (Strict Original Structure with ACF Mapping)
 */
$repeater = get_field('models_slider');
$all_models_url = get_field('all_models_link');
$js_vehicles_data = array();
$unique_types = array();

// 1. მონაცემების დაჯგუფება და ტიპების რეესტრის შექმნა
if( is_array($repeater) ) {
    foreach($repeater as $row) {
        $type_slug = $row['model_type']; // sedan-suv, truck-van, pickup
        $type_label = ($type_slug == 'sedan-suv') ? 'SEDAN & SUV' : (($type_slug == 'truck-van') ? 'TRUCK & VAN' : 'PICKUP');
        
        // ვინახავთ უნიკალურ ტიპებს ტაბებისთვის
        if(!isset($unique_types[$type_slug])) {
            $unique_types[$type_slug] = $type_label;
        }

        $img_url = $row['model_image']['url'] ?? '';
        
        // JS-ისთვის საჭირო სტრუქტურა
        if(!isset($js_vehicles_data[$type_slug])) {
            $js_vehicles_data[$type_slug] = array('image' => $img_url, 'models' => array());
        }

        $js_vehicles_data[$type_slug]['models'][] = array(
            'name'  => $row['model_name'],
            'image' => $img_url,
            'link'  => $row['model_link']
        );
    }
}
?>

<section class="explore-section">
    <h2 class="section-title">
        <?php if(function_exists('pll_e')) { pll_e('Discover JAC Models'); } else { echo 'Discover JAC Models'; } ?>
    </h2>

    <div class="type-tabs">
        <?php 
        $idx = 0;
        foreach($unique_types as $slug => $label): 
            $active_tab = ($idx === 0) ? 'active' : '';
            // აიქონების ლოგიკა ორიგინალიდან
            $icon_class = (strpos($slug, 'truck') !== false) ? 'fa-truck' : ((strpos($slug, 'pickup') !== false) ? 'fa-truck-pickup' : 'fa-car');
        ?>
            <div class="type-tab <?php echo $active_tab; ?>" data-type="<?php echo $slug; ?>">
                <i class="fa-solid <?php echo $icon_class; ?> tab-icon"></i>
                <span><?php echo $label; ?></span>
            </div>
        <?php $idx++; endforeach; ?>
    </div>

    <div class="model-nav"></div>

    <div class="slider-wrapper">
        <button class="arrow-btn arrow-prev" id="prevBtn"><i data-lucide="chevron-left"></i></button>
        
        <a href="" id="carLink" style="display: contents;">
            <img src="" alt="Vehicle" class="car-img" id="carImage">
        </a>

        <button class="arrow-btn arrow-next" id="nextBtn"><i data-lucide="chevron-right"></i></button>
    </div>

    <?php if($all_models_url): ?>
        <a href="<?php echo esc_url($all_models_url); ?>">
            <button class="btn-black-pill">
                <?php if(function_exists('pll_e')) { pll_e('All Models'); } else { echo 'All Models'; } ?>
            </button>
        </a>
    <?php endif; ?>

    <script>
        // მონაცემების მიწოდება JS-ისთვის
        const dynamicVehicles = <?php echo json_encode($js_vehicles_data); ?>;
    </script>
</section>