<?php
/**
 * Template Name: Model - JS6 PHEV
 */
get_header();

$lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';

$t = [
    // HERO
    'hero_title'    => 'JAC JS6 PHEV',
    'hero_sub'      => ($lang == 'en') ? 'Green miles, distinct delights.' : 'მწვანე კილომეტრები, განსაკუთრებული შთაბეჭდილებები.',
    'hero_badge'    => ($lang == 'en') ? 'Plug-in Hybrid SUV' : 'Plug-in ჰიბრიდი SUV',

    // NAV
    'nav_overview'  => ($lang == 'en') ? 'Overview'   : 'მიმოხილვა',
    'nav_specs'     => ($lang == 'en') ? 'Specs'      : 'მახასიათებლები',
    'nav_gallery'   => ($lang == 'en') ? 'Gallery'    : 'გალერეა',
    'nav_exterior'  => ($lang == 'en') ? 'Exterior'   : 'ექსტერიერი',
    'nav_interior'  => ($lang == 'en') ? 'Interior'   : 'ინტერიერი',
    'nav_powertrain'=> ($lang == 'en') ? 'Powertrain' : 'სიმძლავრე',
    'nav_safety'    => ($lang == 'en') ? 'Safety'     : 'უსაფრთხოება',
    'nav_adas'      => ($lang == 'en') ? 'ADAS'       : 'ADAS',
    'nav_brochure'  => ($lang == 'en') ? 'Brochure'   : 'ბროშურა',

    // OVERVIEW
    'ov_title'  => ($lang == 'en') ? 'Maximize your miles.' : 'მაქსიმუმი ყოველ კილომეტრში.',
    'ov_desc'   => ($lang == 'en')
        ? 'The JAC JS6 PHEV begins a new era of driving — combining bold style, intelligent performance and environmental responsibility. Designed for short city journeys and long road trips alike, it delivers up to 1,150 km of combined range with just 0.9 L/100 km consumption.'
        : 'JAC JS6 PHEV ხსნის ახალ მართვის ეპოქას — აერთიანებს თამამ სტილს, ინტელექტუალურ წარმადობას და გარემოსდაცვით პასუხისმგებლობას. შექმნილია როგორც მოკლე ქალაქური მგზავრობებისთვის, ისე გრძელი მოგზაურობებისთვის — 1,150 კმ-მდე ჯამური სვლის მარაგით და მხოლოდ 0.9 ლ/100 კმ მოხმარებით.',
    'col_hint'  => ($lang == 'en') ? 'Select a color' : 'აირჩიეთ ფერი',
    'col_white' => ($lang == 'en') ? 'Pearl White'    : 'მარგალიტისფერი თეთრი',
    'col_note'  => ($lang == 'en') ? 'Models and colors may vary by regions.' : 'მოდელები და ფერები შესაძლოა განსხვავდებოდეს რეგიონების მიხედვით.',

    // HIGHLIGHTS
    'hl_lbl'    => ($lang == 'en') ? 'HIGHLIGHTS' : 'მთავარი მახასიათებლები',
    'hl_title'  => 'JAC JS6 PHEV',
    'hl_full'   => ($lang == 'en') ? 'Full Specifications' : 'სრული მახასიათებლები',
    'hl_s1_l'   => ($lang == 'en') ? 'Total Range'           : 'ჯამური სვლის მარაგი',
    'hl_s1_v'   => '1,150 km',
    'hl_s2_l'   => ($lang == 'en') ? 'Pure EV Range'         : 'სუფთა ელექტრო სვლა',
    'hl_s2_v'   => '120 km',
    'hl_s3_l'   => ($lang == 'en') ? 'WLTP Consumption'      : 'WLTP მოხმარება',
    'hl_s3_v'   => '0.9 L/100km',
    'hl_s4_l'   => ($lang == 'en') ? 'Electric Motor Power'  : 'ელექტრო ძრავის სიმძლავრე',
    'hl_s4_v'   => '150 kW',
    'hl_s5_l'   => ($lang == 'en') ? 'Electric Motor Torque' : 'ელექტრო ბრუნვის მომენტი',
    'hl_s5_v'   => '300 N·m',
    'hl_s6_l'   => ($lang == 'en') ? '0–100 km/h'            : '0–100 კმ/სთ',
    'hl_s6_v'   => '7.3 s',

    // GALLERY
    'gal_title'    => ($lang == 'en') ? 'Style meets science.' : 'სტილი ხვდება მეცნიერებას.',
    'gal_exterior' => ($lang == 'en') ? 'Exterior' : 'ექსტერიერი',
    'gal_interior' => ($lang == 'en') ? 'Interior' : 'ინტერიერი',

    // EXTERIOR
    'ex_lbl'   => ($lang == 'en') ? 'EXTERIOR' : 'ექსტერიერი',
    'ex_title' => ($lang == 'en') ? 'Starry Sky Aesthetics.' : 'ვარსკვლავური ცის ესთეტიკა.',
    'ex_sub'   => ($lang == 'en') ? 'Bold lines. Cosmic inspiration.' : 'თამამი ხაზები. კოსმოსური შთაგონება.',
    'ex_desc'  => ($lang == 'en')
        ? 'JS6 PHEV is shaped by youthful spirit and starry-sky-inspired design language — a borderless floating grille, matrix LED headlights with planetary-trajectory DRL, a sculpted pulse waistline, and flying-blade alloy wheels create a presence that is at once dynamic, premium and unmistakably future-ready.'
        : 'JS6 PHEV ჩამოყალიბებულია ახალგაზრდული სულის და ვარსკვლავური ცის დიზაინის ენით — უსაზღვრო „მცურავი" ცხაური, მატრიცული LED ფარები პლანეტარული ტრაექტორიის დღის სინათლეებით, ქანდაკებული პულსირებული წელის ხაზი და „მფრინავი დანის" ალუმინის დისკები — ქმნის დინამიკურ, პრემიუმ და ცალსახად მომავლისკენ მიმართულ იერსახეს.',
    'ex_e1_t'  => ($lang == 'en') ? 'Starry Sky Grille & Matrix LED' : 'ვარსკვლავური ცის ცხაური და მატრიცული LED',
    'ex_e1_d'  => ($lang == 'en')
        ? 'A borderless, floating starry-sky grille pairs with matrix-style LED headlights and planetary-trajectory daytime running lights — a face that feels both futuristic and friendly in any city light.'
        : 'უსაზღვრო „მცურავი" ვარსკვლავური ცხაური მატრიცული LED ფარებთან და პლანეტარული ტრაექტორიის დღის სინათლეებთან ერთად — სახე, რომელიც ერთდროულად ფუტურისტული და მეგობრულია ნებისმიერ ქალაქის განათებაში.',
    'ex_e2_t'  => ($lang == 'en') ? 'Sculpted Pulse Waistline' : 'ქანდაკებული პულსირებული წელის ხაზი',
    'ex_e2_d'  => ($lang == 'en')
        ? 'A bold pulse-shaped waistline runs the full length of the body, paired with chrome-trimmed door panels — projecting an athletic profile from every angle.'
        : 'თამამი პულსის ფორმის წელის ხაზი გადის სრულ კორპუსზე, კარის ქრომირებულ პანელებთან ერთად — ქმნის ათლეტურ სილუეტს ნებისმიერი კუთხიდან.',
    'ex_e3_t'  => ($lang == 'en') ? 'Flying-Blade Alloy Wheels' : '„მფრინავი დანის" ალუმინის დისკები',
    'ex_e3_d'  => ($lang == 'en')
        ? 'Flying-blade alloy wheels with smoked-black rims deliver a stealth-sport stance — while reducing weight and improving aerodynamic efficiency.'
        : '„მფრინავი დანის" ალუმინის დისკები კვამლისფერი შავი არშიით ქმნის სპორტულ-სტელსურ პოზიციას — ამცირებს წონას და აუმჯობესებს აეროდინამიკას.',

    // INTERIOR
    'in_lbl'   => ($lang == 'en') ? 'INTERIOR' : 'ინტერიერი',
    'in_title' => ($lang == 'en') ? 'A cockpit built around you.' : 'სალონი, შექმნილი თქვენთვის.',
    'in_sub'   => ($lang == 'en') ? 'Dual screens. Race-grade seats.' : 'ორმაგი ეკრანები. სარბოლო კლასის სავარძლები.',
    'in_desc'  => ($lang == 'en')
        ? 'A full-black, soft-touch interior centers on dual 12.3-inch displays — instrument cluster and multimedia screen. 3D integrated racing seats wrap you in premium leather, while a panoramic glass sunroof and electronic knob shifter complete a driver-first cabin.'
        : 'სრულად შავი, რბილი მასალებით მოპირკეთებული სალონი თავსდება ორმაგი 12.3-დუიმიანი ეკრანების გარშემო — მძღოლის პანელი და მულტიმედია ეკრანი. 3D ინტეგრირებული სარბოლო სავარძლები გაჩახჩახებთ პრემიუმ ტყავში, ხოლო პანორამული მინის ლუქი და ელექტრონული გადამრთველი ნოპი ასრულებს მძღოლზე ორიენტირებულ სალონს.',
    'in_e1_t'  => ($lang == 'en') ? 'Dual 12.3" Displays' : 'ორმაგი 12.3" ეკრანები',
    'in_e1_d'  => ($lang == 'en')
        ? 'Two full-HD 12.3-inch screens — a driver instrument cluster and a multimedia touchscreen — provide a panoramic digital cockpit with wireless CarPlay & Android Auto.'
        : 'ორი full-HD 12.3-დუიმიანი ეკრანი — მძღოლის პანელი და მულტიმედია ეკრანი — უზრუნველყოფს პანორამულ ციფრულ სალონს wireless CarPlay-სა და Android Auto-ით.',
    'in_e2_t'  => ($lang == 'en') ? '3D Integrated Racing Seats' : '3D ინტეგრირებული სარბოლო სავარძლები',
    'in_e2_d'  => ($lang == 'en')
        ? 'Premium leather racing seats with 6-way power driver, 4-way power passenger, electric lumbar support and memory function — ergonomic comfort on every drive.'
        : 'პრემიუმ ტყავის სარბოლო სავარძლები 6-მიმართულებიანი ელექტრო რეგულირებით მძღოლისთვის, 4-მიმართულებიანი მგზავრისთვის, ელექტრო წელის საყრდენით და მეხსიერების ფუნქციით — ერგონომიკული კომფორტი ნებისმიერ მგზავრობაში.',
    'in_e3_t'  => ($lang == 'en') ? 'Panoramic Glass Sunroof' : 'პანორამული მინის ლუქი',
    'in_e3_d'  => ($lang == 'en')
        ? 'A full-length panoramic sunroof floods the cabin with natural light — opening up the experience for every passenger.'
        : 'სრული სიგრძის პანორამული ლუქი ავსებს სალონს ბუნებრივი განათებით — ხსნის გამოცდილებას ყველა მგზავრისთვის.',
    'in_e4_t'  => ($lang == 'en') ? 'Electronic Knob Shifter' : 'ელექტრონული ნოპის გადამრთველი',
    'in_e4_d'  => ($lang == 'en')
        ? 'A precision knob-type electronic shifter with backlit R/N/D indicators replaces traditional gear levers — modern, intuitive, and ergonomic.'
        : 'ზუსტი ნოპის ტიპის ელექტრონული გადამრთველი განათებული R/N/D ინდიკატორებით ცვლის ტრადიციულ ბერკეტებს — თანამედროვე, ინტუიციური და ერგონომიკული.',

    // POWERTRAIN
    'pt_lbl'   => ($lang == 'en') ? 'POWERTRAIN' : 'სიმძლავრე',
    'pt_title' => ($lang == 'en') ? 'Parallel hybrid. Pure performance.' : 'პარალელური ჰიბრიდი. სუფთა წარმადობა.',
    'pt_desc'  => ($lang == 'en')
        ? 'A dual-motor architecture (P1 + P3) pairs a 81 kW combustion engine with a 150 kW / 300 N·m electric main drive — delivering effortless 0-100 in 7.3 s, up to 1,150 km of combined range, and stepless electric acceleration without jerk.'
        : 'ორმაგი ძრავის არქიტექტურა (P1 + P3) აერთებს 81 kW წვის ძრავას 150 kW / 300 N·m ელექტრო მთავარ წამყვან ძრავასთან — უზრუნველყოფს მარტივ 0-100-ს 7.3 წამში, 1,150 კმ-მდე ჯამური სვლის მარაგით და უწყვეტი ელექტრო აჩქარებით ბიძგების გარეშე.',
    'pt_c1_t'  => ($lang == 'en') ? 'Dual Motor (P1 + P3)' : 'ორმაგი ძრავი (P1 + P3)',
    'pt_c1_d'  => ($lang == 'en') ? 'P1 supports engine start, generation and auxiliary drive. P3 delivers 150 kW main drive and energy recovery — a parallel hybrid optimized for both city and highway.' : 'P1 უზრუნველყოფს ძრავის გაშვებას, გენერაციას და დამხმარე წამყვანობას. P3 უზრუნველყოფს 150 kW მთავარ წამყვანობას და ენერგიის აღდგენას — პარალელური ჰიბრიდი ოპტიმიზებული ქალაქისთვისაც და მაგისტრალისთვისაც.',
    'pt_c2_t'  => ($lang == 'en') ? '55Ah Prismatic Battery' : '55Ah პრიზმული ბატარეა',
    'pt_c2_d'  => ($lang == 'en') ? 'High-capacity 55Ah prismatic battery cells with up to 97.5% electric drive efficiency — 120 km of pure EV range for daily city driving.' : 'მაღალი ტევადობის 55Ah პრიზმული უჯრედები 97.5%-მდე ელექტრო წამყვანი ეფექტურობით — 120 კმ სუფთა EV სვლის მარაგი ყოველდღიური ქალაქური მართვისთვის.',
    'pt_c3_t'  => ($lang == 'en') ? 'Integrated Thermal Management' : 'ინტეგრირებული თერმული მართვა',
    'pt_c3_d'  => ($lang == 'en') ? 'Unified thermal management across engine, cabin and drivetrain — maximizes efficiency, extends battery life and ensures comfort year-round.' : 'ერთიანი თერმული მართვა ძრავას, სალონს და ტრანსმისიას შორის — მაქსიმუმს ანიჭებს ეფექტურობას, ახანგრძლივებს ბატარეის სიცოცხლეს და უზრუნველყოფს კომფორტს ნებისმიერ სეზონზე.',

    // RANGE BANNER
    'rb_title' => ($lang == 'en') ? 'Up to 1,150 km on a single fill.' : '1,150 კმ-მდე ერთ შევსებაზე.',
    'rb_desc'  => ($lang == 'en') ? 'WLTP-rated 0.9 L/100 km combined consumption — go further between stops, spend less at the pump.' : 'WLTP-ით 0.9 ლ/100 კმ ჯამური მოხმარება — წადით უფრო შორს გაჩერებებს შორის და დახარჯეთ ნაკლები საწვავის გასამართად.',
    'rb_stat1_v' => '1,150', 'rb_stat1_u' => 'km', 'rb_stat1_l' => ($lang == 'en') ? 'Total range' : 'ჯამური მარაგი',
    'rb_stat2_v' => '120',   'rb_stat2_u' => 'km', 'rb_stat2_l' => ($lang == 'en') ? 'Pure EV' : 'სუფთა EV',
    'rb_stat3_v' => '0.9',   'rb_stat3_u' => 'L/100km', 'rb_stat3_l' => ($lang == 'en') ? 'WLTP consumption' : 'WLTP მოხმარება',
    'rb_stat4_v' => '7.3',   'rb_stat4_u' => 's', 'rb_stat4_l' => ($lang == 'en') ? '0-100 km/h' : '0-100 კმ/სთ',

    // SAFETY
    'sf_lbl'   => ($lang == 'en') ? 'SAFETY' : 'უსაფრთხოება',
    'sf_title' => ($lang == 'en') ? 'Built to protect, certified to perform.' : 'შექმნილია დასაცავად, სერტიფიცირებული წარმადობისთვის.',
    'sf_desc'  => ($lang == 'en')
        ? 'A cage-type safety structure with 70% high-strength steel, six airbags, IP68 battery protection, and a 30 ms high-voltage cutoff response — JS6 PHEV meets C-NCAP five-star crash safety standards.'
        : 'გალიის ტიპის უსაფრთხოების სტრუქტურა 70% მაღალი სიმტკიცის ფოლადით, ექვსი უსაფრთხოების ბალიში, IP68 ბატარეის დაცვა და 30 მწმ მაღალი ძაბვის გათიშვის რეაქცია — JS6 PHEV აკმაყოფილებს C-NCAP-ის ხუთვარსკვლავიან ავარიული უსაფრთხოების სტანდარტებს.',
    'sf_c1_t'  => ($lang == 'en') ? 'C-NCAP 5-Star Body' : 'C-NCAP 5-ვარსკვლავიანი კორპუსი',
    'sf_c1_d'  => ($lang == 'en') ? 'Cage-type structure with 70% high-strength steel meets C-NCAP five-star crash safety standards.' : 'გალიის ტიპის სტრუქტურა 70% მაღალი სიმტკიცის ფოლადით აკმაყოფილებს C-NCAP-ის 5-ვარსკვლავიან სტანდარტს.',
    'sf_c2_t'  => ($lang == 'en') ? '6-Airbag Protection' : '6 უსაფრთხოების ბალიში',
    'sf_c2_d'  => ($lang == 'en') ? 'A comprehensive 6-airbag system with pre-tensioning, load-limiting 3-point seat belts protects every occupant.' : 'სრული 6 ბალიშის სისტემა წინასწარი დაჭიმვის და დატვირთვის შემზღუდველი 3-წერტილოვანი ღვედებით — იცავს ყველა მგზავრს.',
    'sf_c3_t'  => ($lang == 'en') ? 'IP68 Battery Protection' : 'IP68 ბატარეის დაცვა',
    'sf_c3_d'  => ($lang == 'en') ? 'Explosion-resistant, IP68-rated battery with 30 ms high-voltage cutoff — tested for water, fire, vibration, crushing and thermal runaway.' : 'აფეთქებამდე გამძლე, IP68-ით სერტიფიცირებული ბატარეა 30 მწმ-იანი მაღალი ძაბვის გათიშვით — ტესტირებული წყლის, ცეცხლის, ვიბრაციის, დაჭყლეტისა და თერმული გადახურების მიმართ.',

    // ADAS
    'adas_lbl'   => 'ADAS',
    'adas_title' => ($lang == 'en') ? 'Intelligent driving, by your side.' : 'ჭკვიანი მართვა, თქვენ გვერდით.',
    'adas_desc'  => ($lang == 'en')
        ? 'Seven advanced driver-assistance systems work together to make every journey safer, smoother and less tiring — from highway cruising to busy city traffic.'
        : 'შვიდი მოწინავე მძღოლის დახმარების სისტემა მუშაობს ერთად — რომ ყოველი მგზავრობა გახდეს უსაფრთხო, გლუვი და ნაკლებად დამღლელი — მაგისტრალური მგზავრობიდან ქალაქის დაკავებულ მოძრაობამდე.',
    'adas_1' => ($lang == 'en') ? 'ICA — Integrated Cruise Assist'        : 'ICA — ინტეგრირებული კრუიზ-ასისტენტი',
    'adas_2' => ($lang == 'en') ? 'ACC — Adaptive Cruise Control'         : 'ACC — ადაპტირებადი კრუიზ-კონტროლი',
    'adas_3' => ($lang == 'en') ? 'AEB — Autonomous Emergency Braking'    : 'AEB — ავტონომიური საგანგებო დამუხრუჭება',
    'adas_4' => ($lang == 'en') ? 'FCW — Forward Collision Warning'       : 'FCW — წინა შეჯახების გაფრთხილება',
    'adas_5' => ($lang == 'en') ? 'LKA — Lane Keeping Assist'             : 'LKA — ზოლში დარჩენის ასისტენტი',
    'adas_6' => ($lang == 'en') ? 'LDW — Lane Departure Warning'          : 'LDW — ზოლიდან გადახვევის გაფრთხილება',
    'adas_7' => ($lang == 'en') ? 'BSD — Blind Spot Detection'            : 'BSD — „მკვდარი ზონის" ამოცნობა',

    // CTA
    'cta_title' => ($lang == 'en') ? 'Start your green drive with JS6 PHEV.' : 'დაიწყეთ მწვანე მართვა JS6 PHEV-თან ერთად.',
    'cta_desc'  => ($lang == 'en') ? 'Download the full brochure for complete specifications and configurations.' : 'ჩამოტვირთეთ სრული ბროშურა დეტალური მახასიათებლებისა და კონფიგურაციებისთვის.',
    'cta_btn'   => ($lang == 'en') ? 'Download Brochure' : 'ბროშურის ჩამოტვირთვა',
];

$pdf_link = 'https://jacmotors.ge/wp-content/uploads/2026/05/JAC-JS6-PHEV.pdf';
$base     = 'https://jacen.jac.com.cn/_nuxt/img/';

$ext_gallery = [
    $base . 'e1.977c410.png',
    $base . 'e2.e585ec0.png',
    $base . 'e3.212440b.png',
    $base . 'e4.8350c99.png',
    $base . 'e5.6c19112.png',
    $base . 'e6.6acbf1c.png',
];
$int_gallery = [
    $base . 'in1.56e816d.png',
    $base . 'in2.7be0060.png',
    $base . 'in3.db23a25.png',
    $base . 'in4.5417a59.png',
    $base . 'in5.c175b27.png',
    $base . 'in6.7b7db1a.png',
];
?>

<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = {
    theme: {
        extend: {
            fontFamily: { sans: ['Noto Sans Georgian', 'Inter', 'sans-serif'] },
            colors: {
                'jac-red':   '#d11f26',
                'jac-dark':  '#0a0a0a',
                'jac-green': '#16a34a',
                'jac-gold':  '#c9a961',
            },
        },
    },
};
</script>

<main class="js6phev-page font-sans bg-white text-gray-900">

    <!-- 1. HERO -->
    <section id="js6phev-hero" class="relative h-[85vh] min-h-[500px] flex items-end overflow-hidden">
        <picture class="absolute inset-0 z-0">
            <source media="(max-width: 768px)" srcset="<?php echo esc_url($base . 'js6phev-sjbanner.7c33533.jpg'); ?>">
            <img src="<?php echo esc_url($base . 'js6phev_banner.3909d8c.png'); ?>"
                 alt="JAC JS6 PHEV"
                 class="w-full h-full object-cover object-center">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 to-black/10 z-10"></div>
        <div class="relative z-20 w-full px-5 md:px-12 lg:px-20 pb-10 md:pb-24">
            <div class="max-w-7xl mx-auto js6phev-fade-up flex justify-start">
                <div class="max-w-xl">
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-2.5 py-1 rounded-full mb-3 md:mb-4">
                        <span class="w-1.5 h-1.5 bg-jac-green rounded-full animate-pulse"></span>
                        <span class="text-[9px] md:text-[10px] font-bold text-white uppercase tracking-widest">PHEV · <?php echo esc_html($t['hero_badge']); ?></span>
                    </div>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-black text-white tracking-tight leading-[1] mb-2 md:mb-3">
                        <?php echo esc_html($t['hero_title']); ?>
                    </h1>
                    <p class="text-base md:text-lg font-light text-white/95 mb-0">
                        <?php echo esc_html($t['hero_sub']); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. STICKY SUB-NAV -->
    <nav id="js6phev-subnav" class="sticky top-[75px] bg-black text-white z-[990] border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-3 md:px-4">
            <div class="flex items-center justify-between h-14 md:h-16">
                <div class="hidden lg:block font-black text-lg tracking-wider whitespace-nowrap">JS6 PHEV</div>
                <ul class="flex items-center gap-4 md:gap-7 overflow-x-auto scrollbar-hide whitespace-nowrap flex-1 lg:flex-none lg:justify-end">
                    <li><a href="#overview"   class="subnav-link active"><?php echo esc_html($t['nav_overview']); ?></a></li>
                    <li><a href="#specs"      class="subnav-link"><?php echo esc_html($t['nav_specs']); ?></a></li>
                    <li><a href="#gallery"    class="subnav-link"><?php echo esc_html($t['nav_gallery']); ?></a></li>
                    <li><a href="#exterior"   class="subnav-link"><?php echo esc_html($t['nav_exterior']); ?></a></li>
                    <li><a href="#interior"   class="subnav-link"><?php echo esc_html($t['nav_interior']); ?></a></li>
                    <li><a href="#powertrain" class="subnav-link"><?php echo esc_html($t['nav_powertrain']); ?></a></li>
                    <li><a href="#safety"     class="subnav-link"><?php echo esc_html($t['nav_safety']); ?></a></li>
                    <li><a href="#adas"       class="subnav-link"><?php echo esc_html($t['nav_adas']); ?></a></li>
                    <li class="shrink-0">
                        <a href="<?php echo esc_url($pdf_link); ?>" target="_blank"
                           class="group inline-flex items-center gap-1.5 md:gap-2 bg-white text-black px-3 md:px-4 py-1.5 md:py-2 rounded-full font-bold text-[10px] md:text-xs uppercase hover:bg-jac-green hover:text-white transition-all duration-500">
                            <i class="fa-regular fa-file-pdf text-jac-red group-hover:text-white transition-colors duration-500"></i>
                            <span class="hidden md:inline"><?php echo esc_html($t['nav_brochure']); ?></span>
                            <span class="md:hidden">PDF</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 3. OVERVIEW + COLOR SELECTOR -->
    <section id="overview" class="py-14 md:py-24 bg-gradient-to-b from-white via-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-16 js6phev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($t['nav_overview']); ?></span>
                <div class="w-10 h-0.5 bg-jac-green mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-6xl font-black text-black mb-4 md:mb-6 leading-tight"><?php echo esc_html($t['ov_title']); ?></h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed"><?php echo esc_html($t['ov_desc']); ?></p>
            </div>

            <div class="relative js6phev-fade-up delay-200">
                <div class="py-4 md:py-8">
                    <img id="js6phev-main-color-img"
                         src="<?php echo esc_url($base . 'js6phevimg.481b7e4.png'); ?>"
                         alt="JAC JS6 PHEV Pearl White"
                         class="w-full max-w-4xl mx-auto h-auto object-contain transition-opacity duration-500">
                </div>
                <div class="mt-4 md:mt-6 text-center">
                    <p class="text-[10px] md:text-xs font-bold tracking-widest text-gray-500 uppercase mb-4"><?php echo esc_html($t['col_hint']); ?></p>
                    <div class="flex justify-center flex-wrap gap-3 md:gap-4 mb-4">
                        <button class="color-dot active"
                                data-name="<?php echo esc_attr($t['col_white']); ?>"
                                data-img="<?php echo esc_url($base . 'js6phevimg.481b7e4.png'); ?>"
                                style="background:linear-gradient(145deg,#fafafa,#e0e0e0);">
                            <i class="fa-solid fa-check text-black text-sm check-icon"></i>
                        </button>
                    </div>
                    <p class="text-sm md:text-base font-bold text-black mb-2" id="color-name"><?php echo esc_html($t['col_white']); ?></p>
                    <p class="text-[10px] md:text-xs text-gray-500"><?php echo esc_html($t['col_note']); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. HIGHLIGHTS / SPECS -->
    <section id="specs" class="py-14 md:py-24 bg-black text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-end mb-10 md:mb-14">
                <div class="js6phev-fade-up">
                    <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($t['hl_lbl']); ?></span>
                    <div class="w-10 h-0.5 bg-jac-green mb-4 md:mb-6"></div>
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-black leading-tight mb-4 md:mb-0"><?php echo esc_html($t['hl_title']); ?></h2>
                </div>
                <div class="js6phev-fade-up delay-200 lg:text-right">
                    <a href="<?php echo esc_url($pdf_link); ?>" target="_blank"
                       class="inline-flex items-center gap-2 text-jac-green border-b-2 border-jac-green pb-1 font-bold text-xs md:text-sm hover:text-white hover:border-white transition-all duration-500">
                        <?php echo esc_html($t['hl_full']); ?> <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
                <?php
                $specs = [
                    [$t['hl_s1_l'], $t['hl_s1_v']],
                    [$t['hl_s2_l'], $t['hl_s2_v']],
                    [$t['hl_s3_l'], $t['hl_s3_v']],
                    [$t['hl_s4_l'], $t['hl_s4_v']],
                    [$t['hl_s5_l'], $t['hl_s5_v']],
                    [$t['hl_s6_l'], $t['hl_s6_v']],
                ];
                foreach ($specs as $i => [$lbl, $val]): ?>
                <div class="spec-box js6phev-fade-up">
                    <p class="text-[10px] md:text-xs font-bold uppercase tracking-widest text-white/50 mb-2"><?php echo esc_html($lbl); ?></p>
                    <p class="text-xl md:text-3xl lg:text-4xl font-black text-white leading-tight"><?php echo esc_html($val); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 5. GALLERY -->
    <section id="gallery" class="py-14 md:py-24 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 js6phev-fade-up">
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black leading-tight"><?php echo esc_html($t['gal_title']); ?></h2>
            </div>
            <div class="flex justify-center gap-2 mb-8 md:mb-10 js6phev-fade-up">
                <button class="gallery-tab active" data-tab="exterior"><?php echo esc_html($t['gal_exterior']); ?></button>
                <button class="gallery-tab" data-tab="interior"><?php echo esc_html($t['gal_interior']); ?></button>
            </div>
            <!-- Exterior -->
            <div class="gallery-panel active" data-panel="exterior">
                <div class="relative rounded-2xl md:rounded-3xl overflow-hidden bg-gray-100 mb-4 md:mb-6 js6phev-image-hover">
                    <img id="ext-main-img" src="<?php echo esc_url($ext_gallery[0]); ?>" alt="JS6 PHEV Exterior"
                         class="w-full h-auto object-cover transition-opacity duration-500">
                </div>
                <div class="grid grid-cols-3 md:grid-cols-6 gap-2 md:gap-3">
                    <?php foreach ($ext_gallery as $i => $img): ?>
                    <button class="thumb-btn <?php echo $i===0?'active':''; ?>" data-target="ext-main-img" data-img="<?php echo esc_url($img); ?>">
                        <img src="<?php echo esc_url($img); ?>" alt="Ext <?php echo $i+1; ?>" class="w-full h-full object-cover">
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Interior -->
            <div class="gallery-panel hidden" data-panel="interior">
                <div class="relative rounded-2xl md:rounded-3xl overflow-hidden bg-gray-100 mb-4 md:mb-6 js6phev-image-hover">
                    <img id="int-main-img" src="<?php echo esc_url($int_gallery[0]); ?>" alt="JS6 PHEV Interior"
                         class="w-full h-auto object-cover transition-opacity duration-500">
                </div>
                <div class="grid grid-cols-3 md:grid-cols-6 gap-2 md:gap-3">
                    <?php foreach ($int_gallery as $i => $img): ?>
                    <button class="thumb-btn <?php echo $i===0?'active':''; ?>" data-target="int-main-img" data-img="<?php echo esc_url($img); ?>">
                        <img src="<?php echo esc_url($img); ?>" alt="Int <?php echo $i+1; ?>" class="w-full h-full object-cover">
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. EXTERIOR -->
    <section id="exterior" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 js6phev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($t['ex_lbl']); ?></span>
                <div class="w-10 h-0.5 bg-jac-green mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-tight"><?php echo esc_html($t['ex_title']); ?></h2>
            </div>
            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 js6phev-fade-up js6phev-image-hover">
                <img src="<?php echo esc_url($base . 's6-big-pic.ebc89f7.jpg'); ?>" alt="JAC JS6 PHEV Exterior" class="w-full h-auto object-cover">
            </div>
            <div class="max-w-3xl mx-auto text-center mb-14 md:mb-20 js6phev-fade-up">
                <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-4"><?php echo esc_html($t['ex_sub']); ?></h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed"><?php echo esc_html($t['ex_desc']); ?></p>
            </div>
            <div class="space-y-12 md:space-y-20">
                <?php
                $ex_feats = [
                    [$t['ex_e1_t'], $t['ex_e1_d'], $base.'aw1.1bee9f0.jpg', false],
                    [$t['ex_e2_t'], $t['ex_e2_d'], $base.'aw3.808c184.jpg', true],
                    [$t['ex_e3_t'], $t['ex_e3_d'], $base.'aw5.fcbb440.jpg', false],
                ];
                foreach ($ex_feats as $i => [$ft, $fd, $fi, $rev]): ?>
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center js6phev-fade-up">
                    <div class="<?php echo $rev ? 'lg:order-2' : ''; ?> rounded-2xl md:rounded-3xl overflow-hidden js6phev-image-hover">
                        <img src="<?php echo esc_url($fi); ?>" alt="<?php echo esc_attr($ft); ?>" class="w-full h-auto object-cover">
                    </div>
                    <div class="<?php echo $rev ? 'lg:order-1' : ''; ?>">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-tight"><?php echo esc_html($ft); ?></h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed"><?php echo esc_html($fd); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 7. INTERIOR -->
    <section id="interior" class="py-14 md:py-24 bg-gradient-to-br from-gray-900 to-black text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">
            <div class="text-center mb-10 md:mb-14 js6phev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-gold uppercase mb-3"><?php echo esc_html($t['in_lbl']); ?></span>
                <div class="w-10 h-0.5 bg-jac-gold mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black mb-4 md:mb-6 leading-tight"><?php echo esc_html($t['in_title']); ?></h2>
            </div>
            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 js6phev-fade-up js6phev-image-hover">
                <img src="<?php echo esc_url($base . 'in.f2cd03f.png'); ?>" alt="JAC JS6 PHEV Interior" class="w-full h-auto object-cover">
            </div>
            <div class="max-w-3xl mx-auto text-center mb-14 md:mb-20 js6phev-fade-up">
                <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-4"><?php echo esc_html($t['in_sub']); ?></h3>
                <p class="text-sm md:text-base text-white/70 leading-relaxed"><?php echo esc_html($t['in_desc']); ?></p>
            </div>
            <div class="space-y-12 md:space-y-16">
                <!-- Dual 12.3" -->
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center js6phev-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden js6phev-image-hover">
                        <img src="<?php echo esc_url($base . 'inec1.a338be2.png'); ?>" alt="Dual 12.3 Screens" class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 bg-jac-gold/15 border border-jac-gold/30 px-3 py-1 rounded-full mb-3">
                            <span class="text-[10px] md:text-xs font-bold text-jac-gold uppercase tracking-widest">12.3" × 2</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4 leading-tight"><?php echo esc_html($t['in_e1_t']); ?></h3>
                        <p class="text-sm md:text-base text-white/70 leading-relaxed"><?php echo esc_html($t['in_e1_d']); ?></p>
                    </div>
                </div>
                <!-- Seats + Sunroof -->
                <div class="grid md:grid-cols-2 gap-6 md:gap-8 js6phev-fade-up">
                    <?php
                    $in_cards = [
                        [$t['in_e2_t'], $t['in_e2_d'], $base.'inec2.a59342e.png'],
                        [$t['in_e3_t'], $t['in_e3_d'], $base.'inec3.7d37119.png'],
                    ];
                    foreach ($in_cards as [$it, $id, $ii]): ?>
                    <div class="feature-card-dark">
                        <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden js6phev-image-hover">
                            <img src="<?php echo esc_url($ii); ?>" alt="<?php echo esc_attr($it); ?>" class="w-full h-auto object-cover aspect-[4/3]">
                        </div>
                        <div class="p-6 md:p-8">
                            <h4 class="text-lg md:text-xl font-bold mb-2 md:mb-3 leading-tight"><?php echo esc_html($it); ?></h4>
                            <p class="text-xs md:text-sm text-white/70 leading-relaxed"><?php echo esc_html($id); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- Knob shifter -->
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center js6phev-fade-up">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden js6phev-image-hover">
                        <img src="<?php echo esc_url($base . 'inec4.ebb0a82.png'); ?>" alt="Knob Shifter" class="w-full h-auto object-cover">
                    </div>
                    <div class="lg:order-1">
                        <div class="inline-flex items-center gap-2 bg-jac-green/10 border border-jac-green/30 px-3 py-1 rounded-full mb-3">
                            <i class="fa-solid fa-gear text-jac-green text-xs"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-green uppercase tracking-widest">Drive Selector</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4 leading-tight"><?php echo esc_html($t['in_e4_t']); ?></h3>
                        <p class="text-sm md:text-base text-white/70 leading-relaxed"><?php echo esc_html($t['in_e4_d']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. POWERTRAIN -->
    <section id="powertrain" class="py-14 md:py-24 bg-gradient-to-br from-emerald-50 via-white to-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">
            <div class="text-center mb-10 md:mb-14 js6phev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($t['pt_lbl']); ?></span>
                <div class="w-10 h-0.5 bg-jac-green mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-tight"><?php echo esc_html($t['pt_title']); ?></h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed"><?php echo esc_html($t['pt_desc']); ?></p>
            </div>
            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 js6phev-fade-up js6phev-image-hover">
                <img src="<?php echo esc_url($base . 'bec1.8bd4c72.png'); ?>" alt="JS6 PHEV Powertrain" class="w-full h-auto object-cover">
            </div>
            <div class="grid md:grid-cols-3 gap-6 md:gap-8">
                <?php
                $pt_cards = [
                    [$t['pt_c1_t'], $t['pt_c1_d'], 'fa-bolt',          'text-jac-green', $base.'ec1.93bd45c.png'],
                    [$t['pt_c2_t'], $t['pt_c2_d'], 'fa-battery-full',  'text-jac-gold',  $base.'ec2.3739141.png'],
                    [$t['pt_c3_t'], $t['pt_c3_d'], 'fa-temperature-half','text-blue-500', $base.'ec3.6693206.png'],
                ];
                foreach ($pt_cards as [$ptt, $ptd, $pti, $ptc, $ptimg]): ?>
                <div class="feature-card-light js6phev-fade-up">
                    <div class="overflow-hidden rounded-t-2xl md:rounded-t-3xl js6phev-image-hover">
                        <img src="<?php echo esc_url($ptimg); ?>" alt="<?php echo esc_attr($ptt); ?>" class="w-full h-48 md:h-56 object-cover">
                    </div>
                    <div class="p-5 md:p-6">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-gray-100 flex items-center justify-center mb-4">
                            <i class="fa-solid <?php echo esc_attr($pti); ?> <?php echo esc_attr($ptc); ?> text-lg md:text-xl"></i>
                        </div>
                        <h4 class="text-base md:text-lg font-bold text-black mb-2 leading-tight"><?php echo esc_html($ptt); ?></h4>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed"><?php echo esc_html($ptd); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 9. RANGE BANNER -->
    <section class="py-14 md:py-24 bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">
            <div class="text-center mb-10 md:mb-14 js6phev-fade-up">
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black mb-4 md:mb-6 leading-tight"><?php echo esc_html($t['rb_title']); ?></h2>
                <p class="text-sm md:text-base lg:text-lg text-white/70 max-w-3xl mx-auto leading-relaxed"><?php echo esc_html($t['rb_desc']); ?></p>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 js6phev-fade-up">
                <?php
                $rstats = [
                    ['v'=>$t['rb_stat1_v'], 'u'=>$t['rb_stat1_u'], 'l'=>$t['rb_stat1_l']],
                    ['v'=>$t['rb_stat2_v'], 'u'=>$t['rb_stat2_u'], 'l'=>$t['rb_stat2_l']],
                    ['v'=>$t['rb_stat3_v'], 'u'=>$t['rb_stat3_u'], 'l'=>$t['rb_stat3_l']],
                    ['v'=>$t['rb_stat4_v'], 'u'=>$t['rb_stat4_u'], 'l'=>$t['rb_stat4_l']],
                ];
                foreach ($rstats as $rs): ?>
                <div class="text-center py-6 md:py-8 border border-white/10 rounded-2xl">
                    <p class="text-3xl md:text-5xl lg:text-6xl font-black text-white leading-none mb-1"><?php echo esc_html($rs['v']); ?></p>
                    <p class="text-base md:text-xl font-bold text-jac-green mb-2"><?php echo esc_html($rs['u']); ?></p>
                    <p class="text-[10px] md:text-xs text-white/50 uppercase tracking-widest"><?php echo esc_html($rs['l']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 10. SAFETY -->
    <section id="safety" class="py-14 md:py-24 bg-[#eef4f8]">
        <div class="max-w-[1400px] mx-auto px-5 md:px-8 w-full">
            <div class="text-center mb-10 md:mb-14 js6phev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($t['sf_lbl']); ?></span>
                <div class="w-10 h-0.5 bg-jac-green mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-[40px] font-black text-gray-900 mb-4 md:mb-6 leading-snug tracking-tight"><?php echo esc_html($t['sf_title']); ?></h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed"><?php echo esc_html($t['sf_desc']); ?></p>
            </div>
            <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-6 auto-rows-[320px] lg:auto-rows-[380px] js6phev-fade-up">
                <!-- C-NCAP Body -->
                <div class="lg:col-span-1 lg:row-span-2 rounded-3xl bg-[#121212] text-white relative overflow-hidden flex flex-col p-8 md:p-10 js6phev-image-hover group">
                    <div class="absolute inset-0 z-0">
                        <img src="<?php echo esc_url($base . 'safw1.a024e51.png'); ?>" alt="C-NCAP Body" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-[#121212]/60 to-transparent"></div>
                    </div>
                    <div class="relative z-10 flex flex-col h-full justify-end mt-auto">
                        <div class="inline-flex items-center gap-2 bg-jac-green/15 border border-jac-green/30 px-3 py-1 rounded-full mb-4 self-start">
                            <i class="fa-solid fa-star text-jac-green text-xs"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-green uppercase tracking-widest">5-Star</span>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold leading-tight mb-3"><?php echo esc_html($t['sf_c1_t']); ?></h3>
                        <p class="text-[13px] md:text-sm text-gray-200 leading-relaxed font-medium"><?php echo esc_html($t['sf_c1_d']); ?></p>
                    </div>
                </div>
                <!-- 6-Airbag -->
                <div class="lg:col-span-2 lg:row-span-1 rounded-3xl bg-[#121212] relative overflow-hidden js6phev-image-hover group">
                    <img src="<?php echo esc_url($base . 'safw2.f7de9ea.png'); ?>" alt="6 Airbags" class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#121212]/90 via-[#121212]/40 to-transparent"></div>
                    <div class="absolute inset-0 flex items-end p-8 md:p-10">
                        <div>
                            <h3 class="text-xl md:text-2xl font-bold text-white leading-tight mb-2"><?php echo esc_html($t['sf_c2_t']); ?></h3>
                            <p class="text-[13px] md:text-sm text-gray-200 leading-relaxed font-medium max-w-lg"><?php echo esc_html($t['sf_c2_d']); ?></p>
                        </div>
                    </div>
                </div>
                <!-- IP68 -->
                <div class="lg:col-span-1 lg:row-span-1 rounded-3xl bg-[#121212] text-white p-8 md:p-10 relative overflow-hidden flex flex-col justify-end shadow-sm js6phev-image-hover group">
                    <div class="absolute inset-0 z-0">
                        <img src="<?php echo esc_url($base . 'safw3.2780938.png'); ?>" alt="IP68 Battery" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#121212]/95 via-[#121212]/30 to-transparent"></div>
                    </div>
                    <div class="relative z-10 mt-auto">
                        <h3 class="text-xl md:text-[22px] font-bold leading-tight mb-3"><?php echo esc_html($t['sf_c3_t']); ?></h3>
                        <p class="text-[13px] md:text-sm text-gray-200 leading-relaxed font-medium"><?php echo esc_html($t['sf_c3_d']); ?></p>
                    </div>
                </div>
                <!-- 70% HSS Gold callout -->
                <div class="lg:col-span-1 lg:row-span-1 rounded-3xl bg-jac-gold text-white p-8 md:p-10 flex flex-col justify-between shadow-sm">
                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-white/20 flex items-center justify-center mb-4">
                        <i class="fa-solid fa-shield-halved text-white text-xl md:text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold leading-tight mb-3"><?php echo esc_html($lang=='en' ? '70% High-Strength Steel' : '70% მაღალი სიმტკიცის ფოლადი'); ?></h3>
                        <p class="text-[13px] md:text-sm text-white/90 leading-relaxed"><?php echo esc_html($lang=='en' ? 'A high-strength cage chassis absorbs and disperses impact energy.' : 'მაღალი სიმტკიცის გალიის შასი შთანთქავს და ანაწილებს დარტყმის ენერგიას.'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. ADAS -->
    <section id="adas" class="py-14 md:py-24 bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">
            <div class="text-center mb-10 md:mb-14 js6phev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($t['adas_lbl']); ?></span>
                <div class="w-10 h-0.5 bg-jac-green mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black mb-4 md:mb-6 leading-tight"><?php echo esc_html($t['adas_title']); ?></h2>
                <p class="text-sm md:text-base lg:text-lg text-white/70 max-w-3xl mx-auto leading-relaxed"><?php echo esc_html($t['adas_desc']); ?></p>
            </div>
            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 js6phev-fade-up js6phev-image-hover">
                <img src="<?php echo esc_url($base . 'adas1.08568ea.png'); ?>" alt="ADAS Overview" class="w-full h-auto object-cover">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 js6phev-fade-up">
                <?php
                $adas = [
                    ['t' => $t['adas_1'], 'i' => 'fa-route'],
                    ['t' => $t['adas_2'], 'i' => 'fa-gauge-high'],
                    ['t' => $t['adas_3'], 'i' => 'fa-car-burst'],
                    ['t' => $t['adas_4'], 'i' => 'fa-triangle-exclamation'],
                    ['t' => $t['adas_5'], 'i' => 'fa-arrows-left-right'],
                    ['t' => $t['adas_6'], 'i' => 'fa-traffic-light'],
                    ['t' => $t['adas_7'], 'i' => 'fa-eye'],
                ];
                foreach ($adas as $a): ?>
                <div class="starry-card flex items-center gap-4 p-5 md:p-6">
                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-xl bg-jac-green/15 flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid <?php echo esc_attr($a['i']); ?> text-jac-green text-lg md:text-xl"></i>
                    </div>
                    <p class="text-sm md:text-base font-semibold leading-tight"><?php echo esc_html($a['t']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 12. CTA -->
    <section class="py-14 md:py-24 bg-gradient-to-br from-jac-green via-green-700 to-green-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -top-24 -right-24 w-80 h-80 md:w-96 md:h-96 rounded-full bg-white/20 blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-80 h-80 md:w-96 md:h-96 rounded-full bg-jac-gold/30 blur-3xl"></div>
        </div>
        <div class="relative max-w-5xl mx-auto px-5 md:px-8 text-center js6phev-fade-up">
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-black mb-4 md:mb-6 leading-tight"><?php echo esc_html($t['cta_title']); ?></h2>
            <p class="text-base md:text-xl text-white/90 mb-6 md:mb-10 max-w-2xl mx-auto"><?php echo esc_html($t['cta_desc']); ?></p>
            <a href="<?php echo esc_url($pdf_link); ?>" target="_blank"
               class="inline-flex items-center gap-2 md:gap-3 bg-white text-jac-green px-6 md:px-10 py-3.5 md:py-5 rounded-full font-bold text-sm md:text-lg hover:bg-black hover:text-white transition-all duration-500 hover:scale-[1.03] shadow-2xl">
                <i class="fa-regular fa-file-pdf text-lg md:text-xl"></i>
                <?php echo esc_html($t['cta_btn']); ?>
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
