<?php

/**
 * Template Name: Model - N55 EV
 */
get_header();

$lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';

$t = [
    'hero_title'    => 'JAC N55 EV',
    'hero_sub'      => ($lang == 'en') ? 'Green and Easy Life.' : 'მწვანე და მარტივი ცხოვრება.',
    'hero_badge'    => ($lang == 'en') ? 'Electric Light Truck' : 'ელექტრო მსუბუქი სატვირთო',

    'nav_overview'  => ($lang == 'en') ? 'Overview' : 'მიმოხილვა',
    'nav_specs'     => ($lang == 'en') ? 'Specs' : 'მახასიათებლები',
    'nav_exterior'  => ($lang == 'en') ? 'Exterior' : 'ექსტერიერი',
    'nav_interior'  => ($lang == 'en') ? 'Interior' : 'ინტერიერი',
    'nav_battery'   => ($lang == 'en') ? 'Battery' : 'ელემენტი',
    'nav_safety'    => ($lang == 'en') ? 'Safety' : 'უსაფრთხოება',
    'nav_economy'   => ($lang == 'en') ? 'Economy' : 'ეკონომია',
    'nav_brochure'  => ($lang == 'en') ? 'Brochure' : 'ბროშურა',

    'ov_title'      => ($lang == 'en') ? 'Full electric. Fully capable.' : 'სრულად ელექტრო. სრულად უნარიანი.',
    'ov_desc'       => ($lang == 'en') ? 'N55 EV is a fully tested electric vehicle from JAC with the latest EV technology on-board. Safe, reliable, comfortable and economic — the perfect light truck option for your logistic business.' : 'N55 EV არის JAC-ის სრულად ტესტირებული ელექტრო ავტომობილი უახლესი EV ტექნოლოგიებით. უსაფრთხო, საიმედო, კომფორტული და ეკონომიური — იდეალური მსუბუქი სატვირთო ლოგისტიკური ბიზნესისთვის.',
    'watch_video'   => ($lang == 'en') ? 'Watch video' : 'ვიდეოს ნახვა',

    'hl_lbl'        => ($lang == 'en') ? 'HIGHLIGHTS' : 'მთავარი მახასიათებლები',
    'hl_title'      => 'JAC N55 EV',
    'hl_full'       => ($lang == 'en') ? 'Full Specifications' : 'სრული მახასიათებლები',

    'hl_s1_n'       => '96.7',
    'hl_s1_u'       => 'kWh',
    'hl_s1_l'       => ($lang == 'en') ? 'LFP Battery Capacity' : 'LFP ელემენტის ტევადობა',

    'hl_s2_n'       => '200',
    'hl_s2_u'       => 'km',
    'hl_s2_l'       => ($lang == 'en') ? 'Range per Charge' : 'სვლის მარაგი',

    'hl_s3_n'       => '2.5',
    'hl_s3_u'       => 'T',
    'hl_s3_l'       => ($lang == 'en') ? 'Loading Capacity' : 'ტვირთამწეობა',

    'hl_s4_n'       => '2',
    'hl_s4_u'       => 'h',
    'hl_s4_l'       => ($lang == 'en') ? 'Full Charge 0-100%' : 'სრული დატენვა 0-100%',

    'hl_s5_n'       => '1.5',
    'hl_s5_u'       => 'h',
    'hl_s5_l'       => ($lang == 'en') ? 'Fast Charge 0-80%' : 'სწრაფი დატენვა 0-80%',

    'hl_s6_n'       => '8',
    'hl_s6_u'       => 's',
    'hl_s6_l'       => ($lang == 'en') ? '0-50 km/h Acceleration' : '0-50 კმ/სთ აჩქარება',

    'ex_lbl'        => ($lang == 'en') ? 'EXTERIOR' : 'ექსტერიერი',
    'ex_title'      => ($lang == 'en') ? 'Designed for the city.' : 'შექმნილია ქალაქისთვის.',

    'ex_c1_t'       => ($lang == 'en') ? 'Integrated LED Lights' : 'ინტეგრირებული LED განათება',
    'ex_c1_d'       => ($lang == 'en') ? 'Integrated headlight, hazard light, turn signal and daytime running light — all unified in one clean design.' : 'ინტეგრირებული მთავარი, ავარიული, მოხვევის და დღის განათება — ყველა ერთიან სუფთა დიზაინში.',

    'ex_c2_t'       => ($lang == 'en') ? 'Super-Large Windshield' : 'დიდი საქარე მინა',
    'ex_c2_d'       => ($lang == 'en') ? 'Forward A-pillar and boneless wipers provide a wide, unobstructed view of the road ahead.' : 'წინ წამოწეული A-საყრდენი და უჩონჩხო საქარე მწმენდები უზრუნველყოფს ფართო, შეუფერხებელ ხედს გზაზე.',

    'in_lbl'        => ($lang == 'en') ? 'INTERIOR' : 'ინტერიერი',
    'in_title'      => ($lang == 'en') ? 'Spacious and connected.' : 'ფართო და დაკავშირებული.',
    'in_desc'       => ($lang == 'en') ? 'The 1995mm wide cabin provides ample seating space. Luxurious trim, multifunctional steering wheel and an 8-inch touchscreen deliver comfort and control in every drive.' : '1995 მმ სიგანის სალონი უზრუნველყოფს ბევრ სივრცეს. ფუფუნებული მოპირკეთება, მრავალფუნქციური საჭე და 8-დუიმიანი სენსორული ეკრანი გთავაზობთ კომფორტსა და კონტროლს ყოველ მგზავრობაზე.',

    'in_c1_t'       => ($lang == 'en') ? 'Automatic Transmission' : 'ავტომატური ტრანსმისია',
    'in_c1_d'       => ($lang == 'en') ? 'Easy, fun, and effortless — the automatic transmission transforms your daily driving experience.' : 'მარტივი, სახალისო და ძალდაუტანებელი — ავტომატური ტრანსმისია გარდაქმნის ყოველდღიურ მართვის გამოცდილებას.',

    'in_c2_t'       => ($lang == 'en') ? 'Connected Vehicle System' : 'დაკავშირებული ავტომობილის სისტემა',
    'in_c2_d'       => ($lang == 'en') ? 'JAC\'s latest connectivity: Bluetooth calling, online music, navigation, and vehicle monitoring & control — all in one smart system.' : 'JAC-ის უახლესი კავშირის სისტემა: Bluetooth ზარები, ონლაინ მუსიკა, ნავიგაცია, ავტომობილის მონიტორინგი და კონტროლი — ერთ ჭკვიან სისტემაში.',

    'bt_lbl'        => ($lang == 'en') ? 'BATTERY & CHARGING' : 'ელემენტი და დატენვა',
    'bt_title'      => ($lang == 'en') ? 'Power that lasts.' : 'ძალა, რომელიც გრძელდება.',
    'bt_desc'       => ($lang == 'en') ? 'A 96.7 kWh LFP battery powers the N55 EV — with fast charging support and European CCS2-Combo standard compatibility.' : '96.7 kWh LFP ელემენტი იკვებავს N55 EV-ს — სწრაფი დატენვის მხარდაჭერით და ევროპული CCS2-Combo სტანდარტის თავსებადობით.',

    'bt_c1_t'       => ($lang == 'en') ? 'Dual Charging Modes' : 'ორმაგი დატენვის რეჟიმი',
    'bt_c1_d'       => ($lang == 'en') ? 'Fast and standard charging available. European CCS2-Combo charging standard supported for maximum compatibility.' : 'სწრაფი და სტანდარტული დატენვა ხელმისაწვდომია. მხარდაჭერილია ევროპული CCS2-Combo სტანდარტი მაქსიმალური თავსებადობისთვის.',

    'bt_c2_t'       => ($lang == 'en') ? '96.7 kWh LFP Battery' : '96.7 kWh LFP ელემენტი',
    'bt_c2_d'       => ($lang == 'en') ? 'High-capacity LFP battery. Charging from 0-80% SOC takes only 1.5 hours, and 0-100% just 2 hours.' : 'მაღალი ტევადობის LFP ელემენტი. დატენვა 0-80%-მდე მხოლოდ 1.5 საათს სჭირდება, ხოლო 0-100%-მდე — მხოლოდ 2 საათს.',

    'sf_lbl'        => ($lang == 'en') ? 'SAFETY' : 'უსაფრთხოება',
    'sf_title'      => ($lang == 'en') ? 'Tested in every condition.' : 'ტესტირებულია ყველა პირობაში.',
    'sf_desc'       => ($lang == 'en') ? 'N55 EV goes through rigorous testing to ensure maximum safety — from fire and water resistance to active pedestrian protection.' : 'N55 EV გადის მკაცრ ტესტირებას მაქსიმალური უსაფრთხოებისთვის — ცეცხლისა და წყლის მიმართ მედეგობიდან ფეხით მოსიარულეთა აქტიურ დაცვამდე.',

    'sf_c1_t'       => ($lang == 'en') ? 'Fireproof Testing' : 'ცეცხლის საწინააღმდეგო ტესტი',
    'sf_c1_d'       => ($lang == 'en') ? 'Strict fireproof testing ensures the vehicle remains safe under extreme conditions.' : 'მკაცრი ცეცხლგამძლე ტესტირება უზრუნველყოფს ავტომობილის უსაფრთხოებას ექსტრემალურ პირობებში.',

    'sf_c2_t'       => ($lang == 'en') ? 'Waterproof Testing' : 'წყალგაუმტარი ტესტი',
    'sf_c2_d'       => ($lang == 'en') ? 'Waterproof testing passed perfectly — the N55 EV handles rain and water exposure with confidence.' : 'წყალგაუმტარი ტესტი სრულყოფილად გავლილი — N55 EV თავდაჯერებულად უმკლავდება წვიმასა და წყალთან კონტაქტს.',

    'sf_c3_t'       => ($lang == 'en') ? 'ABS & Pedestrian Warning' : 'ABS და ფეხით მოსიარულეთა გაფრთხილება',
    'sf_c3_d'       => ($lang == 'en') ? 'Anti-lock braking system paired with a pedestrian warning system for active safety on every street.' : 'ABS სისტემა პედესტრიანთა გაფრთხილების სისტემასთან ერთად — აქტიური უსაფრთხოება ყოველ ქუჩაში.',

    'ec_lbl'        => ($lang == 'en') ? 'ECONOMY' : 'ეკონომია',
    'ec_title'      => ($lang == 'en') ? 'Lower cost, higher value.' : 'ნაკლები ხარჯი, მეტი ღირებულება.',
    'ec_desc'       => ($lang == 'en') ? 'Fuel cost is 50% lower and maintenance cost is 30% lower compared to traditional internal combustion engine (ICE) models — maximum savings for your business.' : 'საწვავის ხარჯი 50%-ით დაბალია, ხოლო ტექნიკური მომსახურების ხარჯი 30%-ით ნაკლები ტრადიციულ შიდა წვის ძრავებთან შედარებით — მაქსიმალური დანაზოგი თქვენი ბიზნესისთვის.',

    'ec_s1_n'       => '50',
    'ec_s1_u'       => '%',
    'ec_s1_l'       => ($lang == 'en') ? 'Lower Fuel Cost' : 'ნაკლები საწვავის ხარჯი',

    'ec_s2_n'       => '30',
    'ec_s2_u'       => '%',
    'ec_s2_l'       => ($lang == 'en') ? 'Lower Maintenance' : 'ნაკლები მომსახურება',

    'ec_c1_t'       => ($lang == 'en') ? 'Lower Operational Cost' : 'დაბალი ექსპლუატაციის ხარჯი',
    'ec_c1_d'       => ($lang == 'en') ? 'Regenerative braking system and economic driving mode work together to maximize every kilowatt-hour.' : 'რეგენერაციული სამუხრუჭე სისტემა და ეკონომიური მართვის რეჟიმი ერთობლივად ზრდის ყოველი კილოვატ-საათის ეფექტურობას.',

    'spec_lbl'      => ($lang == 'en') ? 'SPECIFICATIONS' : 'მახასიათებლები',
    'spec_title'    => ($lang == 'en') ? 'Choose your configuration' : 'აირჩიეთ კონფიგურაცია',
    'spec_desc'     => ($lang == 'en') ? 'Available in left-hand drive (LHD) and right-hand drive (RHD).' : 'ხელმისაწვდომია მარცხენა საჭით (LHD) და მარჯვენა საჭით (RHD).',

    'spec_v1'       => 'N55 EV LHD',
    'spec_v2'       => 'N55 EV RHD',

    'cta_btn'       => ($lang == 'en') ? 'Download Brochure' : 'ბროშურის ჩამოტვირთვა',
];

$pdf_link = "https://jacen.jac.com.cn/pdf/n55.pdf";
$video_url = "https://jacen.jac.com.cn/video/models/N55.mp4";
?>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

 

 

<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Noto Sans Georgian', 'Inter', 'sans-serif'],
                },
                colors: {
                    'jac-red': '#d11f26',
                    'jac-dark': '#0a0a0a',
                    'jac-green': '#16a34a',
                },
            },
        },
    };
</script>

<main class="n55-page font-sans bg-white text-gray-900">

    <section id="n55-hero" class="relative h-[85vh] min-h-[500px] flex items-start md:items-end overflow-hidden">
        <picture class="absolute inset-0 z-0">
            <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/BANNER.2402951.jpg">
            <img src="https://jacen.jac.com.cn/_nuxt/img/BANNER@2x.c94998c.jpg" 
                 alt="JAC N55 EV" 
                 class="w-full h-full object-cover">
        </picture>

        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/20 to-black/70 md:bg-none md:bg-gradient-to-t md:from-black/80 md:via-black/20 md:to-black/30 z-10"></div>

        <div class="relative z-20 w-full px-5 md:px-12 lg:px-20 pt-28 md:pt-0 pb-10 md:pb-24">
            <div class="max-w-7xl mx-auto n55-fade-up flex flex-col items-start md:items-end text-left md:text-right">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-3 py-1.5 rounded-full mb-4 md:mb-6">
                    <span class="w-1.5 h-1.5 bg-jac-green rounded-full animate-pulse"></span>
                    <span class="text-[10px] md:text-xs font-bold text-white uppercase tracking-widest"><?php echo esc_html($t['hero_badge']); ?></span>
                </div>

                <h1 class="text-4xl md:text-7xl lg:text-9xl font-black text-white tracking-tight leading-tight md:leading-[1] mb-3 md:mb-5 pb-1">
                    <?php echo esc_html($t['hero_title']); ?>
                </h1>

                <p class="text-lg md:text-2xl lg:text-4xl font-light text-white/95 max-w-3xl leading-snug">
                    <?php echo esc_html($t['hero_sub']); ?>
                </p>
            </div>
        </div>
    </section>

    <nav id="n55-subnav" class="sticky top-[75px] bg-black text-white z-[990] border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-3 md:px-4">
            <div class="flex items-center justify-between h-14 md:h-16">
                <div class="hidden lg:block font-black text-lg tracking-wider whitespace-nowrap">
                    JAC N55 EV
                </div>

                <ul class="flex items-center gap-4 md:gap-7 overflow-x-auto scrollbar-hide whitespace-nowrap flex-1 lg:flex-none lg:justify-end">
                    <li><a href="#overview" class="subnav-link active"><?php echo esc_html($t['nav_overview']); ?></a></li>
                    <li><a href="#specs" class="subnav-link"><?php echo esc_html($t['nav_specs']); ?></a></li>
                    <li><a href="#exterior" class="subnav-link"><?php echo esc_html($t['nav_exterior']); ?></a></li>
                    <li><a href="#interior" class="subnav-link"><?php echo esc_html($t['nav_interior']); ?></a></li>
                    <li><a href="#battery" class="subnav-link"><?php echo esc_html($t['nav_battery']); ?></a></li>
                    <li><a href="#safety" class="subnav-link"><?php echo esc_html($t['nav_safety']); ?></a></li>
                    <li><a href="#economy" class="subnav-link"><?php echo esc_html($t['nav_economy']); ?></a></li>
                    <li class="shrink-0">
                        <a href="<?php echo esc_url($pdf_link); ?>" target="_blank" 
                           class="group inline-flex items-center gap-1.5 md:gap-2 bg-white text-black px-3 md:px-4 py-1.5 md:py-2 rounded-full font-bold text-[10px] md:text-xs uppercase hover:bg-jac-red hover:text-white transition-all duration-500">
                            <i class="fa-regular fa-file-pdf text-jac-red group-hover:text-white transition-colors duration-500"></i>
                            <span class="hidden md:inline"><?php echo esc_html($t['nav_brochure']); ?></span>
                            <span class="md:hidden">PDF</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="overview" class="py-14 md:py-24 bg-gradient-to-b from-white via-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="n55-fade-up">
                    <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                        <?php echo esc_html($t['nav_overview']); ?>
                    </span>
                    <div class="w-10 h-0.5 bg-jac-red mb-4 md:mb-6"></div>
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                        <?php echo esc_html($t['ov_title']); ?>
                    </h2>
                    <p class="text-sm md:text-base lg:text-lg text-gray-600 leading-relaxed mb-6 md:mb-8">
                        <?php echo esc_html($t['ov_desc']); ?>
                    </p>
                </div>

                <div class="n55-fade-up delay-200">
                    <div class="relative rounded-2xl md:rounded-3xl overflow-hidden shadow-xl n55-image-hover group cursor-pointer" id="n55-video-trigger">
                        <picture>
                            <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/1.a92928d.jpg">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/1@2x.bc9f170.jpg" 
                                 alt="JAC N55 EV Overview"
                                 class="w-full h-auto object-cover">
                        </picture>
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-500"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="video-play-button">
                                <i class="fa-solid fa-play"></i>
                            </div>
                        </div>
                        <div class="absolute bottom-4 md:bottom-6 left-4 md:left-6 right-4 md:right-6">
                            <span class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-md px-3 py-1.5 rounded-full text-white text-[10px] md:text-xs font-bold uppercase tracking-widest">
                                <i class="fa-solid fa-circle-play"></i>
                                <?php echo esc_html($t['watch_video']); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="specs" class="py-14 md:py-24 bg-black text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-end mb-10 md:mb-14">
                <div class="n55-fade-up">
                    <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                        <?php echo esc_html($t['hl_lbl']); ?>
                    </span>
                    <div class="w-10 h-0.5 bg-jac-red mb-4 md:mb-6"></div>
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-black leading-snug md:leading-tight mb-4 md:mb-0 pb-1">
                        <?php echo esc_html($t['hl_title']); ?>
                    </h2>
                </div>
                <div class="n55-fade-up delay-200 lg:text-right">
                    <a href="<?php echo esc_url($pdf_link); ?>" target="_blank"
                       class="inline-flex items-center gap-2 text-jac-red border-b-2 border-jac-red pb-1 font-bold text-xs md:text-sm hover:text-white hover:border-white transition-all duration-500">
                        <?php echo esc_html($t['hl_full']); ?>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
                <?php 
                $specs = [
                    ['n' => $t['hl_s1_n'], 'u' => $t['hl_s1_u'], 'l' => $t['hl_s1_l']],
                    ['n' => $t['hl_s2_n'], 'u' => $t['hl_s2_u'], 'l' => $t['hl_s2_l']],
                    ['n' => $t['hl_s3_n'], 'u' => $t['hl_s3_u'], 'l' => $t['hl_s3_l']],
                    ['n' => $t['hl_s4_n'], 'u' => $t['hl_s4_u'], 'l' => $t['hl_s4_l']],
                    ['n' => $t['hl_s5_n'], 'u' => $t['hl_s5_u'], 'l' => $t['hl_s5_l']],
                    ['n' => $t['hl_s6_n'], 'u' => $t['hl_s6_u'], 'l' => $t['hl_s6_l']],
                ];
                foreach ($specs as $i => $spec):
                ?>
                <div class="spec-box n55-fade-up" style="animation-delay: <?php echo $i * 80; ?>ms;">
                    <div class="flex items-baseline gap-1 mb-2 md:mb-3">
                        <span class="text-2xl md:text-4xl lg:text-5xl font-black text-white leading-none"><?php echo esc_html($spec['n']); ?></span>
                        <span class="text-base md:text-xl font-bold text-jac-green"><?php echo esc_html($spec['u']); ?></span>
                    </div>
                    <p class="text-[10px] md:text-xs font-bold uppercase tracking-widest text-white/50">
                        <?php echo esc_html($spec['l']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="exterior" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 n55-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['ex_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['ex_title']); ?>
                </h2>
            </div>

            <div class="space-y-12 md:space-y-20">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center n55-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden n55-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/2@2x.e725605.jpg" 
                             alt="LED Lights" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 bg-jac-red/10 px-3 py-1 rounded-full mb-3">
                            <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">LED</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['ex_c1_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ex_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center n55-fade-up">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden n55-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/3@2x.e2ed91b.jpg" 
                             alt="Large Windshield" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="lg:order-1">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['ex_c2_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ex_c2_d']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="interior" class="py-14 md:py-24 bg-gradient-to-br from-gray-900 to-black text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">
            <div class="text-center mb-10 md:mb-14 n55-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['in_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['in_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-white/70 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['in_desc']); ?>
                </p>
            </div>

            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 n55-fade-up n55-image-hover">
                <img src="https://jacen.jac.com.cn/_nuxt/img/4@2x.2e89012.jpg" 
                     alt="JAC N55 EV Interior" 
                     class="w-full h-auto object-cover">
            </div>

            <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                <div class="feature-card-dark n55-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden n55-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/5@2x.d3865a5.jpg" 
                             alt="Automatic Transmission" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['in_c1_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-dark n55-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden n55-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/6@2x.2658d34.jpg" 
                             alt="Connectivity System" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['in_c2_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_c2_d']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="battery" class="py-14 md:py-24 bg-gradient-to-br from-green-50 via-white to-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 n55-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['bt_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['bt_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['bt_desc']); ?>
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center mb-12 md:mb-16 n55-fade-up">
                <div class="rounded-2xl md:rounded-3xl overflow-hidden n55-image-hover">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/7@2x.5305278.jpg" 
                         alt="Charging Modes" 
                         class="w-full h-auto object-cover">
                </div>
                <div>
                    <div class="inline-flex items-center gap-2 bg-jac-green/10 border border-jac-green/30 px-3 py-1 rounded-full mb-3">
                        <i class="fa-solid fa-bolt text-jac-green text-xs"></i>
                        <span class="text-[10px] md:text-xs font-bold text-jac-green uppercase tracking-widest">CCS2-Combo</span>
                    </div>
                    <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                        <?php echo esc_html($t['bt_c1_t']); ?>
                    </h3>
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                        <?php echo esc_html($t['bt_c1_d']); ?>
                    </p>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center n55-fade-up">
                <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden n55-image-hover">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/8@2x.93d507c.jpg" 
                         alt="LFP Battery" 
                         class="w-full h-auto object-cover">
                </div>
                <div class="lg:order-1">
                    <div class="flex items-baseline gap-2 mb-3">
                        <span class="text-3xl md:text-5xl font-black text-jac-green">96.7</span>
                        <span class="text-base md:text-xl text-gray-600 font-bold">kWh</span>
                    </div>
                    <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                        <?php echo esc_html($t['bt_c2_t']); ?>
                    </h3>
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                        <?php echo esc_html($t['bt_c2_d']); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="safety" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 n55-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['sf_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['sf_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['sf_desc']); ?>
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-4 md:gap-6">
                <div class="feature-card-light n55-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden n55-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/9@2x.dd2647f.jpg" 
                             alt="Fireproof Testing" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <i class="fa-solid fa-fire text-jac-red"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['sf_c1_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['sf_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light n55-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden n55-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/10@2x.955144e.jpg" 
                             alt="Waterproof Testing" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <i class="fa-solid fa-droplet text-blue-500"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['sf_c2_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['sf_c2_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light n55-fade-up delay-200">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden n55-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/11@2x.2cdb107.jpg" 
                             alt="ABS & Pedestrian" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <i class="fa-solid fa-shield-halved text-jac-green"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['sf_c3_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['sf_c3_d']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="economy" class="py-14 md:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 n55-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['ec_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['ec_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['ec_desc']); ?>
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-4 md:gap-6 mb-10 md:mb-14">
                <div class="economy-stat-card n55-fade-up">
                    <div class="flex items-baseline gap-2 mb-3 md:mb-4">
                        <span class="text-5xl md:text-7xl font-black text-jac-green leading-none"><?php echo $t['ec_s1_n']; ?></span>
                        <span class="text-2xl md:text-3xl font-bold text-jac-green"><?php echo $t['ec_s1_u']; ?></span>
                    </div>
                    <p class="text-sm md:text-base text-gray-600 uppercase tracking-wider font-semibold leading-snug">
                        <?php echo esc_html($t['ec_s1_l']); ?>
                    </p>
                </div>

                <div class="economy-stat-card n55-fade-up delay-100">
                    <div class="flex items-baseline gap-2 mb-3 md:mb-4">
                        <span class="text-5xl md:text-7xl font-black text-jac-green leading-none"><?php echo $t['ec_s2_n']; ?></span>
                        <span class="text-2xl md:text-3xl font-bold text-jac-green"><?php echo $t['ec_s2_u']; ?></span>
                    </div>
                    <p class="text-sm md:text-base text-gray-600 uppercase tracking-wider font-semibold leading-snug">
                        <?php echo esc_html($t['ec_s2_l']); ?>
                    </p>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center n55-fade-up">
                <div class="rounded-2xl md:rounded-3xl overflow-hidden n55-image-hover">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/12@2x.15a01b1.jpg" 
                         alt="Lower Operational Cost" 
                         class="w-full h-auto object-cover">
                </div>
                <div>
                    <div class="inline-flex items-center gap-2 bg-jac-green/10 border border-jac-green/30 px-3 py-1 rounded-full mb-3">
                        <i class="fa-solid fa-leaf text-jac-green text-xs"></i>
                        <span class="text-[10px] md:text-xs font-bold text-jac-green uppercase tracking-widest">Regenerative</span>
                    </div>
                    <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                        <?php echo esc_html($t['ec_c1_t']); ?>
                    </h3>
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                        <?php echo esc_html($t['ec_c1_d']); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="versions" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 n55-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['spec_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['spec_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto">
                    <?php echo esc_html($t['spec_desc']); ?>
                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-3 mb-10 md:mb-14 n55-fade-up">
                <?php 
                $spec_tabs = [$t['spec_v1'], $t['spec_v2']];
                foreach ($spec_tabs as $i => $tab):
                ?>
                <button class="spec-tab inline-flex items-center justify-center gap-2 <?php echo $i === 0 ? 'active' : ''; ?>" data-target="spec-<?php echo $i; ?>">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/params.37fb8cc.png" 
                         alt="Spec Icon" 
                         class="w-4 md:w-5 h-auto object-contain mix-blend-multiply transition-all duration-300 spec-img-icon">
                    <span><?php echo esc_html($tab); ?></span>
                </button>
                <?php endforeach; ?>
            </div>

            <div class="n55-fade-up delay-200">
                <div class="text-center mt-2 md:mt-4">
                    <a href="<?php echo esc_url($pdf_link); ?>" target="_blank"
                       class="group inline-flex items-center gap-2 md:gap-3 bg-black text-white px-6 md:px-8 py-3 md:py-4 rounded-full font-bold text-sm md:text-base hover:bg-jac-red transition-all duration-500 hover:scale-[1.02] shadow-lg">
                        <i class="fa-regular fa-file-pdf text-lg md:text-xl"></i>
                        <?php echo esc_html($t['cta_btn']); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div id="n55-video-modal" class="video-modal">
        <div class="video-modal-backdrop"></div>
        <button class="video-modal-close" id="n55-video-close" aria-label="Close video">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="video-modal-content">
            <div class="video-modal-wrapper">
                <video id="n55-modal-video" controls playsinline preload="metadata">
                    <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                </video>
            </div>
        </div>
    </div>

</main>

 

<?php get_footer(); ?>
