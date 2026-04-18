<?php

/**
 * Template Name: Model - J7
 */
get_header();

$lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';

$t = [
    'hero_title'    => 'JAC J7',
    'hero_sub'      => ($lang == 'en') ? 'Elegant Sedan. Smart Choice.' : 'ელეგანტური სედანი. ჭკვიანი არჩევანი.',
    'hero_badge'    => ($lang == 'en') ? 'Premium Sedan' : 'პრემიუმ სედანი',

    'nav_overview'  => ($lang == 'en') ? 'Overview' : 'მიმოხილვა',
    'nav_specs'     => ($lang == 'en') ? 'Specs' : 'მახასიათებლები',
    'nav_exterior'  => ($lang == 'en') ? 'Exterior' : 'ექსტერიერი',
    'nav_interior'  => ($lang == 'en') ? 'Interior' : 'ინტერიერი',
    'nav_power'     => ($lang == 'en') ? 'Powertrain' : 'ძრავი',
    'nav_chassis'   => ($lang == 'en') ? 'Chassis' : 'შასი',
    'nav_safety'    => ($lang == 'en') ? 'Safety' : 'უსაფრთხოება',
    'nav_brochure'  => ($lang == 'en') ? 'Brochure' : 'ბროშურა',

    'ov_title'      => ($lang == 'en') ? 'Bold design. Dynamic drive.' : 'თამამი დიზაინი. დინამიური მგზავრობა.',
    'ov_desc'       => ($lang == 'en') ? 'The JAC J7 combines a dynamic silhouette with refined engineering, delivering an elegant sedan experience packed with modern technology and thoughtful comfort.' : 'JAC J7 აერთიანებს დინამიურ სილუეტს და დახვეწილ ინჟინერიას — გთავაზობთ ელეგანტურ სედანს, რომელიც აღჭურვილია თანამედროვე ტექნოლოგიებით და გააზრებული კომფორტით.',
    'col_hint'      => ($lang == 'en') ? 'Select a color' : 'აირჩიეთ ფერი',
    'col_red'       => ($lang == 'en') ? 'Red' : 'წითელი',
    'col_gold'      => ($lang == 'en') ? 'Gold' : 'ოქროსფერი',
    'col_blue'      => ($lang == 'en') ? 'Blue' : 'ლურჯი',
    'col_note'      => ($lang == 'en') ? 'Models and colors may vary by regions.' : 'მოდელები და ფერები შესაძლოა განსხვავდებოდეს რეგიონების მიხედვით.',

    'hl_lbl'        => ($lang == 'en') ? 'HIGHLIGHTS' : 'მთავარი მახასიათებლები',
    'hl_title'      => 'JAC J7',
    'hl_full'       => ($lang == 'en') ? 'Full Specifications' : 'სრული მახასიათებლები',

    'hl_s1_l'       => ($lang == 'en') ? 'Engine' : 'ძრავი',
    'hl_s1_v'       => '1.5 Turbo',
    'hl_s2_l'       => ($lang == 'en') ? 'Transmission' : 'ტრანსმისია',
    'hl_s2_v'       => 'CVT / 6MT',
    'hl_s3_l'       => ($lang == 'en') ? 'Trunk Capacity' : 'საბარგულის მოცულობა',
    'hl_s3_v'       => '520-1510 L',
    'hl_s4_l'       => ($lang == 'en') ? 'Airbags' : 'უსაფრთხოების ბალიშები',
    'hl_s4_v'       => '6',
    'hl_s5_l'       => ($lang == 'en') ? 'Smart Screen' : 'ჭკვიანი ეკრანი',
    'hl_s5_v'       => '10.4"',
    'hl_s6_l'       => ($lang == 'en') ? 'Power Steering' : 'ძრავის საჭის სისტემა',
    'hl_s6_v'       => 'EPS',

    'ex_lbl'        => ($lang == 'en') ? 'EXTERIOR' : 'ექსტერიერი',
    'ex_title'      => ($lang == 'en') ? 'Sculpted for the road.' : 'ქანდაკებული გზისთვის.',
    'ex_desc'       => ($lang == 'en') ? 'The J7 stands out with its athletic silhouette and daring design language — bold lines, a statement front grille, and sharp LED lights make every drive an entrance.' : 'J7 გამოირჩევა ათლეტური სილუეტითა და თამამი დიზაინის ენით — მკვეთრი ხაზები, მიმზიდველი ცხაური და დახვეწილი LED ფარები ყოველ მგზავრობას განსაკუთრებულად აქცევს.',

    'ex_c1_t'       => ($lang == 'en') ? 'Double Sharp Arrow Waistline' : 'ორმაგი მახვილი ისრისებრი ხაზი',
    'ex_c1_d'       => ($lang == 'en') ? 'Full of energetic and passionate character, the arrow waistline adds a dynamic tension to the body side.' : 'ენერგიული და ვნებიანი ხასიათი — ისრისებრი წელის ხაზი კორპუსის გვერდებს ანიჭებს დინამიურ დაჭიმულობას.',

    'ex_c2_t'       => ($lang == 'en') ? 'Sporty Body Curves' : 'სპორტული კორპუსის ხაზები',
    'ex_c2_d'       => ($lang == 'en') ? 'Smooth skyline and dynamic profile create a continuous sense of motion — even when standing still.' : 'გლუვი ხაზი და დინამიური პროფილი ქმნის მოძრაობის შეგრძნებას — მაშინაც კი, როცა ავტომობილი უძრავადაა.',

    'ex_c3_t'       => ($lang == 'en') ? 'LED Headlamps' : 'LED მთავარი ფარები',
    'ex_c3_d'       => ($lang == 'en') ? 'Bright, efficient, and bold — the LED headlamps cut through the night and give the J7 its signature gaze.' : 'ნათელი, ეფექტური და თამამი — LED ფარები ანათებს ღამეს და J7-ს ხელწერის შესახედაობას ანიჭებს.',

    'ex_c4_t'       => ($lang == 'en') ? 'Unique Front Design' : 'გამორჩეული წინა დიზაინი',
    'ex_c4_d'       => ($lang == 'en') ? 'The grille and headlights blend into a single stunning front module, giving the body a wider, more imposing stance.' : 'ცხაური და ფარები ერთ მთლიან დიზაინში ერწყმის და კორპუსს უფრო ფართო, შთამბეჭდავ იერს ანიჭებს.',

    'ex_c5_t'       => ($lang == 'en') ? 'Auto-Fold Rear View Mirror' : 'ავტომატური დასაკეცი უკანა ხედვის სარკე',
    'ex_c5_d'       => ($lang == 'en') ? 'Convenient and stylish — the side mirrors fold automatically for tight parking and city convenience.' : 'მოხერხებული და სტილური — გვერდითი სარკეები ავტომატურად იკეცება ვიწრო პარკინგისთვის.',

    'ex_c6_t'       => ($lang == 'en') ? 'Hands-Free Tailgate' : 'ავტომატური უკანა კარი',
    'ex_c6_d'       => ($lang == 'en') ? 'Foot-activated and anti-pinch protected — open the tailgate without touching it, even with your hands full.' : 'ფეხის მოძრაობით გასაღები და ჩაკვრისგან დაცული — გააღეთ უკანა კარი ხელის გამოყენების გარეშე.',

    'in_lbl'        => ($lang == 'en') ? 'INTERIOR' : 'ინტერიერი',
    'in_title'      => ($lang == 'en') ? 'Relaxed space, refined experience.' : 'მშვიდი სივრცე, დახვეწილი გამოცდილება.',
    'in_desc'       => ($lang == 'en') ? 'Beauty, high functionality, and simplicity rule inside the J7, ensuring that each passenger enjoys an absolutely relaxed environment.' : 'სილამაზე, ფუნქციონალობა და სიმარტივე — J7-ის ინტერიერი ქმნის სრულიად მოდუნებულ გარემოს ყველა მგზავრისთვის.',

    'in_c1_t'       => ($lang == 'en') ? '10.4-inch Smart Touch Screen' : '10.4-დუიმიანი სენსორული ეკრანი',
    'in_c1_d'       => ($lang == 'en') ? 'A large, responsive smart screen puts navigation, media, and vehicle controls right at your fingertips.' : 'დიდი, მგრძნობიარე სმარტ ეკრანი ნავიგაციას, მედიასა და მართვის სისტემებს თქვენს ხელთ ათავსებს.',

    'in_c2_t'       => ($lang == 'en') ? 'Dynamic Instrument Panel' : 'დინამიური ინსტრუმენტების დაფა',
    'in_c2_d'       => ($lang == 'en') ? 'A modern digital instrument cluster delivers clear, real-time information with an elegant presentation.' : 'თანამედროვე ციფრული ინსტრუმენტების კლასტერი გაძლევთ მკაფიო, რეალურ დროში ინფორმაციას ელეგანტურად.',

    'in_c3_t'       => ($lang == 'en') ? 'Panoramic Roof' : 'პანორამული ჭერი',
    'in_c3_d'       => ($lang == 'en') ? 'The large panoramic roof floods the cabin with natural light, making every journey feel open and airy.' : 'დიდი პანორამული ჭერი სალონს ავსებს ბუნებრივი შუქით და მგზავრობას ხსნის, ჰაეროვან შეგრძნებას ქმნის.',

    'in_c4_t'       => ($lang == 'en') ? 'Flexible Trunk Space' : 'მოქნილი საბარგულის სივრცე',
    'in_c4_d'       => ($lang == 'en') ? '520L of regular trunk capacity expands to 1510L with the second row folded — adaptable for daily life or weekend trips.' : '520 ლიტრი საბარგულის მოცულობა ფართოვდება 1510 ლიტრამდე მეორე რიგის დაკეცვისას — მოქნილია ყოველდღიური ცხოვრებისა და მოგზაურობისთვის.',

    'in_tr_t'       => ($lang == 'en') ? 'New Color & Trim Options' : 'ახალი ფერები და ტრიმი',
    'in_tr_d'       => ($lang == 'en') ? 'Three distinctive interior trim themes — Red, Gold, and Blue — let you express your personal style.' : 'სამი გამორჩეული ინტერიერის თემა — წითელი, ოქროსფერი და ლურჯი — თქვენი პირადი სტილის გამოსახატავად.',

    'pw_lbl'        => ($lang == 'en') ? 'POWERTRAIN' : 'ძალოვანი აგრეგატი',
    'pw_title'      => ($lang == 'en') ? 'Powerful Engine' : 'მძლავრი ძრავი',
    'pw_desc'       => ($lang == 'en') ? '1.5 Turbo Engine with new technology — delivering strong torque, quick response, and confident acceleration for every journey.' : '1.5 ტურბო ძრავი ახალი ტექნოლოგიებით — ძლიერი ბრუნვის მომენტი, სწრაფი რეაქცია და თავდაჯერებული აჩქარება ყოველ მოგზაურობაზე.',

    'pw_s1_n'       => '210',
    'pw_s1_u'       => 'N·m',
    'pw_s1_l'       => ($lang == 'en') ? 'Torque @ 2000-4500rpm' : 'ბრუნვის მომენტი',

    'pw_s2_n'       => '4.5',
    'pw_s2_u'       => 's',
    'pw_s2_l'       => ($lang == 'en') ? '0-60 km/h' : '0-60 კმ/სთ',

    'pw_s3_n'       => '10.5',
    'pw_s3_u'       => 's',
    'pw_s3_l'       => ($lang == 'en') ? '0-100 km/h' : '0-100 კმ/სთ',

    'pw_f1_t'       => ($lang == 'en') ? 'CVT Transmission' : 'CVT ტრანსმისია',
    'pw_f1_d'       => ($lang == 'en') ? 'Smooth, efficient, and responsive — CVT delivers seamless power delivery and excellent fuel economy.' : 'გლუვი, ეფექტური და მგრძნობიარე — CVT უზრუნველყოფს ძალის უწყვეტ გადაცემას და საუკეთესო საწვავის ეკონომიას.',

    'pw_f2_t'       => ($lang == 'en') ? 'Efficient Braking System' : 'ეფექტური სამუხრუჭე სისტემა',
    'pw_f2_d'       => ($lang == 'en') ? 'Advanced brake system delivers responsive, safe, and confident stopping power in every condition.' : 'დახვეწილი სამუხრუჭე სისტემა უზრუნველყოფს სწრაფ, უსაფრთხო და თავდაჯერებულ გაჩერებას ნებისმიერ პირობებში.',

    'pw_f3_t'       => ($lang == 'en') ? 'One Button Start' : 'ერთი ღილაკით დაშვება',
    'pw_f3_d'       => ($lang == 'en') ? 'Start and stop the engine with a single press — modern convenience at your fingertips.' : 'ძრავის დაშვება და გაჩერება ერთი დაჭერით — თანამედროვე მოხერხებულობა თქვენს ხელთ.',

    'pw_f4_t'       => ($lang == 'en') ? 'Hill Start Assistance' : 'აღმართიდან დაძვრის ასისტენტი',
    'pw_f4_d'       => ($lang == 'en') ? 'Prevents rollback on slopes, giving you confident, smooth starts on inclined surfaces.' : 'ხელს უშლის უკან გადაგორებას ფერდობზე — გაძლევთ თავდაჯერებულ დაძვრას დახრილ ზედაპირებზე.',

    'pw_f5_t'       => ($lang == 'en') ? 'Cruise Control' : 'კრუიზ-კონტროლი',
    'pw_f5_d'       => ($lang == 'en') ? 'Maintain your desired speed effortlessly on long drives for a more relaxed and fuel-efficient journey.' : 'შეინარჩუნეთ სასურველი სიჩქარე ადვილად — მოდუნებული და ეკონომიური მგზავრობისთვის.',

    'ch_lbl'        => ($lang == 'en') ? 'CHASSIS & STEERING' : 'შასი და საჭე',
    'ch_title'      => ($lang == 'en') ? 'Engineered for balance.' : 'შექმნილია ბალანსისთვის.',

    'ch_c1_t'       => ($lang == 'en') ? 'EPS — Electrical Power Steering' : 'EPS — ელექტრული საჭის სისტემა',
    'ch_c1_d'       => ($lang == 'en') ? 'Electronic power steering delivers a more refined structure and sensitive response. Compared to traditional hydraulic systems, it saves 0.3L per 100km.' : 'ელექტრონული საჭის მართვა გთავაზობთ უფრო დახვეწილ სტრუქტურასა და მგრძნობიარე რეაქციას. ტრადიციულ ჰიდრავლიკურ სისტემასთან შედარებით, ზოგავს 0.3 ლიტრს 100 კმ-ზე.',

    'ch_c2_t'       => ($lang == 'en') ? 'Solid Chassis' : 'მტკიცე შასი',
    'ch_c2_d'       => ($lang == 'en') ? 'VW-tuned E-Type multi-pillar chassis system. The vehicle\'s impact absorption, rolling comfort, and road undulations exceed the competition — delivering a superior driving experience.' : 'VW-ს მიერ მორგებული E-Type მრავალ-საყრდენიანი შასი. ამორტიზაცია, მოძრაობის კომფორტი და გზის არათანაბარი ზედაპირის გადალახვა აღემატება კონკურენტებს — შესანიშნავი მართვის გამოცდილებისთვის.',

    'sf_lbl'        => ($lang == 'en') ? 'SAFETY' : 'უსაფრთხოება',
    'sf_title'      => ($lang == 'en') ? 'Built to protect.' : 'შექმნილია დასაცავად.',
    'sf_desc'       => ($lang == 'en') ? 'A high-strength steel body and comprehensive airbag system work together to keep every passenger safe on every road.' : 'მაღალი სიმტკიცის ფოლადის კორპუსი და უსაფრთხოების ბალიშების სრული სისტემა ერთობლივად იცავს თითოეულ მგზავრს ყოველ გზაზე.',

    'sf_c1_t'       => ($lang == 'en') ? 'High-Strength Steel Body' : 'მაღალი სიმტკიცის ფოლადის კორპუსი',
    'sf_c1_d'       => ($lang == 'en') ? 'A reinforced steel structure protects occupants during impact, engineered for safety at every angle.' : 'გაძლიერებული ფოლადის სტრუქტურა იცავს მგზავრებს დარტყმის დროს — უსაფრთხოებისთვის ყველა კუთხიდან.',

    'sf_c2_t'       => ($lang == 'en') ? 'Six Airbags' : 'ექვსი უსაფრთხოების ბალიში',
    'sf_c2_d'       => ($lang == 'en') ? 'Comprehensive airbag coverage provides all-around protection, significantly reducing the risk of injury.' : 'ყოვლისმომცველი უსაფრთხოების ბალიშების სისტემა გთავაზობთ სრულ დაცვას — მნიშვნელოვნად ამცირებს დაზიანების რისკს.',

    'spec_lbl'      => ($lang == 'en') ? 'SPECIFICATIONS' : 'მახასიათებლები',
    'spec_title'    => ($lang == 'en') ? 'Choose your J7' : 'აირჩიე შენი J7',
    'spec_desc'     => ($lang == 'en') ? 'Three configurations designed to match your lifestyle.' : 'სამი კონფიგურაცია თქვენი ცხოვრების სტილისთვის.',

    'spec_v1'       => '1.5T + 6MT Comfort',
    'spec_v2'       => '1.5T + CVT Luxury',
    'spec_v3'       => '1.5T + CVT Advanced',

    'cta_title'     => ($lang == 'en') ? 'Experience the J7' : 'აღმოაჩინე J7',
    'cta_desc'      => ($lang == 'en') ? 'Download the full brochure for complete specifications and configurations.' : 'ჩამოტვირთეთ სრული ბროშურა დეტალური მახასიათებლებისა და კონფიგურაციებისთვის.',
    'cta_btn'       => ($lang == 'en') ? 'Download Brochure' : 'ბროშურის ჩამოტვირთვა',
];

$pdf_link = "https://jacen.jac.com.cn/pdf/j7.pdf";
?>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" crossorigin="anonymous"></script>

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
                    'jac-gold': '#c9a961',
                },
            },
        },
    };
</script>

<main class="j7-page font-sans bg-white text-gray-900">

    <section id="j7-hero" class="relative h-[85vh] min-h-[500px] flex items-start md:items-center overflow-hidden pt-28 md:pt-0">
        <picture class="absolute inset-0 z-0">
            <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/BANNER.fde6913.jpg">
            <img src="https://jacen.jac.com.cn/_nuxt/img/BANNER@2x.ff58c6c.jpg" 
                 alt="JAC J7" 
                 class="w-full h-full object-cover">
        </picture>

        <div class="absolute inset-0 bg-gradient-to-b md:bg-gradient-to-l from-black/80 via-black/20 to-transparent z-10"></div>

        <div class="relative z-20 w-full px-5 md:px-12 lg:px-20 pb-10 md:pb-0">
            <div class="max-w-7xl mx-auto j7-fade-up flex flex-col items-start md:items-end text-left md:text-right">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-3 py-1.5 rounded-full mb-4 md:mb-6">
                    <span class="w-1.5 h-1.5 bg-jac-red rounded-full"></span>
                    <span class="text-[10px] md:text-xs font-bold text-white uppercase tracking-widest"><?php echo esc_html($t['hero_badge']); ?></span>
                </div>

                <h1 class="text-4xl md:text-7xl lg:text-9xl font-black text-white tracking-tight leading-tight md:leading-[1] mb-3 md:mb-5 pb-1">
                    <?php echo esc_html($t['hero_title']); ?>
                </h1>

                <p class="text-lg md:text-2xl lg:text-4xl font-light text-white/95 max-w-2xl leading-snug">
                    <?php echo esc_html($t['hero_sub']); ?>
                </p>
            </div>
        </div>
    </section>

    <nav id="j7-subnav" class="sticky top-[75px] bg-black text-white z-[990] border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-3 md:px-4">
            <div class="flex items-center justify-between h-14 md:h-16">
                <div class="hidden lg:block font-black text-lg tracking-wider whitespace-nowrap">
                    JAC J7
                </div>

                <ul class="flex items-center gap-4 md:gap-7 overflow-x-auto scrollbar-hide whitespace-nowrap flex-1 lg:flex-none lg:justify-end">
                    <li><a href="#overview" class="subnav-link active"><?php echo esc_html($t['nav_overview']); ?></a></li>
                    <li><a href="#specs" class="subnav-link"><?php echo esc_html($t['nav_specs']); ?></a></li>
                    <li><a href="#exterior" class="subnav-link"><?php echo esc_html($t['nav_exterior']); ?></a></li>
                    <li><a href="#interior" class="subnav-link"><?php echo esc_html($t['nav_interior']); ?></a></li>
                    <li><a href="#powertrain" class="subnav-link"><?php echo esc_html($t['nav_power']); ?></a></li>
                    <li><a href="#chassis" class="subnav-link"><?php echo esc_html($t['nav_chassis']); ?></a></li>
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
            <div class="text-center mb-10 md:mb-16 j7-fade-up">
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

            <div class="relative j7-fade-up delay-200">
                <div class="py-4 md:py-8">
                    <img id="j7-main-color-img"
                         src="https://jacen.jac.com.cn/_nuxt/img/7-1@2x.b663848.jpg" 
                         alt="JAC J7 Red"
                         class="w-full max-w-4xl mx-auto h-auto object-contain transition-opacity duration-500">
                </div>

                <div class="mt-4 md:mt-6 text-center">
                    <p class="text-[10px] md:text-xs font-bold tracking-widest text-gray-500 uppercase mb-4"><?php echo esc_html($t['col_hint']); ?></p>
                    <div class="flex justify-center flex-wrap gap-3 md:gap-4 mb-4">
                        <button class="color-dot active"
                                data-name="<?php echo esc_attr($t['col_red']); ?>"
                                data-img="https://jacen.jac.com.cn/_nuxt/img/7-1@2x.b663848.jpg"
                                style="background: linear-gradient(145deg, #b91c1c, #7f1d1d);">
                            <i class="fa-solid fa-check text-white text-xs opacity-0 check-icon"></i>
                        </button>
                        <button class="color-dot"
                                data-name="<?php echo esc_attr($t['col_gold']); ?>"
                                data-img="https://jacen.jac.com.cn/_nuxt/img/7-2@2x.cd95454.jpg"
                                style="background: linear-gradient(145deg, #d4af37, #a68424);">
                            <i class="fa-solid fa-check text-white text-xs opacity-0 check-icon"></i>
                        </button>
                        <button class="color-dot"
                                data-name="<?php echo esc_attr($t['col_blue']); ?>"
                                data-img="https://jacen.jac.com.cn/_nuxt/img/7-3@2x.10a6779.jpg"
                                style="background: linear-gradient(145deg, #1e3a8a, #0c1e4a);">
                            <i class="fa-solid fa-check text-white text-xs opacity-0 check-icon"></i>
                        </button>
                    </div>
                    <p class="text-sm md:text-base font-bold text-black mb-2" id="color-name"><?php echo esc_html($t['col_red']); ?></p>
                    <p class="text-[10px] md:text-xs text-gray-500"><?php echo esc_html($t['col_note']); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="specs" class="py-14 md:py-24 bg-black text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-end mb-10 md:mb-14">
                <div class="j7-fade-up">
                    <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                        <?php echo esc_html($t['hl_lbl']); ?>
                    </span>
                    <div class="w-10 h-0.5 bg-jac-red mb-4 md:mb-6"></div>
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-black leading-snug md:leading-tight mb-4 md:mb-0 pb-1">
                        <?php echo esc_html($t['hl_title']); ?>
                    </h2>
                </div>
                <div class="j7-fade-up delay-200 lg:text-right">
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
                    ['l' => $t['hl_s1_l'], 'v' => $t['hl_s1_v']],
                    ['l' => $t['hl_s2_l'], 'v' => $t['hl_s2_v']],
                    ['l' => $t['hl_s3_l'], 'v' => $t['hl_s3_v']],
                    ['l' => $t['hl_s4_l'], 'v' => $t['hl_s4_v']],
                    ['l' => $t['hl_s5_l'], 'v' => $t['hl_s5_v']],
                    ['l' => $t['hl_s6_l'], 'v' => $t['hl_s6_v']],
                ];
                foreach ($specs as $i => $spec):
                ?>
                <div class="spec-box j7-fade-up" style="animation-delay: <?php echo $i * 80; ?>ms;">
                    <p class="text-[10px] md:text-xs font-bold uppercase tracking-widest text-white/50 mb-2">
                        <?php echo esc_html($spec['l']); ?>
                    </p>
                    <p class="text-xl md:text-3xl lg:text-4xl font-black text-white leading-tight">
                        <?php echo esc_html($spec['v']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="exterior" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 j7-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['ex_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['ex_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['ex_desc']); ?>
                </p>
            </div>

            <div class="space-y-12 md:space-y-20">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center j7-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/1@2x.575a9a7.jpg" 
                             alt="Arrow Waistline" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['ex_c1_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ex_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center j7-fade-up">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/3@2x.396c551.jpg" 
                             alt="Body Curves & LED" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="lg:order-1 space-y-6">
                        <div>
                            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                                <?php echo esc_html($t['ex_c2_t']); ?>
                            </h3>
                            <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                                <?php echo esc_html($t['ex_c2_d']); ?>
                            </p>
                        </div>
                        <div class="pt-6 border-t border-gray-200">
                            <div class="inline-flex items-center gap-2 bg-jac-red/10 px-3 py-1 rounded-full mb-3">
                                <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">LED</span>
                            </div>
                            <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-2 md:mb-3 leading-snug">
                                <?php echo esc_html($t['ex_c3_t']); ?>
                            </h3>
                            <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                                <?php echo esc_html($t['ex_c3_d']); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center j7-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/2@2x.67f13be.jpg" 
                             alt="Front Design" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['ex_c4_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ex_c4_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-4 md:gap-6 j7-fade-up">
                    <div class="feature-card-light">
                        <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden j7-image-hover">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/4@2x.38e2407.jpg" 
                                 alt="Auto-Fold Mirror" 
                                 class="w-full h-auto object-cover aspect-[16/10]">
                        </div>
                        <div class="p-6 md:p-8">
                            <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-2 md:mb-3 leading-snug">
                                <?php echo esc_html($t['ex_c5_t']); ?>
                            </h3>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                <?php echo esc_html($t['ex_c5_d']); ?>
                            </p>
                        </div>
                    </div>
                    <div class="feature-card-light">
                        <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden j7-image-hover">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/5@2x.f07ed65.jpg" 
                                 alt="Hands-Free Tailgate" 
                                 class="w-full h-auto object-cover aspect-[16/10]">
                        </div>
                        <div class="p-6 md:p-8">
                            <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-2 md:mb-3 leading-snug">
                                <?php echo esc_html($t['ex_c6_t']); ?>
                            </h3>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                <?php echo esc_html($t['ex_c6_d']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="interior" class="py-14 md:py-24 bg-gradient-to-br from-gray-900 to-black text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">
            <div class="text-center mb-10 md:mb-14 j7-fade-up">
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

            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 j7-fade-up j7-image-hover">
                <img src="https://jacen.jac.com.cn/_nuxt/img/41@2x.3a3c314.jpg" 
                     alt="JAC J7 Interior" 
                     class="w-full h-auto object-cover">
            </div>

            <div class="space-y-12 md:space-y-16">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center j7-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/8@2x.097de47.jpg" 
                             alt="Smart Screen" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 bg-jac-gold/10 border border-jac-gold/30 px-3 py-1 rounded-full mb-3">
                            <span class="text-[10px] md:text-xs font-bold text-jac-gold uppercase tracking-widest">10.4"</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['in_c1_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center j7-fade-up">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/9@2x.b78b5dc.jpg" 
                             alt="Instrument Panel" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="lg:order-1">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['in_c2_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_c2_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl md:rounded-3xl p-6 md:p-10 j7-fade-up">
                    <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-6 md:mb-8 text-center leading-snug">
                        <?php echo esc_html($t['in_tr_t']); ?>
                    </h3>
                    <p class="text-sm md:text-base text-white/70 leading-relaxed text-center max-w-2xl mx-auto mb-8">
                        <?php echo esc_html($t['in_tr_d']); ?>
                    </p>
                    <div class="grid grid-cols-3 gap-3 md:gap-5">
                        <div class="rounded-xl md:rounded-2xl overflow-hidden j7-image-hover">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/7-1@2x.b663848.jpg" 
                                 alt="Red Trim" 
                                 class="w-full h-auto object-cover aspect-[4/3]">
                        </div>
                        <div class="rounded-xl md:rounded-2xl overflow-hidden j7-image-hover">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/7-2@2x.cd95454.jpg" 
                                 alt="Gold Trim" 
                                 class="w-full h-auto object-cover aspect-[4/3]">
                        </div>
                        <div class="rounded-xl md:rounded-2xl overflow-hidden j7-image-hover">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/7-3@2x.10a6779.jpg" 
                                 alt="Blue Trim" 
                                 class="w-full h-auto object-cover aspect-[4/3]">
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-3 md:gap-5 mt-3 md:mt-4 text-center">
                        <span class="text-xs md:text-sm font-bold text-white/80"><?php echo esc_html($t['col_red']); ?></span>
                        <span class="text-xs md:text-sm font-bold text-white/80"><?php echo esc_html($t['col_gold']); ?></span>
                        <span class="text-xs md:text-sm font-bold text-white/80"><?php echo esc_html($t['col_blue']); ?></span>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center j7-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/11@2x.5de7add.jpg" 
                             alt="Panoramic Roof" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['in_c3_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_c3_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center j7-fade-up">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/12@2x.1c7dae8.jpg" 
                             alt="Trunk Space" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="lg:order-1">
                        <div class="flex items-baseline gap-2 mb-3">
                            <span class="text-3xl md:text-4xl font-black text-jac-gold">520-1510</span>
                            <span class="text-xs md:text-sm text-white/60 uppercase tracking-widest font-semibold">Liters</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['in_c4_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_c4_d']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="powertrain" class="py-14 md:py-24 bg-gradient-to-br from-amber-50 via-white to-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 j7-fade-up">
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

            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 j7-fade-up j7-image-hover">
                <img src="https://jacen.jac.com.cn/_nuxt/img/13@2x.9ac6268.jpg" 
                     alt="JAC J7 Engine" 
                     class="w-full h-auto object-cover">
            </div>

            <div class="grid md:grid-cols-3 gap-4 md:gap-6 mb-10 md:mb-14">
                <div class="power-stat-card j7-fade-up">
                    <div class="flex items-baseline gap-1 mb-3 md:mb-4">
                        <span class="text-3xl md:text-5xl font-black text-black leading-none"><?php echo $t['pw_s1_n']; ?></span>
                        <span class="text-base md:text-xl font-bold text-jac-red"><?php echo $t['pw_s1_u']; ?></span>
                    </div>
                    <p class="text-xs md:text-sm text-gray-600 uppercase tracking-wider font-semibold">
                        <?php echo esc_html($t['pw_s1_l']); ?>
                    </p>
                </div>
                <div class="power-stat-card j7-fade-up delay-100">
                    <div class="flex items-baseline gap-1 mb-3 md:mb-4">
                        <span class="text-3xl md:text-5xl font-black text-black leading-none"><?php echo $t['pw_s2_n']; ?></span>
                        <span class="text-base md:text-xl font-bold text-jac-red"><?php echo $t['pw_s2_u']; ?></span>
                    </div>
                    <p class="text-xs md:text-sm text-gray-600 uppercase tracking-wider font-semibold">
                        <?php echo esc_html($t['pw_s2_l']); ?>
                    </p>
                </div>
                <div class="power-stat-card j7-fade-up delay-200">
                    <div class="flex items-baseline gap-1 mb-3 md:mb-4">
                        <span class="text-3xl md:text-5xl font-black text-black leading-none"><?php echo $t['pw_s3_n']; ?></span>
                        <span class="text-base md:text-xl font-bold text-jac-red"><?php echo $t['pw_s3_u']; ?></span>
                    </div>
                    <p class="text-xs md:text-sm text-gray-600 uppercase tracking-wider font-semibold">
                        <?php echo esc_html($t['pw_s3_l']); ?>
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 md:gap-6 mb-6 md:mb-8">
                <div class="feature-card-light j7-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/14@2x.e445070.jpg" 
                             alt="CVT Transmission" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['pw_f1_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['pw_f1_d']); ?>
                        </p>
                    </div>
                </div>
                <div class="feature-card-light j7-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/15@2x.ef0632e.jpg" 
                             alt="Efficient Brake" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['pw_f2_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['pw_f2_d']); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-4 md:gap-6">
                <div class="feature-card-light j7-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/16-1@2x.9a07c8b.jpg" 
                             alt="One Button Start" 
                             class="w-full h-auto object-contain aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-6">
                        <h4 class="text-base md:text-lg font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['pw_f3_t']); ?>
                        </h4>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['pw_f3_d']); ?>
                        </p>
                    </div>
                </div>
                <div class="feature-card-light j7-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/16@2x.3777fb6.jpg" 
                             alt="Hill Start" 
                             class="w-full h-auto object-contain aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-6">
                        <h4 class="text-base md:text-lg font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['pw_f4_t']); ?>
                        </h4>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['pw_f4_d']); ?>
                        </p>
                    </div>
                </div>
                <div class="feature-card-light j7-fade-up delay-200">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/16-2@2x.c0aac5e.jpg" 
                             alt="Cruise Control" 
                             class="w-full h-auto object-contain aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-6">
                        <h4 class="text-base md:text-lg font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['pw_f5_t']); ?>
                        </h4>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['pw_f5_d']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="chassis" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 j7-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['ch_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['ch_title']); ?>
                </h2>
            </div>

            <div class="space-y-10 md:space-y-16">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center j7-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/17@2x.330e201.jpg" 
                             alt="EPS" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 bg-jac-red/10 px-3 py-1 rounded-full mb-3">
                            <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">EPS</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['ch_c1_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ch_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center j7-fade-up">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/18@2x.bb5e7cd.jpg" 
                             alt="Solid Chassis" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="lg:order-1">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['ch_c2_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ch_c2_d']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="safety" class="py-14 md:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 j7-fade-up">
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

            <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                <div class="feature-card-light j7-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/19@2x.506834c.jpg" 
                             alt="High Strength Steel" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['sf_c1_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['sf_c1_d']); ?>
                        </p>
                    </div>
                </div>
                <div class="feature-card-light j7-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden j7-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/20@2x.0e96175.jpg" 
                             alt="Six Airbags" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex items-baseline gap-2 mb-3">
                            <span class="text-4xl md:text-5xl font-black text-jac-red">6</span>
                            <span class="text-xs md:text-sm text-gray-500 uppercase tracking-widest font-semibold">Airbags</span>
                        </div>
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['sf_c2_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['sf_c2_d']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <section class="py-14 md:py-24 bg-gradient-to-br from-jac-red via-red-700 to-red-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -top-24 -right-24 w-80 h-80 md:w-96 md:h-96 rounded-full bg-white/20 blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-80 h-80 md:w-96 md:h-96 rounded-full bg-white/20 blur-3xl"></div>
        </div>

        <div class="relative max-w-5xl mx-auto px-5 md:px-8 text-center j7-fade-up">
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                <?php echo esc_html($t['cta_title']); ?>
            </h2>
            <p class="text-base md:text-xl text-white/90 mb-6 md:mb-10 max-w-2xl mx-auto">
                <?php echo esc_html($t['cta_desc']); ?>
            </p>
            <div class="flex flex-wrap justify-center gap-3 md:gap-4">
                <a href="<?php echo esc_url($pdf_link); ?>" target="_blank"
                   class="inline-flex items-center gap-2 md:gap-3 bg-white text-jac-red px-6 md:px-10 py-3.5 md:py-5 rounded-full font-bold text-sm md:text-lg hover:bg-black hover:text-white transition-all duration-500 hover:scale-[1.03] shadow-2xl">
                    <i class="fa-regular fa-file-pdf text-lg md:text-xl"></i>
                    <?php echo esc_html($t['cta_btn']); ?>
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
