<?php

/**
 * Template Name: Model - Sunray
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
    'hero_title'    => 'JAC Sunray',
    'hero_sub'      => ($lang == 'en') ? 'Super Space. Super Sunray.' : 'სუპერ სივრცე. სუპერ Sunray.',
    'hero_extra'    => ($lang == 'en') ? 'Passenger Van · Cargo Van · Special Purpose Vehicles' : 'სამგზავრო ფურგონი · სატვირთო ფურგონი · სპეცდანიშნულების ავტომობილები',

    // NAVIGATION
    'nav_overview'  => ($lang == 'en') ? 'Overview' : 'მიმოხილვა',
    'nav_design'    => ($lang == 'en') ? 'Design' : 'დიზაინი',
    'nav_cargo'     => ($lang == 'en') ? 'Cargo' : 'სატვირთო',
    'nav_safety'    => ($lang == 'en') ? 'Safety' : 'უსაფრთხოება',
    'nav_interior'  => ($lang == 'en') ? 'Interior' : 'ინტერიერი',
    'nav_power'     => ($lang == 'en') ? 'Power' : 'სიმძლავრე',
    'nav_versions'  => ($lang == 'en') ? 'Versions' : 'ვერსიები',
    'nav_brochure'  => ($lang == 'en') ? 'Brochure' : 'ბროშურა',

    // OVERVIEW
    'ov_title'      => ($lang == 'en') ? 'Super Space Super Sunray' : 'სუპერ სივრცე, სუპერ Sunray',
    'ov_desc'       => ($lang == 'en') ? 'Facing both domestic and international markets, JAC Sunray family contains passenger van, cargo van and special purpose vehicles, including school bus, ambulance, engineering van, etc.' : 'ადგილობრივი და საერთაშორისო ბაზრისთვის განკუთვნილი JAC Sunray-ის ოჯახი მოიცავს სამგზავრო ფურგონს, სატვირთო ფურგონს და სპეცდანიშნულების ავტომობილებს: სასკოლო ავტობუსი, სასწრაფო დახმარება, საინჟინრო ფურგონი და ა.შ.',

    // DESIGN
    'des_lbl'       => ($lang == 'en') ? 'DESIGN' : 'დიზაინი',
    'des_title'     => ($lang == 'en') ? 'Outstanding Design' : 'გამორჩეული დიზაინი',
    'des_desc'      => ($lang == 'en') ? 'The styling exterior of Sunray is designed by JAC\'s Turin, Italy Design Center, while the interior is developed by Tokyo, Japan Design Center.' : 'Sunray-ის ექსტერიერი შექმნილია JAC-ის ტურინის (იტალია) დიზაინ-ცენტრის მიერ, ხოლო ინტერიერი — ტოკიოს (იაპონია) დიზაინ-ცენტრში.',

    'des_h1_t'      => ($lang == 'en') ? 'Double curvature eagle eye headlight' : 'არწივის თვალის ფორმის ორმაგი სიმრუდის ფარები',
    'des_h1_d'      => ($lang == 'en') ? 'Through the optimization of the refractive line, the beam focus and transmittance are highly increased, and adjustment of the illumination angle can also be achieved.' : 'სინათლის გარდატეხის ხაზის ოპტიმიზაციის მეშვეობით, სხივის ფოკუსი და გამტარიანობა მნიშვნელოვნად იზრდება. ასევე შესაძლებელია განათების კუთხის რეგულირება.',

    // CARGO SECTION
    'cg_lbl'        => ($lang == 'en') ? 'CARGO' : 'სატვირთო სივრცე',
    'cg_title'      => ($lang == 'en') ? 'Efficient loading & unloading' : 'ეფექტური დატვირთვა და გადმოტვირთვა',
    'cg_desc'       => ($lang == 'en') ? 'Sunray cargo van makes the loading and unloading safer, more efficient and more convenient.' : 'Sunray-ის სატვირთო ფურგონი დატვირთვა-გადმოტვირთვის პროცესს ხდის უფრო უსაფრთხოს, ეფექტურს და მოსახერხებელს.',
    'cg_feat1_t'    => ($lang == 'en') ? 'Back door with 180° opening' : 'უკანა კარი 180° გაღებით',
    'cg_feat1_d'    => ($lang == 'en') ? 'Wide opening allows easier access and loading of bulky items.' : 'ფართო გაღება აადვილებს მოცულობითი ნივთების დატვირთვას.',

    // SAFETY
    'saf_lbl'       => ($lang == 'en') ? 'SAFETY' : 'უსაფრთხოება',
    'saf_title'     => ($lang == 'en') ? 'Advanced Safety Systems' : 'უსაფრთხოების მოწინავე სისტემები',
    'saf_desc'      => ($lang == 'en') ? 'Multi-layered protection with active and passive safety features to keep you and your passengers secure on every journey.' : 'მრავალშრიანი დაცვა აქტიური და პასიური უსაფრთხოების სისტემებით, რომელიც გიცავს თქვენ და მგზავრებს ყოველ მოგზაურობაზე.',

    'saf_c1_t'      => 'ESC',
    'saf_c1_d'      => ($lang == 'en') ? 'Electronic Stability Control' : 'ელექტრონული სტაბილიზაციის კონტროლი',
    'saf_c2_t'      => 'LDWS',
    'saf_c2_d'      => ($lang == 'en') ? 'Lane Departure Warning System' : 'ზოლიდან გადახვევის გაფრთხილების სისტემა',
    'saf_c3_t'      => ($lang == 'en') ? 'Airbag' : 'უსაფრთხოების ბალიში',
    'saf_c3_d'      => ($lang == 'en') ? 'Highly protect your safety' : 'მაღალი დონის დაცვა თქვენი უსაფრთხოებისთვის',
    'saf_c4_t'      => ($lang == 'en') ? 'Laser welding' : 'ლაზერული შედუღება',
    'saf_c4_d'      => ($lang == 'en') ? 'Further enhance welding strength and quality' : 'აძლიერებს შედუღების ხარისხს და სიმტკიცეს',

    // INTERIOR
    'int_lbl'       => ($lang == 'en') ? 'INTERIOR' : 'ინტერიერი',
    'int_title'     => ($lang == 'en') ? 'Sedan-level comfort' : 'სედანის დონის კომფორტი',
    'int_desc'      => ($lang == 'en') ? 'Sedan-type center control and instrument panel, multifunctional steering wheel, independent air conditioner and so on.' : 'სედანის ტიპის ცენტრალური კონსოლი და მაჩვენებელთა დაფა, მრავალფუნქციური საჭე, დამოუკიდებელი კონდიციონერი და სხვა.',

    'int_f1_t'      => ($lang == 'en') ? 'Luxury aero seats' : 'ლუქს აერო სავარძლები',
    'int_f1_d'      => ($lang == 'en') ? 'Ergonomics philosophy, seat back adjustable, 3-point safety belt.' : 'ერგონომიული დიზაინი, რეგულირებადი საზურგე, 3-წერტილოვანი უსაფრთხოების ღვედი.',

    // POWER
    'pow_lbl'       => ($lang == 'en') ? 'POWER' : 'სიმძლავრე',
    'pow_title'     => ($lang == 'en') ? 'Golden Power' : 'ოქროს სიმძლავრე',
    'pow_subtitle'  => ($lang == 'en') ? 'The combination of 2.7CTI + 6MT offers the best balance between power and economy.' : '2.7CTI + 6MT კომბინაცია გთავაზობთ საუკეთესო ბალანსს სიმძლავრესა და ეკონომიურობას შორის.',
    'pow_desc'      => ($lang == 'en') ? 'Sunray can be matched with 1.9CTI diesel engine, 2.7CTI diesel engine, 2.0T+ gasoline engine and other power options. Apart from being reliable and easy to maintain, the application of high-pressure common rail and EFI technology provides a steady stream of power.' : 'Sunray-ის არჩევანში შედის 1.9CTI დიზელი, 2.7CTI დიზელი, 2.0T+ ბენზინი და სხვა ძრავები. ისინი საიმედო და მარტივად მოსავლელია, ხოლო მაღალი წნევის Common Rail და EFI ტექნოლოგიები უზრუნველყოფენ სტაბილურ სიმძლავრეს.',

    'pow_f1_t'      => ($lang == 'en') ? '2.7 CTI Diesel' : '2.7 CTI დიზელი',
    'pow_f1_d'      => ($lang == 'en') ? 'Premium diesel powertrain with high torque output.' : 'პრემიუმ დიზელის აგრეგატი მაღალი ბრუნვის მომენტით.',
    'pow_f2_t'      => ($lang == 'en') ? 'High rigidity frame body' : 'მაღალი სიმტკიცის კარკასი',
    'pow_f2_d'      => ($lang == 'en') ? 'More than 60% of high-strength steel.' : '60%-ზე მეტი მაღალი სიმტკიცის ფოლადისგან.',
    'pow_f3_t'      => ($lang == 'en') ? 'Highly automated production' : 'მაღალავტომატიზებული წარმოება',
    'pow_f3_d'      => ($lang == 'en') ? 'Modern production line ensures consistent quality.' : 'თანამედროვე საწარმოო ხაზი უზრუნველყოფს სტაბილურ ხარისხს.',

    // VERSIONS
    'ver_lbl'       => ($lang == 'en') ? 'VERSIONS' : 'ვერსიები',
    'ver_title'     => ($lang == 'en') ? 'Modified Variants' : 'მოდიფიცირებული ვარიანტები',
    'ver_desc'      => ($lang == 'en') ? 'Offering a variety of body dimensions and roof heights, there\'s always a Sunray Van to meet your needs.' : 'სხეულის სხვადასხვა ზომისა და სახურავის სიმაღლის ვარიანტებით, Sunray ყოველთვის დააკმაყოფილებს თქვენს საჭიროებებს.',

    'ver_1'         => ($lang == 'en') ? 'Ambulance' : 'სასწრაფო დახმარება',
    'ver_2'         => ($lang == 'en') ? 'School Bus' : 'სასკოლო ავტობუსი',
    'ver_3'         => ($lang == 'en') ? 'Engineering Van' : 'საინჟინრო ფურგონი',
    'ver_4'         => ($lang == 'en') ? 'Refrigerated Van' : 'სამაცივრე ფურგონი',
    'ver_5'         => ($lang == 'en') ? 'Command Van' : 'სამართავი ფურგონი',

    // SPECIFICATIONS
    'spec_title'    => ($lang == 'en') ? 'Specifications' : 'ტექნიკური მახასიათებლები',
    'spec_desc'     => ($lang == 'en') ? 'Choose the configuration that fits your needs.' : 'აირჩიეთ თქვენზე მორგებული კონფიგურაცია.',
    
    'spec_v1'       => 'V4 1.9CTI Passenger',
    'spec_v2'       => 'V4 1.9CTI Cargo',
    'spec_v3'       => 'V4 2.0T Passenger',
    'spec_v4'       => 'V4 2.8T Cargo',
    'spec_v5'       => 'V5 2.7CTI Passenger',
    'spec_v6'       => 'V5 2.8T Cargo',
    'spec_v7'       => 'V6 2.7CTI Passenger',
    'spec_v8'       => 'V6 2.8T Cargo',

    // CTA
    'cta_title'     => ($lang == 'en') ? 'Ready for your journey?' : 'მზად ხართ მოგზაურობისთვის?',
    'cta_desc'      => ($lang == 'en') ? 'Download the full brochure for complete specifications and configurations.' : 'ჩამოტვირთეთ სრული ბროშურა დეტალური მონაცემებისთვის.',
    'cta_btn'       => ($lang == 'en') ? 'Download Brochure' : 'ბროშურის ჩამოტვირთვა',
    'disclaimer'    => ($lang == 'en') ? '* All information and pictures are for reference only. The actual specs are subject to change anytime.' : '* ყველა ინფორმაცია და ფოტო მხოლოდ საცნობაროა. რეალური მახასიათებლები შესაძლოა ნებისმიერ დროს შეიცვალოს.',
];

// Sunray PDF link
$pdf_link = "https://jacen.jac.com.cn/pdf/Sunray.pdf";
?>

<!-- Tailwind CSS — ჩატვირთვა მხოლოდ ამ გვერდისთვის -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Sunray-სპეციფიკური CSS (იზოლირებული) -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/models/sunray.css">

<!-- Tailwind Config (მხოლოდ ამ გვერდისთვის) -->
<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Noto Sans Georgian', 'Inter', 'sans-serif'],
                },
                colors: {
                    'jac-red': '#d11f26',
                    'jac-dark': '#111111',
                    'jac-gray': '#f4f6f9',
                },
                animation: {
                    'fade-up': 'fadeUp 0.8s ease-out forwards',
                    'fade-in': 'fadeIn 0.6s ease-out forwards',
                },
                keyframes: {
                    fadeUp: {
                        '0%': { opacity: '0', transform: 'translateY(40px)' },
                        '100%': { opacity: '1', transform: 'translateY(0)' },
                    },
                    fadeIn: {
                        '0%': { opacity: '0' },
                        '100%': { opacity: '1' },
                    },
                },
            },
        },
    };
</script>

<main class="sunray-page font-sans bg-white text-gray-900">

    <!-- ============================================= -->
    <!-- 1. HERO SECTION                               -->
    <!-- ============================================= -->
    <section id="sunray-hero" class="relative h-[75vh] min-h-[500px] flex items-end overflow-hidden">
        <!-- Desktop Background -->
        <picture class="absolute inset-0 z-0">
            <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/BANNER.fb81ec3.jpg">
            <img src="http://jacen.jac.com.cn/_nuxt/img/BANNER@2x.eff171e.jpg" 
                 alt="JAC Sunray" 
                 class="w-full h-full object-cover">
        </picture>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent z-10"></div>

        <!-- Content -->
        <div class="relative z-20 w-full px-6 md:px-12 lg:px-20 pb-16 md:pb-20">
            <div class="max-w-7xl mx-auto sunray-fade-up">
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white tracking-tight mb-4 leading-none">
                    <?php echo esc_html($t['hero_title']); ?>
                </h1>
                <p class="text-xl md:text-3xl text-white/90 font-light mb-3">
                    <?php echo esc_html($t['hero_sub']); ?>
                </p>
                <p class="text-sm md:text-base text-white/70 font-medium uppercase tracking-wider">
                    <?php echo esc_html($t['hero_extra']); ?>
                </p>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 hidden md:block">
            <div class="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 2. STICKY SUB-NAVIGATION                      -->
    <!-- ============================================= -->
    <nav id="sunray-subnav" class="sticky top-[75px] bg-black text-white z-[990] border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Brand (Desktop only) -->
                <div class="hidden lg:block font-black text-lg tracking-wider">
                    JAC SUNRAY
                </div>

                <!-- Links -->
                <ul class="flex items-center gap-5 md:gap-8 overflow-x-auto scrollbar-hide whitespace-nowrap flex-1 lg:flex-none lg:justify-end">
                    <li><a href="#overview" class="subnav-link active"><?php echo esc_html($t['nav_overview']); ?></a></li>
                    <li><a href="#design" class="subnav-link"><?php echo esc_html($t['nav_design']); ?></a></li>
                    <li><a href="#cargo" class="subnav-link"><?php echo esc_html($t['nav_cargo']); ?></a></li>
                    <li><a href="#safety" class="subnav-link"><?php echo esc_html($t['nav_safety']); ?></a></li>
                    <li><a href="#interior" class="subnav-link"><?php echo esc_html($t['nav_interior']); ?></a></li>
                    <li><a href="#power" class="subnav-link"><?php echo esc_html($t['nav_power']); ?></a></li>
                    <li><a href="#versions" class="subnav-link"><?php echo esc_html($t['nav_versions']); ?></a></li>
                    <li>
                        <a href="<?php echo esc_url($pdf_link); ?>" target="_blank" 
                           class="inline-flex items-center gap-2 bg-white text-black px-4 py-2 rounded-full font-bold text-xs uppercase hover:bg-jac-red hover:text-white transition-all duration-300 whitespace-nowrap">
                            <i class="fa-regular fa-file-pdf text-jac-red group-hover:text-white"></i>
                            <?php echo esc_html($t['nav_brochure']); ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================================= -->
    <!-- 3. OVERVIEW SECTION                           -->
    <!-- ============================================= -->
    <section id="overview" class="py-20 md:py-28 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <!-- Text -->
                <div class="sunray-fade-up">
                    <span class="inline-block text-sm font-bold tracking-widest text-jac-red uppercase mb-4">
                        <?php echo esc_html($t['nav_overview']); ?>
                    </span>
                    <div class="w-12 h-1 bg-jac-red mb-6"></div>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-black leading-tight mb-6">
                        <?php echo esc_html($t['ov_title']); ?>
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        <?php echo esc_html($t['ov_desc']); ?>
                    </p>
                </div>

                <!-- Image -->
                <div class="sunray-fade-up delay-200">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <picture>
                            <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/1.1f1b2f1.jpg">
                            <img src="http://jacen.jac.com.cn/_nuxt/img/1@2x.96d4637.jpg" 
                                 alt="JAC Sunray Overview"
                                 class="w-full h-auto object-cover">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 4. DESIGN SECTION                             -->
    <!-- ============================================= -->
    <section id="design" class="py-20 md:py-28 bg-black text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, white 1px, transparent 1px); background-size: 40px 40px;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16 sunray-fade-up">
                <span class="inline-block text-sm font-bold tracking-widest text-jac-red uppercase mb-4">
                    <?php echo esc_html($t['des_lbl']); ?>
                </span>
                <div class="w-12 h-1 bg-jac-red mx-auto mb-6"></div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black mb-6">
                    <?php echo esc_html($t['des_title']); ?>
                </h2>
                <p class="text-lg text-white/70 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['des_desc']); ?>
                </p>
            </div>

            <!-- Design Images Grid (Bento Layout) -->
            <div class="grid md:grid-cols-2 gap-6 mb-16">
                <!-- Large Image -->
                <div class="relative rounded-2xl overflow-hidden group sunray-fade-up">
                    <picture>
                        <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/2.9b91d65.jpg">
                        <img src="http://jacen.jac.com.cn/_nuxt/img/2@2x.4112671.jpg" 
                             alt="Sunray Design Italy" 
                             class="w-full h-full object-cover aspect-[4/3] group-hover:scale-105 transition-transform duration-700">
                    </picture>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <span class="inline-block px-3 py-1 bg-white/10 backdrop-blur-sm rounded-full text-xs font-bold uppercase tracking-wider mb-2">Italy</span>
                        <h3 class="text-2xl font-bold">Turin Design Center</h3>
                    </div>
                </div>

                <!-- Large Image -->
                <div class="relative rounded-2xl overflow-hidden group sunray-fade-up delay-200">
                    <picture>
                        <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/3.d9d7f45.jpg">
                        <img src="http://jacen.jac.com.cn/_nuxt/img/3@2x.488bdab.jpg" 
                             alt="Sunray Design Japan" 
                             class="w-full h-full object-cover aspect-[4/3] group-hover:scale-105 transition-transform duration-700">
                    </picture>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <span class="inline-block px-3 py-1 bg-white/10 backdrop-blur-sm rounded-full text-xs font-bold uppercase tracking-wider mb-2">Japan</span>
                        <h3 class="text-2xl font-bold">Tokyo Design Center</h3>
                    </div>
                </div>
            </div>

            <!-- Eagle Eye Headlight Feature -->
            <div class="grid lg:grid-cols-2 gap-12 items-center bg-white/5 backdrop-blur-sm rounded-3xl p-8 md:p-12 border border-white/10 sunray-fade-up">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-1 h-8 bg-jac-red"></div>
                        <span class="text-xs font-bold tracking-widest text-jac-red uppercase">Feature</span>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-black mb-4 leading-tight">
                        <?php echo esc_html($t['des_h1_t']); ?>
                    </h3>
                    <p class="text-white/70 leading-relaxed">
                        <?php echo esc_html($t['des_h1_d']); ?>
                    </p>
                </div>
                <div class="rounded-2xl overflow-hidden">
                    <picture>
                        <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/4.b292268.jpg">
                        <img src="http://jacen.jac.com.cn/_nuxt/img/4@2x.ed2cfe4.jpg" 
                             alt="Eagle Eye Headlight" 
                             class="w-full h-auto object-cover">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 5. CARGO SECTION                              -->
    <!-- ============================================= -->
    <section id="cargo" class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16 sunray-fade-up">
                <span class="inline-block text-sm font-bold tracking-widest text-jac-red uppercase mb-4">
                    <?php echo esc_html($t['cg_lbl']); ?>
                </span>
                <div class="w-12 h-1 bg-jac-red mx-auto mb-6"></div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-black mb-6">
                    <?php echo esc_html($t['cg_title']); ?>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['cg_desc']); ?>
                </p>
            </div>

            <!-- Cargo Showcase -->
            <div class="grid lg:grid-cols-3 gap-6">
                <!-- Main Large Card -->
                <div class="lg:col-span-2 relative rounded-3xl overflow-hidden group sunray-fade-up">
                    <picture>
                        <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/5.07042b3.jpg">
                        <img src="http://jacen.jac.com.cn/_nuxt/img/5@2x.c4c53de.jpg" 
                             alt="Sunray Cargo" 
                             class="w-full h-full object-cover aspect-[16/10] group-hover:scale-105 transition-transform duration-700">
                    </picture>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 right-8 text-white">
                        <h3 class="text-3xl md:text-4xl font-black mb-2"><?php echo esc_html($t['cg_title']); ?></h3>
                        <p class="text-white/80"><?php echo esc_html($t['cg_desc']); ?></p>
                    </div>
                </div>

                <!-- 180° Door Feature -->
                <div class="relative rounded-3xl overflow-hidden group sunray-fade-up delay-200 bg-gray-100">
                    <picture>
                        <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/6.8453cac.jpg">
                        <img src="http://jacen.jac.com.cn/_nuxt/img/6@2x.2614fcd.jpg" 
                             alt="180 Degree Door" 
                             class="w-full aspect-[16/10] lg:aspect-auto lg:h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </picture>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 text-white">
                        <div class="inline-flex items-center gap-2 bg-jac-red/90 px-3 py-1 rounded-full text-xs font-bold uppercase mb-3">
                            <i class="fa-solid fa-rotate"></i> 180°
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold mb-2"><?php echo esc_html($t['cg_feat1_t']); ?></h3>
                        <p class="text-sm text-white/80"><?php echo esc_html($t['cg_feat1_d']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 6. SAFETY SECTION                             -->
    <!-- ============================================= -->
    <section id="safety" class="py-20 md:py-28 bg-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16 sunray-fade-up">
                <span class="inline-block text-sm font-bold tracking-widest text-jac-red uppercase mb-4">
                    <?php echo esc_html($t['saf_lbl']); ?>
                </span>
                <div class="w-12 h-1 bg-jac-red mx-auto mb-6"></div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-black mb-6">
                    <?php echo esc_html($t['saf_title']); ?>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['saf_desc']); ?>
                </p>
            </div>

            <!-- Safety Cards Grid -->
            <div class="grid md:grid-cols-2 gap-6">
                <!-- ESC Card -->
                <div class="safety-card group sunray-fade-up">
                    <div class="relative h-64 md:h-80 overflow-hidden">
                        <picture>
                            <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/7.f35d7e2.jpg">
                            <img src="http://jacen.jac.com.cn/_nuxt/img/7@2x.87beaba.jpg" 
                                 alt="ESC" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </picture>
                    </div>
                    <div class="p-8">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <span class="text-3xl font-black text-jac-red"><?php echo esc_html($t['saf_c1_t']); ?></span>
                        </div>
                        <p class="text-gray-600"><?php echo esc_html($t['saf_c1_d']); ?></p>
                    </div>
                </div>

                <!-- LDWS Card -->
                <div class="safety-card group sunray-fade-up delay-100">
                    <div class="relative h-64 md:h-80 overflow-hidden">
                        <picture>
                            <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/8.b3b0f1b.jpg">
                            <img src="http://jacen.jac.com.cn/_nuxt/img/8@2x.0d9671b.jpg" 
                                 alt="LDWS" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </picture>
                    </div>
                    <div class="p-8">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <span class="text-3xl font-black text-jac-red"><?php echo esc_html($t['saf_c2_t']); ?></span>
                        </div>
                        <p class="text-gray-600"><?php echo esc_html($t['saf_c2_d']); ?></p>
                    </div>
                </div>

                <!-- Airbag Card -->
                <div class="safety-card group sunray-fade-up delay-200">
                    <div class="relative h-64 md:h-80 overflow-hidden">
                        <picture>
                            <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/10.f3b1e1f.jpg">
                            <img src="http://jacen.jac.com.cn/_nuxt/img/10@2x.628e060.jpg" 
                                 alt="Airbag" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </picture>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-black mb-3"><?php echo esc_html($t['saf_c3_t']); ?></h3>
                        <p class="text-gray-600"><?php echo esc_html($t['saf_c3_d']); ?></p>
                    </div>
                </div>

                <!-- Laser Welding Card -->
                <div class="safety-card group sunray-fade-up delay-300">
                    <div class="relative h-64 md:h-80 overflow-hidden">
                        <picture>
                            <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/11.cc23e07.jpg">
                            <img src="http://jacen.jac.com.cn/_nuxt/img/12@2x.af434c8.jpg" 
                                 alt="Laser Welding" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </picture>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-black mb-3"><?php echo esc_html($t['saf_c4_t']); ?></h3>
                        <p class="text-gray-600"><?php echo esc_html($t['saf_c4_d']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 7. INTERIOR SECTION                           -->
    <!-- ============================================= -->
    <section id="interior" class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16 sunray-fade-up">
                <span class="inline-block text-sm font-bold tracking-widest text-jac-red uppercase mb-4">
                    <?php echo esc_html($t['int_lbl']); ?>
                </span>
                <div class="w-12 h-1 bg-jac-red mx-auto mb-6"></div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-black mb-6">
                    <?php echo esc_html($t['int_title']); ?>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['int_desc']); ?>
                </p>
            </div>

            <!-- Interior Showcase -->
            <div class="relative rounded-3xl overflow-hidden mb-12 sunray-fade-up">
                <picture>
                    <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/9.a94eaf6.jpg">
                    <img src="http://jacen.jac.com.cn/_nuxt/img/9@2x.1db0422.jpg" 
                         alt="Sunray Interior" 
                         class="w-full h-auto object-cover">
                </picture>
            </div>

            <!-- Luxury Aero Seats Feature -->
            <div class="grid lg:grid-cols-2 gap-12 items-center bg-gradient-to-br from-gray-900 to-black text-white rounded-3xl p-8 md:p-12 sunray-fade-up">
                <div class="rounded-2xl overflow-hidden">
                    <picture>
                        <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/12.0f4f44b.jpg">
                        <img src="http://jacen.jac.com.cn/_nuxt/img/11@2x.69d5245.jpg" 
                             alt="Luxury Aero Seats" 
                             class="w-full h-auto object-cover">
                    </picture>
                </div>
                <div>
                    <span class="inline-block text-xs font-bold tracking-widest text-jac-red uppercase mb-3">Comfort</span>
                    <h3 class="text-3xl md:text-4xl font-black mb-5 leading-tight">
                        <?php echo esc_html($t['int_f1_t']); ?>
                    </h3>
                    <p class="text-white/70 leading-relaxed text-lg">
                        <?php echo esc_html($t['int_f1_d']); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 8. POWER SECTION                              -->
    <!-- ============================================= -->
    <section id="power" class="py-20 md:py-28 bg-gradient-to-br from-amber-50 via-white to-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
            <!-- Header -->
            <div class="text-center mb-16 sunray-fade-up">
                <span class="inline-block text-sm font-bold tracking-widest text-jac-red uppercase mb-4">
                    <?php echo esc_html($t['pow_lbl']); ?>
                </span>
                <div class="w-12 h-1 bg-jac-red mx-auto mb-6"></div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-black mb-6">
                    <?php echo esc_html($t['pow_title']); ?>
                </h2>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed font-semibold mb-4">
                    <?php echo esc_html($t['pow_subtitle']); ?>
                </p>
                <p class="text-base text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['pow_desc']); ?>
                </p>
            </div>

            <!-- Hero Power Image -->
            <div class="rounded-3xl overflow-hidden mb-12 shadow-xl sunray-fade-up">
                <picture>
                    <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/16.c81013d.jpg">
                    <img src="http://jacen.jac.com.cn/_nuxt/img/16@2x.3390c19.jpg" 
                         alt="Golden Power" 
                         class="w-full h-auto object-cover">
                </picture>
            </div>

            <!-- Power Features Grid -->
            <div class="grid md:grid-cols-3 gap-6">
                <!-- 2.7 CTI Diesel -->
                <div class="power-card group sunray-fade-up">
                    <div class="relative h-56 overflow-hidden">
                        <picture>
                            <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/15.041e06d.jpg">
                            <img src="http://jacen.jac.com.cn/_nuxt/img/15@2x.1998547.jpg" 
                                 alt="2.7 CTI" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </picture>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-2"><?php echo esc_html($t['pow_f1_t']); ?></h3>
                        <p class="text-sm text-gray-600"><?php echo esc_html($t['pow_f1_d']); ?></p>
                    </div>
                </div>

                <!-- High Rigidity -->
                <div class="power-card group sunray-fade-up delay-100">
                    <div class="relative h-56 overflow-hidden">
                        <picture>
                            <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/14.a65ae8c.jpg">
                            <img src="http://jacen.jac.com.cn/_nuxt/img/14@2x.7e0abe6.jpg" 
                                 alt="High Rigidity Frame" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </picture>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-2"><?php echo esc_html($t['pow_f2_t']); ?></h3>
                        <p class="text-sm text-gray-600"><?php echo esc_html($t['pow_f2_d']); ?></p>
                    </div>
                </div>

                <!-- Automated Production -->
                <div class="power-card group sunray-fade-up delay-200">
                    <div class="relative h-56 overflow-hidden">
                        <picture>
                            <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/13.b33e898.jpg">
                            <img src="http://jacen.jac.com.cn/_nuxt/img/13@2x.f4cfcfb.jpg" 
                                 alt="Automated Production" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </picture>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-2"><?php echo esc_html($t['pow_f3_t']); ?></h3>
                        <p class="text-sm text-gray-600"><?php echo esc_html($t['pow_f3_d']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 9. VERSIONS / MODIFIED SECTION                -->
    <!-- ============================================= -->
    <section id="versions" class="py-20 md:py-28 bg-black text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16 sunray-fade-up">
                <span class="inline-block text-sm font-bold tracking-widest text-jac-red uppercase mb-4">
                    <?php echo esc_html($t['ver_lbl']); ?>
                </span>
                <div class="w-12 h-1 bg-jac-red mx-auto mb-6"></div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black mb-6">
                    <?php echo esc_html($t['ver_title']); ?>
                </h2>
                <p class="text-lg text-white/70 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['ver_desc']); ?>
                </p>
            </div>

            <!-- Hero Versions Image -->
            <div class="rounded-3xl overflow-hidden mb-12 sunray-fade-up">
                <picture>
                    <source media="(max-width: 768px)" srcset="http://jacen.jac.com.cn/_nuxt/img/17.eb2833c.jpg">
                    <img src="http://jacen.jac.com.cn/_nuxt/img/17@2x.5a0815a.jpg" 
                         alt="Sunray Versions" 
                         class="w-full h-auto object-cover">
                </picture>
            </div>

            <!-- Versions Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                <?php 
                $versions = [
                    ['num' => '01', 'key' => 'ver_1', 'img' => 'http://jacen.jac.com.cn/_nuxt/img/18-1@2x.b309987.jpg'],
                    ['num' => '02', 'key' => 'ver_2', 'img' => 'http://jacen.jac.com.cn/_nuxt/img/18-2@2x.65c3deb.jpg'],
                    ['num' => '03', 'key' => 'ver_3', 'img' => 'http://jacen.jac.com.cn/_nuxt/img/18-3@2x.976d3a0.jpg'],
                    ['num' => '04', 'key' => 'ver_4', 'img' => 'http://jacen.jac.com.cn/_nuxt/img/18-4@2x.6f07092.jpg'],
                    ['num' => '05', 'key' => 'ver_5', 'img' => 'http://jacen.jac.com.cn/_nuxt/img/18-5@2x.ee4833b.jpg'],
                ];
                foreach ($versions as $i => $v):
                ?>
                <div class="version-card group sunray-fade-up" style="animation-delay: <?php echo $i * 100; ?>ms;">
                    <div class="relative aspect-[4/5] rounded-2xl overflow-hidden bg-white/5">
                        <img src="<?php echo esc_url($v['img']); ?>" 
                             alt="<?php echo esc_attr($t[$v['key']]); ?>" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="text-4xl font-black text-white/30"><?php echo $v['num']; ?></span>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-lg md:text-xl font-bold text-white"><?php echo esc_html($t[$v['key']]); ?></h3>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 10. SPECIFICATIONS SECTION                    -->
    <!-- ============================================= -->
    <section id="specs" class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16 sunray-fade-up">
                <span class="inline-block text-sm font-bold tracking-widest text-jac-red uppercase mb-4">
                    <?php echo ($lang == 'en') ? 'SPECS' : 'მახასიათებლები'; ?>
                </span>
                <div class="w-12 h-1 bg-jac-red mx-auto mb-6"></div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-black mb-6">
                    <?php echo esc_html($t['spec_title']); ?>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    <?php echo esc_html($t['spec_desc']); ?>
                </p>
            </div>

            <!-- Specs Tabs -->
            <div class="flex flex-wrap justify-center gap-2 mb-12 sunray-fade-up">
                <?php 
                $spec_tabs = [
                    ['id' => 'spec_v1', 'label' => $t['spec_v1']],
                    ['id' => 'spec_v2', 'label' => $t['spec_v2']],
                    ['id' => 'spec_v3', 'label' => $t['spec_v3']],
                    ['id' => 'spec_v4', 'label' => $t['spec_v4']],
                    ['id' => 'spec_v5', 'label' => $t['spec_v5']],
                    ['id' => 'spec_v6', 'label' => $t['spec_v6']],
                    ['id' => 'spec_v7', 'label' => $t['spec_v7']],
                    ['id' => 'spec_v8', 'label' => $t['spec_v8']],
                ];
                foreach ($spec_tabs as $i => $tab):
                ?>
                <button class="spec-tab <?php echo $i === 0 ? 'active' : ''; ?>" data-target="spec-<?php echo $i; ?>">
                    <?php echo esc_html($tab['label']); ?>
                </button>
                <?php endforeach; ?>
            </div>

            <!-- Specs Content -->
            <div class="spec-content-wrapper sunray-fade-up delay-200">
                <div class="rounded-3xl overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100 p-8 md:p-12">
                    <div class="text-center">
                        <img src="http://jacen.jac.com.cn/_nuxt/img/params.37fb8cc.png" 
                             alt="Sunray Specifications" 
                             class="w-full max-w-2xl mx-auto h-auto">
                    </div>
                </div>

                <!-- Download PDF Button -->
                <div class="text-center mt-8">
                    <a href="<?php echo esc_url($pdf_link); ?>" target="_blank"
                       class="inline-flex items-center gap-3 bg-black text-white px-8 py-4 rounded-full font-bold hover:bg-jac-red transition-all duration-300 hover:scale-105 shadow-lg">
                        <i class="fa-regular fa-file-pdf text-xl"></i>
                        <?php echo esc_html($t['cta_btn']); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 11. FINAL CTA SECTION                         -->
    <!-- ============================================= -->
    <section class="py-20 md:py-28 bg-gradient-to-br from-jac-red via-red-700 to-red-900 text-white relative overflow-hidden">
        <!-- Decorative Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-white/20 blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 rounded-full bg-white/20 blur-3xl"></div>
        </div>

        <div class="relative max-w-5xl mx-auto px-6 lg:px-8 text-center sunray-fade-up">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-black mb-6 leading-tight">
                <?php echo esc_html($t['cta_title']); ?>
            </h2>
            <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto">
                <?php echo esc_html($t['cta_desc']); ?>
            </p>
            <a href="<?php echo esc_url($pdf_link); ?>" target="_blank"
               class="inline-flex items-center gap-3 bg-white text-jac-red px-10 py-5 rounded-full font-bold text-lg hover:bg-black hover:text-white transition-all duration-300 hover:scale-105 shadow-2xl">
                <i class="fa-regular fa-file-pdf text-xl"></i>
                <?php echo esc_html($t['cta_btn']); ?>
            </a>
            <p class="text-xs text-white/60 mt-10 max-w-2xl mx-auto">
                <?php echo esc_html($t['disclaimer']); ?>
            </p>
        </div>
    </section>

</main>

<!-- Sunray-სპეციფიკური JavaScript (იზოლირებული) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/models/sunray.js"></script>

<?php get_footer(); ?>
