<?php
/**
 * Template Name: Model - M3EV
 */
get_header();

$lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';

 $t = [
    // HERO
    'hero_title'    => 'JAC M3EV',
    'hero_sub'      => ($lang == 'en') ? 'Delivering more. Creating more.' : 'მეტი მიტანა. მეტი შექმნა.',
    'hero_badge'    => ($lang == 'en') ? 'Electric Cargo Van' : 'ელექტრო სატვირთო ფურგონი',

    // NAV
    'nav_overview'  => ($lang == 'en') ? 'Overview'  : 'მიმოხილვა',
    'nav_specs'     => ($lang == 'en') ? 'Specs'     : 'მახასიათებლები',
    'nav_gallery'   => ($lang == 'en') ? 'Gallery'   : 'გალერეა',
    'nav_exterior'  => ($lang == 'en') ? 'Exterior'  : 'ექსტერიერი',
    'nav_interior'  => ($lang == 'en') ? 'Interior'  : 'ინტერიერი',
    'nav_cargo'     => ($lang == 'en') ? 'Cargo'     : 'სატვირთო',
    'nav_battery'   => ($lang == 'en') ? 'Battery'   : 'ელემენტი',
    'nav_safety'    => ($lang == 'en') ? 'Safety'    : 'უსაფრთხოება',
    'nav_brochure'  => ($lang == 'en') ? 'Brochure'  : 'ბროშურა',

    // OVERVIEW
    'ov_title'  => ($lang == 'en') ? 'Your partner in the city.' : 'თქვენი პარტნიორი ქალაქში.',
    'ov_desc'   => ($lang == 'en')
        ? 'The JAC M3EV is your ideal partner for last-mile delivery. With zero emissions, lower running costs, and a smart electric drivetrain, it transforms urban logistics — efficient, clean, and always ready.'
        : 'JAC M3EV არის თქვენი იდეალური პარტნიორი „ბოლო კილომეტრის“ მიტანის სერვისისთვის. ნულოვანი ემისიებით, დაბალი საოპერაციო ხარჯებითა და ჭკვიანი ელექტროძრავით, ის ცვლის ურბანულ ლოჯისტიკას — ეფექტური, სუფთა და ყოველთვის მზად სამუშაოდ.',
    'col_hint'  => ($lang == 'en') ? 'Select a color' : 'აირჩიეთ ფერი',
    'col_white' => ($lang == 'en') ? 'White'  : 'თეთრი',
    'col_silver'=> ($lang == 'en') ? 'Silver' : 'ვერცხლისფერი',
    'col_note'  => ($lang == 'en') ? 'Models and colors may vary by regions.' : 'მოდელები და ფერები შესაძლოა განსხვავდებოდეს რეგიონების მიხედვით.',

    // HIGHLIGHTS
    'hl_lbl'    => ($lang == 'en') ? 'HIGHLIGHTS' : 'მთავარი მახასიათებლები',
    'hl_title'  => 'JAC M3EV',
    'hl_full'   => ($lang == 'en') ? 'Full Specifications' : 'სრული მახასიათებლები',
    'hl_s1_l'   => ($lang == 'en') ? 'Urban Range'           : 'სვლის მარაგი',
    'hl_s1_v'   => '≥290 km',
    'hl_s2_l'   => ($lang == 'en') ? 'Battery Capacity'      : 'ელემენტის ტევადობა',
    'hl_s2_v'   => '53.58 kWh',
    'hl_s3_l'   => ($lang == 'en') ? 'Cargo Weight'           : 'ტვირთამწეობა',
    'hl_s3_v'   => '≤965 kg',
    'hl_s4_l'   => ($lang == 'en') ? 'DC Charging (15–80%)'  : 'DC დატენვა (15–80%)',
    'hl_s4_v'   => '≤55 min',
    'hl_s5_l'   => ($lang == 'en') ? 'Maximum Torque'         : 'მაქს. ბრუნვის მომენტი',
    'hl_s5_v'   => '295 N·m',
    'hl_s6_l'   => ($lang == 'en') ? 'Cargo Volume'           : 'სატვირთო მოცულობა',
    'hl_s6_v'   => '5.2 m³',

    // GALLERY
    'gal_title'    => ($lang == 'en') ? 'Built for every street.' : 'შექმნილია ნებისმიერი ქუჩისთვის.',
    'gal_exterior' => ($lang == 'en') ? 'Exterior' : 'ექსტერიერი',
    'gal_interior' => ($lang == 'en') ? 'Interior' : 'ინტერიერი',

    // EXTERIOR
    'ex_lbl'   => ($lang == 'en') ? 'EXTERIOR' : 'ექსტერიერი',
    'ex_title' => ($lang == 'en') ? 'Designed for load and performance.' : 'შექმნილია დატვირთვისა და წარმადობისთვის.',
    'ex_sub'   => ($lang == 'en') ? 'Sleek lines. Smart access.' : 'დანახვეწილი ხაზები. ჭკვიანი წვდომა.',
    'ex_desc'  => ($lang == 'en')
        ? 'The M3EV combines aerodynamic efficiency with practical design. Its bubble aesthetic, crystal LED headlights, and dual-color rims deliver a modern urban presence — while the optimized body ensures maximum payload with minimum effort.'
        : 'M3EV აერთიანებს აეროდინამიკურ ეფექტურობას პრაქტიკულ დიზაინთან. მისი ესთეტიკური ფორმები, კრისტალური LED ფარები და ორფერიანი დისკები ქმნის თანამედროვე ურბანულ იერსახეს, ხოლო ოპტიმიზებული კორპუსი უზრუნველყოფს ტვირთის მაქსიმალურ გადაზიდვას მინიმალური ძალისხმევით.',
    'ex_e1_t'  => ($lang == 'en') ? 'Crystal LED Headlights' : 'კრისტალური LED ფარები',
    'ex_e1_d'  => ($lang == 'en')
        ? 'Crystal LED daytime running lights combined with high-performance headlights deliver excellent visibility in any condition — a striking, modern face for the M3EV.'
        : 'კრისტალური LED დღის სინათლის ნათება და მაღალი წარმადობის ფარები უზრუნველყოფს შესანიშნავ ხილვადობას ნებისმიერ პირობებში.',
    'ex_e2_t'  => ($lang == 'en') ? 'Side Sliding Door & Step Access' : 'გვერდითი მოცურებადი კარი და საფეხური',
    'ex_e2_d'  => ($lang == 'en')
        ? 'The large side sliding door provides effortless access to the cargo area, while the integrated step-up makes boarding safe and comfortable — designed for real-world delivery workflows.'
        : 'დიდი გვერდითი მოცურებადი კარი უზრუნველყოფს სატვირთო განყოფილებაში მარტივ წვდომას, ინტეგრირებული საფეხური კი ჩასხდომას უფრო უსაფრთხოსა და კომფორტულს ხდის.',
    'ex_e3_t'  => ($lang == 'en') ? 'Rear Parking Camera & Sensors' : 'უკანა პარკირების კამერა და სენსორები',
    'ex_e3_d'  => ($lang == 'en')
        ? 'Obstacle-detecting rear sensors with audible alerts, paired with a high-resolution backup camera — making tight urban parking safe and stress-free.'
        : 'დაბრკოლების ამომცნობი უკანა სენსორები ხმოვანი გაფრთხილებით და მაღალი გარჩევადობის კამერა ქალაქის ვიწრო ადგილებში პარკირებას უსაფრთხოსა და მარტივს ხდის.',

    // INTERIOR
    'in_lbl'   => ($lang == 'en') ? 'INTERIOR' : 'ინტერიერი',
    'in_title' => ($lang == 'en') ? 'Spacious and smart.' : 'ვრცელი და ჭკვიანი.',
    'in_sub'   => ($lang == 'en') ? 'A driver-first cabin.' : 'მძღოლზე ორიენტირებული სალონი.',
    'in_desc'  => ($lang == 'en')
        ? 'The M3EV cabin is designed with the working driver in mind — intuitive controls, a 10.25-inch multimedia screen, ergonomic seating, and integrated smart features keep every shift comfortable and efficient.'
        : 'M3EV-ის სალონი შექმნილია მძღოლის კომფორტის გათვალისწინებით: ინტუიციური მართვის პანელი, 10.25-დუიმიანი მულტიმედიის ეკრანი და ერგონომიული სავარძლები ყოველ სამუშაო დღეს უფრო პროდუქტიულს ხდის.',
    'in_e1_t'  => ($lang == 'en') ? '10.25" Multimedia Screen' : '10.25" მულტიმედიის ეკრანი',
    'in_e1_d'  => ($lang == 'en')
        ? 'Integrated 10.25-inch multimedia system with Google package, Bluetooth phone mirroring, CarPlay, and Android Auto — navigation and communication at your fingertips.'
        : 'ინტეგრირებული 10.25-დუიმიანი მულტიმედიის სისტემა Google-ის პაკეტით, Bluetooth-ით, CarPlay-სა და Android Auto-ს მხარდაჭერით — ნავიგაცია და კომუნიკაცია თქვენს ხელთაა.',
    'in_e2_t'  => ($lang == 'en') ? 'Knob Shift Panel' : 'გადამრთველი პანელი (Knob)',
    'in_e2_d'  => ($lang == 'en')
        ? 'In line with the mainstream electrification trend — the knob panel features R, N, D modes with backlit indicators for intuitive, safe gear selection at any time of day.'
        : 'თანამედროვე ელექტრომობილების ტენდენციის შესაბამისად, გადამრთველ პანელს აქვს R, N, D რეჟიმები განათებული ინდიკატორებით, რაც უზრუნველყოფს გადაცემათა კოლოფის ინტუიციურ და უსაფრთხო მართვას.',
    'in_e3_t'  => ($lang == 'en') ? 'Digital Instrument Cluster' : 'ციფრული სამუშაო პანელი',
    'in_e3_d'  => ($lang == 'en')
        ? 'Displays SOC, SOH, fault codes, and TPMS information at a glance. Multi-language support ensures clear vehicle status information for drivers across all markets.'
        : 'სისტემა ერთ ეკრანზე აჩვენებს ელემენტის მუხტს (SOC), მდგომარეობას (SOH), გაუმართაობის კოდებსა და საბურავების წნევის მონიტორინგის (TPMS) ინფორმაციას. მრავალენოვანი მხარდაჭერა ნებისმიერი მძღოლისთვის.',
    'in_e4_t'  => ($lang == 'en') ? 'EPB + Auto Hold' : 'EPB + Auto Hold',
    'in_e4_d'  => ($lang == 'en')
        ? 'Electronic Parking Brake with up to 25.8 kN clamping force holds the M3EV on a 30% incline under full load. Auto Hold prevents rolling during short stops on slopes.'
        : 'ელექტრონული ხელის მუხრუჭი 25.8 kN-მდე მომჭერი ძალით მყარად აჩერებს M3EV-ს 30%-იან აღმართზე სრული დატვირთვით, ხოლო Auto Hold ფუნქცია ხელს უშლის ავტომობილის უკუსვლას ხანმოკლე გაჩერებებისას.',

    // CARGO
    'cg_lbl'   => ($lang == 'en') ? 'CARGO SPACE' : 'სატვირთო სივრცე',
    'cg_title' => ($lang == 'en') ? 'Ample space. Maximum efficiency.' : 'უხვი სივრცე. მაქსიმალური ეფექტურობა.',
    'cg_desc'  => ($lang == 'en')
        ? 'With 5.2 m³ of cargo volume and a 965 kg payload, the M3EV is engineered to handle demanding urban delivery routes.'
        : '5.2 მ³ სატვირთო მოცულობითა და 965 კგ ტვირთამწეობით, M3EV შექმნილია ყველაზე დატვირთული ურბანული მარშრუტებისთვის.',
    'cg_c1_t'  => ($lang == 'en') ? 'Large Tailgate (1,255 × 1,175 mm)' : 'დიდი უკანა კარი (1,255 × 1,175 მმ)',
    'cg_c1_d'  => ($lang == 'en') ? 'Generously sized rear tailgate opens wide for effortless loading and unloading from multiple angles.' : 'ფართო უკანა კარი იხსნება ფართოდ, რაც აადვილებს ტვირთის სხვადასხვა მხრიდან ჩატვირთვა-გადმოტვირთვას.',
    'cg_c2_t'  => ($lang == 'en') ? 'Side Sliding Door (760 × 1,190 mm)' : 'გვერდითი მოცურებადი კარი (760 × 1,190 მმ)',
    'cg_c2_d'  => ($lang == 'en') ? 'Wide sliding door on the right side provides easy access in tight urban spaces — ideal for frequent stops.' : 'ფართო გვერდითი მოცურებადი კარი იდეალურია ქალაქის ვიწრო პირობებში და ხშირი გაჩერებებისთვის.',
    'cg_c3_t'  => ($lang == 'en') ? 'Full Interior Lighting' : 'სრული შიდა განათება',
    'cg_c3_d'  => ($lang == 'en') ? 'Complete LED lighting throughout the cargo body ensures efficient operations even in low-light conditions.' : 'სატვირთო განყოფილებაში დამონტაჟებული სრული LED განათება უზრუნველყოფს ეფექტურ მუშაობას დაბალი განათების პირობებშიც.',
    'cg_c4_t'  => ($lang == 'en') ? 'Cargo Fixing Hooks (6 sets)' : 'ტვირთის დასამაგრებელი კაუჭები (6 კომპლექტი)',
    'cg_c4_d'  => ($lang == 'en') ? '3 pairs (6 sets) of cargo hooks evenly distributed inside the cargo box — securing goods at multiple positions.' : 'სატვირთო სივრცეში თანაბრად განაწილებული 6 კაუჭი უზრუნველყოფს ტვირთის უსაფრთხო ფიქსაციას სხვადასხვა პოზიციაზე.',
    'cg_c5_t'  => ($lang == 'en') ? 'Underfloor Full-Size Spare Tire' : 'სრულფასოვანი სათადარიგო საბურავი',
    'cg_c5_d'  => ($lang == 'en') ? 'Full-size spare tire mounted beneath the chassis reduces downtime during unexpected blowouts.' : 'შასის ქვეშ მოთავსებული სრულფასოვანი სათადარიგო საბურავი ამცირებს ავტომობილის გაჩერების დროს გაუთვალისწინებელი შემთხვევებისას.',

    // BATTERY
    'bt_lbl'   => ($lang == 'en') ? 'BATTERY & TECHNOLOGY' : 'ელემენტი და ტექნოლოგია',
    'bt_title' => ($lang == 'en') ? 'Built for endurance.'  : 'შექმნილია გამძლეობისთვის.',
    'bt_desc'  => ($lang == 'en')
        ? 'Powered by a CATL 53.58 kWh LFP battery, the M3EV delivers ≥290 km of urban range with IP67 protection and ASIL C safety certification. The four-in-one electric drive eliminates oil changes for 100,000 km.'
        : 'CATL-ის 53.58 kWh მოცულობის LFP ელემენტი M3EV-ს აძლევს ≥290 კმ სვლის მარაგს ქალაქში, IP67 დაცვის სტანდარტითა და ASIL C უსაფრთხოების სერტიფიკატით. ოთხ-ერთში ელექტროძრავის სისტემა 100,000 კმ-მდე არ საჭიროებს ზეთის შეცვლას.',
    'bt_c1_t'  => ($lang == 'en') ? 'CATL LFP Battery (53.58 kWh)' : 'CATL LFP ელემენტი (53.58 kWh)',
    'bt_c1_d'  => ($lang == 'en') ? 'Lithium Iron Phosphate by CATL — safer, more stable, longer-lasting. Optimized for high-cycle commercial use.' : 'CATL-ის ლითიუმ-რკინის ფოსფატის (LFP) ტექნოლოგია — უფრო უსაფრთხო, სტაბილური და გამძლე, სპეციალურად ოპტიმიზებული კომერციული დატვირთვებისთვის.',
    'bt_c2_t'  => ($lang == 'en') ? 'IP67 Waterproof Protection' : 'IP67 წყალგამძლეობის სტანდარტი',
    'bt_c2_d'  => ($lang == 'en') ? 'IP67 waterproof with ASIL C safety certification. Withstands stone impacts below 15 mm — reliable in rain and harsh conditions.' : 'IP67 წყალგამძლეობისა და ASIL C უსაფრთხოების სტანდარტი. უძლებს მექანიკურ ზემოქმედებას და უზრუნველყოფს საიმედო მუშაობას ნებისმიერ მეტეოროლოგიურ პირობებში.',
    'bt_c3_t'  => ($lang == 'en') ? 'Four-in-One Electric Drive' : 'ოთხ-ერთში ელექტროძრავის სისტემა',
    'bt_c3_d'  => ($lang == 'en') ? 'Integrates motor, e-control, reducer and high-voltage cables into one compact aluminium unit — maintenance-free for 100,000 km.' : 'ელექტროძრავა, მართვის ბლოკი, რედუქტორი და მაღალი ძაბვის კაბელები გაერთიანებულია ერთ კომპაქტურ ალუმინის კორპუსში, რომელიც 100,000 კმ-მდე არ საჭიროებს ტექნიკურ მომსახურებას.',
    'ip_lbl'   => ($lang == 'en') ? 'INTELLIGENT' : 'ინტელექტუალური სისტემები',
    'ip_title' => ($lang == 'en') ? 'i-Pedal: Regenerative Braking' : 'i-Pedal: რეგენერაციული დამუხრუჭება',
    'ip_desc'  => ($lang == 'en')
        ? 'When you release the accelerator, the electric motor becomes a generator — recharging the battery and increasing range by up to 20%. Every deceleration becomes recoverable energy.'
        : 'აქსელერატორის პედლიდან ფეხის აღებისას ელექტროძრავა მუშაობს გენერატორის რეჟიმში, რაც ტენავს ელემენტს და სვლის მარაგს 20%-მდე ზრდის. დამუხრუჭებისას დახარჯული ენერგია კვლავ გროვდება.',
    'ip_badge' => ($lang == 'en') ? 'Up to +20% Range' : 'სვლის მარაგის ზრდა 20%-მდე',

    // SAFETY
    'sf_lbl'   => ($lang == 'en') ? 'SAFETY' : 'უსაფრთხოება',
    'sf_title' => ($lang == 'en') ? 'Active protection on every route.' : 'აქტიური დაცვა ყოველ მარშრუტზე.',
    'sf_desc'  => ($lang == 'en')
        ? 'The M3EV integrates comprehensive active and passive safety systems — so every delivery is as safe as it is efficient.'
        : 'M3EV აღჭურვილია აქტიური და პასიური უსაფრთხოების თანამედროვე სისტემებით, რაც უზრუნველყოფს, რომ თითოეული მიტანის პროცესი იყოს როგორც ეფექტური, ისე სრულიად უსაფრთხო.',
    'sf_c1_t'  => ($lang == 'en') ? 'ESC — Electronic Stability Control' : 'ESC — ელექტრონული სტაბილურობის კონტროლი',
    'sf_c1_l1' => ($lang == 'en') ? 'ABS — Anti-lock Braking System' : 'ABS — ანტიბლოკირების სისტემა',
    'sf_c1_l2' => ($lang == 'en') ? 'EBD — Electronic Brake-force Distribution' : 'EBD — სამუხრუჭო ძალის ელექტრონული განაწილება',
    'sf_c1_l3' => ($lang == 'en') ? 'TCS — Traction Control System' : 'TCS — მოცურების საწინააღმდეგო სისტემა',
    'sf_c1_l4' => ($lang == 'en') ? 'AYC — Active Yaw Control' : 'AYC — აქტიური კურსის კონტროლი',
    'sf_c2_t'  => ($lang == 'en') ? 'High-Strength Body Structure' : 'მაღალი სიმტკიცის კორპუსი',
    'sf_c2_d'  => ($lang == 'en') ? 'Body bending stiffness 12,091 N/mm and torsional stiffness 12,833 Nm/deg — a rigid protective structure that absorbs impact.' : 'კორპუსის სიმტკიცე (12,091 N/მმ) და გრეხვითი სიმტკიცე (12,833 Nm/deg) ქმნის მყარ დამცავ სტრუქტურას, რომელიც ეფექტურად შთანთქავს დარტყმის ენერგიას.',
    'sf_c3_t'  => ($lang == 'en') ? '4-Wheel Disc Brakes' : '4-ბორბლიანი დისკური მუხრუჭები',
    'sf_c3_d'  => ($lang == 'en') ? 'Four-wheel disc brake system with excellent heat dissipation ensures consistent, powerful braking — even under heavy load.' : 'დისკური სამუხრუჭო სისტემა ყველა ბორბალზე უზრუნველყოფს ეფექტურ გაგრილებას და მძლავრ დამუხრუჭებას მაქსიმალური დატვირთვის პირობებშიც კი.',
    'ze_title' => ($lang == 'en') ? 'Zero Emissions. Maximum Savings.' : 'ნულოვანი ემისიები. მაქსიმალური ეკონომია.',
    'ze_desc'  => ($lang == 'en') ? 'The M3EV produces zero pollutants and costs up to 8× less per kilometer than equivalent diesel vans.' : 'M3EV არ გამოყოფს მავნე გამონაბოლქვს და მისი ერთი კილომეტრის ღირებულება 8-ჯერ უფრო დაბალია, ვიდრე დიზელის ძრავიანი ანალოგების.',

    // CTA
    'cta_title' => ($lang == 'en') ? 'Start delivering smarter with M3EV' : 'გაამარტივეთ მიტანის სერვისი M3EV-თან ერთად',
    'cta_desc'  => ($lang == 'en') ? 'Download the full brochure for complete specifications and configurations.' : 'ჩამოტვირთეთ სრული ბროშურა დეტალური ტექნიკური მახასიათებლებისა და კონფიგურაციების გასაცნობად.',
    'cta_btn'   => ($lang == 'en') ? 'Download Brochure' : 'ბროშურის ჩამოტვირთვა',
];

$pdf_link = 'https://jacmotors.ge/wp-content/uploads/2026/05/JAC-M3EV.pdf';
$base     = 'https://jacen.jac.com.cn/_nuxt/img/';

$ext_gallery = [
    $base . 'e1.e147ae2.jpg',
    $base . 'e2.048b029.jpg',
    $base . 'e3.8677680.jpg',
    $base . 'e4.4a4aea1.jpg',
];
$int_gallery = [
    $base . 'in1.5a019e9.png',
    $base . 'in2.017f46b.png',
    $base . 'in3.53c6fcb.png',
    $base . 'in4.8d5ac14.png',
];
?>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
 

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

<main class="m3ev-page font-sans bg-white text-gray-900">

    <!-- 1. HERO -->
    <section id="m3ev-hero" class="relative h-[85vh] min-h-[500px] flex items-end overflow-hidden">
        <picture class="absolute inset-0 z-0">
            <source media="(max-width: 768px)" srcset="<?php echo esc_url($base . 'M3EV-EX-017.6e56d5c.jpg'); ?>">
            <img src="<?php echo esc_url($base . 'M3EV_01_02.cb4525f.jpg'); ?>"
                 alt="JAC M3EV"
                 class="w-full h-full object-cover object-center">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 to-black/10 z-10"></div>
        <div class="relative z-20 w-full px-5 md:px-12 lg:px-20 pb-10 md:pb-24">
            <div class="max-w-7xl mx-auto m3ev-fade-up flex justify-start">
                <div class="max-w-lg">
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-2.5 py-1 rounded-full mb-3 md:mb-4">
                        <span class="w-1.5 h-1.5 bg-jac-green rounded-full animate-pulse"></span>
                        <span class="text-[9px] md:text-[10px] font-bold text-white uppercase tracking-widest">EV · <?php echo esc_html($t['hero_badge']); ?></span>
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
    <nav id="m3ev-subnav" class="sticky top-[75px] bg-black text-white z-[990] border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-3 md:px-4">
            <div class="flex items-center justify-between h-14 md:h-16">
                <div class="hidden lg:block font-black text-lg tracking-wider whitespace-nowrap">JAC M3EV</div>
                <ul class="flex items-center gap-4 md:gap-7 overflow-x-auto scrollbar-hide whitespace-nowrap flex-1 lg:flex-none lg:justify-end">
                    <li><a href="#overview"  class="subnav-link active"><?php echo esc_html($t['nav_overview']); ?></a></li>
                    <li><a href="#specs"      class="subnav-link"><?php echo esc_html($t['nav_specs']); ?></a></li>
                    <li><a href="#gallery"    class="subnav-link"><?php echo esc_html($t['nav_gallery']); ?></a></li>
                    <li><a href="#exterior"   class="subnav-link"><?php echo esc_html($t['nav_exterior']); ?></a></li>
                    <li><a href="#interior"   class="subnav-link"><?php echo esc_html($t['nav_interior']); ?></a></li>
                    <li><a href="#cargo"      class="subnav-link"><?php echo esc_html($t['nav_cargo']); ?></a></li>
                    <li><a href="#battery"    class="subnav-link"><?php echo esc_html($t['nav_battery']); ?></a></li>
                    <li><a href="#safety"     class="subnav-link"><?php echo esc_html($t['nav_safety']); ?></a></li>
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
            <div class="text-center mb-10 md:mb-16 m3ev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($t['nav_overview']); ?></span>
                <div class="w-10 h-0.5 bg-jac-green mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-6xl font-black text-black mb-4 md:mb-6 leading-tight"><?php echo esc_html($t['ov_title']); ?></h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed"><?php echo esc_html($t['ov_desc']); ?></p>
            </div>

            <div class="relative m3ev-fade-up delay-200">
                <div class="py-4 md:py-8">
                    <img id="m3ev-main-color-img"
                         src="<?php echo esc_url($base . 'white.41ba90f.png'); ?>"
                         alt="JAC M3EV White"
                         class="w-full max-w-4xl mx-auto h-auto object-contain transition-opacity duration-500">
                </div>
                <div class="mt-4 md:mt-6 text-center">
                    <p class="text-[10px] md:text-xs font-bold tracking-widest text-gray-500 uppercase mb-4"><?php echo esc_html($t['col_hint']); ?></p>
                    <div class="flex justify-center flex-wrap gap-3 md:gap-4 mb-4">
                        <button class="color-dot active"
                                data-name="<?php echo esc_attr($t['col_white']); ?>"
                                data-img="<?php echo esc_url($base . 'white.41ba90f.png'); ?>"
                                style="background:linear-gradient(145deg,#f5f5f5,#e0e0e0);">
                            <i class="fa-solid fa-check text-black text-sm check-icon"></i>
                        </button>
                        <button class="color-dot"
                                data-name="<?php echo esc_attr($t['col_silver']); ?>"
                                data-img="<?php echo esc_url($base . 'sliver.45c3215.png'); ?>"
                                style="background:linear-gradient(145deg,#c0c0c0,#8a8a8a);">
                            <i class="fa-solid fa-check text-white text-sm check-icon"></i>
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
                <div class="m3ev-fade-up">
                    <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($t['hl_lbl']); ?></span>
                    <div class="w-10 h-0.5 bg-jac-green mb-4 md:mb-6"></div>
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-black leading-tight mb-4 md:mb-0"><?php echo esc_html($t['hl_title']); ?></h2>
                </div>
                <div class="m3ev-fade-up delay-200 lg:text-right">
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
                <div class="spec-box m3ev-fade-up" style="animation-delay:<?php echo $i*80; ?>ms;">
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
            <div class="text-center mb-10 md:mb-14 m3ev-fade-up">
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black leading-tight"><?php echo esc_html($t['gal_title']); ?></h2>
            </div>
            <div class="flex justify-center gap-2 mb-8 md:mb-10 m3ev-fade-up">
                <button class="gallery-tab active" data-tab="exterior"><?php echo esc_html($t['gal_exterior']); ?></button>
                <button class="gallery-tab" data-tab="interior"><?php echo esc_html($t['gal_interior']); ?></button>
            </div>
            <!-- Exterior -->
            <div class="gallery-panel active" data-panel="exterior">
                <div class="relative rounded-2xl md:rounded-3xl overflow-hidden bg-gray-100 mb-4 md:mb-6 m3ev-image-hover">
                    <img id="ext-main-img" src="<?php echo esc_url($ext_gallery[0]); ?>" alt="M3EV Exterior"
                         class="w-full h-auto object-cover transition-opacity duration-500">
                </div>
                <div class="grid grid-cols-4 gap-2 md:gap-3">
                    <?php foreach ($ext_gallery as $i => $img): ?>
                    <button class="thumb-btn <?php echo $i===0?'active':''; ?>" data-target="ext-main-img" data-img="<?php echo esc_url($img); ?>">
                        <img src="<?php echo esc_url($img); ?>" alt="Ext <?php echo $i+1; ?>" class="w-full h-full object-cover">
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Interior -->
            <div class="gallery-panel hidden" data-panel="interior">
                <div class="relative rounded-2xl md:rounded-3xl overflow-hidden bg-gray-100 mb-4 md:mb-6 m3ev-image-hover">
                    <img id="int-main-img" src="<?php echo esc_url($int_gallery[0]); ?>" alt="M3EV Interior"
                         class="w-full h-auto object-cover transition-opacity duration-500">
                </div>
                <div class="grid grid-cols-4 gap-2 md:gap-3">
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
            <div class="text-center mb-10 md:mb-14 m3ev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($t['ex_lbl']); ?></span>
                <div class="w-10 h-0.5 bg-jac-green mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-tight"><?php echo esc_html($t['ex_title']); ?></h2>
            </div>
            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 m3ev-fade-up m3ev-image-hover">
                <img src="<?php echo esc_url($base . 'ca3.08637f6.png'); ?>" alt="JAC M3EV Exterior" class="w-full h-auto object-cover">
            </div>
            <div class="max-w-3xl mx-auto text-center mb-14 md:mb-20 m3ev-fade-up">
                <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-black mb-4"><?php echo esc_html($t['ex_sub']); ?></h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed"><?php echo esc_html($t['ex_desc']); ?></p>
            </div>
            <div class="space-y-12 md:space-y-20">
                <?php
                $ex_feats = [
                    [$t['ex_e1_t'], $t['ex_e1_d'], $base.'M3EV_02_03.8dc3d69.jpg', false],
                    [$t['ex_e2_t'], $t['ex_e2_d'], $base.'M3EV_02_05.f8c831b.jpg', true],
                    [$t['ex_e3_t'], $t['ex_e3_d'], $base.'ca4.e13994e.png',          false],
                ];
                foreach ($ex_feats as $i => [$ft, $fd, $fi, $rev]): ?>
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center m3ev-fade-up">
                    <div class="<?php echo $rev ? 'lg:order-2' : ''; ?> rounded-2xl md:rounded-3xl overflow-hidden m3ev-image-hover">
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
            <div class="text-center mb-10 md:mb-14 m3ev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($t['in_lbl']); ?></span>
                <div class="w-10 h-0.5 bg-jac-green mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black mb-4 md:mb-6 leading-tight"><?php echo esc_html($t['in_title']); ?></h2>
            </div>
            <div class="max-w-3xl mx-auto text-center mb-14 md:mb-20 m3ev-fade-up">
                <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-4"><?php echo esc_html($t['in_sub']); ?></h3>
                <p class="text-sm md:text-base text-white/70 leading-relaxed"><?php echo esc_html($t['in_desc']); ?></p>
            </div>
            <div class="space-y-12 md:space-y-16">
                <!-- 10.25" screen -->
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center m3ev-fade-up">
                    <div class="rounded-2xl md:rounded-3xl overflow-hidden m3ev-image-hover">
                        <img src="<?php echo esc_url($base . 'in1.5a019e9.png'); ?>" alt="10.25 Screen" class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 bg-jac-green/10 border border-jac-green/30 px-3 py-1 rounded-full mb-3">
                            <span class="text-[10px] md:text-xs font-bold text-jac-green uppercase tracking-widest">10.25"</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4 leading-tight"><?php echo esc_html($t['in_e1_t']); ?></h3>
                        <p class="text-sm md:text-base text-white/70 leading-relaxed"><?php echo esc_html($t['in_e1_d']); ?></p>
                    </div>
                </div>
                <!-- Knob + Digital cluster -->
                <div class="grid md:grid-cols-2 gap-6 md:gap-8 m3ev-fade-up">
                    <?php
                    $in_cards = [
                        [$t['in_e2_t'], $t['in_e2_d'], $base.'in2.017f46b.png'],
                        [$t['in_e3_t'], $t['in_e3_d'], $base.'in3.53c6fcb.png'],
                    ];
                    foreach ($in_cards as [$it, $id, $ii]): ?>
                    <div class="feature-card-dark">
                        <div class="rounded-t-2xl md:rounded-t-3xl overflow-hidden m3ev-image-hover">
                            <img src="<?php echo esc_url($ii); ?>" alt="<?php echo esc_attr($it); ?>" class="w-full h-auto object-cover aspect-[4/3]">
                        </div>
                        <div class="p-6 md:p-8">
                            <h4 class="text-lg md:text-xl font-bold mb-2 md:mb-3 leading-tight"><?php echo esc_html($it); ?></h4>
                            <p class="text-xs md:text-sm text-white/70 leading-relaxed"><?php echo esc_html($id); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- EPB + AutoHold -->
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-14 items-center m3ev-fade-up">
                    <div class="lg:order-2 rounded-2xl md:rounded-3xl overflow-hidden m3ev-image-hover">
                        <img src="<?php echo esc_url($base . 'in4.8d5ac14.png'); ?>" alt="EPB Auto Hold" class="w-full h-auto object-cover">
                    </div>
                    <div class="lg:order-1">
                        <div class="inline-flex items-center gap-2 bg-jac-green/10 border border-jac-green/30 px-3 py-1 rounded-full mb-3">
                            <i class="fa-solid fa-circle-p text-jac-green text-xs"></i>
                            <span class="text-[10px] md:text-xs font-bold text-jac-green uppercase tracking-widest">Auto Hold</span>
                        </div>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4 leading-tight"><?php echo esc_html($t['in_e4_t']); ?></h3>
                        <p class="text-sm md:text-base text-white/70 leading-relaxed"><?php echo esc_html($t['in_e4_d']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. CARGO SPACE -->
    <section id="cargo" class="py-14 md:py-24 bg-gradient-to-br from-amber-50 via-white to-gray-50">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 m3ev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($t['cg_lbl']); ?></span>
                <div class="w-10 h-0.5 bg-jac-green mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-black mb-4 md:mb-6 leading-tight"><?php echo esc_html($t['cg_title']); ?></h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed"><?php echo esc_html($t['cg_desc']); ?></p>
            </div>
            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 m3ev-fade-up bg-black">
                <video src="https://jacen.jac.com.cn/_nuxt/videos/ca1video_x264.5a7ccb6.mp4"
                       poster="<?php echo esc_url($base . 'spac.9e619d7.png'); ?>"
                       muted loop autoplay playsinline preload="metadata"
                       class="w-full h-auto object-cover"></video>
            </div>
            <div class="grid md:grid-cols-3 gap-6 md:gap-8 mb-8 md:mb-12">
                <?php
                $cg3 = [
                    [$t['cg_c1_t'], $t['cg_c1_d'], $base.'M3EV_04_03.d0401f6.jpg'],
                    [$t['cg_c2_t'], $t['cg_c2_d'], $base.'M3EV_04_05.0993f09.jpg'],
                    [$t['cg_c3_t'], $t['cg_c3_d'], $base.'M3EV_04_07.a94aa1f.jpg'],
                ];
                foreach ($cg3 as [$ct, $cd, $ci]): ?>
                <div class="feature-card-light m3ev-fade-up">
                    <div class="overflow-hidden rounded-t-2xl md:rounded-t-3xl m3ev-image-hover">
                        <img src="<?php echo esc_url($ci); ?>" alt="<?php echo esc_attr($ct); ?>" class="w-full h-48 md:h-56 object-cover">
                    </div>
                    <div class="p-5 md:p-6">
                        <h4 class="text-base md:text-lg font-bold text-black mb-2 leading-tight"><?php echo esc_html($ct); ?></h4>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed"><?php echo esc_html($cd); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="grid md:grid-cols-2 gap-6 md:gap-8">
                <?php
                $cg2 = [
                    [$t['cg_c4_t'], $t['cg_c4_d'], $base.'M3EV_04_09.da9d8b5.jpg'],
                    [$t['cg_c5_t'], $t['cg_c5_d'], $base.'M3EV_04_11.5986c06.jpg'],
                ];
                foreach ($cg2 as [$ct, $cd, $ci]): ?>
                <div class="feature-card-light m3ev-fade-up flex gap-4 md:gap-6 p-5 md:p-6">
                    <div class="w-24 md:w-32 flex-shrink-0 rounded-xl overflow-hidden m3ev-image-hover">
                        <img src="<?php echo esc_url($ci); ?>" alt="<?php echo esc_attr($ct); ?>" class="w-full h-full object-cover aspect-square">
                    </div>
                    <div class="flex flex-col justify-center">
                        <h4 class="text-base md:text-lg font-bold text-black mb-1.5 leading-tight"><?php echo esc_html($ct); ?></h4>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed"><?php echo esc_html($cd); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 9. BATTERY & TECHNOLOGY -->
    <section id="battery" class="py-14 md:py-24 bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative">
            <div class="text-center mb-10 md:mb-14 m3ev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($t['bt_lbl']); ?></span>
                <div class="w-10 h-0.5 bg-jac-green mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black mb-4 md:mb-6 leading-tight"><?php echo esc_html($t['bt_title']); ?></h2>
                <p class="text-sm md:text-base lg:text-lg text-white/70 max-w-3xl mx-auto leading-relaxed"><?php echo esc_html($t['bt_desc']); ?></p>
            </div>

            <!-- Battery key stats — dark-friendly grid -->
            <div class="grid grid-cols-3 gap-4 md:gap-8 mb-10 md:mb-14 m3ev-fade-up">
                <?php
                $bstats = [
                    ['n'=>'290', 'u'=>'km',    'l'=> ($lang=='en') ? 'Urban Range'          : 'ქალაქური სვლა'],
                    ['n'=>'55',  'u'=>'min',   'l'=> ($lang=='en') ? 'DC Fast Charge 15–80%': 'DC სწრაფი დატენვა'],
                    ['n'=>'100K','u'=>'km',    'l'=> ($lang=='en') ? 'Oil-Change Free'       : 'ზეთის გამოცვლის გარეშე'],
                ];
                foreach ($bstats as $bs): ?>
                <div class="text-center py-6 md:py-8 border border-white/10 rounded-2xl">
                    <p class="text-3xl md:text-5xl lg:text-6xl font-black text-white leading-none mb-1"><?php echo esc_html($bs['n']); ?></p>
                    <p class="text-base md:text-xl font-bold text-jac-green mb-2"><?php echo esc_html($bs['u']); ?></p>
                    <p class="text-[10px] md:text-xs text-white/50 uppercase tracking-widest"><?php echo esc_html($bs['l']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Battery hero image -->
            <div class="rounded-2xl md:rounded-3xl overflow-hidden mb-10 md:mb-14 m3ev-fade-up m3ev-image-hover">
                <img src="<?php echo esc_url($base . 'b9.f1b4405.jpg'); ?>" alt="M3EV Battery" class="w-full h-auto object-cover">
            </div>

            <!-- 3 tech feature cards -->
            <div class="grid md:grid-cols-3 gap-6 md:gap-8 m3ev-fade-up">
                <?php
                $btcards = [
                    [$t['bt_c1_t'], $t['bt_c1_d'], 'fa-battery-full',  'text-jac-green'],
                    [$t['bt_c2_t'], $t['bt_c2_d'], 'fa-shield-halved',  'text-blue-400'],
                    [$t['bt_c3_t'], $t['bt_c3_d'], 'fa-bolt',           'text-yellow-400'],
                ];
                foreach ($btcards as [$btt, $btd, $bti, $btc]): ?>
                <div class="feature-card-dark p-6 md:p-8">
                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-white/10 flex items-center justify-center mb-4 md:mb-5">
                        <i class="fa-solid <?php echo esc_attr($bti); ?> <?php echo esc_attr($btc); ?> text-lg md:text-xl"></i>
                    </div>
                    <h4 class="text-base md:text-lg lg:text-xl font-bold mb-2 md:mb-3 leading-tight"><?php echo esc_html($btt); ?></h4>
                    <p class="text-xs md:text-sm text-white/70 leading-relaxed"><?php echo esc_html($btd); ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- i-Pedal -->
            <div class="mt-10 md:mt-14 grid lg:grid-cols-2 gap-8 lg:gap-14 items-center m3ev-fade-up">
                <div class="rounded-2xl md:rounded-3xl overflow-hidden bg-black">
                    <video src="https://jacen.jac.com.cn/_nuxt/videos/ca3video.e43ae5d.mp4"
                           poster="<?php echo esc_url($base . 'feat2.71877d9.png'); ?>"
                           muted loop autoplay playsinline preload="metadata"
                           class="w-full h-auto object-cover"></video>
                </div>
                <div>
                    <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($t['ip_lbl']); ?></span>
                    <div class="inline-flex items-center gap-2 bg-jac-green/15 border border-jac-green/30 px-3 py-1 rounded-full mb-4 ml-2">
                        <i class="fa-solid fa-arrow-trend-up text-jac-green text-xs"></i>
                        <span class="text-[10px] md:text-xs font-bold text-jac-green uppercase tracking-widest"><?php echo esc_html($t['ip_badge']); ?></span>
                    </div>
                    <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4 leading-tight"><?php echo esc_html($t['ip_title']); ?></h3>
                    <p class="text-sm md:text-base text-white/70 leading-relaxed"><?php echo esc_html($t['ip_desc']); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9.5 VIDEO SHOWCASE -->
    <section class="py-14 md:py-24 bg-black text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10 md:mb-14 m3ev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($lang=='en'?'IN MOTION':'მოძრაობაში'); ?></span>
                <div class="w-10 h-0.5 bg-jac-green mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black leading-tight"><?php echo esc_html($lang=='en'?'See the M3EV come alive.':'იხილეთ M3EV მოქმედებაში.'); ?></h2>
            </div>
            <div class="grid md:grid-cols-2 gap-4 md:gap-6 m3ev-fade-up">
                <div class="rounded-2xl md:rounded-3xl overflow-hidden bg-black">
                    <video src="https://jacen.jac.com.cn/_nuxt/videos/M3EVquan.07f1100.mp4"
                           poster="<?php echo esc_url($base . 'M3EV_01_02.cb4525f.jpg'); ?>"
                           muted loop autoplay playsinline preload="metadata"
                           class="w-full h-full object-cover aspect-video"></video>
                </div>
                <div class="rounded-2xl md:rounded-3xl overflow-hidden bg-black">
                    <video src="https://jacen.jac.com.cn/_nuxt/videos/ca2video.5f8f40a.mp4"
                           poster="<?php echo esc_url($base . 'feat1.e788762.png'); ?>"
                           muted loop autoplay playsinline preload="metadata"
                           class="w-full h-full object-cover aspect-video"></video>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. SAFETY -->
    <section id="safety" class="py-14 md:py-24 bg-[#eef4f8]">
        <div class="max-w-[1400px] mx-auto px-5 md:px-8 w-full">
            <div class="text-center mb-10 md:mb-14 m3ev-fade-up">
                <span class="inline-block text-[10px] md:text-xs font-bold tracking-[0.2em] text-jac-green uppercase mb-3"><?php echo esc_html($t['sf_lbl']); ?></span>
                <div class="w-10 h-0.5 bg-jac-green mx-auto mb-4 md:mb-6"></div>
                <h2 class="text-2xl md:text-4xl lg:text-[40px] font-black text-gray-900 mb-4 md:mb-6 leading-snug tracking-tight"><?php echo esc_html($t['sf_title']); ?></h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed"><?php echo esc_html($t['sf_desc']); ?></p>
            </div>

            <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-6 auto-rows-[320px] lg:auto-rows-[380px] m3ev-fade-up">

                <!-- ESC (tall) -->
                <div class="lg:col-span-1 lg:row-span-2 rounded-3xl bg-[#121212] text-white relative overflow-hidden flex flex-col p-8 md:p-10 m3ev-image-hover group">
                    <div class="absolute inset-0 z-0">
                        <img src="<?php echo esc_url($base . 'M3EV_03_05.938be96.jpg'); ?>" alt="ESC Safety" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-[#121212]/60 to-transparent"></div>
                    </div>
                    <div class="relative z-10 flex flex-col h-full justify-end mt-auto">
                        <h3 class="text-2xl md:text-3xl font-bold leading-tight mb-6"><?php echo esc_html($t['sf_c1_t']); ?></h3>
                        <ul class="flex flex-col gap-4 text-[13px] md:text-sm font-medium text-gray-100">
                            <?php foreach ([$t['sf_c1_l1'],$t['sf_c1_l2'],$t['sf_c1_l3'],$t['sf_c1_l4']] as $item): ?>
                            <li class="flex items-start gap-4">
                                <span class="w-2 h-2 rounded-full bg-jac-green mt-1.5 flex-shrink-0 shadow-[0_0_8px_rgba(22,163,74,0.6)]"></span>
                                <span class="leading-relaxed"><?php echo esc_html($item); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- High-strength body -->
                <div class="lg:col-span-2 lg:row-span-1 rounded-3xl bg-[#121212] relative overflow-hidden m3ev-image-hover group">
                    <img src="<?php echo esc_url($base . 'M3EV_03_07.a9e2501.jpg'); ?>" alt="High Strength Body" class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#121212]/90 via-[#121212]/40 to-transparent"></div>
                    <div class="absolute inset-0 flex items-end p-8 md:p-10">
                        <div>
                            <h3 class="text-xl md:text-2xl font-bold text-white leading-tight mb-2"><?php echo esc_html($t['sf_c2_t']); ?></h3>
                            <p class="text-[13px] md:text-sm text-gray-200 leading-relaxed font-medium max-w-lg"><?php echo esc_html($t['sf_c2_d']); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Disc brakes -->
                <div class="lg:col-span-1 lg:row-span-1 rounded-3xl bg-[#121212] text-white p-8 md:p-10 relative overflow-hidden flex flex-col justify-end shadow-sm m3ev-image-hover group">
                    <div class="absolute inset-0 z-0">
                        <img src="<?php echo esc_url($base . 'M3EV_03_10.a9f78a1.jpg'); ?>" alt="Disc Brakes" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#121212]/95 via-[#121212]/30 to-transparent"></div>
                    </div>
                    <div class="relative z-10 mt-auto">
                        <h3 class="text-xl md:text-[22px] font-bold leading-tight mb-3"><?php echo esc_html($t['sf_c3_t']); ?></h3>
                        <p class="text-[13px] md:text-sm text-gray-200 leading-relaxed font-medium"><?php echo esc_html($t['sf_c3_d']); ?></p>
                    </div>
                </div>

                <!-- Zero Emissions -->
                <div class="lg:col-span-1 lg:row-span-1 rounded-3xl bg-jac-green text-white p-8 md:p-10 flex flex-col justify-between shadow-sm">
                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-white/20 flex items-center justify-center mb-4">
                        <i class="fa-solid fa-leaf text-white text-xl md:text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold leading-tight mb-3"><?php echo esc_html($t['ze_title']); ?></h3>
                        <p class="text-[13px] md:text-sm text-white/90 leading-relaxed"><?php echo esc_html($t['ze_desc']); ?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 11. CTA -->
    <section class="py-14 md:py-24 bg-gradient-to-br from-jac-green via-green-700 to-green-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -top-24 -right-24 w-80 h-80 md:w-96 md:h-96 rounded-full bg-white/20 blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-80 h-80 md:w-96 md:h-96 rounded-full bg-white/20 blur-3xl"></div>
        </div>
        <div class="relative max-w-5xl mx-auto px-5 md:px-8 text-center m3ev-fade-up">
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
