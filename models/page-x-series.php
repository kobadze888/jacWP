<?php

/**
 * Template Name: Model - X-Series
 * 
 * იზოლირებული მოდელი — საკუთარი Tailwind CSS-ით და JS-ით
 * არ მოიხმარს სხვა მოდელების სტილებს ან სკრიპტებს
 */
get_header();

$lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';

// ==========================================
// ენების სტატიკური ლექსიკონი
// ==========================================
$t = [
    // HERO
    'hero_title'    => 'JAC X-Series',
    'hero_sub1'     => ($lang == 'en') ? 'EASY JOB' : 'მარტივი სამუშაო',
    'hero_sub2'     => ($lang == 'en') ? 'EASY LIFE' : 'მარტივი ცხოვრება',
    'hero_extra'    => ($lang == 'en') ? 'Best 1.5T Urban Logistics Solution' : 'საუკეთესო 1.5T საქალაქო ლოგისტიკური გადაწყვეტა',

    // NAVIGATION
    'nav_overview'  => ($lang == 'en') ? 'Overview' : 'მიმოხილვა',
    'nav_loading'   => ($lang == 'en') ? 'Loading' : 'დატვირთვა',
    'nav_driving'   => ($lang == 'en') ? 'Driving' : 'მართვა',
    'nav_safety'    => ($lang == 'en') ? 'Safety' : 'უსაფრთხოება',
    'nav_design'    => ($lang == 'en') ? 'Design' : 'დიზაინი',
    'nav_interior'  => ($lang == 'en') ? 'Interior' : 'ინტერიერი',
    'nav_specs'     => ($lang == 'en') ? 'Specs' : 'მახასიათებლები',
    'nav_brochure'  => ($lang == 'en') ? 'Brochure' : 'ბროშურა',

    // OVERVIEW
    'ov_title'      => ($lang == 'en') ? 'The Ultimate Urban Logistics Solution' : 'საბოლოო საქალაქო ლოგისტიკური გადაწყვეტა',
    'ov_desc'       => ($lang == 'en') ? 'X-Series aims at the light goods transportation segment. "EASY" is the core of the X-Series sales program — helping make your jobs much easier is our mission.' : 'X-Series ორიენტირებულია მსუბუქი ტვირთების გადაზიდვის სეგმენტზე. „EASY" არის X-Series გაყიდვების პროგრამის ბირთვი — ჩვენი მისიაა გავუმარტივოთ თქვენი სამუშაო.',

    // KEY FEATURES (Overview stats)
    'kf_1_t'        => ($lang == 'en') ? '1.5 Tons Payload' : '1.5 ტონა ტვირთამწეობა',
    'kf_1_d'        => ($lang == 'en') ? 'Curb weight 1.7T for urban transportation' : 'საკუთარი წონა 1.7T — საქალაქო გადაზიდვისთვის',
    'kf_2_t'        => ($lang == 'en') ? 'Front Independent Suspension' : 'წინა დამოუკიდებელი დაკიდება',
    'kf_2_d'        => ($lang == 'en') ? 'Max speed 150km/h, lower fuel consumption, more comfortable & safer' : 'მაქს. სიჩქარე 150 კმ/სთ, დაბალი საწვავის ხარჯი, უფრო კომფორტული და უსაფრთხო',

    // EASY LOADING
    'el_lbl'        => ($lang == 'en') ? 'EASY LOADING' : 'მარტივი დატვირთვა',
    'el_title'      => ($lang == 'en') ? 'Built on N-Series DNA' : 'N-სერიის დნმ-ზე აგებული',
    'el_desc'       => ($lang == 'en') ? 'X-Series carries JAC N-Series truck DNA, with a powerful engine and strong chassis. Strong power with 2.0 CTI & 4DA1 diesel engine, or gasoline engine as your option.' : 'X-Series-ს აქვს JAC N-სერიის სატვირთოს დნმ — მძლავრი ძრავი და მტკიცე შასი. 2.0 CTI & 4DA1 დიზელის ძრავი ან ბენზინის ძრავი თქვენი არჩევანით.',

    'el_f1_t'       => ($lang == 'en') ? 'Ultra-flat low deck' : 'ულტრა-ბრტყელი დაბალი ბაქანი',
    'el_f1_d'       => ($lang == 'en') ? 'Superior deck clearance lets you load and unload goods easier and faster.' : 'გაუმჯობესებული ბაქნის კლირენსი ამარტივებს და აჩქარებს დატვირთვა-გადმოტვირთვას.',

    'el_stat1_n'    => '785',
    'el_stat1_u'    => 'mm',
    'el_stat1_l'    => ($lang == 'en') ? 'Deck clearance' : 'ბაქნის კლირენსი',
    'el_stat2_n'    => '30',
    'el_stat2_u'    => '%',
    'el_stat2_l'    => ($lang == 'en') ? 'Lower than light truck' : 'მსუბუქ სატვირთოზე დაბალი',
    'el_stat3_n'    => '20',
    'el_stat3_u'    => '%',
    'el_stat3_l'    => ($lang == 'en') ? 'Energy saving' : 'ენერგოდაზოგვა',
    'el_stat4_n'    => '30',
    'el_stat4_u'    => '%',
    'el_stat4_l'    => ($lang == 'en') ? 'Time saving' : 'დროის დაზოგვა',

    // EASY DRIVING
    'ed_lbl'        => ($lang == 'en') ? 'EASY DRIVING' : 'მარტივი მართვა',
    'ed_title'      => ($lang == 'en') ? 'Precision meets performance' : 'სიზუსტე ხვდება წარმადობას',
    'ed_desc'       => ($lang == 'en') ? 'All-new truck steering system with a turning radius smaller than 5.5 meters. Front Independent Suspension and Disc Brakes bring you excellent driving performance.' : 'ახალი საჭის სისტემა 5.5 მეტრზე ნაკლები მოხვევის რადიუსით. წინა დამოუკიდებელი დაკიდება და დისკური მუხრუჭები შესანიშნავი მართვის გამოცდილებისთვის.',

    'ed_c1_t'       => ($lang == 'en') ? 'Double Wishbone Suspension' : 'ორმაგი საყრდენი დაკიდება',
    'ed_c1_d'       => ($lang == 'en') ? 'Torsion Bar Spring Front + Leaf Spring with Cylinder Shock Absorber for stable driving.' : 'Torsion Bar Spring წინა + Leaf Spring ცილინდრის ამორტიზატორით — სტაბილური მართვისთვის.',

    'ed_c2_t'       => ($lang == 'en') ? 'Anti-glare mirrors' : 'მოციმციმე-საწინააღმდეგო სარკეები',
    'ed_c2_d'       => ($lang == 'en') ? 'Electric exterior mirrors create wide field driving vision for an unimpeded experience.' : 'ელექტრო გარე სარკეები ქმნის ფართო ხილვის არეალს შეუფერხებელი გამოცდილებისთვის.',

    // SAFETY
    'saf_lbl'       => ($lang == 'en') ? 'SAFETY' : 'უსაფრთხოება',
    'saf_title'     => ($lang == 'en') ? 'Protection at every level' : 'დაცვა ყველა დონეზე',
    'saf_desc'      => ($lang == 'en') ? 'Excellent passive and active safety performance. The strong cabin passes 4-star crash test design, with 15% more viewing area than the ECE standard.' : 'შესანიშნავი პასიური და აქტიური უსაფრთხოების მაჩვენებლები. მტკიცე სალონი აკმაყოფილებს 4-ვარსკვლავიანი Crash Test-ის სტანდარტს — ECE სტანდარტზე 15%-ით მეტი ხილვადობის არეალით.',

    'saf_stat1_n'   => '4',
    'saf_stat1_u'   => '★',
    'saf_stat1_l'   => ($lang == 'en') ? 'Crash test rating' : 'Crash Test-ის რეიტინგი',
    'saf_stat2_n'   => '+15',
    'saf_stat2_u'   => '%',
    'saf_stat2_l'   => ($lang == 'en') ? 'More viewing area' : 'მეტი ხილვადობა',

    // DESIGN
    'des_lbl'       => ($lang == 'en') ? 'DESIGN' : 'დიზაინი',
    'des_title'     => ($lang == 'en') ? 'Smart fashion style' : 'Smart Fashion სტილი',
    'des_desc'      => ($lang == 'en') ? 'Every detail is crafted with purpose — combining classic elements with modern refinement for a truck that stands out in the city.' : 'ყოველი დეტალი შექმნილია მიზანდასახულობით — კლასიკური ელემენტები ჰარმონიულად ერწყმის თანამედროვე დახვეწილობას.',

    'des_c1_t'      => ($lang == 'en') ? 'Fog Light' : 'ნისლის ფარები',
    'des_c1_d'      => ($lang == 'en') ? 'Continuation of the classic circular fog lamp design.' : 'კლასიკური მრგვალი ნისლის ფარის დიზაინის გაგრძელება.',

    'des_c2_t'      => ($lang == 'en') ? 'Chrome Ornaments' : 'ქრომის ორნამენტები',
    'des_c2_d'      => ($lang == 'en') ? 'Bright chrome decorations improve the vehicle\'s quality appearance.' : 'ნათელი ქრომის დეტალები აუმჯობესებს ავტომობილის ხარისხის აღქმას.',

    'des_c3_t'      => ($lang == 'en') ? 'Air Intake' : 'ჰაერის დამჭერი',
    'des_c3_d'      => ($lang == 'en') ? 'Inverted trapezoidal air intake radiates full strength.' : 'ინვერტირებული ტრაპეციის ფორმის ჰაერშემშვები მძლავრი იერით.',

    'des_c4_t'      => ($lang == 'en') ? 'Headlight Design' : 'ფარების დიზაინი',
    'des_c4_d'      => ($lang == 'en') ? 'Black headlight design with classic circular fog lamp design.' : 'შავი ფარების დიზაინი კლასიკური მრგვალი ნისლის ფარებთან ერთად.',

    // INTERIOR
    'int_lbl'       => ($lang == 'en') ? 'INTERIOR' : 'ინტერიერი',
    'int_title'     => ($lang == 'en') ? 'Sedan-like comfort' : 'სედანის მსგავსი კომფორტი',
    'int_desc'      => ($lang == 'en') ? 'User-friendly, technology-based interior for a sedan-like driving experience.' : 'მომხმარებელზე ორიენტირებული, ტექნოლოგიებზე დაფუძნებული სალონი — სედანის მსგავსი მართვის გამოცდილება.',
    'int_long'      => ($lang == 'en') ? 'X-Series is equipped with a remote control folding key, power windows, motorized rearview mirrors, combination instrument dial, multimedia system, sun loungers with vanity mirror, interior room lights with glasses case, multi-function steering wheel system, adjustable headlights, and more.' : 'X-Series აღჭურვილია დისტანციური მართვის დასაკეცი გასაღებით, ელექტრო ფანჯრებით, ელექტრომოტორიზებული სარკეებით, კომბინირებული ინსტრუმენტების დაფით, მულტიმედიის სისტემით, შეზლონ-სარკეებით, ინტერიერის განათებით სათვალის ჩასადებით, მრავალფუნქციური საჭის სისტემით, რეგულირებადი ფარებით და სხვა.',

    // SERVICE
    'srv_lbl'       => ($lang == 'en') ? 'SERVICE' : 'სერვისი',
    'srv_title'     => ($lang == 'en') ? 'Reliable parts support' : 'საიმედო ნაწილების უზრუნველყოფა',
    'srv_desc'      => ($lang == 'en') ? 'Front cabin maintenance and cabin repair hole provide the easiest way for customers to maintain the vehicle themselves — enhancing vehicle operating efficiency. Backed by an excellent supplier network.' : 'წინა სალონის მოვლა და სარემონტო ხვრელი გვთავაზობს უმარტივეს გზას მომხმარებლისთვის ავტომობილი თავად მოუაროს. მხარდაჭერილია გამორჩეული მომწოდებლების ქსელით.',

    // SPECIFICATIONS
    'spec_lbl'      => ($lang == 'en') ? 'SPECIFICATIONS' : 'მახასიათებლები',
    'spec_title'    => ($lang == 'en') ? 'Choose your configuration' : 'აირჩიეთ კონფიგურაცია',
    'spec_desc'     => ($lang == 'en') ? 'Multiple cabin and power options to fit your business needs.' : 'კაბინისა და ძალის მრავალი ვარიანტი თქვენი ბიზნესის საჭიროებებისთვის.',

    'spec_v1'       => 'X200 Single Cabin',
    'spec_v2'       => 'X200 King Cabin',
    'spec_v3'       => 'X200 Double Cabin',
    'spec_v4'       => 'X100 Single Cabin',

    // CTA
    'cta_title'     => ($lang == 'en') ? 'Make your job easy' : 'გაიმარტივე სამუშაო',
    'cta_desc'      => ($lang == 'en') ? 'Download the full brochure for complete specifications.' : 'ჩამოტვირთეთ სრული ბროშურა დეტალური მონაცემებისთვის.',
    'cta_btn'       => ($lang == 'en') ? 'Download Brochure' : 'ბროშურის ჩამოტვირთვა',
    'disclaimer'    => ($lang == 'en') ? '* All information and pictures are for reference only. The actual specs are subject to change anytime.' : '* ყველა ინფორმაცია და ფოტო მხოლოდ საცნობაროა. რეალური მახასიათებლები შესაძლოა ნებისმიერ დროს შეიცვალოს.',
];

$pdf_link = "https://jacen.jac.com.cn/pdf/X-series.pdf";
?>

<!-- Tailwind CSS — ჩატვირთვა მხოლოდ ამ გვერდისთვის -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

 

<!-- Tailwind Config -->
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
                    'jac-gray': '#f4f6f9',
                    'jac-accent': '#f59e0b',
                },
            },
        },
    };
</script>

<main class="xseries-page font-sans bg-white text-gray-900">

    <!-- ============================================= -->
    <!-- 1. HERO SECTION                               -->
    <!-- ============================================= -->
    <section id="xseries-hero" class="relative h-[75vh] min-h-[480px] flex items-start md:items-end overflow-hidden">
        <picture class="absolute inset-0 z-0">
            <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/BANNER.ea7b560.jpg">
            <img src="https://jacen.jac.com.cn/_nuxt/img/BANNER@2x.949b1fe.jpg"
                 alt="JAC X-Series"
                 class="w-full h-full object-cover">
        </picture>

        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10 z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-transparent to-transparent z-10 md:hidden"></div>
        <div class="absolute inset-0 bg-gradient-to-l from-black/60 via-transparent to-transparent z-10 hidden md:block"></div>

        <div class="relative z-20 w-full px-5 md:px-12 lg:px-20 pt-20 md:pt-0 md:pb-20">
            <div class="max-w-7xl mx-auto xseries-fade-up md:flex md:justify-end md:pr-0 lg:pr-0 md:-mr-8 lg:-mr-16">
                <div class="md:max-w-lg lg:max-w-xl">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 bg-jac-red/90 backdrop-blur-sm px-3 py-1.5 rounded-full mb-4 md:mb-6">
                        <span class="w-1.5 h-1.5 bg-white rounded-full animate-pulse"></span>
                        <span class="text-[10px] md:text-xs font-bold text-white uppercase tracking-widest">1.5T Urban</span>
                    </div>

                    <h1 class="text-3xl md:text-6xl lg:text-8xl font-black text-white tracking-tight leading-none mb-2 md:mb-4">
                        <?php echo esc_html($t['hero_title']); ?>
                    </h1>

                    <div class="flex flex-wrap items-center gap-2 md:gap-4 mb-3 md:mb-5">
                        <span class="text-lg md:text-3xl lg:text-4xl font-light text-white"><?php echo esc_html($t['hero_sub1']); ?></span>
                        <span class="text-jac-red text-lg md:text-3xl">·</span>
                        <span class="text-lg md:text-3xl lg:text-4xl font-light text-white"><?php echo esc_html($t['hero_sub2']); ?></span>
                    </div>

                    <p class="text-xs md:text-base text-white/70 font-medium uppercase tracking-wider">
                        <?php echo esc_html($t['hero_extra']); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 2. STICKY SUB-NAVIGATION                      -->
    <!-- ============================================= -->
    <nav id="xseries-subnav" class="sticky top-[75px] bg-black text-white z-[990] border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-3 md:px-4">
            <div class="flex items-center justify-between h-14 md:h-16">
                <div class="hidden lg:block font-black text-lg tracking-wider whitespace-nowrap">
                    JAC X-SERIES
                </div>

                <ul class="flex items-center gap-4 md:gap-7 overflow-x-auto scrollbar-hide whitespace-nowrap flex-1 lg:flex-none lg:justify-end py-0">
                    <li><a href="#overview" class="subnav-link active"><?php echo esc_html($t['nav_overview']); ?></a></li>
                    <li><a href="#loading" class="subnav-link"><?php echo esc_html($t['nav_loading']); ?></a></li>
                    <li><a href="#driving" class="subnav-link"><?php echo esc_html($t['nav_driving']); ?></a></li>
                    <li><a href="#safety" class="subnav-link"><?php echo esc_html($t['nav_safety']); ?></a></li>
                    <li><a href="#design" class="subnav-link"><?php echo esc_html($t['nav_design']); ?></a></li>
                    <li><a href="#interior" class="subnav-link"><?php echo esc_html($t['nav_interior']); ?></a></li>
                    <li><a href="#specs" class="subnav-link"><?php echo esc_html($t['nav_specs']); ?></a></li>
                    <li class="shrink-0">
                        <a href="<?php echo esc_url($pdf_link); ?>" target="_blank" 
                           class="inline-flex items-center gap-1.5 md:gap-2 bg-white text-black px-3 md:px-4 py-1.5 md:py-2 rounded-full font-bold text-[10px] md:text-xs uppercase hover:bg-jac-red hover:text-white transition-all duration-500 whitespace-nowrap">
                            <i class="fa-regular fa-file-pdf text-jac-red"></i>
                            <span class="hidden md:inline"><?php echo esc_html($t['nav_brochure']); ?></span>
                            <span class="md:hidden">PDF</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================================= -->
    <!-- 3. OVERVIEW SECTION                           -->
    <!-- ============================================= -->
    <section id="overview" class="py-14 md:py-24 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center mb-14 md:mb-20">
                <div class="xseries-fade-up">
                    <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                        <?php echo esc_html($t['nav_overview']); ?>
                    </span>
                    <div class="w-10 h-0.5 bg-jac-red mb-4 md:mb-6"></div>
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black leading-tight mb-4 md:mb-6">
                        <?php echo esc_html($t['ov_title']); ?>
                    </h2>
                    <p class="text-sm md:text-base lg:text-lg text-gray-600 leading-relaxed">
                        <?php echo esc_html($t['ov_desc']); ?>
                    </p>
                </div>

                <div class="xseries-fade-up delay-200">
                    <div class="relative rounded-2xl md:rounded-3xl overflow-hidden shadow-xl xseries-image-hover">
                        <picture>
                            <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/1.f6dc65e.jpg">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/1@2x.c9097ca.jpg" 
                                 alt="JAC X-Series Overview"
                                 class="w-full h-auto object-cover">
                        </picture>
                    </div>
                </div>
            </div>

            <!-- Key Features Stats -->
            <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                <!-- Feature 1: Payload -->
                <div class="feature-stat-card xseries-fade-up">
                    <div class="flex items-start gap-4 md:gap-6">
                        <div class="w-14 h-14 md:w-20 md:h-20 shrink-0 rounded-xl md:rounded-2xl bg-jac-red/10 flex items-center justify-center overflow-hidden">
                            <picture>
                                <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/icon-1.ddb34cd.jpg">
                                <img src="https://jacen.jac.com.cn/_nuxt/img/icon-1@2x.a86bf38.jpg" 
                                     alt="Payload Icon" 
                                     class="w-full h-full object-cover">
                            </picture>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-base md:text-xl lg:text-2xl font-black text-black mb-1.5 md:mb-2 leading-tight">
                                <?php echo esc_html($t['kf_1_t']); ?>
                            </h3>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                <?php echo esc_html($t['kf_1_d']); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2: Suspension -->
                <div class="feature-stat-card xseries-fade-up delay-100">
                    <div class="flex items-start gap-4 md:gap-6">
                        <div class="w-14 h-14 md:w-20 md:h-20 shrink-0 rounded-xl md:rounded-2xl bg-jac-red/10 flex items-center justify-center overflow-hidden">
                            <picture>
                                <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/icon-2.96d7d07.jpg">
                                <img src="https://jacen.jac.com.cn/_nuxt/img/icon-2@2x.74e2285.jpg" 
                                     alt="Suspension Icon" 
                                     class="w-full h-full object-cover">
                            </picture>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-base md:text-xl lg:text-2xl font-black text-black mb-1.5 md:mb-2 leading-tight">
                                <?php echo esc_html($t['kf_2_t']); ?>
                            </h3>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                <?php echo esc_html($t['kf_2_d']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 4. EASY LOADING SECTION                       -->
    <!-- ============================================= -->
    <section id="loading" class="py-14 md:py-24 bg-black text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(45deg, white 25%, transparent 25%, transparent 75%, white 75%); background-size: 60px 60px;"></div>

        <div class="relative max-w-7xl mx-auto px-5 md:px-8">
            <!-- Header -->
            <div class="text-center mb-10 md:mb-16 xseries-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['el_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black mb-4 md:mb-6">
                    <?php echo esc_html($t['el_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-white/70 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['el_desc']); ?>
                </p>
            </div>

            <!-- Main Feature Image -->
            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 xseries-fade-up xseries-image-hover">
                <picture>
                    <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/2.6b05ff4.jpg">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/2@2x.96d2f05.jpg" 
                         alt="Easy Loading" 
                         class="w-full h-auto object-cover">
                </picture>
            </div>

            <!-- Feature Description -->
            <div class="max-w-3xl mx-auto text-center mb-10 md:mb-14 xseries-fade-up">
                <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4">
                    <?php echo esc_html($t['el_f1_t']); ?>
                </h3>
                <p class="text-sm md:text-base text-white/70 leading-relaxed">
                    <?php echo esc_html($t['el_f1_d']); ?>
                </p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-5">
                <?php 
                $loading_stats = [
                    ['n' => $t['el_stat1_n'], 'u' => $t['el_stat1_u'], 'l' => $t['el_stat1_l']],
                    ['n' => $t['el_stat2_n'], 'u' => $t['el_stat2_u'], 'l' => $t['el_stat2_l']],
                    ['n' => $t['el_stat3_n'], 'u' => $t['el_stat3_u'], 'l' => $t['el_stat3_l']],
                    ['n' => $t['el_stat4_n'], 'u' => $t['el_stat4_u'], 'l' => $t['el_stat4_l']],
                ];
                foreach ($loading_stats as $i => $stat):
                ?>
                <div class="stat-card xseries-fade-up" style="animation-delay: <?php echo $i * 100; ?>ms;">
                    <div class="flex items-baseline gap-1 mb-1.5 md:mb-2">
                        <span class="text-3xl md:text-5xl lg:text-6xl font-black text-white leading-none"><?php echo $stat['n']; ?></span>
                        <span class="text-lg md:text-2xl lg:text-3xl font-bold text-jac-red"><?php echo $stat['u']; ?></span>
                    </div>
                    <p class="text-[11px] md:text-sm text-white/60 uppercase tracking-wider font-medium">
                        <?php echo esc_html($stat['l']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 5. EASY DRIVING SECTION                       -->
    <!-- ============================================= -->
    <section id="driving" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <!-- Header -->
            <div class="text-center mb-10 md:mb-16 xseries-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['ed_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6">
                    <?php echo esc_html($t['ed_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['ed_desc']); ?>
                </p>
            </div>

            <!-- Feature Cards -->
            <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                <!-- Suspension -->
                <div class="driving-card xseries-fade-up">
                    <div class="relative aspect-[16/10] overflow-hidden rounded-xl md:rounded-2xl mb-4 md:mb-5 xseries-image-hover">
                        <picture>
                            <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/4.bfcf6ee.jpg">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/4@2x.b5c5491.jpg" 
                                 alt="Suspension" 
                                 class="w-full h-full object-cover">
                        </picture>
                    </div>
                    <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-2 md:mb-3 leading-tight">
                        <?php echo esc_html($t['ed_c1_t']); ?>
                    </h3>
                    <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                        <?php echo esc_html($t['ed_c1_d']); ?>
                    </p>
                </div>

                <!-- Mirrors -->
                <div class="driving-card xseries-fade-up delay-100">
                    <div class="relative aspect-[16/10] overflow-hidden rounded-xl md:rounded-2xl mb-4 md:mb-5 xseries-image-hover">
                        <picture>
                            <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/5.fa714c2.jpg">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/5@2x.c49a905.jpg" 
                                 alt="Mirrors" 
                                 class="w-full h-full object-cover">
                        </picture>
                    </div>
                    <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-2 md:mb-3 leading-tight">
                        <?php echo esc_html($t['ed_c2_t']); ?>
                    </h3>
                    <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                        <?php echo esc_html($t['ed_c2_d']); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 6. SAFETY SECTION                             -->
    <!-- ============================================= -->
    <section id="safety" class="py-14 md:py-24 bg-gradient-to-br from-gray-50 via-white to-gray-50">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">
                <!-- Image -->
                <div class="xseries-fade-up order-2 lg:order-1">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden shadow-xl xseries-image-hover">
                        <picture>
                            <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/6.3520602.jpg">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/6@2x.5c7866a.jpg" 
                                 alt="Safety" 
                                 class="w-full h-auto object-cover">
                        </picture>
                    </div>
                </div>

                <!-- Content -->
                <div class="xseries-fade-up delay-200 order-1 lg:order-2">
                    <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                        <?php echo esc_html($t['saf_lbl']); ?>
                    </span>
                    <div class="w-10 h-0.5 bg-jac-red mb-4 md:mb-6"></div>
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black leading-tight mb-4 md:mb-6">
                        <?php echo esc_html($t['saf_title']); ?>
                    </h2>
                    <p class="text-sm md:text-base lg:text-lg text-gray-600 leading-relaxed mb-6 md:mb-8">
                        <?php echo esc_html($t['saf_desc']); ?>
                    </p>

                    <!-- Safety Stats -->
                    <div class="grid grid-cols-2 gap-3 md:gap-5">
                        <div class="safety-stat-card">
                            <div class="flex items-baseline gap-1 mb-1.5">
                                <span class="text-3xl md:text-5xl font-black text-black leading-none"><?php echo $t['saf_stat1_n']; ?></span>
                                <span class="text-xl md:text-3xl text-jac-red"><?php echo $t['saf_stat1_u']; ?></span>
                            </div>
                            <p class="text-[11px] md:text-sm text-gray-600 uppercase tracking-wider font-medium">
                                <?php echo esc_html($t['saf_stat1_l']); ?>
                            </p>
                        </div>
                        <div class="safety-stat-card">
                            <div class="flex items-baseline gap-1 mb-1.5">
                                <span class="text-3xl md:text-5xl font-black text-black leading-none"><?php echo $t['saf_stat2_n']; ?></span>
                                <span class="text-xl md:text-3xl font-bold text-jac-red"><?php echo $t['saf_stat2_u']; ?></span>
                            </div>
                            <p class="text-[11px] md:text-sm text-gray-600 uppercase tracking-wider font-medium">
                                <?php echo esc_html($t['saf_stat2_l']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 7. DESIGN SECTION                             -->
    <!-- ============================================= -->
    <section id="design" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <!-- Header -->
            <div class="text-center mb-10 md:mb-16 xseries-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['des_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6">
                    <?php echo esc_html($t['des_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['des_desc']); ?>
                </p>
            </div>

            <!-- Design Cards Grid (Bento) -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-5">
                <?php 
                $design_cards = [
                    ['t' => $t['des_c1_t'], 'd' => $t['des_c1_d'], 'img2x' => 'https://jacen.jac.com.cn/_nuxt/img/7@2x.b4069d8.jpg', 'img' => 'https://jacen.jac.com.cn/_nuxt/img/7.9b7e6f9.jpg'],
                    ['t' => $t['des_c2_t'], 'd' => $t['des_c2_d'], 'img2x' => 'https://jacen.jac.com.cn/_nuxt/img/8@2x.49eb188.jpg', 'img' => 'https://jacen.jac.com.cn/_nuxt/img/8.9ecc72b.jpg'],
                    ['t' => $t['des_c3_t'], 'd' => $t['des_c3_d'], 'img2x' => 'https://jacen.jac.com.cn/_nuxt/img/9@2x.fa23cee.jpg', 'img' => 'https://jacen.jac.com.cn/_nuxt/img/9.e63ed46.jpg'],
                    ['t' => $t['des_c4_t'], 'd' => $t['des_c4_d'], 'img2x' => 'https://jacen.jac.com.cn/_nuxt/img/10@2x.a211342.jpg', 'img' => 'https://jacen.jac.com.cn/_nuxt/img/10.e033da6.jpg'],
                ];
                foreach ($design_cards as $i => $card):
                ?>
                <div class="design-card xseries-fade-up" style="animation-delay: <?php echo $i * 80; ?>ms;">
                    <div class="relative aspect-square overflow-hidden rounded-xl md:rounded-2xl mb-3 md:mb-4 xseries-image-hover">
                        <picture>
                            <source media="(max-width: 768px)" srcset="<?php echo esc_url($card['img']); ?>">
                            <img src="<?php echo esc_url($card['img2x']); ?>" 
                                 alt="<?php echo esc_attr($card['t']); ?>" 
                                 class="w-full h-full object-cover">
                        </picture>
                    </div>
                    <h4 class="text-sm md:text-base lg:text-lg font-bold text-black mb-1 md:mb-1.5 leading-tight">
                        <?php echo esc_html($card['t']); ?>
                    </h4>
                    <p class="text-[11px] md:text-sm text-gray-600 leading-relaxed">
                        <?php echo esc_html($card['d']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 8. INTERIOR SECTION                           -->
    <!-- ============================================= -->
    <section id="interior" class="py-14 md:py-24 bg-gradient-to-br from-gray-900 to-black text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <!-- Header -->
            <div class="text-center mb-10 md:mb-16 xseries-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['int_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black mb-4 md:mb-6">
                    <?php echo esc_html($t['int_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-white/70 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['int_desc']); ?>
                </p>
            </div>

            <!-- Interior Image -->
            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-8 md:mb-12 xseries-fade-up xseries-image-hover">
                <picture>
                    <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/11.2cdc80e.jpg">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/11@2x.de42f71.jpg" 
                         alt="Interior" 
                         class="w-full h-auto object-cover">
                </picture>
            </div>

            <!-- Long description -->
            <div class="max-w-4xl mx-auto xseries-fade-up">
                <p class="text-sm md:text-base lg:text-lg text-white/70 leading-relaxed text-center">
                    <?php echo esc_html($t['int_long']); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 9. SERVICE SECTION                            -->
    <!-- ============================================= -->
    <section class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">
                <div class="xseries-fade-up">
                    <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                        <?php echo esc_html($t['srv_lbl']); ?>
                    </span>
                    <div class="w-10 h-0.5 bg-jac-red mb-4 md:mb-6"></div>
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black leading-tight mb-4 md:mb-6">
                        <?php echo esc_html($t['srv_title']); ?>
                    </h2>
                    <p class="text-sm md:text-base lg:text-lg text-gray-600 leading-relaxed">
                        <?php echo esc_html($t['srv_desc']); ?>
                    </p>
                </div>

                <div class="xseries-fade-up delay-200">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden shadow-xl xseries-image-hover">
                        <picture>
                            <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/12.52a64bf.jpg">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/12@2x.0432a37.jpg" 
                                 alt="Service & Parts" 
                                 class="w-full h-auto object-cover">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 11. FINAL CTA SECTION                         -->
    <!-- ============================================= -->
    <section class="py-14 md:py-24 bg-gradient-to-br from-jac-red via-red-700 to-red-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -top-24 -right-24 w-80 h-80 md:w-96 md:h-96 rounded-full bg-white/20 blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-80 h-80 md:w-96 md:h-96 rounded-full bg-white/20 blur-3xl"></div>
        </div>

        <div class="relative max-w-5xl mx-auto px-5 md:px-8 text-center xseries-fade-up">
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-black mb-4 md:mb-6 leading-tight">
                <?php echo esc_html($t['cta_title']); ?>
            </h2>
            <p class="text-base md:text-xl text-white/90 mb-6 md:mb-10 max-w-2xl mx-auto">
                <?php echo esc_html($t['cta_desc']); ?>
            </p>
            <a href="<?php echo esc_url($pdf_link); ?>" target="_blank"
               class="inline-flex items-center gap-2 md:gap-3 bg-white text-jac-red px-7 md:px-10 py-3.5 md:py-5 rounded-full font-bold text-sm md:text-lg hover:bg-black hover:text-white transition-all duration-500 hover:scale-[1.03] shadow-2xl">
                <i class="fa-regular fa-file-pdf text-lg md:text-xl"></i>
                <?php echo esc_html($t['cta_btn']); ?>
            </a>
            <p class="text-[10px] md:text-xs text-white/60 mt-6 md:mt-10 max-w-2xl mx-auto">
                <?php echo esc_html($t['disclaimer']); ?>
            </p>
        </div>
    </section>

</main>
 

<?php get_footer(); ?>
