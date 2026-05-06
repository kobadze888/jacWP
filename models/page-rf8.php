<?php

/**
 * Template Name: Model - RF8 / RF8 PHEV
 */
get_header();

$lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';

$t = [
    'hero_title'    => 'JAC RF8 / RF8 PHEV',
    'hero_sub'      => ($lang == 'en') ? 'All-round warrior MPV.' : 'უნივერსალური მებრძოლი MPV.',
    'hero_badge'    => ($lang == 'en') ? 'Premium MPV • Gasoline & PHEV' : 'პრემიუმ MPV • ბენზინი და PHEV',

    'nav_overview'  => ($lang == 'en') ? 'Overview' : 'მიმოხილვა',
    'nav_specs'     => ($lang == 'en') ? 'Specs' : 'მახასიათებლები',
    'nav_exterior'  => ($lang == 'en') ? 'Exterior' : 'ექსტერიერი',
    'nav_interior'  => ($lang == 'en') ? 'Interior' : 'ინტერიერი',
    'nav_comfort'   => ($lang == 'en') ? 'Comfort' : 'კომფორტი',
    'nav_power'     => ($lang == 'en') ? 'Power' : 'ძრავი',
    'nav_safety'    => ($lang == 'en') ? 'Safety' : 'უსაფრთხოება',
    'nav_brochure'  => ($lang == 'en') ? 'Brochure' : 'ბროშურა',

    'watch_video'   => ($lang == 'en') ? 'Watch video' : 'ვიდეოს ნახვა',

    'ov_title'      => ($lang == 'en') ? 'Designed to comfort you.' : 'შექმნილია თქვენი კომფორტისთვის.',
    'ov_desc'       => ($lang == 'en') ? 'JAC RF8 is a new generation high-end MPV, featuring gasoline and PHEV powertrain options. With class-leading size and inner space, it caters to diverse scenarios — each reflecting RF8\'s profound understanding of "the third space" in mobility.' : 'JAC RF8 — ახალი თაობის მაღალი კლასის MPV, ბენზინისა და PHEV ძრავის ვარიანტებით. კლასში წამყვანი ზომით და შიდა სივრცით, RF8 პასუხობს მრავალფეროვან საჭიროებებს — ყოველი სცენარი ასახავს "მესამე სივრცის" კონცეფციის ღრმა გაგებას მობილობაში.',
    'col_hint'      => ($lang == 'en') ? 'Select a color' : 'აირჩიეთ ფერი',
    'col_white'     => ($lang == 'en') ? 'White' : 'თეთრი',
    'col_blue'      => ($lang == 'en') ? 'Blue' : 'ლურჯი',
    'col_black'     => ($lang == 'en') ? 'Black' : 'შავი',
    'col_gray'      => ($lang == 'en') ? 'Gray' : 'ნაცრისფერი',
    'col_note'      => ($lang == 'en') ? 'Models and colors may vary by regions.' : 'მოდელები და ფერები შესაძლოა განსხვავდებოდეს რეგიონების მიხედვით.',

    'hl_lbl'        => ($lang == 'en') ? 'HIGHLIGHTS' : 'მთავარი მახასიათებლები',
    'hl_title'      => 'JAC RF8 / RF8 PHEV',
    'hl_full'       => ($lang == 'en') ? 'Full Specifications' : 'სრული მახასიათებლები',

    'hl_s1_l'       => ($lang == 'en') ? 'Gasoline Powertrain' : 'ბენზინის ძრავი',
    'hl_s1_v'       => '2.0 TGDI + 8AT',

    'hl_s2_l'       => ($lang == 'en') ? 'PHEV Vision' : 'PHEV ვერსია',
    'hl_s2_v'       => '1.5 TDGI + 3HDT',

    'hl_s3_l'       => ($lang == 'en') ? 'MSOC Fuel Consumption (PHEV)' : 'MSOC საწვავის ხარჯი (PHEV)',
    'hl_s3_v'       => '5.4 L/100km',

    'hl_s4_l'       => ($lang == 'en') ? 'CLTC Electric Range' : 'CLTC ელექტრო სვლა',
    'hl_s4_v'       => '150 km',

    'hl_s5_l'       => ($lang == 'en') ? 'CLTC Comprehensive Range' : 'CLTC სრული სვლა',
    'hl_s5_v'       => '1150 km',

    'hl_s6_l'       => ($lang == 'en') ? 'Trunk Capacity' : 'საბარგულის მოცულობა',
    'hl_s6_v'       => '700-2500 L',

    'ex_lbl'        => ($lang == 'en') ? 'EXTERIOR' : 'ექსტერიერი',
    'ex_title'      => ($lang == 'en') ? 'Style, meet elegance.' : 'სტილი ხვდება ელეგანტურობას.',

    'ex_c1_t'       => ($lang == 'en') ? 'Distinctive Design' : 'გამორჩეული დიზაინი',
    'ex_c1_d'       => ($lang == 'en') ? 'JAC RF8 offers two editions, each with its own unique front design. PHEV Flagship features a dynamic dot-matrix chrome grille, while Fuel Flagship adopts an elegant vertical waterfall grille.' : 'JAC RF8 შემოთავაზებულია ორ ვერსიაში, თითოეული უნიკალური წინა დიზაინით. PHEV Flagship გამოირჩევა დინამიური წერტილოვანი ქრომირებული ცხაურით, ხოლო Fuel Flagship — ელეგანტური ვერტიკალური ჩანჩქერისებური ცხაურით.',

    'ex_c2_t'       => ($lang == 'en') ? 'Lighting Aesthetics' : 'განათების ესთეტიკა',
    'ex_c2_d'       => ($lang == 'en') ? 'Full-length LED lights with enhanced illumination for nighttime driving. Smart interactive lighting creates dynamic front/rear animations for a ceremonial driving experience.' : 'სრული სიგრძის LED ფარები — გაუმჯობესებული ღამის განათებით. ჭკვიანი ინტერაქტიული განათება ქმნის დინამიურ წინა და უკანა ანიმაციებს — საზეიმო მგზავრობის გამოცდილება.',

    'ex_c3_t'       => ($lang == 'en') ? 'Golden Proportion Ratio' : 'ოქროს პროპორციის თანაფარდობა',
    'ex_c3_d'       => ($lang == 'en') ? 'Dimensions: 5215 × 1895 × 1830 mm. Wheelbase: 3100 mm. A balanced proportion that ensures both business and family comfort, delivering class-leading cabin space.' : 'ზომები: 5215 × 1895 × 1830 მმ. ბაზა: 3100 მმ. დაბალანსებული პროპორცია — უზრუნველყოფს ბიზნეს და ოჯახურ კომფორტს, აქვს კლასში წამყვანი სალონის სივრცე.',

    'in_lbl'        => ($lang == 'en') ? 'INTERIOR' : 'ინტერიერი',
    'in_title'      => ($lang == 'en') ? 'Furniture-inspired premium living space.' : 'ავეჯისგან შთაგონებული პრემიუმ საცხოვრებელი სივრცე.',
    'in_desc'       => ($lang == 'en') ? 'Cocoon-like cabin with a two-tone interior design and premium soft-touch surfaces. Ideal for both family and business travel. Available in Moonlight White, Chestnut Brown, and Elegant Black.' : 'ბუდისებური სალონი ორფერიანი ინტერიერის დიზაინით და პრემიუმ რბილი ზედაპირებით. იდეალური ოჯახური და ბიზნეს მგზავრობისთვის. ხელმისაწვდომია მთვარის სინათლის თეთრი, წაბლისფერი ყავისფერი და ელეგანტური შავი ფერებში.',

    'in_c1_t'       => ($lang == 'en') ? 'Dual 12.3" Smart Displays' : 'ორმაგი 12.3" ჭკვიანი ეკრანი',
    'in_c1_d'       => ($lang == 'en') ? 'Dual 12.3-inch high-definition smart displays with seamless wireless Android Auto and Apple CarPlay. Premium 12-speaker hi-fi audio system delivers theater-grade acoustics.' : 'ორი 12.3-დუიმიანი მაღალი გარჩევადობის ჭკვიანი ეკრანი — Android Auto-სა და Apple CarPlay-ის უსადენო ინტეგრაციით. 12-დინამიკიანი hi-fi აუდიო სისტემა — კინოთეატრის დონის აკუსტიკა.',

    'in_c2_t'       => ($lang == 'en') ? 'Dual Electric Panoramic Sunroof' : 'ორმაგი ელექტრული პანორამული ჭერი',
    'in_c2_d'       => ($lang == 'en') ? 'Transparent area of about 1m² for exceptional openness and natural light. Adjustable sunshades and one-touch integrated control for intuitive operation.' : 'გამჭვირვალე ფართობი დაახლოებით 1მ² — განსაკუთრებული გახსნილობა და ბუნებრივი შუქი. რეგულირებადი დამცავები და ერთი ღილაკის ინტეგრირებული მართვა.',

    'in_c3_t'       => ($lang == 'en') ? 'Crystal Gear Shifter' : 'კრისტალის გადაცემათა გადამრთველი',
    'in_c3_d'       => ($lang == 'en') ? 'Meticulously crafted from premium crystal glass with exquisite craftsmanship. Ergonomic shape enhances every drive while adding sophistication to the cabin.' : 'ზედმიწევნით შექმნილია პრემიუმ კრისტალის მინისგან დახვეწილი ხელოვნებით. ერგონომიული ფორმა აუმჯობესებს ყოველ მგზავრობას და ანიჭებს დახვეწილობას სალონს.',

    'in_c4_t'       => ($lang == 'en') ? 'Serene Cabin Experience' : 'მშვიდი სალონის გამოცდილება',
    'in_c4_d'       => ($lang == 'en') ? 'Hidden air vents with chrome trim. 64 ambient lights with adjustable warm/cool tones — create a cozy family atmosphere or solemn business setting.' : 'დამალული ჰაერის ვენტილატორები ქრომის გაფორმებით. 64 ფერის ატმოსფერული განათება — რეგულირებადი თბილი/ცივი ტონებით ოჯახური ან ბიზნეს განწყობისთვის.',

    'in_c5_t'       => ($lang == 'en') ? 'Advanced NVH Performance' : 'მოწინავე NVH წარმადობა',
    'in_c5_d'       => ($lang == 'en') ? 'Soundproof glass on front and middle rows — dual-pane laminated windows minimize wind and road noise. 33-point soundproofing delivers library-level quiet inside the cabin.' : 'წინა და შუა რიგების ხმაჩამხშობი მინა — ორმაგი ფენადი ფანჯრები ამცირებს ქარისა და გზის ხმაურს. 33-წერტილოვანი ხმაჩამხშობი — ბიბლიოთეკის დონის სიჩუმე სალონში.',

    'cm_lbl'        => ($lang == 'en') ? 'COMFORT' : 'კომფორტი',
    'cm_title'      => ($lang == 'en') ? 'One space, endless possibilities.' : 'ერთი სივრცე, უსასრულო შესაძლებლობები.',
    'cm_desc'       => ($lang == 'en') ? 'Embark on a new journey into the revolutionary space of RF8, where you will travel in maximum comfort, enjoy face-to-face conversations, and spend life-enriching moments.' : 'გაუყევით ახალ მოგზაურობას RF8-ის რევოლუციურ სივრცეში — მაქსიმალურ კომფორტში, ისიამოვნეთ პირისპირ საუბრით, გაატარეთ ცხოვრების გამადიდებელი მომენტები.',

    'cm_c1_t'       => ($lang == 'en') ? 'Luxury & High-Tech Seating' : 'ფუფუნებული და მაღალტექნოლოგიური სავარძლები',
    'cm_c1_d'       => ($lang == 'en') ? 'Front Row: Heated and ventilated seats with driver memory function. Second Row: Heated, ventilated, and massage seats. Ergonomic wide-shoulder design fits the spine, reducing fatigue on long journeys.' : 'წინა რიგი: გათბობადი და ვენტილირებადი სავარძლები მძღოლის მეხსიერებით. მეორე რიგი: გათბობადი, ვენტილირებადი და მასაჟის სავარძლები. ერგონომიული ფართო-მხრიანი დიზაინი ეთანხმება ხერხემალს, ამცირებს დაღლილობას.',

    'cm_c2_t'       => ($lang == 'en') ? 'Super-Large Extendable Trunk' : 'ულტრა-დიდი გასაფართოებელი საბარგული',
    'cm_c2_d'       => ($lang == 'en') ? 'Standard 700L space — fits four 24" and four 20" suitcases even with all three rows occupied. Max expandable capacity reaches 2,500L for bicycles, furniture, and oversized items.' : 'სტანდარტული სივრცე 700L — ეტევა ოთხი 24" და ოთხი 20" ჩემოდანი სამი რიგის სრული დატვირთვით. მაქსიმალური მოცულობა 2500L — ველოსიპედებისთვის, ავეჯისთვის და დიდი ნივთებისთვის.',

    'cm_c3_t'       => ($lang == 'en') ? '5-in-1 Outing Scene' : '5-ერთში გასასვლელი სცენარი',
    'cm_c3_d'       => ($lang == 'en') ? 'Adjustable long-slide rails with configurable 2nd and 3rd rows offer six versatile layout options. Third row slides up to 240mm; cargo area extends by up to 670mm.' : 'რეგულირებადი გრძელი ცურვის რელსები კონფიგურირებული მე-2 და მე-3 რიგებით — ექვსი მრავალფუნქციური განლაგების ვარიანტი. მე-3 რიგი ცურავს 240მმ-მდე; სატვირთო ზონა გრძელდება 670მმ-მდე.',

    'pw_lbl'        => ($lang == 'en') ? 'ENGINE & POWER' : 'ძრავი და სიმძლავრე',
    'pw_title'      => ($lang == 'en') ? 'A travel partner for every scenario.' : 'სამოგზაურო პარტნიორი ყოველი სცენარისთვის.',
    'pw_desc'       => ($lang == 'en') ? 'The hybrid power system seamlessly integrates a high-efficiency DHE, 3DHT architecture, and a large-capacity battery — enabling a powerful engine-and-dual-motor drive system with four power output modes.' : 'ჰიბრიდული სიმძლავრის სისტემა აერთიანებს მაღალეფექტურ DHE-ს, 3DHT არქიტექტურასა და დიდი ტევადობის ელემენტს — უზრუნველყოფს მძლავრ ძრავ-ორმაგი მოტორის სისტემას ოთხი სიმძლავრის რეჟიმით.',

    'pw_s1_n'       => '7.5',
    'pw_s1_u'       => 's',
    'pw_s1_l'       => ($lang == 'en') ? '0-100 km/h Acceleration' : '0-100 კმ/სთ აჩქარება',

    'pw_s2_n'       => '5.85',
    'pw_s2_u'       => 'L',
    'pw_s2_l'       => ($lang == 'en') ? 'Urban Fuel Consumption' : 'ქალაქის საწვავის ხარჯი',

    'pw_s3_n'       => '7.81',
    'pw_s3_u'       => 'L',
    'pw_s3_l'       => ($lang == 'en') ? 'Highway Fuel Consumption' : 'ავტობანის საწვავის ხარჯი',

    'pw_s4_n'       => '4',
    'pw_s4_u'       => '',
    'pw_s4_l'       => ($lang == 'en') ? 'Power Output Modes' : 'სიმძლავრის რეჟიმი',

    'pm_pe_t'       => ($lang == 'en') ? 'Pure Electric' : 'სრული ელექტრო',
    'pm_pe_d'       => ($lang == 'en') ? 'Silent zero-emission city driving on electric power alone.' : 'ჩუმი ნულოვანი გამონაბოლქვის ქალაქის მგზავრობა მხოლოდ ელექტრო ენერგიაზე.',

    'pm_re_t'       => ($lang == 'en') ? 'Range Extension' : 'სვლის გაზრდა',
    'pm_re_d'       => ($lang == 'en') ? 'Engine generates electricity for extended range without compromise.' : 'ძრავი წარმოქმნის ელექტროენერგიას სვლის გაზრდისთვის — კომპრომისის გარეშე.',

    'pm_in_t'       => ($lang == 'en') ? 'Intelligent' : 'ინტელექტუალური',
    'pm_in_d'       => ($lang == 'en') ? 'Smart switching between power sources for optimal efficiency.' : 'ჭკვიანი გადართვა ენერგიის წყაროებს შორის ოპტიმალური ეფექტურობისთვის.',

    'pm_pf_t'       => ($lang == 'en') ? 'Performance' : 'წარმადობა',
    'pm_pf_d'       => ($lang == 'en') ? 'Engine and dual-motor work together for maximum power.' : 'ძრავი და ორმაგი მოტორი ერთად — მაქსიმალური სიმძლავრისთვის.',

    'sf_lbl'        => ($lang == 'en') ? 'SAFETY' : 'უსაფრთხოება',
    'sf_title'      => ($lang == 'en') ? 'Thoughtful care, smart travel.' : 'გააზრებული ზრუნვა, ჭკვიანი მგზავრობა.',
    'sf_desc'       => ($lang == 'en') ? 'Equipped with an 8MP front camera, dual rear millimeter-wave radars, and integrated DMS camera with controller — RF8 provides comprehensive 360° safety coverage with 20 L2 ADAS features.' : 'აღჭურვილია 8MP წინა კამერით, ორმაგი უკანა მილიმეტრული რადარით და ინტეგრირებული DMS კამერით კონტროლერით — RF8 უზრუნველყოფს 360° უსაფრთხოების სრულ დაფარვას 20 L2 ADAS ფუნქციით.',

    'sf_c1_t'       => ($lang == 'en') ? 'High-Standard Passive Safety' : 'მაღალი სტანდარტის პასიური უსაფრთხოება',
    'sf_c1_d'       => ($lang == 'en') ? 'Body torsional rigidity: 32,067 Nm/°. Cage-type body with double-sided hot-formed door rings. 71% high-strength steel, 1500 MPa ultra-high-strength one-piece door ring.' : 'კორპუსის გრეხის სიმტკიცე: 32,067 Nm/°. გალიის ტიპის კორპუსი ორმხრივი ცხელად ფორმირებული კარების რგოლებით. 71% მაღალი სიმტკიცის ფოლადი, 1500 MPa ულტრა-მაღალი სიმტკიცის ერთიანი რგოლი.',

    'sf_c2_t'       => ($lang == 'en') ? 'Active Safety Collaborative Control' : 'აქტიური უსაფრთხოების კოლაბორაციული კონტროლი',
    'sf_c2_d'       => ($lang == 'en') ? '9 intelligent protections including front/rear AEB, collision warning, automatic braking, blind-spot monitoring, and door-opening alert — comprehensive safety coverage.' : '9 ინტელექტუალური დაცვა — წინა/უკანა AEB, შეჯახების გაფრთხილება, ავტომატური მუხრუჭი, ბრმა წერტილის მონიტორინგი და კარის გახსნის გაფრთხილება — ყოვლისმომცველი უსაფრთხოების დაფარვა.',

    'sf_c3_t'       => ($lang == 'en') ? 'Certified Battery Safety' : 'სერტიფიცირებული ელემენტის უსაფრთხოება',
    'sf_c3_d'       => ($lang == 'en') ? 'First new energy MPV to pass NESTA six-dimensional electrical safety certification. Zero-thermal-diffusion honeycomb battery technology — never catches fire or self-ignites.' : 'პირველი ახალი ენერგიის MPV, რომელმაც გაიარა NESTA-ს ექვს-განზომილებიანი ელექტრო უსაფრთხოების სერტიფიცირება. ნულოვანი თერმული დიფუზიის თაფლის რგოლის ელემენტის ტექნოლოგია.',

    'sf_c4_t'       => ($lang == 'en') ? 'Extreme Testing' : 'ექსტრემალური ტესტირება',
    'sf_c4_d'       => ($lang == 'en') ? 'Over 2 million km of testing across diverse terrains. Validated at 4,700m altitude, 47°C heat, and -40.7°C extreme cold. Tested in 10+ countries for global standards.' : '2 მილიონ კმ-ზე მეტი ტესტირება მრავალფეროვან რელიეფზე. ვალიდირებულია 4,700მ სიმაღლეზე, 47°C სიცხეში და -40.7°C ექსტრემალურ ცივში. ტესტირებულია 10+ ქვეყანაში.',
];

$pdf_link = "https://jacen.jac.com.cn/pdf/RF8_Brochure.pdf";
$video_url = "https://jacen.jac.com.cn/_nuxt/videos/rf8vsm.83dff98.mp4";
?>

 <script src="https://cdn.tailwindcss.com"></script>
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
                    'jac-blue': '#0e4286',
                    'jac-gold': '#c9a961',
                },
            },
        },
    };
</script>

<main class="rf8-page font-sans bg-white text-gray-900">

    <section id="rf8-hero" class="relative h-[85vh] min-h-[500px] flex items-end overflow-hidden">
        <picture class="absolute inset-0 z-0">
            <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/rf8phev-sjbanner.8a5caf7.png">
            <img src="https://jacen.jac.com.cn/_nuxt/img/rf8-banner.4eb4460.png" 
                 alt="JAC RF8 PHEV" 
                 class="w-full h-full object-cover">
        </picture>

        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-black/30 z-10"></div>

        <div class="relative z-20 w-full px-5 md:px-12 lg:px-20 pb-10 md:pb-24">
            <div class="max-w-7xl mx-auto rf8-fade-up">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-3 py-1.5 rounded-full mb-4 md:mb-6">
                    <span class="w-1.5 h-1.5 bg-jac-blue rounded-full animate-pulse"></span>
                    <span class="text-[10px] md:text-xs font-bold text-white uppercase tracking-widest"><?php echo esc_html($t['hero_badge']); ?></span>
                </div>

                <h1 class="text-3xl md:text-6xl lg:text-8xl font-black text-white tracking-tight leading-tight md:leading-[1] mb-3 md:mb-5 pb-1">
                    <?php echo esc_html($t['hero_title']); ?>
                </h1>

                <p class="text-lg md:text-2xl lg:text-4xl font-light text-white/95 max-w-3xl leading-snug">
                    <?php echo esc_html($t['hero_sub']); ?>
                </p>
            </div>
        </div>
    </section>

    <nav id="rf8-subnav" class="sticky top-[75px] bg-black text-white z-[990] border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-3 md:px-4">
            <div class="flex items-center justify-between h-14 md:h-16">
                <div class="hidden lg:block font-black text-lg tracking-wider whitespace-nowrap">
                    JAC RF8
                </div>

                <ul class="flex items-center gap-4 md:gap-7 overflow-x-auto scrollbar-hide whitespace-nowrap flex-1 lg:flex-none lg:justify-end">
                    <li><a href="#overview" class="subnav-link active"><?php echo esc_html($t['nav_overview']); ?></a></li>
                    <li><a href="#specs" class="subnav-link"><?php echo esc_html($t['nav_specs']); ?></a></li>
                    <li><a href="#exterior" class="subnav-link"><?php echo esc_html($t['nav_exterior']); ?></a></li>
                    <li><a href="#interior" class="subnav-link"><?php echo esc_html($t['nav_interior']); ?></a></li>
                    <li><a href="#comfort" class="subnav-link"><?php echo esc_html($t['nav_comfort']); ?></a></li>
                    <li><a href="#power" class="subnav-link"><?php echo esc_html($t['nav_power']); ?></a></li>
                    <li><a href="#safety" class="subnav-link"><?php echo esc_html($t['nav_safety']); ?></a></li>
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
            <div class="text-center mb-10 md:mb-14 rf8-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['nav_overview']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-6xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['ov_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['ov_desc']); ?>
                </p>
            </div>

            <div class="relative rf8-fade-up delay-200">
                <div class="py-4 md:py-8">
                    <img id="rf8-main-color-img"
                         src="https://jacen.jac.com.cn/_nuxt/img/color4.2725c3c.png" 
                         alt="JAC RF8 Gray"
                         class="w-full max-w-4xl mx-auto h-auto object-contain transition-opacity duration-500">
                </div>

                <div class="mt-4 md:mt-6 text-center">
                    <p class="text-[10px] md:text-xs font-bold tracking-widest text-gray-500 uppercase mb-4"><?php echo esc_html($t['col_hint']); ?></p>
                    <div class="flex justify-center flex-wrap gap-3 md:gap-4 mb-4">
                        <button class="color-dot"
                                data-name="<?php echo esc_attr($t['col_white']); ?>"
                                data-img="https://jacen.jac.com.cn/_nuxt/img/color1.4bf09ba.png"
                                style="background: linear-gradient(145deg, #f8f8f8, #e0e0e0);">
                            <i class="fa-solid fa-check text-black text-xs opacity-0 check-icon"></i>
                        </button>
                        <button class="color-dot"
                                data-name="<?php echo esc_attr($t['col_blue']); ?>"
                                data-img="https://jacen.jac.com.cn/_nuxt/img/color2.f415e2b.png"
                                style="background: linear-gradient(145deg, #1e3a8a, #0c1e4a);">
                            <i class="fa-solid fa-check text-white text-xs opacity-0 check-icon"></i>
                        </button>
                        <button class="color-dot"
                                data-name="<?php echo esc_attr($t['col_black']); ?>"
                                data-img="https://jacen.jac.com.cn/_nuxt/img/color3.df13ed5.png"
                                style="background: linear-gradient(145deg, #2a2a2a, #000000);">
                            <i class="fa-solid fa-check text-white text-xs opacity-0 check-icon"></i>
                        </button>
                        <button class="color-dot active"
                                data-name="<?php echo esc_attr($t['col_gray']); ?>"
                                data-img="https://jacen.jac.com.cn/_nuxt/img/color4.2725c3c.png"
                                style="background: linear-gradient(145deg, #8a8a8a, #5a5a5a);">
                            <i class="fa-solid fa-check text-white text-xs opacity-0 check-icon"></i>
                        </button>
                    </div>
                    <p class="text-sm md:text-base font-bold text-black mb-2" id="color-name"><?php echo esc_html($t['col_gray']); ?></p>
                    <p class="text-[10px] md:text-xs text-gray-500"><?php echo esc_html($t['col_note']); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="specs" class="py-14 md:py-24 bg-black text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">

            <div class="text-center max-w-4xl mx-auto mb-10 md:mb-16 rf8-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['hl_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['hl_title']); ?>
                </h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center">

                <div class="order-2 lg:order-1 rf8-fade-up">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-1">
                        <?php 
                        $specs = [
                            ['l' => $t['hl_s1_l'], 'v' => $t['hl_s1_v']],
                            ['l' => $t['hl_s2_l'], 'v' => $t['hl_s2_v']],
                            ['l' => $t['hl_s3_l'], 'v' => $t['hl_s3_v']],
                            ['l' => $t['hl_s4_l'], 'v' => $t['hl_s4_v']],
                            ['l' => $t['hl_s5_l'], 'v' => $t['hl_s5_v']],
                            ['l' => $t['hl_s6_l'], 'v' => $t['hl_s6_v']],
                        ];
                        foreach ($specs as $i => $spec):
                        ?>
                        <div class="spec-box rf8-fade-up" style="animation-delay: <?php echo $i * 60; ?>ms;">
                            <p class="text-[10px] md:text-xs font-bold uppercase tracking-widest text-white/50 mb-1.5">
                                <?php echo esc_html($spec['l']); ?>
                            </p>
                            <p class="text-base md:text-lg lg:text-xl font-black text-white leading-snug">
                                <?php echo esc_html($spec['v']); ?>
                            </p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="order-1 lg:order-2 rf8-fade-up delay-200">
                    <div class="rf8-video-inline group cursor-pointer" id="rf8-video-trigger">
                        <video id="rf8-inline-video" autoplay muted loop playsinline preload="auto">
                            <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                        </video>

                        <div class="rf8-video-overlay">
                            <div class="rf8-video-play-btn">
                                <i class="fa-solid fa-expand"></i>
                            </div>
                            <span class="rf8-video-label">
                                <i class="fa-solid fa-circle-play"></i>
                                <?php echo esc_html($t['watch_video']); ?>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="exterior" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 rf8-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['ex_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['ex_title']); ?>
                </h2>
            </div>

            <div class="space-y-12 md:space-y-20">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center rf8-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden rf8-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/ca1.6fcc75c.png" 
                             alt="RF8 Distinctive Design" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 bg-jac-red/10 px-3 py-1 rounded-full mb-3">
                            <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">2 Editions</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['ex_c1_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ex_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center rf8-fade-up">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden rf8-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/ec1.ffa3210.jpg" 
                             alt="Lighting Aesthetics" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="lg:order-1">
                        <div class="inline-flex items-center gap-2 bg-jac-red/10 px-3 py-1 rounded-full mb-3">
                            <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">LED</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['ex_c2_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ex_c2_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center rf8-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden rf8-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/ec2.e21698b.jpg" 
                             alt="Golden Proportion" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 bg-jac-gold/10 border border-jac-gold/30 px-3 py-1 rounded-full mb-3">
                            <span class="text-[10px] md:text-xs font-bold text-jac-gold uppercase tracking-widest">5215 × 1895 × 1830</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['ex_c3_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ex_c3_d']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="interior" class="py-14 md:py-24 bg-gradient-to-br from-gray-900 to-black text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">
            <div class="text-center mb-10 md:mb-14 rf8-fade-up">
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

            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 rf8-fade-up rf8-image-hover">
                <img src="https://jacen.jac.com.cn/_nuxt/img/ca3.3651fe7.png" 
                     alt="JAC RF8 Interior" 
                     class="w-full h-auto object-cover">
            </div>

            <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                <div class="feature-card-dark rf8-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden rf8-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/inc1.8af22fe.jpg" 
                             alt="Smart Displays" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <span class="text-[10px] md:text-xs font-bold text-jac-gold uppercase tracking-widest">2 × 12.3"</span>
                            <i class="fa-brands fa-apple text-white/60 text-xs"></i>
                            <i class="fa-brands fa-android text-white/60 text-xs"></i>
                        </div>
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['in_c1_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-dark rf8-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden rf8-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/inc3.6f7bad4.jpg" 
                             alt="Panoramic Sunroof" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <span class="text-[10px] md:text-xs font-bold text-jac-gold uppercase tracking-widest">~ 1m²</span>
                        </div>
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['in_c2_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_c2_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-dark rf8-fade-up delay-200">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden rf8-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/inc4.216cf0f.jpg" 
                             alt="Crystal Gear Shifter" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <i class="fa-solid fa-gem text-jac-gold text-xs"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-gold uppercase tracking-widest">Crystal Glass</span>
                        </div>
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['in_c3_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_c3_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-dark rf8-fade-up delay-300">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden rf8-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/inc5.c6b512e.jpg" 
                             alt="NVH" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <i class="fa-solid fa-volume-low text-jac-gold text-xs"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-gold uppercase tracking-widest">33-Point NVH</span>
                        </div>
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['in_c5_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_c5_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-dark rf8-fade-up md:col-span-2">
                    <div class="md:flex gap-0">
                        <div class="md:w-1/2 overflow-hidden rf8-image-hover rounded-t-2xl md:rounded-t-none md:rounded-l-3xl">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/cm1.6c170a7.png" 
                                 alt="Ambient Lighting" 
                                 class="w-full h-full object-cover aspect-[16/10] md:aspect-auto">
                        </div>
                        <div class="md:w-1/2 p-6 md:p-8 flex flex-col justify-center">
                            <div class="inline-flex items-center gap-2 mb-3">
                                <span class="text-[10px] md:text-xs font-bold text-jac-gold uppercase tracking-widest">64 Colors</span>
                            </div>
                            <h3 class="text-lg md:text-xl lg:text-2xl font-bold mb-2 md:mb-3 leading-snug">
                                <?php echo esc_html($t['in_c4_t']); ?>
                            </h3>
                            <p class="text-xs md:text-sm text-white/70 leading-relaxed">
                                <?php echo esc_html($t['in_c4_d']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="comfort" class="py-14 md:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 rf8-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['cm_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['cm_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['cm_desc']); ?>
                </p>
            </div>

            <div class="space-y-12 md:space-y-20">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center rf8-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden rf8-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/cm1.6c170a7.png" 
                             alt="Luxury Seating" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 bg-jac-red/10 px-3 py-1 rounded-full mb-3">
                            <i class="fa-solid fa-couch text-jac-red text-xs"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">Heated • Ventilated • Massage</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['cm_c1_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['cm_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center rf8-fade-up">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden rf8-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/cm2.6156345.png" 
                             alt="Trunk Capacity" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="lg:order-1">
                        <div class="flex items-baseline gap-2 mb-3">
                            <span class="text-3xl md:text-5xl font-black text-jac-red">700-2500</span>
                            <span class="text-sm md:text-base text-gray-500 uppercase tracking-widest font-semibold">Liters</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['cm_c2_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['cm_c2_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="rf8-fade-up">
                    <div class="text-center mb-8 md:mb-10">
                        <div class="inline-flex items-center gap-2 bg-white border border-gray-200 px-3 py-1 rounded-full mb-3">
                            <span class="text-[10px] md:text-xs font-bold text-gray-700 uppercase tracking-widest">6 Layouts • 240mm Slide • 670mm Cargo</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['cm_c3_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 max-w-3xl mx-auto leading-relaxed">
                            <?php echo esc_html($t['cm_c3_d']); ?>
                        </p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-5 gap-3 md:gap-4">
                        <div class="rounded-xl md:rounded-2xl overflow-hidden rf8-image-hover">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/s1.3459243.png" 
                                 alt="Scene 1" 
                                 class="w-full h-auto object-cover aspect-[4/3]">
                        </div>
                        <div class="rounded-xl md:rounded-2xl overflow-hidden rf8-image-hover">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/s2.cddc588.png" 
                                 alt="Scene 2" 
                                 class="w-full h-auto object-cover aspect-[4/3]">
                        </div>
                        <div class="rounded-xl md:rounded-2xl overflow-hidden rf8-image-hover">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/s3.48ca250.png" 
                                 alt="Scene 3" 
                                 class="w-full h-auto object-cover aspect-[4/3]">
                        </div>
                        <div class="rounded-xl md:rounded-2xl overflow-hidden rf8-image-hover">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/s4.491a7d7.png" 
                                 alt="Scene 4" 
                                 class="w-full h-auto object-cover aspect-[4/3]">
                        </div>
                        <div class="rounded-xl md:rounded-2xl overflow-hidden rf8-image-hover col-span-2 md:col-span-1">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/s5.6fc4aa6.png" 
                                 alt="Scene 5" 
                                 class="w-full h-auto object-cover aspect-[4/3]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="power" class="py-14 md:py-24 bg-gradient-to-br from-blue-50 via-white to-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 rf8-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['pw_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['pw_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['pw_desc']); ?>
                </p>
            </div>

            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 rf8-fade-up rf8-image-hover">
                <img src="https://jacen.jac.com.cn/_nuxt/img/p1.96fed13.png" 
                     alt="JAC RF8 Power" 
                     class="w-full h-auto object-cover">
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-10 md:mb-14">
                <?php 
                $perf_stats = [
                    ['n' => $t['pw_s1_n'], 'u' => $t['pw_s1_u'], 'l' => $t['pw_s1_l']],
                    ['n' => $t['pw_s2_n'], 'u' => $t['pw_s2_u'], 'l' => $t['pw_s2_l']],
                    ['n' => $t['pw_s3_n'], 'u' => $t['pw_s3_u'], 'l' => $t['pw_s3_l']],
                    ['n' => $t['pw_s4_n'], 'u' => $t['pw_s4_u'], 'l' => $t['pw_s4_l']],
                ];
                foreach ($perf_stats as $i => $stat):
                ?>
                <div class="power-stat-card rf8-fade-up" style="transition-delay: <?php echo $i * 80; ?>ms;">
                    <div class="flex items-baseline gap-1 mb-3 md:mb-4">
                        <span class="text-3xl md:text-5xl font-black text-black leading-none"><?php echo esc_html($stat['n']); ?></span>
                        <?php if ($stat['u']): ?>
                        <span class="text-sm md:text-lg font-bold text-jac-blue"><?php echo esc_html($stat['u']); ?></span>
                        <?php endif; ?>
                    </div>
                    <p class="text-xs md:text-sm text-gray-600 uppercase tracking-wider font-semibold leading-snug">
                        <?php echo esc_html($stat['l']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mb-8 md:mb-10 rf8-fade-up">
                <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                    <?php echo ($lang == 'en') ? 'Four Drive Modes' : 'ოთხი მართვის რეჟიმი'; ?>
                </h3>
                <p class="text-sm md:text-base text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    <?php echo ($lang == 'en') ? 'Effortless switching between four power output modes for optimal energy efficiency, power response, and adaptability across diverse driving scenarios.' : 'მარტივი გადართვა ოთხ სიმძლავრის რეჟიმს შორის — ოპტიმალური ენერგეფექტურობა, სიმძლავრის რეაქცია და ადაპტაცია მრავალფეროვან მძღოლობის სცენარებში.'; ?>
                </p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 md:gap-5">
                <div class="power-mode-card rf8-fade-up">
                    <div class="power-mode-icon">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <h4 class="power-mode-title"><?php echo esc_html($t['pm_pe_t']); ?></h4>
                    <p class="power-mode-desc"><?php echo esc_html($t['pm_pe_d']); ?></p>
                </div>

                <div class="power-mode-card rf8-fade-up delay-100">
                    <div class="power-mode-icon">
                        <i class="fa-solid fa-arrows-left-right-to-line"></i>
                    </div>
                    <h4 class="power-mode-title"><?php echo esc_html($t['pm_re_t']); ?></h4>
                    <p class="power-mode-desc"><?php echo esc_html($t['pm_re_d']); ?></p>
                </div>

                <div class="power-mode-card rf8-fade-up delay-200">
                    <div class="power-mode-icon">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <h4 class="power-mode-title"><?php echo esc_html($t['pm_in_t']); ?></h4>
                    <p class="power-mode-desc"><?php echo esc_html($t['pm_in_d']); ?></p>
                </div>

                <div class="power-mode-card rf8-fade-up delay-300">
                    <div class="power-mode-icon">
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>
                    <h4 class="power-mode-title"><?php echo esc_html($t['pm_pf_t']); ?></h4>
                    <p class="power-mode-desc"><?php echo esc_html($t['pm_pf_d']); ?></p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 md:gap-6 mt-10 md:mt-14 rf8-fade-up">
                <div class="rounded-2xl md:rounded-3xl overflow-hidden rf8-image-hover">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/elc_car.222d672.png" 
                         alt="Electric Architecture" 
                         class="w-full h-auto object-cover">
                </div>
                <div class="rounded-2xl md:rounded-3xl overflow-hidden rf8-image-hover">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/elc_car2.aa8cece.png" 
                         alt="Hybrid Detail" 
                         class="w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>

    <section id="safety" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 rf8-fade-up">
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

            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 rf8-fade-up rf8-image-hover">
                <img src="https://jacen.jac.com.cn/_nuxt/img/safe_end.e97e933.png" 
                     alt="JAC RF8 Safety" 
                     class="w-full h-auto object-cover">
            </div>

            <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                <div class="feature-card-light rf8-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden rf8-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/RF8_05_03.b012a3a.jpg" 
                             alt="Passive Safety" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <i class="fa-solid fa-shield-halved text-jac-red"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">71% HSS • 1500 MPa</span>
                        </div>
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['sf_c1_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['sf_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light rf8-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden rf8-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/RF8_05_05.f442b21.jpg" 
                             alt="Active Safety" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <i class="fa-solid fa-eye text-jac-blue"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-blue uppercase tracking-widest">9 Active • 20 ADAS L2</span>
                        </div>
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['sf_c2_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['sf_c2_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light rf8-fade-up delay-200">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden rf8-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/RF8_05_07.35fd5ac.jpg" 
                             alt="Battery Safety" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <i class="fa-solid fa-fire-extinguisher text-jac-red"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">NESTA Certified</span>
                        </div>
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['sf_c3_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['sf_c3_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light rf8-fade-up delay-300">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden rf8-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/RF8_05_09.bf88c26.jpg" 
                             alt="Extreme Testing" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <i class="fa-solid fa-mountain-sun text-gray-700"></i>
                            <span class="text-[10px] md:text-xs font-bold text-gray-700 uppercase tracking-widest">2M+ km • 4,700m • 47°C / -40°C</span>
                        </div>
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['sf_c4_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['sf_c4_d']); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10 md:mt-14">
                <a href="<?php echo esc_url($pdf_link); ?>" target="_blank"
                   class="group inline-flex items-center gap-2 md:gap-3 bg-black text-white px-6 md:px-8 py-3 md:py-4 rounded-full font-bold text-sm md:text-base hover:bg-jac-red transition-all duration-500 hover:scale-[1.02] shadow-lg">
                    <i class="fa-regular fa-file-pdf text-lg md:text-xl"></i>
                    <?php echo esc_html($t['nav_brochure']); ?>
                </a>
            </div>
        </div>
    </section>

    <div id="rf8-video-modal" class="video-modal">
        <div class="video-modal-backdrop"></div>
        <button class="video-modal-close" id="rf8-video-close" aria-label="Close video">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="video-modal-content">
            <div class="video-modal-wrapper">
                <video id="rf8-modal-video" controls playsinline preload="metadata">
                    <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                </video>
            </div>
        </div>
    </div>

</main>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/models/rf8.js"></script>

<?php get_footer(); ?>
