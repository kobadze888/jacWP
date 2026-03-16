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
    'hero_title' => 'JAC T9 Pickup',
    'hero_sub'   => ($lang == 'en') ? 'Born to Explore' : 'დაბადებული აღმოსაჩენად',

    'nav_overview' => ($lang == 'en') ? 'Overview' : 'მიმოხილვა',
    'nav_specs'    => ($lang == 'en') ? 'Specs' : 'მახასიათებლები',
    'nav_gallery'  => ($lang == 'en') ? 'Gallery' : 'გალერეა',
    'nav_exterior' => ($lang == 'en') ? 'Exterior' : 'ექსტერიერი',
    'nav_interior' => ($lang == 'en') ? 'Interior' : 'ინტერიერი',
    'nav_comfort'  => ($lang == 'en') ? 'Comfort' : 'კომფორტი',
    'cc_lbl'       => ($lang == 'en') ? 'COMFORT & CONVENIENCE' : 'კომფორტი და მოხერხებულობა',
    'cc_title'     => ($lang == 'en') ? 'Switch it up.' : 'შეცვალე რეჟიმი.',
    'cc_desc'      => ($lang == 'en') ? 'On the open road or heading off-road, the JAC T9 Pickup has the mode for whatever the conditions.' : 'ღია ტრასაზე თუ უგზოობაში, JAC T9 პიკაპს აქვს შესაბამისი რეჟიმი ნებისმიერი პირობებისთვის.',
    'cc_sp1'       => ($lang == 'en') ? 'The innovative 2WD/4WD drive mode system' : 'ინოვაციური 2WD/4WD მართვის რეჟიმის სისტემა',
    'cc_sp2'       => ($lang == 'en') ? 'The 4L mode delivers low-range four-wheel drive' : '4L რეჟიმი უზრუნველყოფს დაბალი დიაპაზონის ოთხივე წამყვან თვალს',
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

    'col_title' => ($lang == 'en') ? 'Born to Explore!' : 'დაბადებული აღმოსაჩენად!',
    'col_desc'  => ($lang == 'en') ? 'JAC T9 pickup, combines remarkable rugged capability with premium comfort and advanced technology to fuel your wildest adventures.' : 'JAC T9 პიკაპი აერთიანებს გამორჩეულ გამავლობას, პრემიუმ კომფორტს და მოწინავე ტექნოლოგიებს თქვენი ყველაზე თამამი თავგადასავლებისთვის.',
    'col_hint'  => ($lang == 'en') ? 'Select a color' : 'აირჩიეთ ფერი',

    'hl_title'  => 'JAC T9 Pickup',
    'hl_sub'    => ($lang == 'en') ? 'Highlights' : 'მთავარი მახასიათებლები',
    'hl_btn'    => ($lang == 'en') ? 'Full Specifications' : 'სრული მონაცემები',
    /* T9 SPEC LABELS */
    's_safe'    => ($lang == 'en') ? 'Super Safe' : 'სუპერ უსაფრთხო',
    's_chassis' => ($lang == 'en') ? 'Super Chassis' : 'სუპერ შასი',
    's_power'   => ($lang == 'en') ? 'Super Power' : 'სუპერ სიმძლავრე',
    's_intel'   => ($lang == 'en') ? 'Super Intelligent' : 'სუპერ ინტელექტუალური',
    's_comf'    => ($lang == 'en') ? 'Super Comfortable' : 'სუპერ კომფორტული',
    's_lux'     => ($lang == 'en') ? 'Super Luxury' : 'სუპერ ლუქსი',

    /* T9 SPEC VALUES */
    's_safe_v'    => ($lang == 'en') ? 'ANCAP 5-star safety rating' : 'ANCAP 5-ვარსკვლავიანი უსაფრთხოების რეიტინგი',
    's_chassis_v' => ($lang == 'en') ? 'Electronic part-time 4WD' : 'ელექტრონული Part-Time 4WD',
    's_power_v'   => ($lang == 'en') ? 'JAC 2.0CTI Diesel / 2.0TGDI Gasoline' : 'JAC 2.0CTI დიზელი / 2.0TGDI ბენზინი',
    's_intel_v'   => ($lang == 'en') ? 'Level 2 ADAS System' : 'მე-2 დონის ADAS სისტემა',
    's_comf_v'    => ($lang == 'en') ? 'Silent cabin & Excellent NVH' : 'ჩუმი სალონი და შესანიშნავი ხმაურის იზოლაცია (NVH)',
    's_lux_v'     => ($lang == 'en') ? 'Diamond-stitched premium leather' : 'ალმასისებრი ნაკერების მქონე პრემიუმ ტყავი',

    'fun_title'  => ($lang == 'en') ? 'Go Wild, if You Want.' : 'იყავი თავისუფალი, თუ გსურს.',
    'free_title' => ($lang == 'en') ? 'Work hard. Play harder.' : 'იმუშავე ბევრი. დაისვენე უკეთ.',
    'free_desc'  => ($lang == 'en') ? 'Worksite one day, campsite the next. Built for the heavy lifting up back with all the creature comforts inside, you’re buckled up and ready to rumble no matter what you throw at the JAC T9 Pickup.' : 'სამუშაო ადგილი დღეს, დასასვენებელი ბანაკი ხვალ. შექმნილია მძიმე ტვირთისთვის და მაქსიმალური კომფორტისთვის — JAC T9 პიკაპი მზად არის ნებისმიერი გამოწვევისთვის.',

    'ext_lbl'   => ($lang == 'en') ? 'EXTERIOR' : 'ექსტერიერი',
    'ext_title' => ($lang == 'en') ? 'Born to be different.' : 'დაბადებული გამორჩეულად.',

    'ext_s1_t'  => ($lang == 'en') ? 'Unconventional design.' : 'არასტანდარტული დიზაინი.',
    'ext_s1_d'  => ($lang == 'en') ? 'Built tough, made durable and created with a captivating, JAC T9 Pickup cuts a bold and rugged figure wherever it goes.' : 'მტკიცე, გამძლე და მიმზიდველი — JAC T9 პიკაპი ყველგან თამამ და მძლავრ შთაბეჭდილებას ტოვებს.',

    'ext_s2_t'  => ($lang == 'en') ? 'Light your way.' : 'გაინათეთ გზა.',
    'ext_s2_d'  => ($lang == 'en') ? 'Integrated LED Daytime Running Lights, LED Headlamps, and Fog Lamps seamlessly blend into the front bumper design, creating a fierce and fearless look like no other.' : 'ინტეგრირებული LED დღის განათება, მთავარი LED ფარები და ნისლსაწინააღმდეგო ფარები იდეალურად ერწყმის წინა ბამპერის დიზაინს და ქმნის განსაკუთრებულ, მრისხანე და უშიშარ იერს.',

    'ext_s3_t'  => ($lang == 'en') ? 'Go adventure.' : 'წინ თავგადასავლებისკენ.',
    'ext_s3_d'  => ($lang == 'en') ? 'Ready to roll and looking the goods up back with the JAC Black Sports Bar. Teamed up with the factory iron rock sliders and you\'re ready to step it up.' : 'გამოიყურება იდეალურად JAC-ის შავი სპორტული საბარგულის რკალებით (Sports Bar). ქარხნულ რკინის საფეხურებთან (Rock Sliders) ერთად, თქვენ მზად ხართ ახალი გამოწვევებისთვის.',

    'ext_s4_t'  => ($lang == 'en') ? 'Easy across.' : 'მარტივად ყველგან.',
    'ext_s4_d'  => ($lang == 'en') ? 'Eye-catching two-tone 18-inch alloy wheels with a floral-inspired design and 265/60 R18 tyres' : 'თვალისმომჭრელი ორფერიანი 18-დუიმიანი ალუმინის დისკები ყვავილისებური დიზაინით და 265/60 R18 ზომის საბურავებით.',

    'ext_s5_t'  => ($lang == 'en') ? 'Load capacity 1000kg.' : 'ტვირთამწეობა 1000კგ.',
    'ext_s5_d'  => ($lang == 'en') ? 'Tackle heavy duty tasks and bulky loads, this vehicle gives you the strength and space you need.' : 'გაუმკლავდით მძიმე სამუშაოებს და მოცულობით ტვირთებს, ეს ავტომობილი გაძლევთ საჭირო სივრცესა და ძალას.',

    'int_lbl'   => ($lang == 'en') ? 'INTERIOR' : 'ინტერიერი',
    'int_title' => ($lang == 'en') ? 'Easy get what you want.' : 'მარტივად მიიღე ის, რაც გსურს.',
    'int_desc'  => ($lang == 'en') ? 'Beauty is inside the beast. A bold and futuristic look with tomorrow\'s tech all at your fingertips.' : 'სილამაზე მხეცის შიგნით. თამამი და ფუტურისტული იერსახე ხვალინდელი ტექნოლოგიებით შენს ხელთაა.',

    /* SMART TECHNOLOGY SECTION */
    'tech_lbl'   => ($lang == 'en') ? 'TECHNOLOGY' : 'ტექნოლოგია',
    'tech_title' => ($lang == 'en') ? 'Ever so smart.' : 'მუდამ გონიერი.',
    'tech_c1_t'  => ($lang == 'en') ? '12.8-inch Touchscreen & 6.2-inch Digital Instrument Cluster' : '12.8-დუიმიანი სენსორული ეკრანი და 6.2-დუიმიანი ციფრული მაჩვენებელთა დაფა',
    'tech_c2_t'  => ($lang == 'en') ? 'Mobile Smart Power Station' : 'მობილური ჭკვიანი ენერგო სადგური',
    'tech_c3_t'  => ($lang == 'en') ? 'Wireless Charging' : 'უსადენო დატენვა',

    'perf_lbl'   => ($lang == 'en') ? 'PERFORMANCE' : 'წარმადობა',
    'perf_title' => ($lang == 'en') ? 'Some pretty. Smart shift.' : 'საკმაოდ ლამაზი. ჭკვიანი გადართვა.',
    'p_c1_t'     => ($lang == 'en') ? 'Performance' : 'წარმადობა',
    'p_c1_d'     => ($lang == 'en') ? 'Turbo technology increases power, resulting in better highway performance and acceleration, similar to larger engines but with smaller displacement' : 'ტურბო ტექნოლოგია ზრდის სიმძლავრეს, რაც უზრუნველყოფს უკეთეს შესრულებას და აჩქარებას მაგისტრალზე, მსგავსად დიდი ძრავებისა, მაგრამ მცირე მოცულობით',
    'p_c2_t'     => ($lang == 'en') ? 'Capability' : 'შესაძლებლობა',
    'p_c2_d'     => ($lang == 'en') ? 'Your T9 Pickup lets you adjust to the many driving conditions across our great land.intelligent electronic shift system gives you four dist-' : 'შენი T9 პიკაპი გაძლევს საშუალებას მოერგო მართვის მრავალ პირობას ჩვენს დიდ მიწაზე. ინტელექტუალური ელექტრონული გადართვის სისტემა გაძლევს ოთხ გან-'
];

// 7 ფერის მასივი (თანმიმდევრობა და HEX კოდები გასწორებულია სურათის მიხედვით)
$colors = [
    ['name' => 'Red',          'name_ka' => 'წითელი',                   'img' => 'https://jacen.jac.com.cn/_nuxt/img/Red.3d0e45b.png', 'hex' => '#b71c1c'],
    ['name' => 'Black',        'name_ka' => 'შავი',                     'img' => 'https://jacen.jac.com.cn/_nuxt/img/Black.334efe7.png', 'hex' => '#181818'],
    ['name' => 'White',        'name_ka' => 'თეთრი',                    'img' => 'https://jacen.jac.com.cn/_nuxt/img/White.92b5ea5.png', 'hex' => '#f5f5f5'],
    ['name' => 'Gray',         'name_ka' => 'ნაცრისფერი',               'img' => 'https://jacen.jac.com.cn/_nuxt/img/Gray.37045a4.png', 'hex' => '#545454'],
    ['name' => 'Yellow',       'name_ka' => 'ყვითელი',                  'img' => 'https://jacen.jac.com.cn/_nuxt/img/Yellow.90501b4.png', 'hex' => '#fbc02d'],
    ['name' => 'Silver',       'name_ka' => 'ვერცხლისფერი',             'img' => 'https://jacen.jac.com.cn/_nuxt/img/Silver.a65ef69.png', 'hex' => '#c0c0c0'],
    ['name' => 'Blue',         'name_ka' => 'ლურჯი',                    'img' => 'https://jacen.jac.com.cn/_nuxt/img/Blue.6952985.png', 'hex' => '#0d47a1'],
    ['name' => 'Silvery-Gray', 'name_ka' => 'მოვერცხლისფრო-ნაცრისფერი', 'img' => 'https://jacen.jac.com.cn/_nuxt/img/Silvery-Gray.c7542f6.png', 'hex' => '#8e8e8e'],
];
?>

<main class="e30x-page">

    <section class="e30x-hero" id="t9-main-hero">
        <div class="e30x-hero-overlay"></div>
        <div class="e30x-hero-content fade-up">
            <h1><?php echo esc_html($t['hero_title']); ?></h1>
            <p><?php echo esc_html($t['hero_sub']); ?></p>
        </div>
    </section>

    <nav class="e30x-subnav" id="carSubNav">
        <div class="e30x-container subnav-flex">
            <div class="subnav-brand">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAAUBAMAAADbzbjtAAAAMFBMVEVHcEz///////////////////////////////////////////////////////////9EPuwCAAAAD3RSTlMAIBBjlsczfvRLrAbo2LfaqNM6AAABA0lEQVQoz2PY9R8J/GLgvA9j/1jIwFCPLPmZwR7B+SPA8B5Z8htTPxJvAcN5ZMkCTmReA4MgCABZP4GUEAM7kHUMJJILZHxgAAE2sDIQ4ANpBzGYgYwLDDBWAJjFA2RNADHYwXaCAAuQ5QBm6QNZTkpAoAczgoEVyDIAs/YjO2gCXCgBrgwOFMBC+cDwYIA4DcmffyBCwGD5CmExpCKHJRj4////BSrJsEkJDIAB9x0iEA8KVRBgNDY2hjgDGP4/IZJAi74xoPiOCcj4BA+g33APB4JCTwTIOIAWQCzIPnkAF4KEBkqkGMBC+y/EwwzrEXJfN4BFOP7/cIJ6ZDs8ev8AhQBd6zNv/lZ5DgAAAABJRU5ErkJggg==" alt="JAC T9">
            </div>
            <ul class="subnav-links">
                <li><a href="#overview" class="active"><?php echo esc_html($t['nav_overview']); ?></a></li>
                <li><a href="#specs"><?php echo esc_html($t['nav_specs']); ?></a></li>
                <li><a href="#gallery"><?php echo esc_html($t['nav_gallery']); ?></a></li>
                <li><a href="#exterior"><?php echo esc_html($t['nav_exterior']); ?></a></li>
                <li><a href="#interior"><?php echo esc_html($t['nav_interior']); ?></a></li>
                <li><a href="#comfort"><?php echo esc_html($t['nav_comfort']); ?></a></li>
                <li>
                    <a href="https://jacen.jac.com.cn/pdf/E30X.pdf" target="_blank" class="subnav-btn-brochure">
                        <i class="fa-regular fa-file-pdf"></i> <?php echo esc_html($t['nav_brochure']); ?>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="overview" class="t9-section t9-colors text-center">
        <div class="t9-container">
            <h2 class="section-title fade-up"><?php echo esc_html($t['col_title']); ?></h2>
            <p class="section-subtitle fade-up delay-1"><?php echo esc_html($t['col_desc']); ?></p>

            <div class="color-display-wrap fade-up delay-2">
                <img src="<?php echo $colors[0]['img']; ?>" id="mainCarColorImg" alt="JAC T9 Color">
            </div>

            <div class="color-picker-wrap fade-up delay-2">
                <div class="color-divider">
                    <span class="color-hint"><?php echo esc_html($t['col_hint']); ?></span>
                </div>
                <div class="color-dots">
                    <?php foreach ($colors as $index => $c): ?>
                        <?php $color_display_name = ($lang == 'en') ? $c['name'] : $c['name_ka']; ?>
                        <button class="color-dot <?php echo ($index == 0) ? 'active' : ''; ?>"
                            data-name="<?php echo esc_attr($color_display_name); ?>"
                            data-img="<?php echo esc_url($c['img']); ?>"
                            style="background-color: <?php echo esc_attr($c['hex']); ?>;">
                            <i class="fa-solid fa-check check-icon"></i>
                        </button>
                    <?php endforeach; ?>
                </div>
                <h3 class="color-name-display" id="colorNameDisplay"><?php echo esc_html(($lang == 'en') ? $colors[0]['name'] : $colors[0]['name_ka']); ?></h3>
                <p class="color-disclaimer"><?php echo ($lang == 'en') ? 'Models and colors may vary by regions' : 'მოდელები და ფერები შესაძლოა განსხვავდებოდეს რეგიონების მიხედვით'; ?></p>
            </div>
        </div>
    </section>

 <section id="specs" class="t9-section t9-highlights">
        <div class="t9-container h-flex">
            <div class="h-left fade-up">
                <h2><?php echo esc_html($t['hl_title']); ?></h2>
                <p><?php echo esc_html($t['hl_sub']); ?></p>
                <?php $pdf_link = "https://jacen.jac.com.cn/pdf/T9Brochure.pdf"; ?>
                <a href="<?php echo esc_url($pdf_link); ?>" target="_blank" class="btn-black-pill mt-20" style="text-decoration: none;">
                    <?php echo esc_html($t['hl_btn']); ?>
                </a>
            </div>
            <div class="h-right">
                <div class="spec-box fade-up delay-1">
                    <span class="spec-label"><?php echo esc_html($t['s_safe']); ?></span>
                    <span class="spec-val"><?php echo esc_html($t['s_safe_v']); ?></span>
                </div>
                <div class="spec-box fade-up delay-1">
                    <span class="spec-label"><?php echo esc_html($t['s_chassis']); ?></span>
                    <span class="spec-val"><?php echo esc_html($t['s_chassis_v']); ?></span>
                </div>
                <div class="spec-box fade-up delay-1">
                    <span class="spec-label"><?php echo esc_html($t['s_power']); ?></span>
                    <span class="spec-val"><?php echo esc_html($t['s_power_v']); ?></span>
                </div>
                <div class="spec-box fade-up delay-2">
                    <span class="spec-label"><?php echo esc_html($t['s_intel']); ?></span>
                    <span class="spec-val"><?php echo esc_html($t['s_intel_v']); ?></span>
                </div>
                <div class="spec-box fade-up delay-2">
                    <span class="spec-label"><?php echo esc_html($t['s_comf']); ?></span>
                    <span class="spec-val"><?php echo esc_html($t['s_comf_v']); ?></span>
                </div>
                <div class="spec-box fade-up delay-2">
                    <span class="spec-label"><?php echo esc_html($t['s_lux']); ?></span>
                    <span class="spec-val"><?php echo esc_html($t['s_lux_v']); ?></span>
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

            <div class="t9-gallery fade-up delay-1">
                <img src="https://jacen.jac.com.cn/_nuxt/img/1.1f06f0b.png" class="gal-img active" data-cat="exterior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/3.9c5a384.png" class="gal-img" data-cat="exterior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/8.fc879fe.png" class="gal-img" data-cat="exterior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/11.32692c6.png" class="gal-img" data-cat="exterior">

                <img src="https://jacen.jac.com.cn/_nuxt/img/n1.ffd735b.jpg" class="gal-img" data-cat="interior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/n1.ffd735b.jpg" class="gal-img" data-cat="interior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/n3.a397167.jpg" class="gal-img" data-cat="interior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/n4.7987884.jpg" class="gal-img" data-cat="interior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/n5.b9f9318.jpg" class="gal-img" data-cat="interior">
            </div>

            <div class="gal-nav-wrapper fade-up delay-2">
                <button class="gal-arrow prev"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="gal-indicators"></div>
                <button class="gal-arrow next active"><i class="fa-solid fa-chevron-right"></i></button>
            </div>


        </div>
    </section>

   <section class="t9-section t9-free-section text-center">
        <div class="t9-container">
            <h2 class="section-title fade-up"><?php echo esc_html($t['free_title']); ?></h2>
            <p class="section-subtitle fade-up delay-1"><?php echo esc_html($t['free_desc']); ?></p>

            <div class="t9-video-wrapper fade-up delay-2 mt-30">
                <video class="free-bg-video" autoplay muted loop playsinline>
                    <source src="https://jacen.jac.com.cn/_nuxt/videos/v-s.98aaa73.mp4" type="video/mp4">
                </video>

                <div class="video-modal-trigger" id="openFreeVideo">
                    <i class="fa-solid fa-play"></i>
                </div>
            </div>
        </div>
    </section>

    <div class="history-video-modal" id="t9VideoModal">
        <div class="modal-content">
            <div class="modal-close-trigger" id="closeT9Modal"><i class="fa-solid fa-xmark"></i></div>
            <video controls id="t9ModalVideo">
                <source src="https://jacen.jac.com.cn/_nuxt/videos/v-s.98aaa73.mp4" type="video/mp4">
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
                            <div class="feature-media-grid-3 fade-up">
                                <div class="media-main">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ex1slide1.585d08e.png" alt="T9 Exterior Main">
                                </div>
                                <div class="media-side">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ex1slide2.c8685c1.png" alt="T9 Exterior Detail">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ex1slide3.3340839.png" alt="T9 Exterior Detail">
                                </div>
                            </div>
                            <div class="feature-content-row fade-up delay-1">
                                <div class="feature-text-left">
                                    <h3><?php echo esc_html($t['ext_s1_t']); ?></h3>
                                </div>
                                <div class="feature-text-right">
                                    <p><?php echo esc_html($t['ext_s1_d']); ?></p>
                                    <a href="https://jacen.jac.com.cn/pdf/T9Brochure.pdf" target="_blank" class="spec-link">
                                        <?php echo ($lang == 'en') ? 'Full Specifications' : 'სრული მონაცემები'; ?> <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="feature-slide">
                            <div class="feature-media-row fade-up">
                                <div class="feature-media-item interior-media-item">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ex2slide1.cf7530e.png" alt="T9 Light your way">
                                </div>
                            </div>
                            <div class="feature-content-row fade-up delay-1">
                                <div class="feature-text-left">
                                    <h3><?php echo esc_html($t['ext_s2_t']); ?></h3>
                                </div>
                                <div class="feature-text-right">
                                    <p><?php echo esc_html($t['ext_s2_d']); ?></p>
                                    <a href="https://jacen.jac.com.cn/pdf/T9Brochure.pdf" target="_blank" class="spec-link">
                                        <?php echo ($lang == 'en') ? 'Full Specifications' : 'სრული მონაცემები'; ?> <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="feature-slide">
                            <div class="feature-media-row half-grid fade-up">
                                <div class="feature-media-item">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ex2slide2.b8f2606.png" alt="T9 Sports Bar">
                                </div>
                                <div class="feature-media-item">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ex2slide3.b442ef1.png" alt="T9 Rock Sliders">
                                </div>
                            </div>
                            <div class="feature-content-row fade-up delay-1">
                                <div class="feature-text-left">
                                    <h3><?php echo esc_html($t['ext_s3_t']); ?></h3>
                                </div>
                                <div class="feature-text-right">
                                    <p><?php echo esc_html($t['ext_s3_d']); ?></p>
                                    <a href="https://jacen.jac.com.cn/pdf/T9Brochure.pdf" target="_blank" class="spec-link">
                                        <?php echo ($lang == 'en') ? 'Full Specifications' : 'სრული მონაცემები'; ?> <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="feature-slide">
                            <div class="feature-media-row half-grid fade-up">
                                <div class="feature-media-item">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ex3slide2.4d9d0e8.png" alt="T9 Alloy Wheels">
                                </div>
                                <div class="feature-media-item">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/JAC_070.7de1545.png" alt="T9 Tyres">
                                </div>
                            </div>
                            <div class="feature-content-row fade-up delay-1">
                                <div class="feature-text-left">
                                    <h3><?php echo esc_html($t['ext_s4_t']); ?></h3>
                                </div>
                                <div class="feature-text-right">
                                    <p><?php echo esc_html($t['ext_s4_d']); ?></p>
                                    <a href="https://jacen.jac.com.cn/pdf/T9Brochure.pdf" target="_blank" class="spec-link">
                                        <?php echo ($lang == 'en') ? 'Full Specifications' : 'სრული მონაცემები'; ?> <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="feature-slide">
                            <div class="feature-media-grid-3 fade-up">
                                <div class="media-main">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ex3slide1.81f6d27.png" alt="T9 Load Capacity">
                                </div>
                                <div class="media-side">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/ex3slide3.4f5f547.png" alt="T9 Bed Detail">
                                    <img src="https://jacen.jac.com.cn/_nuxt/img/JAC_103.8474843.jpg" alt="T9 Bed Detail">
                                </div>
                            </div>
                            <div class="feature-content-row fade-up delay-1">
                                <div class="feature-text-left">
                                    <h3><?php echo esc_html($t['ext_s5_t']); ?></h3>
                                </div>
                                <div class="feature-text-right">
                                    <p><?php echo esc_html($t['ext_s5_d']); ?></p>
                                    <a href="https://jacen.jac.com.cn/pdf/T9Brochure.pdf" target="_blank" class="spec-link">
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
                        <span class="f-dot"></span>
                        <span class="f-dot"></span>
                    </div>
                    <button class="feat-arrow next" data-slider="exteriorTrack"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </section>

        <!-- INTERIOR SECTION (BILINGUAL & SLIDER)  -->
        <section id="interior" class="e30x-section text-center" style="padding-top: 40px; padding-bottom: 80px;">
            <div class="e30x-container">

                <span class="section-label fade-up"><?php echo esc_html($t['int_lbl']); ?></span>
                <div class="label-line fade-up"></div>
                <h2 class="section-title fade-up delay-1"><?php echo esc_html($t['int_title']); ?></h2>
                <p class="section-subtitle fade-up delay-1" style="max-width: 800px; margin: 0 auto 50px;"><?php echo esc_html($t['int_desc']); ?></p>

                <div class="interior-grid-layout fade-up delay-2">
                    <div class="ig-item ig-item-1">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/inner2.40d8950.jpg" alt="JAC T9 Interior Main">
                    </div>
                    <div class="ig-item ig-item-2">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/inner4.c2218aa.jpg" alt="JAC T9 Interior Detail 1">
                    </div>
                    <div class="ig-item ig-item-3">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/inner3.e4bed79.jpg" alt="JAC T9 Interior Detail 2">
                    </div>
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

    <section id="performance" class="e30x-section text-center perf-main-wrapper" style="background: #fff; padding-top: 100px; padding-bottom: 100px;">
        <div class="e30x-container">
            <h2 class="section-title fade-up delay-1"><?php echo esc_html($t['perf_title']); ?></h2>

            <div class="perf-tabs fade-up delay-1 mt-30">
                <button class="perf-tab active" data-target="perf-slide-1"><?php echo esc_html($t['p_c1_t']); ?></button>
                <button class="perf-tab" data-target="perf-slide-2"><?php echo esc_html($t['p_c2_t']); ?></button>
            </div>

            <div class="perf-content-wrapper fade-up delay-2 mt-40">
                <div class="perf-slide active" id="perf-slide-1">
                    <div class="perf-slide-img">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/pretty.b78b4a6.jpg" alt="Performance">
                    </div>
                    <div class="perf-slide-text mt-30">
                        <p><?php echo esc_html($t['p_c1_d']); ?></p>
                    </div>
                </div>
                <div class="perf-slide" id="perf-slide-2">
                    <div class="perf-slide-img">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/shift.6a2585c.jpg" alt="Capability">
                    </div>
                    <div class="perf-slide-text mt-30">
                        <p><?php echo esc_html($t['p_c2_d']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="comfort" class="e30x-section e30x-battery">
        <div class="e30x-container">
            <span class="section-label fade-up text-center"><?php echo esc_html($t['cc_lbl']); ?></span>
            <div class="label-line fade-up"></div>
        </div>
        <div class="battery-content-wrapper fade-up delay-1">
            <picture class="battery-main-bg">
                <img src="https://jacen.jac.com.cn/_nuxt/img/JAC_110.aadb42b.png" alt="T9 Comfort and Convenience">
            </picture>

            <div class="battery-info-card">
                <h2 class="battery-info-title"><?php echo esc_html($t['cc_title']); ?></h2>
                <p class="battery-info-desc"><?php echo esc_html($t['cc_desc']); ?></p>

                <ul class="battery-specs-grid" style="margin-bottom: 40px;">
                    <li style="font-size: 15px; margin-bottom: 12px; font-weight: 500; line-height: 1.5;"><?php echo esc_html($t['cc_sp1']); ?></li>
                    <li style="font-size: 15px; margin-bottom: 12px; font-weight: 500; line-height: 1.5;"><?php echo esc_html($t['cc_sp2']); ?></li>
                </ul>

                <a href="https://jacen.jac.com.cn/pdf/T9Brochure.pdf" target="_blank" class="btn-white-pill">
                    <?php echo esc_html($t['hl_btn']); ?>
                </a>
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