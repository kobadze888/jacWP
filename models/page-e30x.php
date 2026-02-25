<?php
/**
 * Template Name: Model - E30X
 */
get_header();

$lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';

// ==========================================
// ენების სტატიკური ლექსიკონი
// ==========================================
$t = [
    'hero_title' => 'JAC E30X',
    'hero_sub'   => ($lang == 'en') ? 'Ever so fun.' : 'მუდამ სახალისო.',
    
    'nav_overview' => ($lang == 'en') ? 'Overview' : 'მიმოხილვა',
    'nav_specs'    => ($lang == 'en') ? 'Specs' : 'მახასიათებლები',
    'nav_gallery'  => ($lang == 'en') ? 'Gallery' : 'გალერეა',
    'nav_exterior' => ($lang == 'en') ? 'Exterior' : 'ექსტერიერი',
    'nav_interior' => ($lang == 'en') ? 'Interior' : 'ინტერიერი',
    'nav_features' => ($lang == 'en') ? 'Features' : 'ფუნქციები',
    'nav_brochure' => ($lang == 'en') ? 'Brochure' : 'ბროშურა',

    'col_title' => ($lang == 'en') ? 'Ever so colorful.' : 'მუდამ ფერადი.',
    'col_desc'  => ($lang == 'en') ? 'An elegant boutique city hatchback. It offers various colors to suit your special tastes.' : 'ელეგანტური საქალაქო ჰეჩბექი. გთავაზობთ მრავალფეროვან ფერებს თქვენი გემოვნებისთვის.',
    'col_hint'  => ($lang == 'en') ? 'Select a color' : 'აირჩიეთ ფერი',

    'hl_title'  => 'JAC E30X',
    'hl_sub'    => ($lang == 'en') ? 'Highlights' : 'მთავარი მახასიათებლები',
    'hl_btn'    => ($lang == 'en') ? 'Full Specifications' : 'სრული მონაცემები',
    
    'fun_title'  => ($lang == 'en') ? 'Ever so fun.' : 'მუდამ სახალისო.',
    'free_title' => ($lang == 'en') ? 'Ever so free.' : 'მუდამ თავისუფალი.',
    'free_desc'  => ($lang == 'en') ? 'Discover how E30X can provide extraordinary freedom to your life.' : 'აღმოაჩინეთ, როგორ ანიჭებს E30X თქვენს ცხოვრებას არაჩვეულებრივ თავისუფლებას.',

    'ext_lbl'   => ($lang == 'en') ? 'EXTERIOR' : 'ექსტერიერი',
    'ext_title' => ($lang == 'en') ? 'Born to be different.' : 'დაბადებული გამორჩეულად.',
    
    'int_lbl'   => ($lang == 'en') ? 'INTERIOR' : 'ინტერიერი',
    'int_title' => ($lang == 'en') ? 'Ever so pleasant.' : 'მუდამ სასიამოვნო.',
];

// 7 ფერის მასივი (თანმიმდევრობა და HEX კოდები გასწორებულია სურათის მიხედვით)
$colors = [
    ['name' => 'Forest Green',      'img' => 'https://jacen.jac.com.cn/_nuxt/img/ForestGreen.780b437.png', 'hex' => '#25796a'],
    ['name' => 'Pearl White',       'img' => 'https://jacen.jac.com.cn/_nuxt/img/PearlWhite.22cd990.png', 'hex' => '#e8e9ec'],
    ['name' => 'Space Gray',        'img' => 'https://jacen.jac.com.cn/_nuxt/img/SpaceGray.8bbd75f.png', 'hex' => '#4f5459'],
    ['name' => 'Azure Blue',        'img' => 'https://jacen.jac.com.cn/_nuxt/img/AzureBlue.b5b9b3f.png', 'hex' => '#c5ccd1'],
    ['name' => 'Crystal Purple',    'img' => 'https://jacen.jac.com.cn/_nuxt/img/CrystalPurple.b87b711.png', 'hex' => '#a59bb0'],
    ['name' => 'Cream Yellow',      'img' => 'https://jacen.jac.com.cn/_nuxt/img/CreamYellow.614f0d0.png', 'hex' => '#dcd3c6'],
    ['name' => 'Polar Night Black', 'img' => 'https://jacen.jac.com.cn/_nuxt/img/PolarNightBlack.114aa8a.png', 'hex' => '#181818'],
];
?>

<main class="e30x-page">

    <section class="e30x-hero" style="background-image: url('https://jacen.jac.com.cn/_nuxt/img/e30x-webbanner.93445d7.png');">
        <div class="e30x-hero-overlay"></div>
        <div class="e30x-hero-content fade-up">
            <h1><?php echo esc_html($t['hero_title']); ?></h1>
            <p><?php echo esc_html($t['hero_sub']); ?></p>
        </div>
    </section>

    <nav class="e30x-subnav" id="carSubNav">
        <div class="e30x-container subnav-flex">
            <div class="subnav-brand"><?php echo esc_html($t['hero_title']); ?></div>
            <ul class="subnav-links">
                <li><a href="#overview" class="active"><?php echo esc_html($t['nav_overview']); ?></a></li>
                <li><a href="#specs"><?php echo esc_html($t['nav_specs']); ?></a></li>
                <li><a href="#gallery"><?php echo esc_html($t['nav_gallery']); ?></a></li>
                <li><a href="#exterior"><?php echo esc_html($t['nav_exterior']); ?></a></li>
                <li><a href="#interior"><?php echo esc_html($t['nav_interior']); ?></a></li>
                <li>
                    <a href="https://jacen.jac.com.cn/pdf/E30X.pdf" target="_blank" class="subnav-btn-brochure">
                        <i class="fa-regular fa-file-pdf"></i> <?php echo esc_html($t['nav_brochure']); ?>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="overview" class="e30x-section e30x-colors text-center">
        <div class="e30x-container">
            <h2 class="section-title fade-up"><?php echo esc_html($t['col_title']); ?></h2>
            <p class="section-subtitle fade-up delay-1"><?php echo esc_html($t['col_desc']); ?></p>
            
            <div class="color-display-wrap fade-up delay-2">
                <img src="<?php echo $colors[0]['img']; ?>" id="mainCarColorImg" alt="JAC E30X Color">
            </div>

            <div class="color-picker-wrap fade-up delay-2">
                <div class="color-divider">
                    <span class="color-hint"><?php echo esc_html($t['col_hint']); ?></span>
                </div>
                <div class="color-dots">
                    <?php foreach($colors as $index => $c): ?>
                        <button class="color-dot <?php echo ($index == 0) ? 'active' : ''; ?>" 
                              data-name="<?php echo esc_attr($c['name']); ?>" 
                              data-img="<?php echo esc_url($c['img']); ?>" 
                              style="background-color: <?php echo esc_attr($c['hex']); ?>;">
                              <i class="fa-solid fa-check check-icon"></i>
                        </button>
                    <?php endforeach; ?>
                </div>
                <h3 class="color-name-display" id="colorNameDisplay"><?php echo esc_html($colors[0]['name']); ?></h3>
                <p class="color-disclaimer"><?php echo ($lang == 'en') ? 'Models and colors may vary by regions' : 'მოდელები და ფერები შესაძლოა განსხვავდებოდეს რეგიონების მიხედვით'; ?></p>
            </div>
        </div>
    </section>

    <section id="specs" class="e30x-section e30x-highlights">
        <div class="e30x-container h-flex">
            <div class="h-left fade-up">
                <h2><?php echo esc_html($t['hl_title']); ?></h2>
                <p><?php echo esc_html($t['hl_sub']); ?></p>
                <?php 
                // აქ ჩასვი შენი რეალური PDF ფაილის ლინკი
                $pdf_link = "https://jacmotors.ge/wp-content/uploads/2026/02/E30X-Specifications.pdf"; 
                ?>
                <a href="<?php echo esc_url($pdf_link); ?>" target="_blank" class="btn-black-pill mt-20" style="text-decoration: none;">
                    <?php echo esc_html($t['hl_btn']); ?>
                </a>
            </div>
            <div class="h-right">
                <div class="spec-box fade-up delay-1">
                    <span class="spec-label"><?php echo ($lang == 'en') ? 'Range' : 'სვლის მარაგი'; ?></span>
                    <span class="spec-val">405km/505km</span>
                </div>
                <div class="spec-box fade-up delay-1">
                    <span class="spec-label"><?php echo ($lang == 'en') ? 'Battery Capacity (kWh)' : 'ელემენტის მოცულობა (კვტ.სთ)'; ?></span>
                    <span class="spec-val">51.5</span>
                </div>
                <div class="spec-box fade-up delay-1">
                    <span class="spec-label"><?php echo ($lang == 'en') ? 'AC Charging Time' : 'AC დატენვის დრო'; ?></span>
                    <span class="spec-val">7.5h</span>
                </div>
                <div class="spec-box fade-up delay-2">
                    <span class="spec-label"><?php echo ($lang == 'en') ? 'DC Charging Time (30%-80%)' : 'DC დატენვის დრო (30%-80%)'; ?></span>
                    <span class="spec-val">0.5h</span>
                </div>
                <div class="spec-box fade-up delay-2">
                    <span class="spec-label"><?php echo ($lang == 'en') ? 'Turning Radius' : 'მოხვევის რადიუსი'; ?></span>
                    <span class="spec-val">4.95m</span>
                </div>
                <div class="spec-box fade-up delay-2">
                    <span class="spec-label"><?php echo ($lang == 'en') ? 'Acceleration to 100km/h' : 'აჩქარება 100 კმ/სთ-მდე'; ?></span>
                    <span class="spec-val">7.8s</span>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="e30x-section text-center gallery-main-wrapper">
        <div class="e30x-container">
            <h2 class="section-title fade-up"><?php echo esc_html($t['fun_title']); ?></h2>
            
            <div class="gallery-tabs fade-up delay-1">
                <button class="gal-tab active" data-cat="exterior"><?php echo esc_html($t['nav_exterior']); ?></button>
                <button class="gal-tab" data-cat="interior"><?php echo esc_html($t['nav_interior']); ?></button>
            </div>

            <div class="e30x-gallery fade-up delay-1">
                <img src="https://jacen.jac.com.cn/_nuxt/img/e1.e647311.png" class="gal-img active" data-cat="exterior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/e3.6a4346a.png" class="gal-img" data-cat="exterior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/e8.e0ca92a.png" class="gal-img" data-cat="exterior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/e9.9e2eafa.png" class="gal-img" data-cat="exterior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/e11.5a5302a.png" class="gal-img" data-cat="exterior">

                <img src="https://jacen.jac.com.cn/_nuxt/img/in13.baa7527.png" class="gal-img" data-cat="interior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/in13.baa7527.png" class="gal-img" data-cat="interior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/E30X-IN-012.3f764ee.png" class="gal-img" data-cat="interior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/E30X-IN-013.43334a9.png" class="gal-img" data-cat="interior">
            </div>
            
            <div class="gal-nav-wrapper fade-up delay-2">
                <button class="gal-arrow prev"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="gal-indicators"></div>
                <button class="gal-arrow next active"><i class="fa-solid fa-chevron-right"></i></button>
            </div>

           
        </div>
    </section>

    <section class="e30x-section e30x-free-section text-center">
        <div class="e30x-container">
             <h2 class="section-title fade-up"><?php echo esc_html($t['free_title']); ?></h2>
             <p class="section-subtitle fade-up delay-1"><?php echo esc_html($t['free_desc']); ?></p>
             
             <div class="e30x-video-wrapper fade-up delay-2 mt-30">
                 <video class="free-bg-video" autoplay muted loop playsinline>
                     <source src="https://jacen.jac.com.cn/_nuxt/videos/ex-E30X_FREE_1008_x264.b4b8463.mp4" type="video/mp4">
                 </video>
                 
                 <div class="video-modal-trigger" id="openFreeVideo">
                     <i class="fa-solid fa-play"></i>
                 </div>
             </div>
        </div>
    </section>

    <div class="history-video-modal" id="e30xVideoModal">
        <div class="modal-content">
            <div class="modal-close-trigger" id="closeE30xModal"><i class="fa-solid fa-xmark"></i></div>
            <video controls id="e30xModalVideo">
                <source src="https://jacen.jac.com.cn/_nuxt/videos/ex-E30X_FREE_1008_x264.b4b8463.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <div class="e30x-features-wrapper">
        <section id="exterior" class="e30x-section text-center">
            <div class="e30x-container">
                <span class="section-label fade-up"><?php echo esc_html($t['ext_lbl']); ?></span>
                <h2 class="section-title fade-up"><?php echo esc_html($t['ext_title']); ?></h2>
                
                <div class="features-grid mt-50">
                    <div class="feature-card video-card fade-up" id="triggerFeatureVideo" style="cursor: pointer;">
                        <div class="feature-img">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/ca1.137bf2b.png" alt="Video Cover">
                            <div class="feature-play-btn">
                                <i class="fa-solid fa-play"></i>
                            </div>
                        </div>
                        <div class="feature-info">
                            <h3>Born to be different</h3>
                            <p>Discover the unique design language of E30X.</p>
                        </div>
                    </div>

                    <div class="feature-card fade-up delay-1">
                        <div class="feature-img">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/ca2.2f9c262.png" alt="Exterior Feature">
                        </div>
                        <div class="feature-info">
                            <h3>Elegant city hatchback</h3>
                            <p>A boutique city car that redefines style and comfort.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="interior" class="e30x-section text-center pt-0">
            <div class="e30x-container">
                <span class="section-label fade-up"><?php echo esc_html($t['int_lbl']); ?></span>
                <h2 class="section-title fade-up"><?php echo esc_html($t['int_title']); ?></h2>
                <div class="features-grid mt-50" id="interiorGrid">
                    </div>
            </div>
        </section>
    </div>

    <div class="history-video-modal" id="featureVideoModal">
        <div class="modal-content">
            <div class="modal-close-trigger" id="closeFeatureModal"><i class="fa-solid fa-xmark"></i></div>
            <video controls id="featureModalVideo">
                <source src="https://jacen.jac.com.cn/_nuxt/videos/ex-E30X_FREE_1008_x264.b4b8463.mp4" type="video/mp4">
            </video>
        </div>
    </div>

</main>

<?php get_footer(); ?>