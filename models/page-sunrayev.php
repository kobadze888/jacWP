<?php

/**
 * Template Name: Model - Sunray EV
 */
get_header();

$lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';

$t = [
    'hero_title'    => 'JAC Sunray EV',
    'hero_sub'      => ($lang == 'en') ? 'Urban delivery star.' : 'ურბანული მიტანის ვარსკვლავი.',
    'hero_badge'    => ($lang == 'en') ? 'Electric Van' : 'ელექტრო ვანი',

    'nav_overview'  => ($lang == 'en') ? 'Overview' : 'მიმოხილვა',
    'nav_specs'     => ($lang == 'en') ? 'Specs' : 'მახასიათებლები',
    'nav_exterior'  => ($lang == 'en') ? 'Exterior' : 'ექსტერიერი',
    'nav_interior'  => ($lang == 'en') ? 'Interior' : 'ინტერიერი',
    'nav_cargo'     => ($lang == 'en') ? 'Cargo' : 'სატვირთო',
    'nav_battery'   => ($lang == 'en') ? 'Battery' : 'ელემენტი',
    'nav_safety'    => ($lang == 'en') ? 'Safety' : 'უსაფრთხოება',
    'nav_brochure'  => ($lang == 'en') ? 'Brochure' : 'ბროშურა',

    'ov_title'      => ($lang == 'en') ? 'Optimized energy. Maximum performance.' : 'ოპტიმიზებული ენერგია. მაქსიმალური წარმადობა.',
    'ov_desc'       => ($lang == 'en') ? 'The Sunray EV is the ideal companion for your transportation journey, offering maximum efficiency and profitability. It enables you to complete demanding tasks quickly and efficiently — time-saving and environmentally friendly.' : 'Sunray EV არის იდეალური პარტნიორი თქვენი სატრანსპორტო საქმისთვის — გთავაზობთ მაქსიმალურ ეფექტურობასა და მომგებიანობას. ეხმარება რთული ამოცანების სწრაფად და ეფექტურად შესრულებაში — დროის დამზოგველი და ეკოლოგიურად სუფთა.',
    'col_hint'      => ($lang == 'en') ? 'Select a color' : 'აირჩიეთ ფერი',
    'col_white'     => ($lang == 'en') ? 'White' : 'თეთრი',
    'col_note'      => ($lang == 'en') ? 'Models and colors may vary by regions.' : 'მოდელები და ფერები შესაძლოა განსხვავდებოდეს რეგიონების მიხედვით.',

    'hl_lbl'        => ($lang == 'en') ? 'HIGHLIGHTS' : 'მთავარი მახასიათებლები',
    'hl_title'      => ($lang == 'en') ? 'Greater benefits and profitability for your business.' : 'მეტი სარგებელი და მომგებიანობა თქვენი ბიზნესისთვის.',
    'hl_full'       => ($lang == 'en') ? 'Full Specifications' : 'სრული მახასიათებლები',

    'hl_s1_l'       => ($lang == 'en') ? 'Longer Range' : 'სვლის მარაგი',
    'hl_s1_v'       => '280-315 km',

    'hl_s2_l'       => ($lang == 'en') ? 'Battery Capacity' : 'ელემენტის ტევადობა',
    'hl_s2_v'       => '77.28 kWh',

    'hl_s3_l'       => ($lang == 'en') ? 'Cargo Weight' : 'ტვირთის წონა',
    'hl_s3_v'       => '≤1850 kg',

    'hl_s4_l'       => ($lang == 'en') ? 'DC Charging (15%-80%)' : 'DC დატენვა (15%-80%)',
    'hl_s4_v'       => '≤43 min',

    'hl_s5_l'       => ($lang == 'en') ? 'Rated / Peak Torque' : 'ნომინალური / პიკური ბრუნვა',
    'hl_s5_v'       => '320 / 920 N·m',

    'hl_s6_l'       => ($lang == 'en') ? 'Cargo Box Volume' : 'სატვირთო განყოფილების მოცულობა',
    'hl_s6_v'       => '10.5-20 m³',

    'ex_lbl'        => ($lang == 'en') ? 'EXTERIOR' : 'ექსტერიერი',
    'ex_title'      => ($lang == 'en') ? 'Designed for business.' : 'შექმნილია ბიზნესისთვის.',
    'ex_desc'       => ($lang == 'en') ? 'JAC Sunray EV offers lower maintenance costs, significant fuel savings, and a reduction in noise and air pollution.' : 'JAC Sunray EV გთავაზობთ დაბალ მომსახურების ხარჯებს, მნიშვნელოვან საწვავის ეკონომიას და ხმაურისა და ჰაერის დაბინძურების შემცირებას.',

    'ex_c1_t'       => ($lang == 'en') ? 'Modern Style' : 'თანამედროვე სტილი',
    'ex_c1_d'       => ($lang == 'en') ? 'The overall streamlined design has a low drag coefficient and a classic appearance — combining efficiency with timeless aesthetics.' : 'მთლიანი გამარტივებული დიზაინი ხასიათდება დაბალი აეროდინამიკური წინააღმდეგობითა და კლასიკური იერით — ეფექტურობისა და სტილის ერთიანი ჰარმონია.',

    'ex_c2_t'       => ($lang == 'en') ? 'Side Sliding Door & Rear Step' : 'გვერდითი მოცურებადი კარი და უკანა საფეხური',
    'ex_c2_d'       => ($lang == 'en') ? 'Facilitates access to the interior of the container, ensuring comfortable and efficient loading and unloading of merchandise.' : 'ამარტივებს საბარგო განყოფილებაში შესვლას — კომფორტული და ეფექტური დატვირთვა-გადმოტვირთვის პროცესი.',

    'ex_c3_t'       => ($lang == 'en') ? 'Rear Parking Camera & Sensors' : 'უკანა პარკირების კამერა და სენსორები',
    'ex_c3_d'       => ($lang == 'en') ? 'Assisting in reverse maneuvers, these sensors detect obstacles behind your vehicle and provide audible alerts. Combined with the rear camera, they ensure a safer and more convenient parking experience.' : 'უკუსვლისას სენსორები აღმოაჩენენ დაბრკოლებებს თქვენი ავტომობილის უკან და გაძლევენ ხმოვან შეტყობინებას. უკანა კამერასთან ერთად — უფრო უსაფრთხო და მოხერხებული პარკირება.',

    'in_lbl'        => ($lang == 'en') ? 'INTERIOR' : 'ინტერიერი',
    'in_title'      => ($lang == 'en') ? 'Step into a comfortable space.' : 'შეაბიჯე კომფორტულ სივრცეში.',
    'in_desc'       => ($lang == 'en') ? 'High comfort and easy handling. Integrated functions like cruise control, Bluetooth connectivity, and volume adjustment — easy operation that lets the driver focus on the road.' : 'მაღალი კომფორტი და მარტივი მართვა. ინტეგრირებული ფუნქციები — კრუიზ-კონტროლი, Bluetooth კავშირი, ხმის რეგულაცია — მარტივი ოპერირება საჭესთან სრული კონცენტრაციისთვის.',

    'in_c1_t'       => ($lang == 'en') ? 'Knob Shift' : 'Knob გადამრთველი',
    'in_c1_d'       => ($lang == 'en') ? 'In line with the mainstream trend of electrification — the knob panel has R, N, and D modes with back-lighting and indication functions.' : 'ელექტრიფიკაციის თანამედროვე ტრენდის შესაბამისად — knob პანელს აქვს R, N, D რეჟიმები უკანა განათებითა და ინდიკაციის ფუნქციებით.',

    'in_c2_t'       => ($lang == 'en') ? 'Digital Instrument Cluster' : 'ციფრული ინსტრუმენტების კლასტერი',
    'in_c2_d'       => ($lang == 'en') ? 'Integrated display of SOC, SOH, fault codes, and TPMS information. Multiple languages available for clear, at-a-glance vehicle information.' : 'SOC, SOH, შეცდომის კოდებისა და TPMS ინფორმაციის ინტეგრირებული ჩვენება. მრავალენოვანი მხარდაჭერა — ინფორმაცია ერთი შეხედვით.',

    'in_c3_t'       => ($lang == 'en') ? 'MP5 + Reverse Camera' : 'MP5 + უკანა კამერა',
    'in_c3_d'       => ($lang == 'en') ? 'Integrated MP5 system with Bluetooth, CarPlay, Android Auto, and reverse image support. Available in English, Spanish, Portuguese, and Russian.' : 'ინტეგრირებული MP5 სისტემა Bluetooth-ით, CarPlay-ით, Android Auto-სა და უკანა კამერის მხარდაჭერით. ხელმისაწვდომია ინგლისურ, ესპანურ, პორტუგალიურ და რუსულ ენებზე.',

    'in_c4_t'       => ($lang == 'en') ? 'EPB + Auto Hold' : 'EPB + Auto Hold',
    'in_c4_d'       => ($lang == 'en') ? 'EPB caliper achieves up to 25.8 kN clamping force — parking on a 30% slope with full load. Auto Hold prevents slipping during short-term parking or traffic on slopes.' : 'EPB-ს აქვს 25.8 kN-მდე სამაგრი ძალა — სრული დატვირთვით პარკირება 30%-იან ფერდობზე. Auto Hold თავიდან გაცილებთ გადაცურვას მოკლევადიანი პარკირების ან ფერდობზე გადატვირთვის დროს.',

    'cg_lbl'        => ($lang == 'en') ? 'FLEXIBLE BODY' : 'მოქნილი კორპუსი',
    'cg_title'      => ($lang == 'en') ? 'Ample space for every journey.' : 'უხვი სივრცე ყოველი მოგზაურობისთვის.',
    'cg_desc'       => ($lang == 'en') ? 'Provides ample space for transportation, allowing bulky objects to be moved efficiently and optimizing productivity in distribution and delivery operations.' : 'უზრუნველყოფს უხვ სივრცეს ტრანსპორტირებისთვის — მოცულობითი ობიექტების ეფექტური გადაადგილება, რომელიც აოპტიმიზებს პროდუქტიულობას დისტრიბუციისა და მიწოდების ოპერაციებში.',

    'cg_c1_t'       => ($lang == 'en') ? '270° Rear Door Opening' : '270° უკანა კარის გახსნა',
    'cg_c1_d'       => ($lang == 'en') ? 'Rear door opens up to 270° (6m), enabling effortless loading and unloading from multiple angles.' : 'უკანა კარი იხსნება 270°-მდე (6მ), რაც უზრუნველყოფს მარტივ დატვირთვა-გადმოტვირთვას სხვადასხვა კუთხიდან.',

    'cg_c2_t'       => ($lang == 'en') ? 'Handrails & Sliding Door' : 'სახელურები და მოცურებადი კარი',
    'cg_c2_d'       => ($lang == 'en') ? 'Handrails for safe boarding and a right-side sliding door for easy access in tight urban spaces.' : 'სახელურები უსაფრთხო ჩასხდომისთვის და მარჯვენა მხრიდან მოცურებადი კარი — მარტივი შესვლა ქალაქის ვიწრო სივრცეებში.',

    'cg_c3_t'       => ($lang == 'en') ? 'Interior Lighting' : 'შიდა განათება',
    'cg_c3_d'       => ($lang == 'en') ? 'Full interior lighting inside the cargo body for efficient loading operations even in low-light conditions.' : 'სრული შიდა განათება სატვირთო განყოფილებაში — ეფექტური დატვირთვის ოპერაციები დაბალი განათების პირობებშიც.',

    'cg_c4_t'       => ($lang == 'en') ? 'Cargo Fixing Hooks' : 'ტვირთის დამაგრების კაუჭები',
    'cg_c4_d'       => ($lang == 'en') ? '3 pairs / 6 sets of cargo fixing hooks, evenly distributed inside the cargo box to secure goods at different positions.' : '3 წყვილი / 6 კომპლექტი ტვირთის დამაგრების კაუჭები — თანაბრად განაწილებული სატვირთო განყოფილებაში, სხვადასხვა პოზიციაზე ტვირთის დასამაგრებლად.',

    'cg_c5_t'       => ($lang == 'en') ? 'Full-Size Spare Tire' : 'სრული ზომის სათადარიგო საბურავი',
    'cg_c5_d'       => ($lang == 'en') ? 'Full-size spare tire mounted under the chassis — reduces waiting and repair time during tire blowouts, improving vehicle operational efficiency.' : 'სრული ზომის სათადარიგო საბურავი დამაგრებულია შასის ქვეშ — ამცირებს მოცდისა და რემონტის დროს საბურავის დაზიანებისას, აუმჯობესებს ოპერაციულ ეფექტურობას.',

    'bt_lbl'        => ($lang == 'en') ? 'BATTERY & TECHNOLOGY' : 'ელემენტი და ტექნოლოგია',
    'bt_title'      => ($lang == 'en') ? 'Built for endurance.' : 'შექმნილი გამძლეობისთვის.',
    'bt_desc'       => ($lang == 'en') ? 'Powered by CATL\'s 77.28 kWh third-generation LFP battery — safer, more reliable, and more durable. IP68 waterproof, with up to 8 years or 400,000 km warranty.' : 'აღჭურვილია CATL-ის 77.28 kWh მესამე თაობის LFP ელემენტით — უფრო უსაფრთხო, საიმედო და გამძლე. IP68 წყალგაუმტარი, 8 წლამდე ან 400,000 კმ გარანტიით.',

    'bt_c1_t'       => ($lang == 'en') ? 'Temperature Adaptability' : 'ტემპერატურული ადაპტაცია',
    'bt_c1_d'       => ($lang == 'en') ? 'Electric heating system adapted to ambient temperatures of -10°C to 40°C. More resistant to high temperatures with better thermal stability than ternary systems.' : 'ელექტრული გათბობის სისტემა ადაპტირებულია გარემოს -10°C-დან 40°C-მდე ტემპერატურაზე. უფრო მედეგი მაღალ ტემპერატურებზე, გაუმჯობესებული თერმული სტაბილურობით.',

    'bt_c2_t'       => ($lang == 'en') ? 'Long Service Life' : 'ხანგრძლივი მომსახურების ვადა',
    'bt_c2_d'       => ($lang == 'en') ? 'Ultra-high cycle LFP system with industry-leading reliability control and full-process AI testing for maximum longevity.' : 'ულტრა-მაღალი ციკლის LFP სისტემა ინდუსტრიის ლიდერი საიმედოობის კონტროლითა და სრული პროცესის AI ტესტირებით — მაქსიმალური გამძლეობისთვის.',

    'bt_c3_t'       => ($lang == 'en') ? 'Strong Protection (IP68)' : 'ძლიერი დაცვა (IP68)',
    'bt_c3_d'       => ($lang == 'en') ? 'Protection up to IP68 / IP6K9K with "chassis armor". Withstands stone impacts below 15mm — worry-free in wind, rain, and water.' : 'IP68 / IP6K9K დონის დაცვა "შასის ჯავშნით". უძლებს 15მმ-ზე ნაკლები ქვის დარტყმებს — უდარდლო ქარში, წვიმასა და წყალში.',

    'bt_c4_t'       => ($lang == 'en') ? 'High Safety & Reliability' : 'მაღალი უსაფრთხოება და საიმედოობა',
    'bt_c4_d'       => ($lang == 'en') ? 'High-safety LFP cells with ultra-high-strength box structure. Meets GB and ISO safety standards with reliability and durability verification.' : 'მაღალი უსაფრთხოების LFP უჯრედები ულტრა-მაღალი სიმტკიცის კორპუსის სტრუქტურით. აკმაყოფილებს GB და ISO უსაფრთხოების სტანდარტებს.',

    'bt_c5_t'       => ($lang == 'en') ? 'System Integration' : 'სისტემის ინტეგრაცია',
    'bt_c5_d'       => ($lang == 'en') ? 'High-level system integration with advanced thermal management for optimal battery cycle capacity retention.' : 'მაღალი დონის სისტემის ინტეგრაცია დახვეწილი თერმული მართვით — ელემენტის ციკლის ტევადობის ოპტიმალური შენარჩუნება.',

    'sf_lbl'        => ($lang == 'en') ? 'HIGH SAFETY' : 'მაღალი უსაფრთხოება',
    'sf_title'      => ($lang == 'en') ? 'Active protection in every drive.' : 'აქტიური დაცვა ყოველ მგზავრობაზე.',

    'sf_c1_t'       => ($lang == 'en') ? 'ESC (Electronic Stability Control)' : 'ESC (ელექტრონული სტაბილურობის კონტროლი)',
    'sf_c1_d'       => ($lang == 'en') ? 'ESC synchronously realizes ABS, AYC, TCS, and HSA safety functions — transforming from passive to active safety protection.' : 'ESC სინქრონულად რეალიზებს ABS, AYC, TCS და HSA უსაფრთხოების ფუნქციებს — პასიური უსაფრთხოებიდან აქტიურ დაცვამდე ტრანსფორმაცია.',

    'sf_c2_t'       => ($lang == 'en') ? 'Good Gradeability' : 'შესანიშნავი ფერდობის გადალახვა',
    'sf_c2_d'       => ($lang == 'en') ? 'Sunray EV has strong climbing ability and can conquer a 30% gradient with full load — reliable performance in any terrain.' : 'Sunray EV-ს აქვს მძლავრი ასვლის უნარი და შეუძლია დაძლიოს 30% ფერდობი სრული დატვირთვით — საიმედო წარმადობა ნებისმიერ რელიეფზე.',
];

$pdf_link = "https://jacen.jac.com.cn/pdf/sunray-ev.pdf";
?>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/models/sunrayev.css">

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

<main class="sunrayev-page font-sans bg-white text-gray-900">

    <section id="sunrayev-hero" class="relative h-[85vh] min-h-[500px] flex items-end overflow-hidden">
        <picture class="absolute inset-0 z-0">
            <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_01_02.9245042.jpg">
            <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_01_02.8535849.jpg" 
                 alt="JAC Sunray EV" 
                 class="w-full h-full object-cover">
        </picture>

        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-black/30 z-10"></div>

        <div class="relative z-20 w-full px-5 md:px-12 lg:px-20 pb-10 md:pb-24">
            <div class="max-w-7xl mx-auto sunrayev-fade-up">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-3 py-1.5 rounded-full mb-4 md:mb-6">
                    <span class="w-1.5 h-1.5 bg-jac-green rounded-full animate-pulse"></span>
                    <span class="text-[10px] md:text-xs font-bold text-white uppercase tracking-widest"><?php echo esc_html($t['hero_badge']); ?></span>
                </div>

                <h1 class="text-3xl md:text-7xl lg:text-7xl font-black text-white tracking-tight leading-tight md:leading-[1] mb-3 md:mb-5 pb-1">
                    <?php echo esc_html($t['hero_title']); ?>
                </h1>

                <p class="text-lg md:text-2xl lg:text-4xl font-light text-white/95 max-w-3xl leading-snug">
                    <?php echo esc_html($t['hero_sub']); ?>
                </p>
            </div>
        </div>
    </section>

    <nav id="sunrayev-subnav" class="sticky top-[75px] bg-black text-white z-[990] border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-3 md:px-4">
            <div class="flex items-center justify-between h-14 md:h-16">
                <div class="hidden lg:block font-black text-lg tracking-wider whitespace-nowrap">
                    JAC Sunray EV
                </div>

                <ul class="flex items-center gap-4 md:gap-7 overflow-x-auto scrollbar-hide whitespace-nowrap flex-1 lg:flex-none lg:justify-end">
                    <li><a href="#overview" class="subnav-link active"><?php echo esc_html($t['nav_overview']); ?></a></li>
                    <li><a href="#specs" class="subnav-link"><?php echo esc_html($t['nav_specs']); ?></a></li>
                    <li><a href="#exterior" class="subnav-link"><?php echo esc_html($t['nav_exterior']); ?></a></li>
                    <li><a href="#interior" class="subnav-link"><?php echo esc_html($t['nav_interior']); ?></a></li>
                    <li><a href="#cargo" class="subnav-link"><?php echo esc_html($t['nav_cargo']); ?></a></li>
                    <li><a href="#battery" class="subnav-link"><?php echo esc_html($t['nav_battery']); ?></a></li>
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
            <div class="text-center mb-10 md:mb-14 sunrayev-fade-up">
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

            <div class="relative sunrayev-fade-up delay-200">
                <div class="py-4 md:py-8">
                    <img id="sunrayev-main-color-img"
                         src="https://jacen.jac.com.cn/_nuxt/img/SunrayEV-002.0f42809.png" 
                         alt="JAC Sunray EV White"
                         class="w-full max-w-4xl mx-auto h-auto object-contain transition-opacity duration-500">
                </div>

                <div class="mt-4 md:mt-6 text-center">
                    <p class="text-[10px] md:text-xs font-bold tracking-widest text-gray-500 uppercase mb-4"><?php echo esc_html($t['col_hint']); ?></p>
                    <div class="flex justify-center flex-wrap gap-3 md:gap-4 mb-4">
                        <button class="color-dot active"
                                data-name="<?php echo esc_attr($t['col_white']); ?>"
                                data-img="https://jacen.jac.com.cn/_nuxt/img/SunrayEV-002.0f42809.png"
                                style="background: linear-gradient(145deg, #f8f8f8, #e0e0e0);">
                            <i class="fa-solid fa-check text-black text-xs opacity-0 check-icon"></i>
                        </button>
                    </div>
                    <p class="text-sm md:text-base font-bold text-black mb-2" id="color-name"><?php echo esc_html($t['col_white']); ?></p>
                    <p class="text-[10px] md:text-xs text-gray-500"><?php echo esc_html($t['col_note']); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="specs" class="py-14 md:py-24 bg-black text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">

            <div class="text-center max-w-4xl mx-auto mb-10 md:mb-16 sunrayev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['hl_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['hl_title']); ?>
                </h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center">

                <div class="order-2 lg:order-1 sunrayev-fade-up">
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
                        <div class="spec-box sunrayev-fade-up" style="animation-delay: <?php echo $i * 60; ?>ms;">
                            <p class="text-[10px] md:text-xs font-bold uppercase tracking-widest text-white/50 mb-1.5">
                                <?php echo esc_html($spec['l']); ?>
                            </p>
                            <p class="text-lg md:text-xl lg:text-2xl font-black text-white leading-snug">
                                <?php echo esc_html($spec['v']); ?>
                            </p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="order-1 lg:order-2 sunrayev-fade-up delay-200">
                    <div class="sunrayev-showcase sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/CAR.6ba0e8e.png" 
                             alt="JAC Sunray EV" 
                             class="w-full h-auto object-contain">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="exterior" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 sunrayev-fade-up">
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
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center sunrayev-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/sun1.a40eb1e.jpg" 
                             alt="Modern Style" 
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

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center sunrayev-fade-up">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/sun3.3b98c98.jpg" 
                             alt="Side Sliding Door" 
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

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center sunrayev-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/sun5.9194dd9.jpg" 
                             alt="Rear Parking" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 bg-jac-red/10 px-3 py-1 rounded-full mb-3">
                            <i class="fa-solid fa-camera text-jac-red text-xs"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">360° Vision</span>
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
            <div class="text-center mb-10 md:mb-14 sunrayev-fade-up">
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

            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 sunrayev-fade-up sunrayev-image-hover">
                <img src="https://jacen.jac.com.cn/_nuxt/img/step.f507a62.png" 
                     alt="JAC Sunray EV Interior" 
                     class="w-full h-auto object-cover">
            </div>

            <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                <div class="feature-card-dark sunrayev-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_02_03.950b2c7.jpg" 
                             alt="Knob Shift" 
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

                <div class="feature-card-dark sunrayev-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_02_05.4a60219.jpg" 
                             alt="Instrument" 
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

                <div class="feature-card-dark sunrayev-fade-up delay-200">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_02_07.e92be0c.jpg" 
                             alt="MP5" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <i class="fa-brands fa-bluetooth text-jac-green"></i>
                            <i class="fa-brands fa-apple text-white/60"></i>
                            <i class="fa-brands fa-android text-white/60"></i>
                        </div>
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['in_c3_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_c3_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-dark sunrayev-fade-up delay-300">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_02_09.2440db0.jpg" 
                             alt="EPB Auto Hold" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <span class="text-[10px] md:text-xs font-bold text-jac-green uppercase tracking-widest">25.8 kN • 30%</span>
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
    </section>

    <section id="cargo" class="py-14 md:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 sunrayev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['cg_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['cg_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['cg_desc']); ?>
                </p>
            </div>

            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 sunrayev-fade-up sunrayev-image-hover bg-white">
                <img src="https://jacen.jac.com.cn/_nuxt/img/sun.aa09b5f.png" 
                     alt="Sunray EV Cargo Space" 
                     class="w-full h-auto object-contain">
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                <div class="feature-card-light sunrayev-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_03_03.0557070.jpg" 
                             alt="270° Rear Door" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-2">
                            <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">270° / 6m</span>
                        </div>
                        <h3 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['cg_c1_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['cg_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light sunrayev-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_03_05.839de89.jpg" 
                             alt="Handrails Sliding Door" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <h3 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['cg_c2_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['cg_c2_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light sunrayev-fade-up delay-200">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_03_09.f6aa372.jpg" 
                             alt="Interior Lighting" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-2">
                            <i class="fa-solid fa-lightbulb text-yellow-500"></i>
                        </div>
                        <h3 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['cg_c3_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['cg_c3_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light sunrayev-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_03_11.8f1b3e9.jpg" 
                             alt="Cargo Hooks" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-2">
                            <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">3 × 2 / 6 Sets</span>
                        </div>
                        <h3 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['cg_c4_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['cg_c4_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light sunrayev-fade-up delay-100 md:col-span-2 lg:col-span-2">
                    <div class="md:flex gap-0">
                        <div class="md:w-1/2 overflow-hidden sunrayev-image-hover rounded-t-2xl md:rounded-t-none md:rounded-l-3xl">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_03_13.949ecc8.jpg" 
                                 alt="Spare Tire" 
                                 class="w-full h-full object-cover aspect-[4/3] md:aspect-auto">
                        </div>
                        <div class="md:w-1/2 p-5 md:p-8 flex flex-col justify-center">
                            <div class="inline-flex items-center gap-2 mb-2">
                                <i class="fa-solid fa-shield-halved text-jac-green"></i>
                                <span class="text-[10px] md:text-xs font-bold text-jac-green uppercase tracking-widest">Full-Size</span>
                            </div>
                            <h3 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 leading-snug">
                                <?php echo esc_html($t['cg_c5_t']); ?>
                            </h3>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                <?php echo esc_html($t['cg_c5_d']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="battery" class="py-14 md:py-24 bg-gradient-to-br from-green-50 via-white to-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 sunrayev-fade-up">
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

            <div class="flex flex-wrap justify-center gap-3 md:gap-4 mb-10 md:mb-14 sunrayev-fade-up">
                <div class="battery-stat">
                    <span class="text-2xl md:text-3xl font-black text-jac-green">77.28</span>
                    <span class="text-xs md:text-sm font-bold text-gray-600">kWh</span>
                </div>
                <div class="battery-stat">
                    <span class="text-2xl md:text-3xl font-black text-jac-green">8</span>
                    <span class="text-xs md:text-sm font-bold text-gray-600"><?php echo ($lang == 'en') ? 'Years' : 'წელი'; ?></span>
                </div>
                <div class="battery-stat">
                    <span class="text-2xl md:text-3xl font-black text-jac-green">400K</span>
                    <span class="text-xs md:text-sm font-bold text-gray-600">km</span>
                </div>
                <div class="battery-stat">
                    <span class="text-2xl md:text-3xl font-black text-jac-green">IP68</span>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                <div class="feature-card-light sunrayev-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_04_03.cf19660.jpg" 
                             alt="Temperature" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-2">
                            <i class="fa-solid fa-temperature-half text-jac-red"></i>
                            <span class="text-[10px] md:text-xs font-bold text-gray-700 uppercase tracking-widest">-10°C ~ 40°C</span>
                        </div>
                        <h3 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['bt_c1_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['bt_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light sunrayev-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_04_05.cc040d5.jpg" 
                             alt="Service Life" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-2">
                            <i class="fa-solid fa-battery-full text-jac-green"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-green uppercase tracking-widest">Ultra LFP</span>
                        </div>
                        <h3 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['bt_c2_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['bt_c2_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light sunrayev-fade-up delay-200">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_04_07.38d2249.jpg" 
                             alt="IP68 Protection" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-2">
                            <i class="fa-solid fa-droplet text-blue-500"></i>
                            <span class="text-[10px] md:text-xs font-bold text-blue-500 uppercase tracking-widest">IP68 / IP6K9K</span>
                        </div>
                        <h3 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['bt_c3_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['bt_c3_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light sunrayev-fade-up md:col-span-2 lg:col-span-1">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_04_09.6db6549.jpg" 
                             alt="Safety Reliability" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-2">
                            <i class="fa-solid fa-shield-halved text-jac-green"></i>
                            <span class="text-[10px] md:text-xs font-bold text-gray-700 uppercase tracking-widest">GB / ISO</span>
                        </div>
                        <h3 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['bt_c4_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['bt_c4_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light sunrayev-fade-up delay-100 md:col-span-2">
                    <div class="md:flex gap-0">
                        <div class="md:w-1/2 overflow-hidden sunrayev-image-hover rounded-t-2xl md:rounded-t-none md:rounded-l-3xl">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/Sunray-EV_04_11.a4e6ed1.jpg" 
                                 alt="System Integration" 
                                 class="w-full h-full object-cover aspect-[4/3] md:aspect-auto">
                        </div>
                        <div class="md:w-1/2 p-5 md:p-8 flex flex-col justify-center">
                            <div class="inline-flex items-center gap-2 mb-2">
                                <i class="fa-solid fa-microchip text-jac-red"></i>
                                <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">CATL</span>
                            </div>
                            <h3 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 leading-snug">
                                <?php echo esc_html($t['bt_c5_t']); ?>
                            </h3>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                <?php echo esc_html($t['bt_c5_d']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="safety" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 sunrayev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['sf_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['sf_title']); ?>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                <div class="feature-card-light sunrayev-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/h1.fbe0e76.jpg" 
                             alt="ESC" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <i class="fa-solid fa-gauge-high text-jac-red"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">ESC • ABS • AYC • TCS • HSA</span>
                        </div>
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['sf_c1_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['sf_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light sunrayev-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden sunrayev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/h3.d25859e.jpg" 
                             alt="Gradeability" 
                             class="w-full h-auto object-cover aspect-[16/10]">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex items-baseline gap-2 mb-3">
                            <span class="text-3xl md:text-4xl font-black text-jac-green">30</span>
                            <span class="text-sm md:text-base text-gray-500 uppercase tracking-widest font-semibold">% Gradient</span>
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

</main>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/models/sunrayev.js"></script>

<?php get_footer(); ?>
