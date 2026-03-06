<?php

/**
 * Template Name: Model - T9
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
    'nav_battery'  => ($lang == 'en') ? 'Battery' : 'ელემენტი',
    /* BATTERY SECTION TEXTS */
    'bat_lbl'      => ($lang == 'en') ? 'BATTERY' : 'ელემენტი',
    'bat_title'    => ($lang == 'en') ? '0 Thermal Runaway Honeycomb Battery' : '0 Thermal Runaway Honeycomb ელემენტი',
    'bat_desc'     => ($lang == 'en') ? 'The high-safety battery pack ensures the safety of the electric vehicle, and thus ensures the safety of the user\'s person and property.' : 'მაღალი უსაფრთხოების ელემენტების პაკეტი უზრუნველყოფს ელექტრომობილის სტაბილურობას და იცავს მფლობელის უსაფრთხოებას.',
    'bat_spec1'    => ($lang == 'en') ? 'Range' : 'სვლის მარაგი',
    'bat_spec2'    => ($lang == 'en') ? 'Capacity' : 'მოცულობა',
    'bat_spec3'    => ($lang == 'en') ? 'Energy consumption' : 'ენერგიის მოხმარება',
    'bat_spec4'    => ($lang == 'en') ? 'Estimated DC charging time (SOC30%-80%)' : 'DC დატენვის დრო (30%-80%)',
    'nav_brochure' => ($lang == 'en') ? 'Brochure' : 'ბროშურა',

    /* 8.5 MORE FEATURES TRANSLATIONS (BILINGUAL TITLES) */
    'feat_lbl'      => ($lang == 'en') ? 'MORE FEATURES' : 'მეტი შესაძლებლობა',
    'feat_title'    => ($lang == 'en') ? 'Ever so easy.' : 'მუდამ მარტივი.',

    // ბარათი 1
    'f_c1_t' => ($lang == 'en') ? '9-In-1 Power-train' : '9-ერთში ძალოვანი აგრეგატი',
    'f_c1_d' => ($lang == 'en') ? 'Make full use of the vehicle space to provide a larger interior and trunk capacity than other models in the same segment.' : 'ავტომობილის სივრცის მაქსიმალური ათვისება უზრუნველყოფს უფრო დიდ ინტერიერსა და საბარგულის მოცულობას, ვიდრე იმავე სეგმენტის სხვა მოდელებში.',

    // ბარათი 2
    'f_c2_t' => ($lang == 'en') ? '3-In-1 Intelligent Braking System' : '3-ერთში ინტელექტუალური სამუხრუჭე სისტემა',
    'f_c2_d' => ($lang == 'en') ? 'Through the three-in-one braking system, it can brake in time and comfortably, ensure the safety of the user.' : 'სამი-ერთში სამუხრუჭე სისტემის მეშვეობით, ავტომობილი მუხრუჭებს დროულად და კომფორტულად, რაც უზრუნველყოფს მძღოლის უსაფრთხოებას.',

    // ბარათი 3
    'f_c3_t' => ($lang == 'en') ? '4.95m Turning Radius' : '4.95მ მოხვევის რადიუსი',
    'f_c3_d' => ($lang == 'en') ? 'The turning radius is small, and it can easily make a U-turn on narrow roads, making it more convenient for users to drive.' : 'მოხვევის რადიუსი მცირეა, რაც აადვილებს მანევრირებას ვიწრო გზებზე და მართვას უფრო მოსახერხებელს ხდის.',

    // ბარათი 4
    'f_c4_t' => ($lang == 'en') ? 'Efficient Super-Fast Charging' : 'ეფექტური სუპერ-სწრაფი დატენვა',
    'f_c4_d' => ($lang == 'en') ? 'The ultra-high charging power reduces the charging time from 30% to 80% to as little as 0.5 hours, significantly enhancing the user experience.' : 'ულტრა-მაღალი დატენვის სიმძლავრე ამცირებს დატენვის დროს 30%-დან 80%-მდე სულ რაღაც 0.5 საათამდე.',

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

    /* SMART TECHNOLOGY SECTION */
    'tech_lbl'   => ($lang == 'en') ? 'TECHNOLOGY' : 'ტექნოლოგია',
    'tech_title' => ($lang == 'en') ? 'Ever so smart.' : 'მუდამ გონიერი.',
    'tech_c1_t'  => ($lang == 'en') ? '12.8-inch Touchscreen & 6.2-inch Digital Instrument Cluster' : '12.8-დუიმიანი სენსორული ეკრანი და 6.2-დუიმიანი ციფრული მაჩვენებელთა დაფა',
    'tech_c2_t'  => ($lang == 'en') ? 'Mobile Smart Power Station' : 'მობილური ჭკვიანი ენერგო სადგური',
    'tech_c3_t'  => ($lang == 'en') ? 'Wireless Charging' : 'უსადენო დატენვა',

    /* 8. SAFETY SECTION TRANSLATIONS */
    'saf_lbl'       => ($lang == 'en') ? 'SAFETY' : 'უსაფრთხოება',
    'saf_title'     => ($lang == 'en') ? 'Ever so relaxed.' : 'მუდამ მშვიდი.',
    'saf_sub'       => ($lang == 'en') ? 'For JAC, safety is a top priority.' : 'JAC-ისთვის უსაფრთხოება მთავარი პრიორიტეტია.',
    'saf_vid_txt'   => ($lang == 'en') ? 'Five-Star Crash Safety' : 'ხუთვარსკვლავიანი უსაფრთხოება',
    'saf_bot_title' => ($lang == 'en') ? 'JAC E30X offers total safety for every passenger thanks to its advanced active and passive safety systems.' : 'JAC E30X გთავაზობთ სრულ უსაფრთხოებას თითოეული მგზავრისთვის, მისი მოწინავე აქტიური და პასიური სისტემების წყალობით.',
    'saf_bot_desc'  => ($lang == 'en') ? 'Prioritizing occupant protection, the E30X far exceeds safety standards with its 6 airbags and a series of top-quality braking systems. In addition, it has a 360° panoramic camera, parking sensors, Autohold, etc.' : 'მგზავრთა დაცვის პრიორიტეტიზაციით, E30X ბევრად აღემატება უსაფრთხოების სტანდარტებს 6 უსაფრთხოების ბალიშით და უმაღლესი ხარისხის სამუხრუჭე სისტემების სერიით. დამატებით, მას აქვს 360° პანორამული კამერა, პარკინგის სენსორები, Autohold და ა.შ.'
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
                <li><a href="#battery"><?php echo esc_html($t['nav_battery']); ?></a></li>
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
                    <?php foreach ($colors as $index => $c): ?>
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
                $pdf_link = "https://jacen.jac.com.cn/pdf/E30X.pdf";
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
        <section id="exterior" class="e30x-section text-center feature-slider-section">
            <div class="e30x-container">

                <span class="section-label fade-up"><?php echo esc_html($t['ext_lbl']); ?></span>
                <div class="label-line fade-up"></div>
                <h2 class="section-title fade-up delay-1"><?php echo esc_html($t['ext_title']); ?></h2>

                <div class="feature-track-wrapper mt-20">
                    <div class="feature-track" id="exteriorTrack">

                        <div class="feature-slide">
                            <div class="feature-media-row fade-up">
                                <div class="feature-media-item video-trigger" id="triggerFeatureVideo">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ca1.137bf2b.png" alt="E30X Video Cover">
                                    <div class="play-icon-small"><i class="fa-solid fa-play"></i></div>
                                </div>
                                <div class="feature-media-item">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ca2.2f9c262.png" alt="E30X Design">
                                </div>
                            </div>
                            <div class="feature-content-row fade-up delay-1">
                                <div class="feature-text-left">
                                    <h3><?php echo ($lang == 'en') ? 'Eye-catching design.' : 'თვალისმომჭრელი დიზაინი.'; ?></h3>
                                </div>
                                <div class="feature-text-right">
                                    <p><?php echo ($lang == 'en') ? 'E30X features sleek body lines and bubble aesthetic designs that stand you out on every street corners, complemented by its LED crystal headlights and dual-color rim designs.' : 'E30X გამოირჩევა დახვეწილი ხაზებით და ესთეტიკური დიზაინით, რომელიც გამოგარჩევთ ნებისმიერ ქუჩაში. ამ ყველაფერს ემატება LED ფარები და ორფერიანი დისკები.'; ?></p>
                                    <a href="https://jacen.jac.com.cn/pdf/E30X.pdf" target="_blank" class="spec-link">
                                        <?php echo ($lang == 'en') ? 'Full Specifications' : 'სრული მონაცემები'; ?> <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="feature-slide">
                            <div class="feature-media-row fade-up">
                                <div class="feature-media-item">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ca3.152c7bf.png" alt="Smart exterior">
                                </div>
                                <div class="feature-media-item">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ca4.2e26d82.png" alt="Spacious hatchback">
                                </div>
                            </div>
                            <div class="feature-content-row fade-up delay-1">
                                <div class="feature-text-left">
                                    <h3><?php echo ($lang == 'en') ? 'Smart and spacious.' : 'ჭკვიანი და ტევადი.'; ?></h3>
                                </div>
                                <div class="feature-text-right">
                                    <p><?php echo ($lang == 'en') ? 'A spacious hatchback with car length up to 4025mm, offering a trunk space up to 300L and maximum 1150L with seat folded.' : 'ტევადი ჰეჩბექი 4025მმ-მდე სიგრძით, რომელიც გთავაზობთ 300ლ-მდე საბარგულის მოცულობას, ხოლო სავარძლების დაკეცვისას მოცულობა 1150ლ-მდე იზრდება.'; ?></p>
                                    <a href="https://jacen.jac.com.cn/pdf/E30X.pdf" target="_blank" class="spec-link">
                                        <?php echo ($lang == 'en') ? 'Full Specifications' : 'სრული მონაცემები'; ?> <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="feature-slide">
                            <div class="feature-media-row fade-up">
                                <div class="feature-media-item">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ca5.5ed5020.png" alt="Hidden Door Handles">
                                </div>
                                <div class="feature-media-item">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ca6.bae0803.png" alt="Automatic Unlocking Function">
                                </div>
                            </div>
                            <div class="feature-content-row fade-up delay-1">
                                <div class="feature-text-left">
                                    <h3 style="font-size: 26px; line-height: 1.2;"><?php echo ($lang == 'en') ? 'Hidden door handles with automatic unlocking function.' : 'დამალული კარის სახელურები ავტომატური განბლოკვის ფუნქციით.'; ?></h3>
                                </div>
                                <div class="feature-text-right">
                                    <p><?php echo ($lang == 'en') ? 'Simple and elegant hidden door handle design with automatic unlocking function when you approach the car.' : 'კარის დამალული სახელურის მარტივი და ელეგანტური დიზაინი, რომელიც ავტომატურად განიბლოკება მანქანასთან მიახლოებისას.'; ?></p>
                                    <a href="https://jacen.jac.com.cn/pdf/E30X.pdf" target="_blank" class="spec-link">
                                        <?php echo ($lang == 'en') ? 'Full Specifications' : 'სრული მონაცემები'; ?> <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="feature-slider-controls fade-up delay-2">
                    <button class="feat-arrow prev" data-slider="exteriorTrack"><i class="fa-solid fa-chevron-left"></i></button>
                    <div class="feat-dots">
                        <span class="f-dot active"></span>
                        <span class="f-dot"></span>
                        <span class="f-dot"></span>
                    </div>
                    <button class="feat-arrow next" data-slider="exteriorTrack"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </section>

        <!-- INTERIOR SECTION (BILINGUAL & SLIDER)  -->
        <section id="interior" class="e30x-section text-center feature-slider-section" style="padding-top: 20px;">
            <div class="e30x-container">

                <span class="section-label fade-up"><?php echo esc_html($t['int_lbl']); ?></span>
                <div class="label-line fade-up"></div>
                <h2 class="section-title fade-up delay-1"><?php echo esc_html($t['int_title']); ?></h2>

                <div class="feature-track-wrapper mt-50">
                    <div class="feature-track" id="interiorTrack">

                        <div class="feature-slide">
                            <div class="feature-media-row fade-up">
                                <div class="feature-media-item interior-media-item video-trigger" id="triggerInteriorVideo">
                                    <video autoplay muted loop playsinline class="interior-video">
                                        <source src="https://jacen.jac.com.cn/_nuxt/videos/in-E30X_PLEASANT_1008_output.88cb4ef.mp4" type="video/mp4">
                                    </video>
                                    <div class="play-icon-small"><i class="fa-solid fa-play"></i></div>
                                </div>
                            </div>
                            <div class="feature-content-row fade-up delay-1">
                                <div class="feature-text-left">
                                    <h3><?php echo ($lang == 'en') ? 'Ever so pleasant.' : 'მუდამ სასიამოვნო.'; ?></h3>
                                </div>
                                <div class="feature-text-right">
                                    <p><?php echo ($lang == 'en') ? 'The E30X stands out for its elegance and luxury. Its leather seats and refined interior combine style and comfort, while the 100% glass roof with a panoramic opening elevates the driving experience to the next level.' : 'E30X გამოირჩევა თავისი ელეგანტურობითა და ფუფუნებით. მისი ტყავის სავარძლები და დახვეწილი ინტერიერი აერთიანებს სტილსა და კომფორტს, ხოლო 100%-იანი მინის პანორამული ჭერი მართვის გამოცდილებას ახალ საფეხურზე აიყვანს.'; ?></p>
                                    <a href="https://jacen.jac.com.cn/pdf/E30X.pdf" target="_blank" class="spec-link">
                                        <?php echo ($lang == 'en') ? 'Full Specifications' : 'სრული მონაცემები'; ?> <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="feature-slide">
                            <div class="feature-media-row fade-up">
                                <div class="feature-media-item interior-media-item">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/int-13.b1775b2.png" alt="Comfortable Interior">
                                </div>
                            </div>
                            <div class="feature-content-row fade-up delay-1">
                                <div class="feature-text-left">
                                    <h3><?php echo ($lang == 'en') ? 'Ever so comfortable.' : 'მუდამ კომფორტული.'; ?></h3>
                                </div>
                                <div class="feature-text-right">
                                    <p><?php echo ($lang == 'en') ? 'The E30X is equipped with a huge 12.8-inch touchscreen that is compatible with Apple CarPlay and Android Auto. It also comes with a wireless charger for your phone. This JAC vehicle will amaze you with its extraordinary details.' : 'E30X აღჭურვილია უზარმაზარი 12.8-დუიმიანი სენსორული ეკრანით, რომელიც თავსებადია Apple CarPlay და Android Auto-სთან. მას ასევე მოყვება უსადენო დამტენი თქვენი ტელეფონისთვის. JAC-ის ეს ავტომობილი გაგაოცებთ თავისი არაჩვეულებრივი დეტალებით.'; ?></p>
                                    <a href="https://jacen.jac.com.cn/pdf/E30X.pdf" target="_blank" class="spec-link">
                                        <?php echo ($lang == 'en') ? 'Full Specifications' : 'სრული მონაცემები'; ?> <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="feature-slide">
                            <div class="feature-media-row fade-up">
                                <div class="feature-media-item interior-media-item">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/info1-2.ed13100.png" alt="Panoramic Roof">
                                </div>
                            </div>
                            <div class="feature-content-row fade-up delay-1">
                                <div class="feature-text-left">
                                    <h3><?php echo ($lang == 'en') ? 'Panoramic roof.' : 'პანორამული ჭერი.'; ?></h3>
                                </div>
                                <div class="feature-text-right">
                                    <p><?php echo ($lang == 'en') ? 'Double-layer laminated glass + “Low E” glass for thermal insulation, blocks UV rays and improves vision and lighting, providing a pleasant driving experience.' : 'ორშრიანი ლამინირებული მინა + „Low E“ მინა თბოიზოლაციისთვის, ბლოკავს ულტრაიისფერ სხივებს და აუმჯობესებს ხილვადობასა და განათებას, რაც უზრუნველყოფს სასიამოვნო მგზავრობას.'; ?></p>
                                    <a href="https://jacen.jac.com.cn/pdf/E30X.pdf" target="_blank" class="spec-link">
                                        <?php echo ($lang == 'en') ? 'Full Specifications' : 'სრული მონაცემები'; ?> <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="feature-slider-controls fade-up delay-2">
                    <button class="feat-arrow prev" data-slider="interiorTrack"><i class="fa-solid fa-chevron-left"></i></button>
                    <div class="feat-dots">
                        <span class="f-dot active"></span>
                        <span class="f-dot"></span>
                        <span class="f-dot"></span>
                    </div>
                    <button class="feat-arrow next" data-slider="interiorTrack"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </section>
    </div>

    <div class="history-video-modal" id="interiorVideoModal">
        <div class="modal-content">
            <div class="modal-close-trigger" id="closeInteriorModal"><i class="fa-solid fa-xmark"></i></div>
            <video controls id="interiorModalVideo">
                <source src="https://jacen.jac.com.cn/_nuxt/videos/in-E30X_PLEASANT_1008_output.88cb4ef.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <section id="safety" class="e30x-section text-center safety-section" style="background: #fff; padding-bottom: 120px;">
        <div class="e30x-container">
            <span class="section-label fade-up"><?php echo esc_html($t['saf_lbl']); ?></span>
            <div class="label-line fade-up"></div>
            <h2 class="section-title fade-up delay-1"><?php echo esc_html($t['saf_title']); ?></h2>
            <p class="section-subtitle fade-up delay-1"><?php echo esc_html($t['saf_sub']); ?></p>

            <div class="safety-video-wrapper fade-up delay-2 video-trigger" id="triggerSafetyVideo">
                <video autoplay muted loop playsinline class="safety-video">
                    <source src="https://jacen.jac.com.cn/_nuxt/videos/safety-E30X_RELAXED_1008_output.9013afa.mp4" type="video/mp4">
                </video>
                <div class="safety-play-btn"><i class="fa-solid fa-play"></i></div>
            </div>

            <div class="safety-bottom-content fade-up delay-2">
                <h3><?php echo esc_html($t['saf_bot_title']); ?></h3>
                <p><?php echo esc_html($t['saf_bot_desc']); ?></p>
            </div>
        </div>
    </section>

    <section id="battery" class="e30x-section e30x-battery">
        <div class="e30x-container">
            <span class="section-label fade-up text-center"><?php echo esc_html($t['bat_lbl']); ?></span>
            <div class="label-line fade-up"></div>
        </div>
        <div class="battery-content-wrapper fade-up delay-1">
            <picture class="battery-main-bg">
                <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/111-sj.a9100ff.png">
                <img src="https://jacen.jac.com.cn/_nuxt/img/111.3bd97a1.jpg" alt="E30X Battery Background">
            </picture>

            <div class="battery-info-card">
                <h2 class="battery-info-title"><?php echo esc_html($t['bat_title']); ?></h2>
                <p class="battery-info-desc"><?php echo esc_html($t['bat_desc']); ?></p>

                <ul class="battery-specs-grid">
                    <li><strong><?php echo esc_html($t['bat_spec1']); ?>:</strong> 405/505km</li>
                    <li><strong><?php echo esc_html($t['bat_spec2']); ?>:</strong> 41kWh/54.5kWh</li>
                    <li><strong><?php echo esc_html($t['bat_spec3']); ?>:</strong> 10kWh/100km</li>
                    <li><strong><?php echo esc_html($t['bat_spec4']); ?>:</strong> 0.5h</li>
                </ul>

                <a href="https://jacen.jac.com.cn/pdf/E30X.pdf" target="_blank" class="btn-white-pill">
                    <?php echo esc_html($t['hl_btn']); ?>
                </a>
            </div>
        </div>
        </div>
    </section>
    <section id="more-features" class="e30x-section more-features-section">
        <div class="e30x-container">
            <div class="text-center">
                <span class="section-label fade-up"><?php echo esc_html($t['feat_lbl']); ?></span>
                <div class="label-line fade-up"></div>
                <h2 class="section-title fade-up delay-1"><?php echo esc_html($t['feat_title']); ?></h2>
            </div>

            <div class="mf-banner fade-up delay-1">
                <img src="https://jacen.jac.com.cn/_nuxt/img/tech.5c7d60f.png" alt="E30X Technology">
            </div>

            <div class="mf-bento-grid mt-40">
                <div class="bento-card bento-vertical fade-up">
                    <div class="bento-text">
                        <h3 class="bento-title"><?php echo esc_html($t['f_c1_t']); ?></h3>
                        <p class="bento-desc"><?php echo esc_html($t['f_c1_d']); ?></p>
                    </div>
                    <div class="bento-img">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/JAC_054.4fb9117.png" alt="9-In-1 Power-train">
                    </div>
                </div>

                <div class="bento-card bento-horizontal fade-up delay-1">
                    <div class="bento-text">
                        <h3 class="bento-title"><?php echo esc_html($t['f_c2_t']); ?></h3>
                        <p class="bento-desc"><?php echo esc_html($t['f_c2_d']); ?></p>
                    </div>
                    <div class="bento-img">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/JAC_066.d17f68d.png" alt="Intelligent Braking">
                    </div>
                </div>

                <div class="bento-card bento-text-only fade-up delay-2">
                    <div class="bento-text">
                        <h3 class="bento-title"><?php echo esc_html($t['f_c3_t']); ?></h3>
                        <p class="bento-desc"><?php echo esc_html($t['f_c3_d']); ?></p>
                    </div>
                </div>

                <div class="bento-card bento-text-only fade-up delay-2">
                    <div class="bento-text">
                        <h3 class="bento-title"><?php echo esc_html($t['f_c4_t']); ?></h3>
                        <p class="bento-desc"><?php echo esc_html($t['f_c4_d']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="technology" class="e30x-section smart-tech-section text-center">
        <div class="e30x-container">
            <span class="section-label fade-up"><?php echo esc_html($t['tech_lbl']); ?></span>
            <div class="label-line fade-up"></div>
            <h2 class="section-title fade-up delay-1"><?php echo esc_html($t['tech_title']); ?></h2>

            <div class="tech-grid mt-50">
                <div class="tech-card fade-up">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/sm1.840af6d.png" alt="Touchscreen">
                    <div class="tech-card-overlay">
                        <h3><?php echo esc_html($t['tech_c1_t']); ?></h3>
                    </div>
                </div>
                <div class="tech-card fade-up delay-1">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/sm2.8052874.png" alt="Power Station">
                    <div class="tech-card-overlay">
                        <h3><?php echo esc_html($t['tech_c2_t']); ?></h3>
                    </div>
                </div>
                <div class="tech-card fade-up delay-2">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/sm3.2c507a8.png" alt="Wireless Charging">
                    <div class="tech-card-overlay">
                        <h3><?php echo esc_html($t['tech_c3_t']); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="history-video-modal" id="safetyVideoModal">
        <div class="modal-content">
            <div class="modal-close-trigger" id="closeSafetyModal"><i class="fa-solid fa-xmark"></i></div>
            <video controls id="safetyModalVideo">
                <source src="https://jacen.jac.com.cn/_nuxt/videos/safety-E30X_RELAXED_1008_output.9013afa.mp4" type="video/mp4">
            </video>
        </div>
    </div>

</main>

<?php get_footer(); ?>