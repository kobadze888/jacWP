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

    'feat_lbl' => ($lang == 'en') ? 'POWER' : 'სიმძლავრე',
    'f_c1_t' => ($lang == 'en') ? 'Above and beyond.' : 'უფრო მეტი, ვიდრე მოელი.',
    'f_c1_d' => ($lang == 'en') ? 'The JAC T9 Pickup literally lifts the driving experience. The ride height is higher, so you not only get better road visibility but also plenty of headroom and space for everyone in the cabin.' : 'JAC T9 პიკაპი პირდაპირი გაგებით ამაღლებს მართვის გამოცდილებას. კლირენსი უფრო მაღალია, ამიტომ თქვენ იღებთ არა მხოლოდ უკეთეს ხილვადობას, არამედ საკმარის სივრცეს ყველასთვის სალონში.',
    'f_c2_t' => ($lang == 'en') ? 'Get a grip.' : 'მყარი მოჭიდება.',
    'f_c2_d' => ($lang == 'en') ? 'When the going gets tough JAC T9 Pickup gets going. The rear differential lock lets you take on the most challenging conditions.' : 'როდესაც გზა რთულდება, JAC T9 პიკაპი აგრძელებს მოძრაობას. უკანა დიფერენციალის ბლოკირება საშუალებას გაძლევთ გაუმკლავდეთ ყველაზე რთულ პირობებს.',
    'f_c3_t' => ($lang == 'en') ? 'Strong power.' : 'მძლავრი ენერგია.',
    'f_c3_d' => ($lang == 'en') ? 'When you\'re faced with slippery surfaces or tough trails, the rear diff lock kicks in. Both rear wheels receive equal torque, giving you the traction you need to power through.' : 'როდესაც აწყდებით სრიალა ზედაპირებს ან რთულ ბილიკებს, უკანა დიფერენციალის ბლოკირება ერთვება საქმეში. ორივე უკანა თვალი იღებს თანაბარ მბრუნავ მომენტს, რაც გაძლევთ საჭირო მოჭიდებას წინსვლისთვის.',
    'f_c4_t' => ($lang == 'en') ? 'Versatility driving modes.' : 'მართვის მრავალფეროვანი რეჟიმები.',
    'f_c4_d' => ($lang == 'en') ? 'You have the versatility across all driving modes; 2H, 4H, or 2L, operational up to speeds of 40km/h.' : 'თქვენ გაქვთ მრავალფეროვნება მართვის ყველა რეჟიმში; 2H, 4H, ან 2L, რომლებიც მუშაობს 40 კმ/სთ-მდე სიჩქარეზე.',

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

    'tech_lbl'   => ($lang == 'en') ? 'TECHNOLOGY' : 'ტექნოლოგია',
    'tech_desc'  => ($lang == 'en') ? 'Smart looking, even smarter driving. The JAC T9 Pickup is tooled up with intelligent technology giving you next-generation connectivity for a better driving experience.' : 'ჭკვიანი იერსახე, კიდევ უფრო ჭკვიანი მართვა. JAC T9 პიკაპი აღჭურვილია ინტელექტუალური ტექნოლოგიებით, რაც გთავაზობთ ახალი თაობის კავშირს მართვის უკეთესი გამოცდილებისთვის.',

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
    <section id="power" class="e30x-section more-features-section">
        <div class="e30x-container">
            <div class="text-center">
                <span class="section-label fade-up"><?php echo esc_html($t['feat_lbl']); ?></span>
                <div class="label-line fade-up"></div>
            </div>

            <div class="mf-bento-grid mt-40">
                <div class="bento-card bento-vertical fade-up">
                    <div class="bento-text">
                        <h3 class="bento-title"><?php echo esc_html($t['f_c1_t']); ?></h3>
                        <p class="bento-desc"><?php echo esc_html($t['f_c1_d']); ?></p>
                    </div>
                    <div class="bento-img">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/JAC_066.d50b556.png" alt="Above and beyond">
                    </div>
                </div>

                <div class="bento-card bento-horizontal fade-up delay-1">
                    <div class="bento-text">
                        <h3 class="bento-title"><?php echo esc_html($t['f_c2_t']); ?></h3>
                        <p class="bento-desc"><?php echo esc_html($t['f_c2_d']); ?></p>
                    </div>
                    <div class="bento-img">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/JAC_054.31b6a38.png" alt="Get a grip">
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
            <p class="section-subtitle fade-up delay-1" style="max-width: 900px; margin: 30px auto 50px; font-size: 20px; line-height: 1.6; color: #111;"><?php echo esc_html($t['tech_desc']); ?></p>

            <div class="tech-grid mt-50">
                <div class="tech-card fade-up">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/Jac_FrisonT9_0268copy.cc4e6c2.jpg" alt="T9 Technology 1">
                </div>
                <div class="tech-card fade-up delay-1">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/DSC07656.8f1d598.jpg" alt="T9 Technology 2">
                </div>
                <div class="tech-card fade-up delay-2">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/7691307046604a8c322a9f366591916_0_0.406c52f.jpg" alt="T9 Technology 3">
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

 </div>
    </div>

     <section id="versions" class="e30x-section t9-versions-section">
        <div class="e30x-container">
            <h2 class="versions-title text-center fade-up"><?php echo ($lang == 'en') ? 'Discover Your JAC T9 Pickup' : 'აღმოაჩინე შენი JAC T9 Pickup'; ?></h2>

            <div class="v-main-flex fade-up delay-1">
                <div class="v-left-img">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/fourtwo.10b2859.png" class="v-car-img active" id="img-v-4x2" alt="T9 Pickup 4x2">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/fourfour.24711b5.png" class="v-car-img" id="img-v-4x4" alt="T9 Pickup 4x4">
                </div>

                <div class="v-right-info">
                    <div class="versions-tabs">
                        <button class="v-tab active" data-target="v-4x2">T9 Pickup 4x2</button>
                        <button class="v-tab" data-target="v-4x4">T9 Pickup 4x4</button>
                    </div>

                    <div class="v-details-container">
                        <div class="v-content active" id="desc-v-4x2">
                            <ul>
                                <li><?php echo ($lang == 'en') ? 'Driving modes Standard/Eco/Sport/Snow' : 'მართვის რეჟიმები Standard/Eco/Sport/Snow'; ?></li>
                                <li><?php echo ($lang == 'en') ? '18" aluminum wheels' : '18" ალუმინის დისკები'; ?></li>
                                <li><?php echo ($lang == 'en') ? 'Interior and exterior hooks in the cargo area' : 'შიდა და გარე კავები საბარგულში'; ?></li>
                                <li><?php echo ($lang == 'en') ? 'Steering wheel and seats covered in synthetic leather' : 'სინთეტიკური ტყავით გადაკრული საჭე და სავარძლები'; ?></li>
                                <li><?php echo ($lang == 'en') ? 'Roll-bar in cargo box' : 'Roll-bar საბარგულში'; ?></li>
                            </ul>
                        </div>

                        <div class="v-content" id="desc-v-4x4">
                            <ul>
                                <li><?php echo ($lang == 'en') ? 'Electric sunroof' : 'ელექტრო ლუქი'; ?></li>
                                <li><?php echo ($lang == 'en') ? '360° camera' : '360° კამერა'; ?></li>
                                <li><?php echo ($lang == 'en') ? 'Traction modes 2H, 4H, 4L' : 'წევის რეჟიმები 2H, 4H, 4L'; ?></li>
                                <li><?php echo ($lang == 'en') ? 'Roof rails' : 'სახურავის რელსები'; ?></li>
                                <li><?php echo ($lang == 'en') ? 'Front parking sensors' : 'წინა პარკინგის სენსორები'; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>