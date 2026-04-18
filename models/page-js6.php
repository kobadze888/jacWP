<?php

/**
 * Template Name: Model - JS6 2026
 * 
 * იზოლირებული მოდელი — საკუთარი Tailwind CSS-ით და JS-ით
 * HTTPS მედია ლინკებით (http→https)
 */
get_header();

$lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';

// ==========================================
// ენების ლექსიკონი
// ==========================================
$t = [
    // HERO
    'hero_title'    => 'JS6 2026',
    'hero_sub'      => ($lang == 'en') ? 'Comfort in every mile.' : 'კომფორტი ყოველ მილზე.',
    'hero_badge'    => ($lang == 'en') ? 'Smart Family SUV' : 'ჭკვიანი საოჯახო SUV',

    // NAV
    'nav_overview'  => ($lang == 'en') ? 'Overview' : 'მიმოხილვა',
    'nav_specs'     => ($lang == 'en') ? 'Specs' : 'მახასიათებლები',
    'nav_gallery'   => ($lang == 'en') ? 'Gallery' : 'გალერეა',
    'nav_exterior'  => ($lang == 'en') ? 'Exterior' : 'ექსტერიერი',
    'nav_interior'  => ($lang == 'en') ? 'Interior' : 'ინტერიერი',
    'nav_power'     => ($lang == 'en') ? 'Powertrain' : 'ძრავი',
    'nav_safety'    => ($lang == 'en') ? 'Safety' : 'უსაფრთხოება',
    'nav_smart'     => ($lang == 'en') ? 'Intelligent' : 'ინტელექტი',
    'nav_brochure'  => ($lang == 'en') ? 'Brochure' : 'ბროშურა',

    // OVERVIEW
    'ov_title'      => ($lang == 'en') ? 'More than an SUV.' : 'მეტი ვიდრე SUV.',
    'ov_desc'       => ($lang == 'en') ? 'The JS6 2026 is your family\'s trusted companion on every journey. Featuring an all-new cutting-edge design, a redesigned interior, and state-of-the-art smart technology, it brings enhanced safety, superior comfort, and intelligent convenience to every drive.' : 'JS6 2026 არის თქვენი ოჯახის სანდო თანამგზავრი ყოველ მოგზაურობაზე. სრულიად ახალი დიზაინი, განახლებული ინტერიერი და უახლესი ტექნოლოგიები გთავაზობთ გაძლიერებულ უსაფრთხოებას, ულტრა კომფორტს და ინტელექტუალურ მოხერხებულობას.',
    'col_hint'      => ($lang == 'en') ? 'Select a color' : 'აირჩიეთ ფერი',
    'col_white'     => ($lang == 'en') ? 'White' : 'თეთრი',
    'col_blue'      => ($lang == 'en') ? 'Blue' : 'ლურჯი',
    'col_black'     => ($lang == 'en') ? 'Black' : 'შავი',
    'col_gray'      => ($lang == 'en') ? 'Gray' : 'ნაცრისფერი',
    'col_red'       => ($lang == 'en') ? 'Red' : 'წითელი',
    'col_note'      => ($lang == 'en') ? 'Models and colors may vary by regions.' : 'მოდელები და ფერები შესაძლოა განსხვავდებოდეს რეგიონების მიხედვით.',

    // HIGHLIGHTS
    'hl_lbl'        => ($lang == 'en') ? 'HIGHLIGHTS' : 'მთავარი მახასიათებლები',
    'hl_title'      => 'JAC JS6 2026',
    'hl_full'       => ($lang == 'en') ? 'Full Specifications' : 'სრული მახასიათებლები',

    'hl_s1_l'       => ($lang == 'en') ? 'Powertrain' : 'ძრავი',
    'hl_s1_v'       => '1.5TGDI+7DCT',
    'hl_s2_l'       => ($lang == 'en') ? 'Maximum Power' : 'მაქს. სიმძლავრე',
    'hl_s2_v'       => '135 kW',
    'hl_s3_l'       => ($lang == 'en') ? 'Maximum Torque' : 'მაქს. ბრუნვის მომენტი',
    'hl_s3_v'       => '280 N·m',
    'hl_s4_l'       => ($lang == 'en') ? 'Fuel Consumption' : 'საწვავის ხარჯი',
    'hl_s4_v'       => '7.8 L/100km',
    'hl_s5_l'       => ($lang == 'en') ? 'Wheelbase' : 'ბაზა',
    'hl_s5_v'       => '4650 mm',
    'hl_s6_l'       => ($lang == 'en') ? 'Fuel Tank' : 'საწვავის ბაკი',
    'hl_s6_v'       => '55 L',

    // GALLERY
    'gal_title'     => ($lang == 'en') ? 'Refreshed and progressive.' : 'განახლებული და პროგრესული.',
    'gal_exterior'  => ($lang == 'en') ? 'Exterior' : 'ექსტერიერი',
    'gal_interior'  => ($lang == 'en') ? 'Interior' : 'ინტერიერი',

    // EXTERIOR
    'ex_lbl'        => ($lang == 'en') ? 'EXTERIOR' : 'ექსტერიერი',
    'ex_title'      => ($lang == 'en') ? 'The JS6 2026, smart family SUV.' : 'JS6 2026 — ჭკვიანი საოჯახო SUV.',
    'ex_sub'        => ($lang == 'en') ? 'A bold evolution in design.' : 'თამამი ევოლუცია დიზაინში.',
    'ex_desc'       => ($lang == 'en') ? 'The JS6 2026 embodies a striking evolution in SUV design, delivering a sporty and passionate presence on every road. Its dynamic silhouette and sculpted lines create an athletic stance with unmatched visual impact. The New JS6 isn\'t just designed to be seen — it\'s designed to be remembered.' : 'JS6 2026 განასახიერებს SUV-ის დიზაინის შთამბეჭდავ ევოლუციას, ავლენს სპორტულ და ენერგიულ ყოფნას ყოველ გზაზე. მისი დინამიური სილუეტი და მოქანდაკე ხაზები ქმნის ათლეტურ მდგომარეობას უბადლო ვიზუალური ეფექტით.',

    // EXTERIOR EXPLORE (Full)
    'ex_e1_t'       => ($lang == 'en') ? 'Stellar Aesthetic Front Grille' : 'ვარსკვლავური ესთეტიკის წინა ცხაური',
    'ex_e1_d'       => ($lang == 'en') ? 'Inspired by the infinite beauty of the night sky, the JS6 2026 stellar aesthetic front grille redefines elegance and power.' : 'ღამის ცის უსასრულო სილამაზის შთაგონებით, JS6 2026-ის ვარსკვლავური ცხაური ახლებურად განსაზღვრავს ელეგანტურობასა და ძალას.',

    'ex_e2_t'       => ($lang == 'en') ? 'Light the Way with Innovation' : 'ინოვაცია გზის გასანათებლად',
    'ex_e2_d'       => ($lang == 'en') ? 'Full-width daytime running lights and penetrating matrix LED headlights create a striking, futuristic presence, while the continuous taillight design enhances rear visibility and adds a high-tech elegance.' : 'სრული სიგანის დღის განათება და Matrix LED ფარები ქმნის შთამბეჭდავ, ფუტურისტულ იერს, ხოლო უწყვეტი უკანა განათება აუმჯობესებს ხილვადობას და ჰაი-ტექ ელეგანტურობას ამატებს.',

    'ex_e3_t'       => ($lang == 'en') ? 'Dynamic Style from the Ground Up' : 'დინამიური სტილი მიწიდან',
    'ex_e3_d'       => ($lang == 'en') ? 'The JS6 2026 dual-tone aluminum alloy wheels combine precision engineering with a sporty aesthetic.' : 'JS6 2026-ის ორფერიანი ალუმინის დისკები აერთიანებს ზუსტ ინჟინერიას სპორტულ ესთეტიკასთან.',

    // INTERIOR
    'in_lbl'        => ($lang == 'en') ? 'INTERIOR' : 'ინტერიერი',
    'in_title'      => ($lang == 'en') ? 'A perfect blend of technology and sophistication.' : 'ტექნოლოგიისა და დახვეწილობის იდეალური შერწყმა.',
    'in_sub'        => ($lang == 'en') ? 'A refined space for every journey.' : 'დახვეწილი სივრცე ყოველი მოგზაურობისთვის.',
    'in_desc'       => ($lang == 'en') ? 'The JS6 2026 dual-tone interior creates a warm and inviting atmosphere, blending modern elegance with everyday comfort.' : 'JS6 2026-ის ორფერიანი ინტერიერი ქმნის თბილ და მიმზიდველ ატმოსფეროს, რომელშიც თანამედროვე ელეგანტურობა ერწყმის ყოველდღიურ კომფორტს.',

    // INTERIOR EXPLORE
    'in_e1_t'       => ($lang == 'en') ? '24.6-inch Dual Screen' : '24.6-დუიმიანი ორმაგი ეკრანი',
    'in_e1_d'       => ($lang == 'en') ? 'The JS6 2026 features a 24.6-inch seamless smart dual screen with a sleek, integrated design. Choose from three dynamic display themes and enjoy immersive visuals, rich content, and intuitive controls — all in one premium interface.' : 'JS6 2026 გთავაზობთ 24.6-დუიმიან უწყვეტ ჭკვიან ორმაგ ეკრანს მოხდენილი, ინტეგრირებული დიზაინით. აირჩიეთ სამი დინამიური თემიდან და დატკბით დახვეწილი ვიზუალით ერთიან პრემიუმ ინტერფეისში.',

    'in_e2_t'       => ($lang == 'en') ? 'Electronic Shift Knob' : 'ელექტრონული გადამრთველი',
    'in_e2_d'       => ($lang == 'en') ? 'Take control with the JS6 2026 precision-designed electronic shift knob. Featuring a diamond-cut finish, it offers smooth, intuitive operation — rotate to drive or reverse, press to park.' : 'აიღეთ კონტროლი JS6 2026-ის ზუსტად დამუშავებული ელექტრონული გადამრთველით. ბრილიანტური მოჭრის დახვეწილობით, გთავაზობთ ინტუიციურ მოქმედებას — შემოატრიალეთ მოძრაობისთვის, დააჭირეთ პარკინგისთვის.',

    'in_e3_t'       => ($lang == 'en') ? 'Physical AC Controls' : 'ფიზიკური კლიმატის კონტროლი',
    'in_e3_d'       => ($lang == 'en') ? 'Safety-focused physical buttons and durable climate knobs designed for blind operation — reducing distraction while driving.' : 'უსაფრთხოებაზე ორიენტირებული ფიზიკური ღილაკები და გამძლე კლიმატ-კონტროლის რეგულატორები, შექმნილია ყურადღების გაფანტვის შესამცირებლად.',

    'in_e4_t'       => ($lang == 'en') ? 'Ambient Lighting' : 'ატმოსფერული განათება',
    'in_e4_d'       => ($lang == 'en') ? 'Inspired by the four seasons, the ambient lighting system offers modes including static glow, breathing effect, and rhythm sync with music.' : 'ოთხი სეზონის შთაგონებით შექმნილი ატმოსფერული განათების სისტემა გთავაზობთ რეჟიმებს: სტატიკური ნათება, სუნთქვის ეფექტი და მუსიკის რიტმთან სინქრონი.',

    'in_e5_t'       => ($lang == 'en') ? '3D Ergonomic Seats' : '3D ერგონომიული სავარძლები',
    'in_e5_d'       => ($lang == 'en') ? 'Game-style electronic leather seats with 3D ergonomic design, precisely optimized with 2,329 support points across the shoulders, waist, and hips for a sofa-like seating experience.' : 'სპორტული სტილის ელექტრო ტყავის სავარძლები 3D ერგონომიული დიზაინით, ზუსტად ოპტიმიზებული 2,329 საყრდენი წერტილით მხრებზე, წელზე და თეძოებზე — დივანისებური ჯდომის გამოცდილებისთვის.',

    // POWERTRAIN
    'pw_lbl'        => ($lang == 'en') ? 'POWERTRAIN' : 'ძალოვანი აგრეგატი',
    'pw_title'      => ($lang == 'en') ? 'Vigorous Power' : 'ენერგიული ძალა',
    'pw_desc'       => ($lang == 'en') ? 'Equipped with a 7-speed Dual-Clutch Transmission and a Gasoline Direct Injection turbocharged engine featuring dual camshafts and Double Variable Valve Timing.' : 'აღჭურვილია 7-საფეხურიანი ორმაგი გადაბმულობის ტრანსმისიით (7DCT) და ბენზინის პირდაპირი შხეფვის ტურბო ძრავით, ორმაგი ბალანსირი და ორმაგი ცვლადი სარქვლის დროითი სისტემით (VVT).',

    'pw_f1_t'       => ($lang == 'en') ? '7-Speed DCT + 1.5TGDI' : '7-საფეხურიანი DCT + 1.5TGDI',
    'pw_f1_d'       => ($lang == 'en') ? 'Dual-clutch transmission paired with direct injection turbocharged engine.' : 'ორმაგი გადაბმულობის ტრანსმისია პირდაპირი შხეფვის ტურბო ძრავთან.',

    'pw_f2_n'       => '300',
    'pw_f2_u'       => 'N·m',
    'pw_f2_t'       => ($lang == 'en') ? 'Maximum Torque' : 'მაქს. ბრუნვის მომენტი',
    'pw_f2_d'       => ($lang == 'en') ? 'Impressive 200 N·m per liter torque output.' : 'შთამბეჭდავი 200 N·m ბრუნვის მომენტი ლიტრზე.',

    'pw_f3_n'       => '9.8',
    'pw_f3_u'       => 's',
    'pw_f3_t'       => ($lang == 'en') ? '0-100 km/h' : '0-100 კმ/სთ',
    'pw_f3_d'       => ($lang == 'en') ? '30-60 km/h in just 2.8 seconds for confident overtaking.' : '30-60 კმ/სთ მხოლოდ 2.8 წამში — თავდაჯერებული გასწრებისთვის.',

    // SAFETY
    'sf_lbl'        => ($lang == 'en') ? 'SAFETY' : 'უსაფრთხოება',
    'sf_title'      => ($lang == 'en') ? 'Beyond protection.' : 'დაცვაზე მეტი.',
    'sf_desc'       => ($lang == 'en') ? 'Designed with everyday practicality and passenger protection in mind, the JS6 2026 keeps your family safe — wherever the road takes you.' : 'ყოველდღიური პრაქტიკულობისა და მგზავრთა დაცვის გათვალისწინებით, JS6 2026 იცავს თქვენს ოჯახს — სადაც არ უნდა გიხმოთ გზამ.',

    'sf_c1_t'       => ($lang == 'en') ? 'Family Safety & Convenience' : 'ოჯახის უსაფრთხოება და მოხერხებულობა',
    'sf_c1_l1'      => ($lang == 'en') ? 'Child Safety Locks for Rear Doors' : 'ბავშვის უსაფრთხოების საკეტები უკანა კარებზე',
    'sf_c1_l2'      => ($lang == 'en') ? 'One-Touch Up/Down Function for All Windows' : 'ერთი შეხების ფანჯრების მართვა',
    'sf_c1_l3'      => ($lang == 'en') ? 'Anti-Pinch Protection' : 'ჩაკვრისგან დაცვა',
    'sf_c1_l4'      => ($lang == 'en') ? 'Electronic Visual Door Lock System' : 'ელექტრონული ვიზუალური კარის საკეტი',

    'sf_c2_t'       => ($lang == 'en') ? '6-Airbag Protection System' : '6 უსაფრთხოების ბალიშის სისტემა',
    'sf_c2_d'       => ($lang == 'en') ? 'Provides comprehensive protection for all occupants, significantly reducing the risk of injury.' : 'უზრუნველყოფს ყველა მგზავრის ყოვლისმომცველ დაცვას და მნიშვნელოვნად ამცირებს დაზიანების რისკს.',

    'sf_c3_t'       => ($lang == 'en') ? 'Five-Star Safety Rating' : '5-ვარსკვლავიანი უსაფრთხოების რეიტინგი',
    'sf_c3_d'       => ($lang == 'en') ? 'JS6 2026 has earned a prestigious 5-star rating in the C-NCAP crash test, showcasing its commitment to top-tier safety.' : 'JS6 2026-მა დაიმსახურა პრესტიჟული 5-ვარსკვლავიანი რეიტინგი C-NCAP crash test-ში, რაც მოწმობს უმაღლესი დონის უსაფრთხოებაზე.',

    // INTELLIGENT
    'sm_lbl'        => ($lang == 'en') ? 'INTELLIGENT' : 'ინტელექტი',
    'sm_title'      => ($lang == 'en') ? 'Smarter every drive.' : 'უფრო ჭკვიანი ყოველ მგზავრობაზე.',

    'sm_c1_t'       => ($lang == 'en') ? 'Convenience & Smart Access' : 'მოხერხებულობა და ჭკვიანი წვდომა',
    'sm_c1_h1'      => ($lang == 'en') ? 'Keyless Entry & One-Touch Fuel Cap' : 'გასაღების გარეშე შესვლა და ერთი შეხების საწვავის საცობი',
    'sm_c1_d1'      => ($lang == 'en') ? 'Unlock, lock, and start the JS6 2026 remotely with the 5-button smart key. Enjoy keyless entry, one-touch fuel cap release, and remote engine start.' : 'დისტანციურად განბლოკეთ, ჩაკეტეთ და დაუშვით JS6 2026 5-ღილაკიანი ჭკვიანი გასაღებით. ისიამოვნეთ უგასაღებო შესვლით, ერთი შეხების საწვავის საცობით და ძრავის დისტანციურად დაშვებით.',
    'sm_c1_h2'      => ($lang == 'en') ? 'Electric & Sensor-Activated Tailgate' : 'ელექტრო და სენსორული უკანა კარი',
    'sm_c1_d2'      => ($lang == 'en') ? 'Open the tailgate effortlessly. When your hands are full, simply kick beneath the rear bumper for hands-free access.' : 'ადვილად გააღეთ უკანა კარი. როცა ხელები დაკავებული გაქვთ, უბრალოდ დაარტყით ფეხი უკანა ბამპერის ქვეშ — ხელის გარეშე წვდომისთვის.',

    'sm_c2_t'       => ($lang == 'en') ? 'Driving Ease & Safety' : 'მართვის სიმარტივე და უსაფრთხოება',
    'sm_c2_h1'      => ($lang == 'en') ? 'Electric Parking Brake with AUTOHOLD' : 'ელექტრო სადგომი მუხრუჭი AUTOHOLD-ით',
    'sm_c2_d1'      => ($lang == 'en') ? 'Automatically engages based on body level and wheel torque, preventing rolling when parked. Modern, effortless, and secure.' : 'ავტომატურად ერთვება კორპუსის დონისა და ბორბლის ბრუნვის მომენტის მიხედვით, ხელს უშლის დაგორებას. თანამედროვე, ადვილი და უსაფრთხო.',
    'sm_c2_h2'      => ($lang == 'en') ? '360° Panoramic View' : '360° პანორამული ხედი',
    'sm_c2_d2'      => ($lang == 'en') ? 'Equipped with 4-megapixel high-definition cameras for a crystal-clear 360° view — eliminating blind spots and making tight spaces easy to navigate.' : '4-მეგაპიქსელიანი HD კამერები უზრუნველყოფს კრისტალურ 360° ხედვას — აქრობს ბრმა ზონებს და ამარტივებს ვიწრო სივრცეებში მანევრირებას.',

    'sm_c3_t'       => ($lang == 'en') ? 'Comfort & Technology' : 'კომფორტი და ტექნოლოგიები',
    'sm_c3_h1'      => ($lang == 'en') ? 'NVH Package' : 'NVH პაკეტი',
    'sm_c3_d1'      => ($lang == 'en') ? 'Engineered for a quiet, refined ride — minimizes noise, vibration, and harshness, so you can enjoy every drive in peace.' : 'შექმნილია მშვიდი, დახვეწილი მგზავრობისთვის — ამცირებს ხმაურს, ვიბრაციას და უხეშობას.',
    'sm_c3_h2'      => ($lang == 'en') ? 'Wireless Charging & Connectivity' : 'უსადენო დატენვა და კავშირი',
    'sm_c3_d2'      => ($lang == 'en') ? 'Charge your smartphone wirelessly and enjoy seamless CarPlay and Android Auto integration.' : 'უსადენოდ დაუტენეთ სმარტფონი და ისიამოვნეთ CarPlay-ისა და Android Auto-ს უწყვეტი ინტეგრაციით.',

    // CTA
    'cta_title'     => ($lang == 'en') ? 'Start your journey with JS6 2026' : 'დაიწყეთ მოგზაურობა JS6 2026-თან ერთად',
    'cta_desc'      => ($lang == 'en') ? 'Download the full brochure for complete specifications and configurations.' : 'ჩამოტვირთეთ სრული ბროშურა დეტალური მახასიათებლებისა და კონფიგურაციებისთვის.',
    'cta_btn'       => ($lang == 'en') ? 'Download Brochure' : 'ბროშურის ჩამოტვირთვა',
    'cta_dealer'    => ($lang == 'en') ? 'Find a Dealer' : 'იპოვე დილერი',
];

$pdf_link = "https://jacen.jac.com.cn/pdf/js62026.pdf";
$dealer_link = "https://jacen.jac.com.cn/forowners/findadealer/";

// Exterior gallery images (HTTPS)
$ext_gallery = [
    'https://jacen.jac.com.cn/_nuxt/img/e1.359c1a3.png',
    'https://jacen.jac.com.cn/_nuxt/img/e2.207f88a.png',
    'https://jacen.jac.com.cn/_nuxt/img/e3.245778f.png',
    'https://jacen.jac.com.cn/_nuxt/img/e4.fe15884.png',
    'https://jacen.jac.com.cn/_nuxt/img/e5.93f34bf.png',
];
// Interior gallery images (HTTPS)
$int_gallery = [
    'https://jacen.jac.com.cn/_nuxt/img/in1.44af619.png',
    'https://jacen.jac.com.cn/_nuxt/img/in2.23a599f.png',
    'https://jacen.jac.com.cn/_nuxt/img/in3.035dc0c.png',
    'https://jacen.jac.com.cn/_nuxt/img/in4.e107138.png',
    'https://jacen.jac.com.cn/_nuxt/img/in5.694c793.png',
];
?>

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>

 

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
                    'jac-premium': '#1a1a1a',
                    'jac-gold': '#c9a961',
                },
            },
        },
    };
</script>

<main class="js6-page font-sans bg-white text-gray-900">

    <!-- ============================================= -->
    <!-- 1. HERO SECTION                               -->
    <!-- ============================================= -->
    <section id="js6-hero" class="relative h-[85vh] min-h-[500px] flex items-end overflow-hidden">
<picture class="absolute inset-0 z-0">
            <source media="(max-width: 768px)" srcset="https://jacen.jac.com.cn/_nuxt/img/js62026-sjbanner.523f7d0.png">
            <img src="https://jacen.jac.com.cn/_nuxt/img/js6-new.328bdb6.png" 
                 alt="JAC JS6 2026" 
                 class="w-full h-full object-cover">
        </picture>

        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-black/30 z-10"></div>

        <div class="relative z-20 w-full px-5 md:px-12 lg:px-20 pb-10 md:pb-24">
            <div class="max-w-7xl mx-auto js6-fade-up flex justify-start">
                <div class="max-w-md">
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-2.5 py-1 rounded-full mb-3 md:mb-4">
                        <span class="w-1.5 h-1.5 bg-jac-gold rounded-full"></span>
                        <span class="text-[9px] md:text-[10px] font-bold text-white uppercase tracking-widest">2026 · <?php echo esc_html($t['hero_badge']); ?></span>
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

    <!-- ============================================= -->
    <!-- 2. STICKY SUB-NAVIGATION                      -->
    <!-- ============================================= -->
    <nav id="js6-subnav" class="sticky top-[75px] bg-black text-white z-[990] border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-3 md:px-4">
            <div class="flex items-center justify-between h-14 md:h-16">
                <div class="hidden lg:block font-black text-lg tracking-wider whitespace-nowrap">
                    JAC JS6 2026
                </div>

                <ul class="flex items-center gap-4 md:gap-7 overflow-x-auto scrollbar-hide whitespace-nowrap flex-1 lg:flex-none lg:justify-end">
                    <li><a href="#overview" class="subnav-link active"><?php echo esc_html($t['nav_overview']); ?></a></li>
                    <li><a href="#specs" class="subnav-link"><?php echo esc_html($t['nav_specs']); ?></a></li>
                    <li><a href="#gallery" class="subnav-link"><?php echo esc_html($t['nav_gallery']); ?></a></li>
                    <li><a href="#exterior" class="subnav-link"><?php echo esc_html($t['nav_exterior']); ?></a></li>
                    <li><a href="#interior" class="subnav-link"><?php echo esc_html($t['nav_interior']); ?></a></li>
                    <li><a href="#powertrain" class="subnav-link"><?php echo esc_html($t['nav_power']); ?></a></li>
                    <li><a href="#safety" class="subnav-link"><?php echo esc_html($t['nav_safety']); ?></a></li>
                    <li><a href="#intelligent" class="subnav-link"><?php echo esc_html($t['nav_smart']); ?></a></li>
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

    <!-- ============================================= -->
    <!-- 3. OVERVIEW SECTION (with color selector)     -->
    <!-- ============================================= -->
    <section id="overview" class="py-14 md:py-24 bg-gradient-to-b from-white via-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <!-- Header -->
            <div class="text-center mb-10 md:mb-16 js6-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['nav_overview']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-6xl font-black text-black mb-4 md:mb-6 leading-tight">
                    <?php echo esc_html($t['ov_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['ov_desc']); ?>
                </p>
            </div>

            <!-- Car Display with Color -->
        <div class="relative js6-fade-up delay-200">
                <div class="py-4 md:py-8">
                    <img id="js6-main-color-img"
                         src="https://jacen.jac.com.cn/_nuxt/img/color1.2e56f88.png" 
                         alt="JS6 2026 White"
                         class="w-full max-w-4xl mx-auto h-auto object-contain transition-opacity duration-500">
                </div>

                <div class="mt-4 md:mt-6 text-center">
                    <p class="text-[10px] md:text-xs font-bold tracking-widest text-gray-500 uppercase mb-4"><?php echo esc_html($t['col_hint']); ?></p>
                    <div class="flex justify-center flex-wrap gap-3 md:gap-4 mb-4">
                        <button class="color-dot active"
                                data-name="<?php echo esc_attr($t['col_white']); ?>"
                                data-img="https://jacen.jac.com.cn/_nuxt/img/color1.2e56f88.png"
                                style="background: linear-gradient(145deg, #f5f5f5, #e0e0e0);">
                            <i class="fa-solid fa-check text-black text-sm check-icon"></i>
                        </button>
                        <button class="color-dot"
                                data-name="<?php echo esc_attr($t['col_blue']); ?>"
                                data-img="https://jacen.jac.com.cn/_nuxt/img/color2.bd4eabd.png"
                                style="background: linear-gradient(145deg, #1e3a8a, #0c1e4a);">
                            <i class="fa-solid fa-check text-white text-sm check-icon"></i>
                        </button>
                        <button class="color-dot"
                                data-name="<?php echo esc_attr($t['col_black']); ?>"
                                data-img="https://jacen.jac.com.cn/_nuxt/img/color3.56b7062.png"
                                style="background: linear-gradient(145deg, #2a2a2a, #000000);">
                            <i class="fa-solid fa-check text-white text-sm check-icon"></i>
                        </button>
                        <button class="color-dot"
                                data-name="<?php echo esc_attr($t['col_gray']); ?>"
                                data-img="https://jacen.jac.com.cn/_nuxt/img/color4.ed13c0f.png"
                                style="background: linear-gradient(145deg, #8a8a8a, #5a5a5a);">
                            <i class="fa-solid fa-check text-white text-sm check-icon"></i>
                        </button>
                        <button class="color-dot"
                                data-name="<?php echo esc_attr($t['col_red']); ?>"
                                data-img="https://jacen.jac.com.cn/_nuxt/img/color5.fc34557.png"
                                style="background: linear-gradient(145deg, #b91c1c, #7f1d1d);">
                            <i class="fa-solid fa-check text-white text-sm check-icon"></i>
                        </button>
                    </div>
                    <p class="text-sm md:text-base font-bold text-black mb-2" id="color-name"><?php echo esc_html($t['col_white']); ?></p>
                    <p class="text-[10px] md:text-xs text-gray-500"><?php echo esc_html($t['col_note']); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 4. HIGHLIGHTS / SPECS                         -->
    <!-- ============================================= -->
    <section id="specs" class="py-14 md:py-24 bg-black text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">
            <!-- Header -->
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-end mb-10 md:mb-14">
                <div class="js6-fade-up">
                    <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                        <?php echo esc_html($t['hl_lbl']); ?>
                    </span>
                    <div class="w-10 h-0.5 bg-jac-red mb-4 md:mb-6"></div>
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-black leading-tight mb-4 md:mb-0">
                        <?php echo esc_html($t['hl_title']); ?>
                    </h2>
                </div>
                <div class="js6-fade-up delay-200 lg:text-right">
                    <a href="<?php echo esc_url($pdf_link); ?>" target="_blank"
                       class="inline-flex items-center gap-2 text-jac-red border-b-2 border-jac-red pb-1 font-bold text-xs md:text-sm hover:text-white hover:border-white transition-all duration-500">
                        <?php echo esc_html($t['hl_full']); ?>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Stats Grid -->
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
                <div class="spec-box js6-fade-up" style="animation-delay: <?php echo $i * 80; ?>ms;">
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

    <!-- ============================================= -->
    <!-- 5. GALLERY SECTION (Tabs)                     -->
    <!-- ============================================= -->
    <section id="gallery" class="py-14 md:py-24 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 js6-fade-up">
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black leading-tight">
                    <?php echo esc_html($t['gal_title']); ?>
                </h2>
            </div>

            <!-- Gallery Tabs -->
            <div class="flex justify-center gap-2 mb-8 md:mb-10 js6-fade-up">
                <button class="gallery-tab active" data-tab="exterior">
                    <?php echo esc_html($t['gal_exterior']); ?>
                </button>
                <button class="gallery-tab" data-tab="interior">
                    <?php echo esc_html($t['gal_interior']); ?>
                </button>
            </div>

            <!-- Exterior Gallery -->
            <div class="gallery-panel active" data-panel="exterior">
                <div class="relative rounded-2xl md:rounded-3xl overflow-hidden bg-gradient-to-br from-gray-100 to-white mb-4 md:mb-6 js6-image-hover">
                    <img id="ext-main-img" src="<?php echo esc_url($ext_gallery[0]); ?>" 
                         alt="JS6 2026 Exterior" 
                         class="w-full h-auto object-cover transition-opacity duration-500">
                </div>
                <div class="grid grid-cols-5 gap-2 md:gap-3">
                    <?php foreach ($ext_gallery as $i => $img): ?>
                    <button class="thumb-btn <?php echo $i === 0 ? 'active' : ''; ?>" 
                            data-target="ext-main-img" data-img="<?php echo esc_url($img); ?>">
                        <img src="<?php echo esc_url($img); ?>" alt="Thumbnail <?php echo $i + 1; ?>" 
                             class="w-full h-full object-cover">
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Interior Gallery -->
            <div class="gallery-panel hidden" data-panel="interior">
                <div class="relative rounded-2xl md:rounded-3xl overflow-hidden bg-gradient-to-br from-gray-100 to-white mb-4 md:mb-6 js6-image-hover">
                    <img id="int-main-img" src="<?php echo esc_url($int_gallery[0]); ?>" 
                         alt="JS6 2026 Interior" 
                         class="w-full h-auto object-cover transition-opacity duration-500">
                </div>
                <div class="grid grid-cols-5 gap-2 md:gap-3">
                    <?php foreach ($int_gallery as $i => $img): ?>
                    <button class="thumb-btn <?php echo $i === 0 ? 'active' : ''; ?>" 
                            data-target="int-main-img" data-img="<?php echo esc_url($img); ?>">
                        <img src="<?php echo esc_url($img); ?>" alt="Thumbnail <?php echo $i + 1; ?>" 
                             class="w-full h-full object-cover">
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 6. EXTERIOR FEATURE SECTION                   -->
    <!-- ============================================= -->
    <section id="exterior" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <!-- Header -->
            <div class="text-center mb-10 md:mb-14 js6-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['ex_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-tight">
                    <?php echo esc_html($t['ex_title']); ?>
                </h2>
            </div>

            <!-- Hero Exterior Image -->
            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 js6-fade-up js6-image-hover">
                <img src="https://jacen.jac.com.cn/_nuxt/img/ca3.d9cd920.png" 
                     alt="JS6 2026 Exterior" 
                     class="w-full h-auto object-cover">
            </div>

            <!-- Sub-description -->
            <div class="max-w-3xl mx-auto text-center mb-14 md:mb-20 js6-fade-up">
                <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-4 md:mb-5">
                    <?php echo esc_html($t['ex_sub']); ?>
                </h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                    <?php echo esc_html($t['ex_desc']); ?>
                </p>
            </div>

            <!-- Exterior Features Grid -->
            <div class="space-y-12 md:space-y-20">
                <!-- Feature 1: Grille -->
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center js6-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden js6-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/ec1.86f4e54.png" 
                             alt="Front Grille" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-tight">
                            <?php echo esc_html($t['ex_e1_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ex_e1_d']); ?>
                        </p>
                    </div>
                </div>

                <!-- Feature 2: Headlights (reverse) -->
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center js6-fade-up">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden js6-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/ec2.75d359c.png" 
                             alt="LED Headlights" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="lg:order-1">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-tight">
                            <?php echo esc_html($t['ex_e2_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ex_e2_d']); ?>
                        </p>
                    </div>
                </div>

                <!-- Feature 3: Wheels -->
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center js6-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden js6-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/ec3.996b01c.png" 
                             alt="Alloy Wheels" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-3 md:mb-4 leading-tight">
                            <?php echo esc_html($t['ex_e3_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            <?php echo esc_html($t['ex_e3_d']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 7. INTERIOR FEATURE SECTION                   -->
    <!-- ============================================= -->
    <section id="interior" class="py-14 md:py-24 bg-gradient-to-br from-gray-900 to-black text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">
            <!-- Header -->
            <div class="text-center mb-10 md:mb-14 js6-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['in_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black mb-4 md:mb-6 leading-tight">
                    <?php echo esc_html($t['in_title']); ?>
                </h2>
            </div>

            <!-- Hero Interior Image -->
            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 js6-fade-up js6-image-hover">
                <img src="https://jacen.jac.com.cn/_nuxt/img/ca4.cb8db0f.png" 
                     alt="JS6 2026 Interior" 
                     class="w-full h-auto object-cover">
            </div>

            <!-- Sub-description -->
            <div class="max-w-3xl mx-auto text-center mb-14 md:mb-20 js6-fade-up">
                <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-4 md:mb-5">
                    <?php echo esc_html($t['in_sub']); ?>
                </h3>
                <p class="text-sm md:text-base text-white/70 leading-relaxed">
                    <?php echo esc_html($t['in_desc']); ?>
                </p>
            </div>

            <!-- Interior Features -->
            <div class="space-y-12 md:space-y-16">
                <!-- Dual Screen -->
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center js6-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden js6-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/inec1.e8d0590.png" 
                             alt="24.6-inch Dual Screen" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 bg-jac-gold/10 border border-jac-gold/30 px-3 py-1 rounded-full mb-3">
                            <span class="text-[10px] md:text-xs font-bold text-jac-gold uppercase tracking-widest">24.6"</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4 leading-tight">
                            <?php echo esc_html($t['in_e1_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_e1_d']); ?>
                        </p>
                    </div>
                </div>

                <!-- Shift Knob + AC Controls (2 column grid) -->
                <div class="grid md:grid-cols-2 gap-6 md:gap-8 js6-fade-up">
                    <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl md:rounded-3xl overflow-hidden">
                        <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden js6-image-hover">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/inec2.8fc7fd4.png" 
                                 alt="Electronic Shift Knob" 
                                 class="w-full h-auto object-cover aspect-[4/3]">
                        </div>
                        <div class="p-6 md:p-8">
                            <h4 class="text-lg md:text-xl font-bold mb-2 md:mb-3 leading-tight">
                                <?php echo esc_html($t['in_e2_t']); ?>
                            </h4>
                            <p class="text-xs md:text-sm text-white/70 leading-relaxed">
                                <?php echo esc_html($t['in_e2_d']); ?>
                            </p>
                        </div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl md:rounded-3xl p-6 md:p-8 flex flex-col justify-center">
                        <div class="inline-flex items-center gap-2 bg-jac-red/10 border border-jac-red/30 px-3 py-1 rounded-full mb-4 w-fit">
                            <i class="fa-solid fa-sliders text-jac-red text-xs"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">Climate</span>
                        </div>
                        <h4 class="text-lg md:text-xl font-bold mb-3 md:mb-4 leading-tight">
                            <?php echo esc_html($t['in_e3_t']); ?>
                        </h4>
                        <p class="text-xs md:text-sm text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_e3_d']); ?>
                        </p>
                    </div>
                </div>

                <!-- Ambient Lighting (reverse) -->
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center js6-fade-up">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden js6-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/inec3.3950017.png" 
                             alt="Ambient Lighting" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="lg:order-1">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4 leading-tight">
                            <?php echo esc_html($t['in_e4_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_e4_d']); ?>
                        </p>
                    </div>
                </div>

                <!-- 3D Seats -->
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center js6-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden js6-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/inec4.8c3f07b.png" 
                             alt="3D Ergonomic Seats" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <div class="flex items-baseline gap-2 mb-3">
                            <span class="text-3xl md:text-4xl font-black text-jac-gold">2,329</span>
                            <span class="text-xs md:text-sm text-white/60 uppercase tracking-widest font-semibold">Support Points</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4 leading-tight">
                            <?php echo esc_html($t['in_e5_t']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-white/70 leading-relaxed">
                            <?php echo esc_html($t['in_e5_d']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 8. POWERTRAIN SECTION                         -->
    <!-- ============================================= -->
    <section id="powertrain" class="py-14 md:py-24 bg-gradient-to-br from-amber-50 via-white to-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <!-- Header -->
            <div class="text-center mb-10 md:mb-14 js6-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['pw_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-tight">
                    <?php echo esc_html($t['pw_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['pw_desc']); ?>
                </p>
            </div>

            <!-- Engine Image -->
            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 js6-fade-up js6-image-hover">
                <img src="https://jacen.jac.com.cn/_nuxt/img/s4.0da3068.png" 
                     alt="JS6 2026 Engine" 
                     class="w-full h-auto object-cover">
            </div>

            <!-- Power Features Grid -->
            <div class="grid md:grid-cols-3 gap-4 md:gap-6">
                <!-- Feature 1 -->
                <div class="power-feature-card js6-fade-up">
                    <div class="mb-4 md:mb-5">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-black text-white flex items-center justify-center text-lg md:text-xl font-black">
                            7
                        </div>
                    </div>
                    <h3 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 md:mb-3 leading-tight">
                        <?php echo esc_html($t['pw_f1_t']); ?>
                    </h3>
                    <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                        <?php echo esc_html($t['pw_f1_d']); ?>
                    </p>
                </div>

                <!-- Feature 2: Torque -->
                <div class="power-feature-card js6-fade-up delay-100">
                    <div class="flex items-baseline gap-1 mb-3 md:mb-4">
                        <span class="text-3xl md:text-5xl font-black text-black leading-none"><?php echo $t['pw_f2_n']; ?></span>
                        <span class="text-base md:text-xl font-bold text-jac-red"><?php echo $t['pw_f2_u']; ?></span>
                    </div>
                    <h3 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 md:mb-3 leading-tight">
                        <?php echo esc_html($t['pw_f2_t']); ?>
                    </h3>
                    <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                        <?php echo esc_html($t['pw_f2_d']); ?>
                    </p>
                </div>

                <!-- Feature 3: Acceleration -->
                <div class="power-feature-card js6-fade-up delay-200">
                    <div class="flex items-baseline gap-1 mb-3 md:mb-4">
                        <span class="text-3xl md:text-5xl font-black text-black leading-none"><?php echo $t['pw_f3_n']; ?></span>
                        <span class="text-base md:text-xl font-bold text-jac-red"><?php echo $t['pw_f3_u']; ?></span>
                    </div>
                    <h3 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 md:mb-3 leading-tight">
                        <?php echo esc_html($t['pw_f3_t']); ?>
                    </h3>
                    <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                        <?php echo esc_html($t['pw_f3_d']); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 9. SAFETY SECTION                             -->
    <!-- ============================================= -->
 <section id="safety" class="py-14 md:py-24 bg-[#eef4f8] flex flex-col items-center">
        <div class="max-w-[1400px] mx-auto px-5 md:px-8 w-full">
            <div class="text-center mb-10 md:mb-14 js6-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['sf_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-[40px] font-black text-gray-900 mb-4 md:mb-6 leading-snug tracking-tight">
                    <?php echo esc_html($t['sf_title']); ?>
                </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($t['sf_desc']); ?>
                </p>
            </div>

            <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-6 auto-rows-[320px] lg:auto-rows-[380px] js6-fade-up">
                
                <div class="lg:col-span-1 lg:row-span-2 rounded-3xl bg-[#121212] text-white relative overflow-hidden flex flex-col p-8 md:p-10 js6-image-hover group">
                    <div class="absolute inset-0 z-0">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/saf1.4e96d6a.png" alt="Family Safety" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-[#121212]/60 to-transparent"></div>
                    </div>
                    <div class="relative z-10 flex flex-col h-full justify-end mt-auto">
                        <h3 class="text-2xl md:text-3xl font-bold leading-tight mb-6">
                            <?php echo esc_html($t['sf_c1_t']); ?>
                        </h3>
                        <ul class="flex flex-col gap-4 text-[13px] md:text-sm font-medium text-gray-100">
                            <?php 
                            $safety_list = [$t['sf_c1_l1'], $t['sf_c1_l2'], $t['sf_c1_l3'], $t['sf_c1_l4']];
                            foreach ($safety_list as $item):
                            ?>
                            <li class="flex items-start gap-4">
                                <span class="w-2 h-2 rounded-full bg-jac-red mt-1.5 flex-shrink-0 shadow-[0_0_8px_rgba(209,31,38,0.6)]"></span>
                                <span class="leading-relaxed"><?php echo esc_html($item); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="lg:col-span-2 lg:row-span-1 rounded-3xl bg-[#121212] relative overflow-hidden js6-image-hover group">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/saf2.fc52258.png" alt="Airbags Diagram" class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105" />
                </div>

                <div class="lg:col-span-1 lg:row-span-1 rounded-3xl bg-[#121212] text-white p-8 md:p-10 relative overflow-hidden flex flex-col justify-end shadow-sm js6-image-hover group">
                    <div class="absolute inset-0 z-0">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/saf3.b1669ee.png" alt="Interior Safety" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-[#121212]/95 via-[#121212]/30 to-transparent"></div>
                    </div>
                    <div class="relative z-10 mt-auto">
                        <h3 class="text-xl md:text-[24px] font-bold leading-tight mb-3">
                            <?php echo esc_html($t['sf_c2_t']); ?>
                        </h3>
                        <p class="text-[13px] md:text-sm text-gray-200 leading-relaxed font-medium">
                            <?php echo esc_html($t['sf_c2_d']); ?>
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-1 lg:row-span-1 rounded-3xl bg-[#121212] text-white p-8 md:p-10 relative overflow-hidden flex flex-col justify-start shadow-sm js6-image-hover group">
                    <div class="absolute inset-0 z-0">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/saf4.da8bdc6.png" alt="Crash Test" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-b from-[#121212]/95 via-[#121212]/40 to-transparent"></div>
                    </div>
                    <div class="relative z-10 mb-auto">
                        <h3 class="text-xl md:text-[24px] font-bold leading-tight mb-3">
                            <?php echo esc_html($t['sf_c3_t']); ?>
                        </h3>
                        <p class="text-[13px] md:text-sm text-gray-200 leading-relaxed font-medium">
                            <?php echo esc_html($t['sf_c3_d']); ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 10. INTELLIGENT SECTION                       -->
    <!-- ============================================= -->
    <section id="intelligent" class="py-14 md:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <!-- Header -->
            <div class="text-center mb-10 md:mb-14 js6-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-red uppercase mb-3">
                    <?php echo esc_html($t['sm_lbl']); ?>
                </span>
                <div class="w-10 h-0.5 bg-jac-red mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-tight">
                    <?php echo esc_html($t['sm_title']); ?>
                </h2>
            </div>

            <!-- Group 1: Convenience -->
            <div class="mb-10 md:mb-14 js6-fade-up">
                <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-5 md:mb-6 text-center">
                    <?php echo esc_html($t['sm_c1_t']); ?>
                </h3>
                <div class="grid lg:grid-cols-2 gap-6 md:gap-8 items-center">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden js6-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/inp1.701e767.png" 
                             alt="Smart Access" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="space-y-5 md:space-y-6">
                        <div>
                            <h4 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 md:mb-3 leading-tight">
                                <?php echo esc_html($t['sm_c1_h1']); ?>
                            </h4>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                <?php echo esc_html($t['sm_c1_d1']); ?>
                            </p>
                        </div>
                        <div class="pt-5 md:pt-6 border-t border-gray-200">
                            <h4 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 md:mb-3 leading-tight">
                                <?php echo esc_html($t['sm_c1_h2']); ?>
                            </h4>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                <?php echo esc_html($t['sm_c1_d2']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Group 2: Driving -->
            <div class="mb-10 md:mb-14 js6-fade-up">
                <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-5 md:mb-6 text-center">
                    <?php echo esc_html($t['sm_c2_t']); ?>
                </h3>
                <div class="grid lg:grid-cols-2 gap-6 md:gap-8 items-center">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden js6-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/inp2.09151ae.png" 
                             alt="Driving Ease" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="lg:order-1 space-y-5 md:space-y-6">
                        <div>
                            <h4 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 md:mb-3 leading-tight">
                                <?php echo esc_html($t['sm_c2_h1']); ?>
                            </h4>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                <?php echo esc_html($t['sm_c2_d1']); ?>
                            </p>
                        </div>
                        <div class="pt-5 md:pt-6 border-t border-gray-200">
                            <div class="inline-flex items-center gap-2 bg-jac-red/10 px-3 py-1 rounded-full mb-3">
                                <span class="text-[10px] md:text-xs font-bold text-jac-red uppercase tracking-widest">360°</span>
                            </div>
                            <h4 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 md:mb-3 leading-tight">
                                <?php echo esc_html($t['sm_c2_h2']); ?>
                            </h4>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                <?php echo esc_html($t['sm_c2_d2']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Group 3: Comfort -->
            <div class="js6-fade-up">
                <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-black mb-5 md:mb-6 text-center">
                    <?php echo esc_html($t['sm_c3_t']); ?>
                </h3>
                <div class="grid lg:grid-cols-2 gap-6 md:gap-8 items-center">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden js6-image-hover">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/tec1.03b83c9.png" 
                             alt="Technology" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="space-y-5 md:space-y-6">
                        <div>
                            <h4 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 md:mb-3 leading-tight">
                                <?php echo esc_html($t['sm_c3_h1']); ?>
                            </h4>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                <?php echo esc_html($t['sm_c3_d1']); ?>
                            </p>
                        </div>
                        <div class="pt-5 md:pt-6 border-t border-gray-200">
                            <h4 class="text-base md:text-lg lg:text-xl font-bold text-black mb-2 md:mb-3 leading-tight">
                                <?php echo esc_html($t['sm_c3_h2']); ?>
                            </h4>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                <?php echo esc_html($t['sm_c3_d2']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 11. FINAL CTA                                 -->
    <!-- ============================================= -->
    <section class="py-14 md:py-24 bg-gradient-to-br from-jac-red via-red-700 to-red-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -top-24 -right-24 w-80 h-80 md:w-96 md:h-96 rounded-full bg-white/20 blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-80 h-80 md:w-96 md:h-96 rounded-full bg-white/20 blur-3xl"></div>
        </div>

        <div class="relative max-w-5xl mx-auto px-5 md:px-8 text-center js6-fade-up">
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-black mb-4 md:mb-6 leading-tight">
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
