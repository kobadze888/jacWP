<?php

/**
 * Template Name: Model - T9 EV
 */
get_header();

$lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';

$t = [
    'hero_title'    => 'JAC T9 EV',
    'hero_sub'      => ($lang == 'en') ? 'Born to Explore!' : 'დაბადებული აღმოსაჩენად!',
    'hero_badge'    => ($lang == 'en') ? 'Electric Pickup' : 'ელექტრო პიკაპი',

    'nav_overview'  => ($lang == 'en') ? 'Overview' : 'მიმოხილვა',
    'nav_specs'     => ($lang == 'en') ? 'Specs' : 'მახასიათებლები',
    'nav_exterior'  => ($lang == 'en') ? 'Exterior' : 'ექსტერიერი',
    'nav_interior'  => ($lang == 'en') ? 'Interior' : 'ინტერიერი',
    'nav_intel'     => ($lang == 'en') ? 'Intelligent' : 'ინტელექტუალური',
    'nav_chassis'   => ($lang == 'en') ? 'Chassis' : 'შასი',
    'nav_perf'      => ($lang == 'en') ? 'Performance' : 'წარმადობა',
    'nav_safety'    => ($lang == 'en') ? 'Safety' : 'უსაფრთხოება',
    'nav_brochure'  => ($lang == 'en') ? 'Brochure' : 'ბროშურა',

    'ov_title'      => ($lang == 'en') ? 'Born to Explore.' : 'დაბადებული აღმოსაჩენად.',
    'ov_desc'       => ($lang == 'en') ? 'JAC T9 EV Pickup, built on JAC\'s exclusive platform for medium and large intelligent pickups, features CATL\'s latest 88.02 kWh LFP battery, enabling a range of over 330 kilometers.' : 'JAC T9 EV Pickup აგებულია JAC-ის ექსკლუზიურ პლატფორმაზე საშუალო და დიდი ინტელექტუალური პიკაპებისთვის და აღჭურვილია CATL-ის უახლესი 88.02 kWh LFP ელემენტით — სვლის მარაგი 330 კილომეტრზე მეტია.',
    'watch_video'   => ($lang == 'en') ? 'Watch video' : 'ვიდეოს ნახვა',
    'col_hint'      => ($lang == 'en') ? 'Select a color' : 'აირჩიეთ ფერი',
    'col_red'       => ($lang == 'en') ? 'Red' : 'წითელი',
    'col_note'      => ($lang == 'en') ? 'Models and colors may vary by regions.' : 'მოდელები და ფერები შესაძლოა განსხვავდებოდეს რეგიონების მიხედვით.',

    'hl_lbl'        => ($lang == 'en') ? 'HIGHLIGHTS' : 'მთავარი მახასიათებლები',
    'hl_title'      => ($lang == 'en') ? 'JAC T9 EV Pickup is your good workmate.' : 'JAC T9 EV Pickup — თქვენი საუკეთესო სამუშაო პარტნიორი.',
    'hl_full'       => ($lang == 'en') ? 'Full Specifications' : 'სრული მახასიათებლები',

    'hl_s1_l'       => ($lang == 'en') ? 'Front Motor Power / Torque' : 'წინა ძრავის სიმძლავრე / ბრუნვა',
    'hl_s1_v'       => '70 kW / 176 N·m',

    'hl_s2_l'       => ($lang == 'en') ? 'Battery Capacity' : 'ელემენტის ტევადობა',
    'hl_s2_v'       => '88.02 kWh',

    'hl_s3_l'       => ($lang == 'en') ? 'Rear Motor Power / Torque' : 'უკანა ძრავის სიმძლავრე / ბრუნვა',
    'hl_s3_v'       => '150 kW / 340 N·m',

    'hl_s4_l'       => ($lang == 'en') ? 'AC Charging Time (15%-100%)' : 'AC დატენვის დრო (15%-100%)',
    'hl_s4_v'       => '8.3 h',

    'hl_s5_l'       => ($lang == 'en') ? 'DC Charging Time (15%-80%)' : 'DC დატენვის დრო (15%-80%)',
    'hl_s5_v'       => '0.75 h',

    'hl_s6_l'       => ($lang == 'en') ? 'Dimensions (L×W×H)' : 'ზომები (L×W×H)',
    'hl_s6_v'       => '5330×1965×1920 mm',

    'ex_lbl'        => ($lang == 'en') ? 'EXTERIOR' : 'ექსტერიერი',
    'ex_title'      => ($lang == 'en') ? 'Dare to venture.' : 'გაბედე ვენტურა.',
    'ex_desc'       => ($lang == 'en') ? 'Aggressive and muscular front face. The design of JAC T9 EV Pickup front grille is inspired by the Chinese ancient tripod.' : 'აგრესიული და მუსკულატურული წინა სახე. JAC T9 EV Pickup-ის ცხაურის დიზაინი შთაგონებულია ძველი ჩინური სამფეხა ძეგლით.',

    'ex_c1_t'       => ($lang == 'en') ? 'LED Lighting System' : 'LED განათების სისტემა',
    'ex_c1_d'       => ($lang == 'en') ? 'LED daytime running lights, flowing turn lights, LED headlights with Automatic lighting and Follow-me-home function, plus LED fog lights.' : 'LED დღის განათება, ნაკადიანი მოხვევის შუქი, LED ფარები ავტომატური განათებითა და Follow-me-home ფუნქციით, პლუს LED ნისლის ფარები.',

    'ex_c2_t'       => ($lang == 'en') ? 'Bi-Color Aluminum Alloy Rims' : 'ორფერი ალუმინის შენადნობის დისკები',
    'ex_c2_d'       => ($lang == 'en') ? 'Bi-color aluminum alloy rims give a more fashionable appearance. 265/60R18 tires balance urban SUV comfort with off-road performance on non-paved surfaces.' : 'ორფერი ალუმინის დისკები უფრო მოდური იერს ანიჭებს. 265/60R18 საბურავები აერთიანებს ქალაქური SUV-ის კომფორტსა და გზაშიდა წარმადობას არასავლელ ზედაპირებზე.',

    'ex_c3_t'       => ($lang == 'en') ? 'Double Vertical LED Taillights' : 'ორმაგი ვერტიკალური LED უკანა ფარები',
    'ex_c3_d'       => ($lang == 'en') ? 'Double vertical strip LED taillights, full of strength. High recognition after lighting during night.' : 'ორმაგი ვერტიკალური LED უკანა ფარები — ძალის სიმბოლო. ღამის განათებისას მაღალი გამორჩევადობით.',

    'ex_c4_t'       => ($lang == 'en') ? 'Enjoy a Comfortable Journey' : 'ისიამოვნეთ კომფორტული მგზავრობით',
    'ex_c4_d'       => ($lang == 'en') ? 'The front grille design is inspired by the Chinese ancient tripod. Aggressive and muscular front face — full of strength.' : 'ცხაურის დიზაინი შთაგონებულია ძველი ჩინური სამფეხა ძეგლით. აგრესიული და მუსკულატურული წინა სახე — სავსე ძალით.',

    'in_lbl'        => ($lang == 'en') ? 'INTERIOR' : 'ინტერიერი',
    'in_title'      => ($lang == 'en') ? 'Feel at home.' : 'იგრძენი თავი სახლში.',
    'in_desc'       => ($lang == 'en') ? 'JAC T9 EV Pickup offers 5 driving modes — standard, economic, sport, snow, and off-road.' : 'JAC T9 EV Pickup გთავაზობთ 5 მართვის რეჟიმს — სტანდარტული, ეკონომიური, სპორტული, თოვლი და ოფროუდი.',

    'in_c1_t'       => ($lang == 'en') ? '"T" Type Dashboard' : '"T" ტიპის ინსტრუმენტების დაფა',
    'in_c1_d'       => ($lang == 'en') ? '"T" type design dashboard with a large amount of soft material. 64-color ambient light supporting breathing and rhythm modes.' : '"T" ტიპის დიზაინის ინსტრუმენტების დაფა დიდი რაოდენობის რბილი მასალით. 64-ფერადი ატმოსფერული განათება სუნთქვისა და რიტმის რეჟიმებით.',

    'in_c2_t'       => ($lang == 'en') ? 'Multifunctional Steering Wheel' : 'მრავალფუნქციური საჭე',
    'in_c2_d'       => ($lang == 'en') ? 'Two-spoke steering wheel supporting audio control, cruise control, and Bluetooth telephone.' : 'ორსხივიანი საჭე აუდიო კონტროლის, კრუიზ-კონტროლისა და Bluetooth ტელეფონის მხარდაჭერით.',

    'in_c3_t'       => ($lang == 'en') ? 'Large Glove Box' : 'დიდი სათავსო',
    'in_c3_d'       => ($lang == 'en') ? 'Big-size glove box with the air-damping structure for smooth, silent operation.' : 'დიდი სათავსო ჰაერით დემფირებული სტრუქტურით — გლუვი და უხმო მუშაობისთვის.',

    'int_lbl'       => ($lang == 'en') ? 'INTELLIGENT' : 'ინტელექტუალური',
    'int_title'     => ($lang == 'en') ? 'Technology at your fingertip.' : 'ტექნოლოგია თქვენს ხელთ.',

    'int_c1_t'      => ($lang == 'en') ? 'Support Entertainment' : 'გართობის მხარდაჭერა',
    'int_c1_d'      => ($lang == 'en') ? '10.4-inch touchscreen with Apple CarPlay and Android Auto smartphone connectivity.' : '10.4-დუიმიანი სენსორული ეკრანი Apple CarPlay-სა და Android Auto-ს მხარდაჭერით.',

    'int_c2_t'      => ($lang == 'en') ? 'Easy Charging' : 'მარტივი დატენვა',
    'int_c2_d'      => ($lang == 'en') ? '50W high-power wireless charging for your smartphone.' : '50W მაღალი სიმძლავრის უსადენო დატენვა თქვენი სმარტფონისთვის.',

    'int_c3_t'      => ($lang == 'en') ? 'Easy Driving' : 'მარტივი მართვა',
    'int_c3_d'      => ($lang == 'en') ? 'Electrical Park Brake (EPB), Auto Hold, and 5 driving modes: Normal / Sport / Eco / Snow / Offroad.' : 'ელექტრული პარკირების მუხრუჭი (EPB), Auto Hold და 5 მართვის რეჟიმი: Normal / Sport / Eco / Snow / Offroad.',

    'ch_lbl'        => ($lang == 'en') ? 'CHASSIS' : 'შასი',
    'ch_title'      => ($lang == 'en') ? 'Make your journeys extraordinary.' : 'გააკეთე შენი მგზავრობა განსაკუთრებული.',

    'ch_c1_t'       => ($lang == 'en') ? 'Reinforced Trapezoidal Frame' : 'გაძლიერებული ტრაპეციული ჩარჩო',
    'ch_c1_d'       => ($lang == 'en') ? 'Variable cross-section trapezoidal reinforced frame delivers better rigidity and torsional strength.' : 'ცვლადი განივი კვეთის ტრაპეციული გაძლიერებული ჩარჩო გთავაზობთ უკეთეს სიმტკიცესა და გრეხის საწინააღმდეგო ძალას.',

    'ch_c2_t'       => ($lang == 'en') ? 'Full-Size Spare Tire' : 'სრული ზომის სათადარიგო საბურავი',
    'ch_c2_d'       => ($lang == 'en') ? 'Full-size spare tire ensures safety when emergencies occur.' : 'სრული ზომის სათადარიგო საბურავი უზრუნველყოფს უსაფრთხოებას გადაუდებელ სიტუაციებში.',

    'ch_c3_t'       => ($lang == 'en') ? 'Integrated Power Brake (IPB)' : 'ინტეგრირებული სამუხრუჭე სისტემა (IPB)',
    'ch_c3_d'       => ($lang == 'en') ? 'Integrated Power Brake System (IPB) provides excellent braking performance.' : 'ინტეგრირებული სამუხრუჭე სისტემა (IPB) გთავაზობთ შესანიშნავ სამუხრუჭე წარმადობას.',

    'ch_c4_t'       => ($lang == 'en') ? '88.02 kWh CATL LFP Battery' : '88.02 kWh CATL LFP ელემენტი',
    'ch_c4_d'       => ($lang == 'en') ? '88.02 kWh CATL LFP battery with domain controller for intelligent power management.' : '88.02 kWh CATL LFP ელემენტი დომენის კონტროლერით — ინტელექტუალური ენერგომართვისთვის.',

    'ch_c5_t'       => ($lang == 'en') ? '70kW Front Drive Motor' : '70kW წინა ძრავი',
    'ch_c5_d'       => ($lang == 'en') ? 'Front drive motor delivers 70kW of peak power for balanced all-wheel performance.' : 'წინა ძრავი უზრუნველყოფს 70kW პიკის სიმძლავრეს ბალანსირებული სრული წამყვანი წარმადობისთვის.',

    'ch_c6_t'       => ($lang == 'en') ? '150kW Rear Drive Motor' : '150kW უკანა ძრავი',
    'ch_c6_d'       => ($lang == 'en') ? 'Rear drive motor delivers 150kW of peak power — the heart of dynamic acceleration.' : 'უკანა ძრავი უზრუნველყოფს 150kW პიკის სიმძლავრეს — დინამიური აჩქარების გული.',

    'pf_lbl'        => ($lang == 'en') ? 'PERFORMANCE' : 'წარმადობა',
    'pf_title'      => ($lang == 'en') ? 'JAC T9 EV Pickup is beyond your expectation.' : 'JAC T9 EV Pickup აღემატება თქვენს მოლოდინებს.',

    'pf_s1_n'       => '2000',
    'pf_s1_u'       => 'kg',
    'pf_s1_l'       => ($lang == 'en') ? 'Max Towing Capacity' : 'მაქს. ბუქსირების შესაძლებლობა',

    'pf_s2_n'       => '140',
    'pf_s2_u'       => 'km/h',
    'pf_s2_l'       => ($lang == 'en') ? 'Max Speed' : 'მაქს. სიჩქარე',

    'pf_s3_n'       => '8.4',
    'pf_s3_u'       => 's',
    'pf_s3_l'       => ($lang == 'en') ? '0-100 km/h Acceleration' : '0-100 კმ/სთ აჩქარება',

    'pf_s4_n'       => '516',
    'pf_s4_u'       => 'N·m',
    'pf_s4_l'       => ($lang == 'en') ? 'Peak Torque' : 'მაქს. ბრუნვა',

    'sf_lbl'        => ($lang == 'en') ? 'SAFETY' : 'უსაფრთხოება',
    'sf_title'      => ($lang == 'en') ? 'Robust body for bumpy road.' : 'მტკიცე კორპუსი რთული გზებისთვის.',

    'sf_c1_t'       => ($lang == 'en') ? 'Birdcage-Style Frame' : 'Birdcage-ტიპის ჩარჩო',
    'sf_c1_d'       => ($lang == 'en') ? '"Birdcage-style" frame structure body with 47% advanced high-strength steel. Two reinforced side impact beams in each door effectively reduce occupant injury in side collisions.' : '"Birdcage"-ტიპის ჩარჩო კონსტრუქცია 47% მაღალი სიმტკიცის ფოლადით. თითოეულ კარს აქვს ორი გაძლიერებული გვერდითი დარტყმის საყრდენი, რომელიც ამცირებს დაზიანებას გვერდითი შეჯახებისას.',

    'sf_c2_t'       => ($lang == 'en') ? 'Blind Spot Detection (BSD)' : 'ბრმა წერტილის დეტექცია (BSD)',
    'sf_c2_d'       => ($lang == 'en') ? 'Blind Spot Detection monitors your blind spots and alerts you to vehicles approaching from behind.' : 'BSD სისტემა აკონტროლებს ბრმა წერტილებს და გაფრთხილებთ უკნიდან მიახლოებული ავტომობილების შესახებ.',

    'sf_c3_t'       => ($lang == 'en') ? 'Rear Cross Traffic Alert (RCTA)' : 'უკანა განივი მოძრაობის გაფრთხილება (RCTA)',
    'sf_c3_d'       => ($lang == 'en') ? 'RCTA warns you of approaching vehicles when reversing out of a parking spot.' : 'RCTA გაფრთხილებთ მიახლოებული ავტომობილების შესახებ პარკინგიდან უკუსვლისას.',

    'sf_c4_t'       => ($lang == 'en') ? 'Door Open Warning (DOW)' : 'კარის გახსნის გაფრთხილება (DOW)',
    'sf_c4_d'       => ($lang == 'en') ? 'DOW alerts you before opening doors if approaching vehicles or cyclists are detected.' : 'DOW გაფრთხილებთ კარის გახსნამდე, თუ აღმოაჩენს მიახლოებულ ავტომობილებს ან ველოსიპედისტებს.',

    'sf_c5_t'       => ($lang == 'en') ? 'Rear Collision Warning (RCW)' : 'უკანა შეჯახების გაფრთხილება (RCW)',
    'sf_c5_d'       => ($lang == 'en') ? 'RCW detects rear-approaching vehicles and warns of potential collision risks.' : 'RCW ამჩნევს უკნიდან მიახლოებულ ავტომობილებს და გაფრთხილებთ შესაძლო შეჯახების რისკის შესახებ.',

    'cta_btn'       => ($lang == 'en') ? 'Download Brochure' : 'ბროშურის ჩამოტვირთვა',
];

$pdf_link = "https://jacen.jac.com.cn/pdf/t9ev.pdf";
$video_url = "https://jacen.jac.com.cn/video/models/T9EV.mp4";
?>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/models/t9ev.css">

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

<main class="t9ev-page font-sans bg-white text-gray-900">

    <section id="t9ev-hero" class="relative h-[85vh] min-h-[500px] flex items-end overflow-hidden">
        <picture class="absolute inset-0 z-0">
            <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/T9_phone_01_02.1d16cf3.png">
            <img src="https://jacen.jac.com.cn/_nuxt/img/banner-web.ecc0aaf.png" 
                 alt="JAC T9 EV Pickup" 
                 class="w-full h-full object-cover">
        </picture>

        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-black/30 z-10"></div>

        <div class="relative z-20 w-full px-5 md:px-12 lg:px-20 pb-10 md:pb-24">
            <div class="max-w-7xl mx-auto t9ev-fade-up">
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

    <nav id="t9ev-subnav" class="sticky top-[75px] bg-black text-white z-[990] border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-3 md:px-4">
            <div class="flex items-center justify-between h-14 md:h-16">
                <div class="hidden lg:block font-black text-lg tracking-wider whitespace-nowrap">
                    JAC T9 EV
                </div>

                <ul class="flex items-center gap-4 md:gap-7 overflow-x-auto scrollbar-hide whitespace-nowrap flex-1 lg:flex-none lg:justify-end">
                    <li><a href="#overview" class="subnav-link active"><?php echo esc_html($t['nav_overview']); ?></a></li>
                    <li><a href="#specs" class="subnav-link"><?php echo esc_html($t['nav_specs']); ?></a></li>
                    <li><a href="#exterior" class="subnav-link"><?php echo esc_html($t['nav_exterior']); ?></a></li>
                    <li><a href="#interior" class="subnav-link"><?php echo esc_html($t['nav_interior']); ?></a></li>
                    <li><a href="#intelligent" class="subnav-link"><?php echo esc_html($t['nav_intel']); ?></a></li>
                    <li><a href="#chassis" class="subnav-link"><?php echo esc_html($t['nav_chassis']); ?></a></li>
                    <li><a href="#performance" class="subnav-link"><?php echo esc_html($t['nav_perf']); ?></a></li>
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
            <div class="text-center mb-10 md:mb-14 t9ev-fade-up">
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

            <div class="relative t9ev-fade-up delay-200">
                <div class="py-4 md:py-8">
                    <img id="t9ev-main-color-img"
                         src="https://jacen.jac.com.cn/_nuxt/img/Red.f8ec396.png" 
                         alt="JAC T9 EV Red"
                         class="w-full max-w-4xl mx-auto h-auto object-contain transition-opacity duration-500">
                </div>

                <div class="mt-4 md:mt-6 text-center">
                    <p class="text-[10px] md:text-xs font-bold tracking-widest text-gray-500 uppercase mb-4"><?php echo esc_html($t['col_hint']); ?></p>
                    <div class="flex justify-center flex-wrap gap-3 md:gap-4 mb-4">
                        <button class="color-dot active"
                                data-name="<?php echo esc_attr($t['col_red']); ?>"
                                data-img="https://jacen.jac.com.cn/_nuxt/img/Red.f8ec396.png"
                                style="background: linear-gradient(145deg, #b91c1c, #7f1d1d);">
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
                <div class="t9ev-fade-up">
                    <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                        <?php echo esc_html($t['hl_lbl']); ?>
                    </span>
                    <div class="w-10 h-0.5 bg-jac-red mb-4 md:mb-6"></div>
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-black leading-snug md:leading-tight mb-4 md:mb-0 pb-1">
                        <?php echo esc_html($t['hl_title']); ?>
                    </h2>
                </div>
                <div class="t9ev-fade-up delay-200 lg:text-right">
                    <button id="t9ev-video-trigger" 
                            class="inline-flex items-center gap-2 text-jac-red border-b-2 border-jac-red pb-1 font-bold text-xs md:text-sm hover:text-white hover:border-white transition-all duration-500 cursor-pointer">
                        <i class="fa-solid fa-circle-play"></i>
                        <?php echo esc_html($t['watch_video']); ?>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
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
                <div class="spec-box t9ev-fade-up" style="animation-delay: <?php echo $i * 80; ?>ms;">
                    <p class="text-[10px] md:text-xs font-bold uppercase tracking-widest text-white/50 mb-2">
                        <?php echo esc_html($spec['l']); ?>
                    </p>
                    <p class="text-xl md:text-2xl lg:text-3xl font-black text-white leading-snug">
                        <?php echo esc_html($spec['v']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="exterior" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 t9ev-fade-up">
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
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center t9ev-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_0201_03.8428897.jpg" 
                             alt="LED Lighting" 
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

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center t9ev-fade-up">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_0201_05.584c828.jpg" 
                             alt="Aluminum Rims" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="lg:order-1">
                        <div class="inline-flex items-center gap-2 bg-gray-100 px-3 py-1 rounded-full mb-3">
                            <span class="text-[10px] md:text-xs font-bold text-gray-700 uppercase tracking-widest">265/60R18</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['ex_c2_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ex_c2_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center t9ev-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_0201_07.61946c4.jpg" 
                             alt="LED Taillights" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['ex_c3_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ex_c3_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center t9ev-fade-up">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_0201_09.15dce59.jpg" 
                             alt="Front Grille" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="lg:order-1">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                            <?php echo esc_html($t['ex_c4_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ex_c4_d']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="interior" class="py-14 md:py-24 bg-gradient-to-br from-gray-900 to-black text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">
            <div class="text-center mb-10 md:mb-14 t9ev-fade-up">
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

            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 t9ev-fade-up t9ev-image-hover">
                <img src="https://jacen.jac.com.cn/_nuxt/img/INTERIORIMAGE.ad58120.jpg" 
                     alt="JAC T9 EV Interior" 
                     class="w-full h-auto object-cover">
            </div>

            <div class="grid md:grid-cols-3 gap-4 md:gap-6">
                <div class="feature-card-dark t9ev-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_04_03.c0315dd.jpg" 
                             alt="T Type Dashboard" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <h3 class="text-lg md:text-xl font-bold mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['in_c1_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-dark t9ev-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_04_05.b58981b.jpg" 
                             alt="Steering Wheel" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <h3 class="text-lg md:text-xl font-bold mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['in_c2_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_c2_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-dark t9ev-fade-up delay-200">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_04_07.9e97654.jpg" 
                             alt="Glove Box" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <h3 class="text-lg md:text-xl font-bold mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['in_c3_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_c3_d']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="intelligent" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 t9ev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['int_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['int_title']); ?>
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-4 md:gap-6">
                <div class="feature-card-light t9ev-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/tech.b182e9c.png" 
                             alt="Entertainment" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <i class="fa-solid fa-display text-jac-red"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">10.4"</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['int_c1_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['int_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light t9ev-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/JAC_066.ae49cbe.png" 
                             alt="Wireless Charging" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <i class="fa-solid fa-bolt text-jac-green"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-green uppercase tracking-widest">50W</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['int_c2_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['int_c2_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light t9ev-fade-up delay-200">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/JAC_054.263810e.png" 
                             alt="Easy Driving" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <i class="fa-solid fa-gears text-gray-700"></i>
                            <span class="text-[10px] md:text-xs font-bold text-gray-700 uppercase tracking-widest">EPB</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-black mb-2 md:mb-3 leading-snug">
                            <?php echo esc_html($t['int_c3_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['int_c3_d']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="chassis" class="py-14 md:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 t9ev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['ch_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['ch_title']); ?>
                </h2>
            </div>

            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 t9ev-fade-up t9ev-image-hover">
                <img src="https://jacen.jac.com.cn/_nuxt/img/classic.5291915.png" 
                     alt="JAC T9 EV Chassis" 
                     class="w-full h-auto object-cover">
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                <div class="feature-card-light t9ev-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_004_03.49db118.jpg" 
                             alt="Reinforced Frame" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <h3 class="text-base md:text-lg font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['ch_c1_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ch_c1_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light t9ev-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_004_05.898f03e.jpg" 
                             alt="Spare Tire" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <h3 class="text-base md:text-lg font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['ch_c2_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ch_c2_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light t9ev-fade-up delay-200">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_004_07.28225fd.jpg" 
                             alt="IPB" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <h3 class="text-base md:text-lg font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['ch_c3_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ch_c3_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light t9ev-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_004_09.29cf528.jpg" 
                             alt="CATL Battery" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-2">
                            <i class="fa-solid fa-battery-full text-jac-green"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-green uppercase tracking-widest">CATL LFP</span>
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['ch_c4_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ch_c4_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light t9ev-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_004_11.a7d89e1.jpg" 
                             alt="Front Motor" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-2">
                            <i class="fa-solid fa-arrow-up text-gray-700"></i>
                            <span class="text-[10px] md:text-xs font-bold text-gray-700 uppercase tracking-widest">70 kW</span>
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['ch_c5_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ch_c5_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light t9ev-fade-up delay-200">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_004_13.48682d7.jpg" 
                             alt="Rear Motor" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-7">
                        <div class="inline-flex items-center gap-2 mb-2">
                            <i class="fa-solid fa-arrow-down text-jac-red"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">150 kW</span>
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['ch_c6_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ch_c6_d']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="performance" class="py-14 md:py-24 bg-gradient-to-br from-red-50 via-white to-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 t9ev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['pf_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['pf_title']); ?>
                </h2>
            </div>

            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 t9ev-fade-up t9ev-image-hover">
                <img src="https://jacen.jac.com.cn/_nuxt/img/JAC_110.b891d4b.png" 
                     alt="T9 EV Performance" 
                     class="w-full h-auto object-cover">
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                <?php 
                $perf_stats = [
                    ['n' => $t['pf_s1_n'], 'u' => $t['pf_s1_u'], 'l' => $t['pf_s1_l']],
                    ['n' => $t['pf_s2_n'], 'u' => $t['pf_s2_u'], 'l' => $t['pf_s2_l']],
                    ['n' => $t['pf_s3_n'], 'u' => $t['pf_s3_u'], 'l' => $t['pf_s3_l']],
                    ['n' => $t['pf_s4_n'], 'u' => $t['pf_s4_u'], 'l' => $t['pf_s4_l']],
                ];
                foreach ($perf_stats as $i => $stat):
                ?>
                <div class="perf-stat-card t9ev-fade-up" style="transition-delay: <?php echo $i * 80; ?>ms;">
                    <div class="flex items-baseline gap-1 mb-3 md:mb-4">
                        <span class="text-3xl md:text-5xl font-black text-black leading-none"><?php echo esc_html($stat['n']); ?></span>
                        <span class="text-sm md:text-lg font-bold text-jac-red"><?php echo esc_html($stat['u']); ?></span>
                    </div>
                    <p class="text-xs md:text-sm text-gray-600 uppercase tracking-wider font-semibold leading-snug">
                        <?php echo esc_html($stat['l']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="safety" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 t9ev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['sf_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-snug md:leading-tight pb-1">
                    <?php echo esc_html($t['sf_title']); ?>
                </h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center mb-10 md:mb-16 t9ev-fade-up">
                <div class="rounded-2xl md:rounded-3xl overflow-hidden t9ev-image-hover">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_005_03.8df4bae.jpg" 
                         alt="Birdcage Frame" 
                         class="w-full h-auto object-cover">
                </div>
                <div>
                    <div class="inline-flex items-center gap-2 bg-jac-red/10 px-3 py-1 rounded-full mb-3">
                        <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">47% HSS</span>
                    </div>
                    <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-snug">
                        <?php echo esc_html($t['sf_c1_t']); ?>
                    </h3>
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                        <?php echo esc_html($t['sf_c1_d']); ?>
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                <div class="feature-card-light t9ev-fade-up">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_005_05.2f4bf2d.jpg" 
                             alt="BSD" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-6">
                        <div class="inline-flex items-center gap-2 mb-2">
                            <i class="fa-solid fa-eye text-jac-red"></i>
                            <span class="text-[10px] font-bold text-jac-red uppercase tracking-widest">BSD</span>
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['sf_c2_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['sf_c2_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light t9ev-fade-up delay-100">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_005_07.00d7fc9.jpg" 
                             alt="RCTA" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-6">
                        <div class="inline-flex items-center gap-2 mb-2">
                            <i class="fa-solid fa-car-side text-jac-red"></i>
                            <span class="text-[10px] font-bold text-jac-red uppercase tracking-widest">RCTA</span>
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['sf_c3_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['sf_c3_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light t9ev-fade-up delay-200">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_005_09.c915d7e.jpg" 
                             alt="DOW" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-6">
                        <div class="inline-flex items-center gap-2 mb-2">
                            <i class="fa-solid fa-door-open text-jac-red"></i>
                            <span class="text-[10px] font-bold text-jac-red uppercase tracking-widest">DOW</span>
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['sf_c4_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['sf_c4_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="feature-card-light t9ev-fade-up delay-300">
                    <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden t9ev-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/T9EV_005_11.138a9f6.jpg" 
                             alt="RCW" 
                             class="w-full h-auto object-cover aspect-[4/3]">
                    </div>
                    <div class="p-5 md:p-6">
                        <div class="inline-flex items-center gap-2 mb-2">
                            <i class="fa-solid fa-triangle-exclamation text-jac-red"></i>
                            <span class="text-[10px] font-bold text-jac-red uppercase tracking-widest">RCW</span>
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-black mb-2 leading-snug">
                            <?php echo esc_html($t['sf_c5_t']); ?>
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['sf_c5_d']); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10 md:mt-14">
                <a href="<?php echo esc_url($pdf_link); ?>" target="_blank"
                   class="group inline-flex items-center gap-2 md:gap-3 bg-black text-white px-6 md:px-8 py-3 md:py-4 rounded-full font-bold text-sm md:text-base hover:bg-jac-red transition-all duration-500 hover:scale-[1.02] shadow-lg">
                    <i class="fa-regular fa-file-pdf text-lg md:text-xl"></i>
                    <?php echo esc_html($t['cta_btn']); ?>
                </a>
            </div>
        </div>
    </section>

    <div id="t9ev-video-modal" class="video-modal">
        <div class="video-modal-backdrop"></div>
        <button class="video-modal-close" id="t9ev-video-close" aria-label="Close video">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="video-modal-content">
            <div class="video-modal-wrapper">
                <video id="t9ev-modal-video" controls playsinline preload="metadata">
                    <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                </video>
            </div>
        </div>
    </div>

</main>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/models/t9ev.js"></script>

<?php get_footer(); ?>
