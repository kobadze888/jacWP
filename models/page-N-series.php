<?php

/**
 * Template Name: Model - N-series
 */
get_header();

$lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';

// ==========================================
// ენების სტატიკური ლექსიკონი
// ==========================================
$t = [
    'hero_title' => 'JAC New N-Series Trucks',
    'hero_sub'   => ($lang == 'en') ? 'Born for efficiency.' : 'დაბადებული ეფექტურობისთვის.',
    'hero_extra' => ($lang == 'en') ? 'Light-Duty Trucks GVW 3.5-16.0 Tons' : 'მსუბუქი სატვირთო ავტომობილები, სრული მასა 3.5-16.0 ტონა',

    'nav_overview' => ($lang == 'en') ? 'Overview' : 'მიმოხილვა',
    'nav_specs'    => ($lang == 'en') ? 'Specs' : 'მახასიათებლები',
    'nav_gallery'  => ($lang == 'en') ? 'Gallery' : 'გალერეა',
    'nav_exterior' => ($lang == 'en') ? 'Exterior' : 'ექსტერიერი',
    'nav_interior' => ($lang == 'en') ? 'Interior' : 'ინტერიერი',
    'nav_comfort'  => ($lang == 'en') ? 'Comfort' : 'კომფორტი',
    'cc_title'     => ($lang == 'en') ? 'Engineered for efficiency.' : 'შექმნილია ეფექტურობისთვის.',
    'cc_desc'      => ($lang == 'en') ? 'JAC New N-Series Trucks provide a variety and wide range of product, ready to work in different using scenarios over the world.' : 'JAC-ის ახალი N-სერიის სატვირთო ავტომობილები გვთავაზობენ მრავალფეროვან არჩევანს, რომელიც მზადაა მსოფლიოს ნებისმიერ წერტილში სხვადასხვა სამუშაო სცენარისთვის.',
    'cc_sp1'       => ($lang == 'en') ? 'Wide GVW range: 3.5-16.0 Tons.' : 'GVW ფართო დიაპაზონი: 3.5-16.0 ტონა.',
    'cc_sp2'       => ($lang == 'en') ? 'Various cab range: Single, double, narrow & wide cab.' : 'კაბინების მრავალფეროვნება: ერთმაგი, ორმაგი, ვიწრო და განიერი კაბინა.',
    'cc_sp3'       => ($lang == 'en') ? 'Flexible powertrain: 2.0L~4.5L + MT/AMT.' : 'მოქნილი ძალოვანი აგრეგატი: 2.0L~4.5L + MT/AMT.',
    'cc_sp4'       => ($lang == 'en') ? 'Different body types: van, tipper, crane, garbage collector, etc.' : 'სხვადასხვა ტიპის ძარა: ფურგონი, თვითმცლელი, ამწე, ნაგავმზიდი და ა.შ.',
    'nav_brochure' => ($lang == 'en') ? 'Brochure' : 'ბროშურა',
    'full_specs'   => ($lang == 'en') ? 'Full Specifications' : 'სრული მონაცემები',

    'feat_lbl' => ($lang == 'en') ? 'POWER' : 'სიმძლავრე',
    'f_c1_t' => ($lang == 'en') ? 'Above and beyond.' : 'უფრო მეტი, ვიდრე მოელი.',
    'f_c1_d' => ($lang == 'en') ? 'The JAC T9 Pickup literally lifts the driving experience. The ride height is higher, so you not only get better road visibility but also plenty of headroom and space for everyone in the cabin.' : 'JAC T9 პიკაპი პირდაპირი გაგებით ამაღლებს მართვის გამოცდილებას. კლირენსი უფრო მაღალია, ამიტომ თქვენ იღებთ არა მხოლოდ უკეთეს ხილვადობას, არამედ საკმარის სივრცეს ყველასთვის სალონში.',
    'f_c2_t' => ($lang == 'en') ? 'Get a grip.' : 'მყარი მოჭიდება.',
    'f_c2_d' => ($lang == 'en') ? 'When the going gets tough JAC T9 Pickup gets going. The rear differential lock lets you take on the most challenging conditions.' : 'როდესაც გზა რთულდება, JAC T9 პიკაპი აგრძელებს მოძრაობას. უკანა დიფერენციალის ბლოკირება საშუალებას გაძლევთ გაუმკლავდეთ ყველაზე რთულ პირობებს.',
    'f_c3_t' => ($lang == 'en') ? 'Strong power.' : 'მძლავრი ენერგია.',
    'f_c3_d' => ($lang == 'en') ? 'When you\'re faced with slippery surfaces or tough trails, the rear diff lock kicks in. Both rear wheels receive equal torque, giving you the traction you need to power through.' : 'როდესაც აწყდებით სრიალა ზედაპირებს ან რთულ ბილიკებს, უკანა დიფერენციალის ბლოკირება ერთვება საქმეში. ორივე უკანა თვალი იღებს თანაბარ მბრუნავ მომენტს, რაც გაძლევთ საჭირო მოჭიდებას წინსვლისთვის.',
    'f_c4_t' => ($lang == 'en') ? 'Versatility driving modes.' : 'მართვის მრავალფეროვანი რეჟიმები.',
    'f_c4_d' => ($lang == 'en') ? 'You have the versatility across all driving modes; 2H, 4H, or 2L, operational up to speeds of 40km/h.' : 'თქვენ გაქვთ მრავალფეროვნება მართვის ყველა რეჟიმში; 2H, 4H, ან 2L, რომლებიც მუშაობს 40 კმ/სთ-მდე სიჩქარეზე.',

    'gen_title' => ($lang == 'en') ? 'JAC sixth generation new light-duty trucks.' : 'JAC მეექვსე თაობის ახალი მსუბუქი სატვირთო ავტომობილები.',
    'gen_desc'  => ($lang == 'en') ? 'As flagship product of JAC, the N-Series Trucks have been proved efficient and reliable by over 3,200,000 global users in past 60 years. With updated design and configuration, JAC New N-Series trucks deliver even better performance in power and economy, intelligence, safety, and comfort, bringing even better TCO for global users. Begin your journey with JAC New N-Series Trucks today.' : 'როგორც JAC-ის ფლაგმანმა პროდუქტმა, N-სერიის სატვირთოებმა ბოლო 60 წლის განმავლობაში 3,200,000-ზე მეტ მომხმარებელს მთელ მსოფლიოში დაუმტკიცეს თავისი ეფექტურობა და საიმედოობა. განახლებული დიზაინითა და კონფიგურაციით, JAC-ის ახალი N-სერიის სატვირთოები გვთავაზობენ კიდევ უფრო უკეთეს წარმადობას სიმძლავრის, ეკონომიურობის, ინტელექტის, უსაფრთხოებისა და კომფორტის თვალსაზრისით. დაიწყეთ თქვენი მოგზაურობა JAC-ის ახალი N-სერიის სატვირთოებით დღესვე.',
    'col_hint'  => ($lang == 'en') ? 'Select a color' : 'აირჩიეთ ფერი',

    'hl_title'  => 'JAC New N-Series Trucks',
    'hl_sub'    => ($lang == 'en') ? 'Highlights' : 'მთავარი მახასიათებლები',
    'hl_item1'  => ($lang == 'en') ? 'More Stylish' : 'უფრო სტილური',
    'hl_item2'  => ($lang == 'en') ? 'More Robust' : 'უფრო მტკიცე',
    'hl_item3'  => ($lang == 'en') ? 'More Efficient' : 'უფრო ეფექტური',
    'hl_item4'  => ($lang == 'en') ? 'More Secure' : 'უფრო უსაფრთხო',
    'hl_item5'  => ($lang == 'en') ? 'More Comfortable' : 'უფრო კომფორტული',
    'hl_item6'  => ($lang == 'en') ? 'More Flexible' : 'უფრო მოქნილი',

    'fun_title'  => ($lang == 'en') ? 'Born for efficiency.' : 'დაბადებული ეფექტურობისთვის.',

    'ext_lbl'   => ($lang == 'en') ? 'EXTERIOR' : 'ექსტერიერი',
    'ext_title' => ($lang == 'en') ? 'Born to be different.' : 'დაბადებული გამორჩეულად.',

    'ext_s1_t'  => ($lang == 'en') ? 'Unconventional design.' : 'არასტანდარტული დიზაინი.',
    'ext_s1_d'  => ($lang == 'en') ? 'Built tough, made durable and created with a captivating, JAC T9 Pickup cuts a bold and rugged figure wherever it goes.' : 'მტკიცე, გამძლე და მიმზიდველი — JAC T9 პიკაპი ყველგან თამამ და მძლავრ შთაბეჭდილებას ტოვებს.',

    'ext_s2_t'  => ($lang == 'en') ? 'Light your way.' : 'გაინათეთ გზა.',
    'ext_s2_d'  => ($lang == 'en') ? 'Integrated LED Daytime Running Lights, LED Headlamps, and Fog Lamps seamlessly blend into the front bumper design, creating a fierce and fearless look like no other.' : 'ინტეგრირებული LED დღის განათება, მთავარი LED ფარები და ნისლსაწინააღმდეგო ფარები იდეალურად ერწყმის წინა ბამპერის დიზაინს და ქმნის განსაკუთრებულ, მრისხანე და უშიშარ იერს.',

    'ext_s3_t'  => ($lang == 'en') ? 'Go adventure.' : 'წინ თავგადასავლებისკენ.',
    'ext_s3_d'  => ($lang == 'en') ? 'Ready to roll and looking the goods up back with the JAC Black Sports Bar. Teamed up with the factory iron rock sliders and you\'re ready to step it up.' : 'გამოიყურება იდეალურად JAC-ის შავი სპორტული საბარგულის რკალებით (Sports Bar). ქარხნულ რკინის საფეხურებთან (Rock Sliders) ერთად, თქვენ მზად ხართ ახალი გამოწვევებისთვის.',

    'ext_s4_t'  => ($lang == 'en') ? 'Easy across.' : 'მარტივად ყველგან.',
    'ext_s4_d'  => ($lang == 'en') ? 'Eye-catching two-tone 18-inch alloy wheels with a floral-inspired design and 265/60 R18 tyres' : 'თვალისმომჭრელი ორფერიანი 18-დუიმიანი ალუმინის დისკები ყვავილისებური დიზაინით და 265/60 R18 ზომის საბურავებით.',

    'ext_s5_t'  => ($lang == 'en') ? 'Load capacity 1000kg.' : 'ტვირთამწეობა 1000კგ.',
    'ext_s5_d'  => ($lang == 'en') ? 'Tackle heavy duty tasks and bulky loads, this vehicle gives you the strength and space you need.' : 'გაუმკლავდით მძიმე სამუშაოებს და მოცულობით ტვირთებს, ეს ავტომობილი გაძლევთ საჭირო სივრცესა და ძალას.',

    'int_lbl'   => ($lang == 'en') ? 'INTERIOR' : 'ინტერიერი',
    'int_title' => ($lang == 'en') ? 'Easy get what you want.' : 'მარტივად მიიღე ის, რაც გსურს.',
    'int_desc'  => ($lang == 'en') ? 'Beauty is inside the beast. A bold and futuristic look with tomorrow\'s tech all at your fingertips.' : 'სილამაზე მხეცის შიგნით. თამამი და ფუტურისტული იერსახე ხვალინდელი ტექნოლოგიებით შენს ხელთაა.',

    'tech_lbl'   => ($lang == 'en') ? 'TECHNOLOGY' : 'ტექნოლოგია',
    'tech_desc'  => ($lang == 'en') ? 'Smart looking, even smarter driving. The JAC T9 Pickup is tooled up with intelligent technology giving you next-generation connectivity for a better driving experience.' : 'ჭკვიანი იერსახე, კიდევ უფრო ჭკვიანი მართვა. JAC T9 პიკაპი აღჭურვილია ინტელექტუალური ტექნოლოგიებით, რაც გთავაზობთ ახალი თაობის კავშირს მართვის უკეთესი გამოცდილებისთვის.',

    'perf_lbl'   => ($lang == 'en') ? 'PERFORMANCE' : 'წარმადობა',
    'perf_title' => ($lang == 'en') ? 'Some pretty. Smart shift.' : 'საკმაოდ ლამაზი. ჭკვიანი გადართვა.',
    'p_c1_t'     => ($lang == 'en') ? 'Performance' : 'წარმადობა',
    'p_c1_d'     => ($lang == 'en') ? 'Turbo technology increases power, resulting in better highway performance and acceleration, similar to larger engines but with smaller displacement' : 'ტურბო ტექნოლოგია ზრდის სიმძლავრეს, რაც უზრუნველყოფს უკეთეს შესრულებას და აჩქარებას მაგისტრალზე, მსგავსად დიდი ძრავებისა, მაგრამ მცირე მოცულობით',
    'p_c2_t'     => ($lang == 'en') ? 'Capability' : 'შესაძლებლობა',
    'p_c2_d'     => ($lang == 'en') ? 'Your T9 Pickup lets you adjust to the many driving conditions across our great land.intelligent electronic shift system gives you four dist-' : 'შენი T9 პიკაპი გაძლევს საშუალებას მოერგო მართვის მრავალ პირობას ჩვენს დიდ მიწაზე. ინტელექტუალური ელექტრონული გადართვის სისტემა გაძლევს ოთხ გან-',
    'int_sub'    => ($lang == 'en') ? 'Sedan-style interior.' : 'სედანის სტილის ინტერიერი.',
    'int_s1_t'   => ($lang == 'en') ? 'Perfect ergonomics and easy operation.' : 'იდეალური ერგონომიკა და მარტივი მართვა.',
    'int_s1_l1'  => ($lang == 'en') ? 'Driver-centered instrument panel.' : 'მძღოლზე მორგებული მართვის პანელი.',
    'int_s1_l2'  => ($lang == 'en') ? 'Ergonomic air suspension seat.' : 'ერგონომიული სავარძელი პნევმატური დაკიდებით.',
    'int_s1_l3'  => ($lang == 'en') ? 'Full adjustment.' : 'სრული რეგულირება.',
    'int_s2_t'   => ($lang == 'en') ? 'Big space & comfortable driving environment.' : 'დიდი სივრცე და კომფორტული მართვის გარემო.',
    'int_s2_l1'  => ($lang == 'en') ? 'Upright A-pillar and square cab design to increase internal space.' : 'სწორი A-საყრდენი და კვადრატული კაბინის დიზაინი შიდა სივრცის გასაზრდელად.',
    'int_s2_l2'  => ($lang == 'en') ? 'Ample storage space.' : 'ტევადი სათავსოები.',
    'n_ext_sub'  => ($lang == 'en') ? 'The new generation of engines builds upon the established performance of JAC\'s power units, elevating power and reliability to new heights.' : 'ახალი თაობის ძრავები ეფუძნება JAC-ის ძალოვანი აგრეგატების დადასტურებულ წარმადობას და სიმძლავრე და საიმედოობა აჰყავს ახალ სიმაღლეებზე.',
    'n_ext_h_t'  => ($lang == 'en') ? 'New front face new cabin design.' : 'ახალი წინა ნაწილი და კაბინის ახალი დიზაინი.',
    'n_ext_h_1'  => ($lang == 'en') ? 'Compact and organized front face design.' : 'კომპაქტური და მოწესრიგებული წინა ნაწილის დიზაინი.',
    'n_ext_h_2'  => ($lang == 'en') ? 'New chrome front grille design.' : 'ქრომირებული წინა ცხაურის ახალი დიზაინი.',
    'n_ext_h_3'  => ($lang == 'en') ? '"Shark jaw" style front bumper for a striking visual impact.' : '"ზვიგენის ყბის" სტილის წინა ბამპერი შთამბეჭდავი ვიზუალური ეფექტისთვის.',
    'n_ext_h_4'  => ($lang == 'en') ? 'Elegant and refined aesthetics.' : 'ელეგანტური და დახვეწილი ესთეტიკა.',
    'n_ext_c1_t' => ($lang == 'en') ? 'Robust cabin.' : 'მტკიცე კაბინა.',
    'n_ext_c1_1' => ($lang == 'en') ? 'Galvanized stamping for better corrosion resistance.' : 'გალვანიზებული შტამპვა კოროზიის მიმართ უკეთესი მედეგობისთვის.',
    'n_ext_c1_2' => ($lang == 'en') ? 'Reinforced high-strength steel applied in 13 critical areas of cabin shell with energy absorption technology.' : 'გაძლიერებული მაღალი სიმტკიცის ფოლადი კაბინის 13 კრიტიკულ ზონაში ენერგიის შთანთქმის ტექნოლოგიით.',
    'n_ext_c2_t' => ($lang == 'en') ? 'Good aerodynamics performance.' : 'კარგი აეროდინამიკური მახასიათებლები.',
    'n_ext_c2_1' => ($lang == 'en') ? 'Fine-tuned aerodynamics of whole cabin.' : 'მთლიანი კაბინის დახვეწილი აეროდინამიკა.',
    'n_ext_c2_2' => ($lang == 'en') ? 'Enhanced dynamic air deflector(optional).' : 'გაუმჯობესებული დინამიკური ჰაერის დეფლექტორი (ოფცია).',
    'n_ext_c2_3' => ($lang == 'en') ? 'Integrated exterior rear-view mirror.' : 'ინტეგრირებული ექსტერიერის უკანა ხედვის სარკე.',
    'n_ext_c3_t' => ($lang == 'en') ? 'Better lighting performance.' : 'უკეთესი განათება.',
    'n_ext_c3_1' => ($lang == 'en') ? '40% Brighter illumination.' : '40%-ით მეტი სიკაშკაშე.',
    'n_ext_c3_2' => ($lang == 'en') ? '30% Extended irradiation distance.' : '30%-ით გაზრდილი ნათების მანძილი.',
    'n_ext_c3_3' => ($lang == 'en') ? '50% Reduced energy consumption.' : '50%-ით შემცირებული ენერგიის მოხმარება.',
    'pow_rel_title' => ($lang == 'en') ? 'POWERFUL & RELIABLE' : 'მძლავრი და საიმედო',
    'pow_rel_sub'   => ($lang == 'en') ? 'Advanced JAC engine series.' : 'JAC ძრავების მოწინავე სერია.',
    'pow_rel_desc'  => ($lang == 'en') ? 'Combining independent research and strategic collaboration, we offer a wide range of power products tailored to various complex working conditions. From Euro III to Euro VI emission standards, we provide the most suitable power options for your needs.' : 'დამოუკიდებელი კვლევებისა და სტრატეგიული თანამშრომლობის კომბინაციით, ჩვენ გთავაზობთ ძრავების ფართო არჩევანს, რომელიც მორგებულია სხვადასხვა რთულ სამუშაო პირობებზე. ევრო III-დან ევრო VI ემისიის სტანდარტებამდე, ჩვენ გთავაზობთ თქვენს საჭიროებებზე მორგებულ საუკეთესო ვარიანტებს.',
    'intel_title'   => ($lang == 'en') ? 'INTELLIGENT' : 'ინტელექტუალური',
    'safe_title'    => ($lang == 'en') ? 'SAFETY' : 'უსაფრთხოება',
    'safe_top_desc' => ($lang == 'en') ? 'The New N-Series Trucks demonstrate advanced intelligent safety design. They feature various intelligent safety systems such as driver assistance, lane departure warning, and emergency braking assistance, significantly enhancing vehicle safety.' : 'ახალი N-სერიის სატვირთო ავტომობილები გამოირჩევა უსაფრთხოების მოწინავე ინტელექტუალური დიზაინით. ისინი აღჭურვილია უსაფრთხოების სხვადასხვა სისტემებით, როგორიცაა მძღოლის დამხმარე, ზოლიდან გადასვლის გაფრთხილება და ექსტრემალური დამუხრუჭების დახმარება, რაც მნიშვნელოვნად აუმჯობესებს ავტომობილის უსაფრთხოებას.',
    'safe_sub'      => ($lang == 'en') ? 'Dual airbags.' : 'ორმაგი უსაფრთხოების ბალიშები.',
    'safe_desc'     => ($lang == 'en') ? 'In the event of a collision, the Supplemental Restraint System identifies severe impacts and deploys the airbags within one second, cushioning the occupants and reducing harm.' : 'შეჯახების შემთხვევაში, დამატებითი დამცავი სისტემა ამოიცნობს ძლიერ დარტყმას და ერთ წამში ხსნის უსაფრთხოების ბალიშებს, რაც არბილებს დარტყმას და ამცირებს მგზავრთა დაზიანებას.',
    'chas_title'    => ($lang == 'en') ? 'CHASSIS' : 'შასი',
    'chas_sub'      => ($lang == 'en') ? 'Innovative light but robust chassis.' : 'ინოვაციური მსუბუქი, მაგრამ მტკიცე შასი.',
    'app_title'     => ($lang == 'en') ? 'POWERFUL & RELIABLE' : 'მძლავრი და საიმედო',
    'app_sub'       => ($lang == 'en') ? 'A truck for every application' : 'სატვირთო ავტომობილი ნებისმიერი დანიშნულებისთვის',
    'app_desc'      => ($lang == 'en') ? 'JAC N-Series trucks offer variety of wheel base options and specialized designs, making it suitable for different rear body re-fitment, to meet the unique specialized needs of your business.' : 'JAC N-სერიის სატვირთო ავტომობილები გთავაზობთ ბორბლების ბაზის მრავალფეროვან ვარიანტებსა და სპეციალიზებულ დიზაინს, რაც მათ შესაფერისს ხდის ძარის სხვადასხვა ტიპის გადაკეთებისთვის, რათა დააკმაყოფილოს თქვენი ბიზნესის სპეციფიკური საჭიროებები.',
    'disc_title'    => ($lang == 'en') ? 'Discover Your JAC N-Series' : 'აღმოაჩინე შენი JAC N-სერია',
    'btn_5t_frz'    => 'JAC 5 Ton Freezer',
    'btn_3t'        => 'JAC 3 Ton',
    'btn_5t'        => 'JAC 5 Ton'
];

// 7 ფერის მასივი (თანმიმდევრობა და HEX კოდები გასწორებულია სურათის მიხედვით)
$colors = [
    ['name' => 'Red',          'name_ka' => 'წითელი',                   'img' => 'https://jacen.jac.com.cn/_nuxt/img/Red.3d0e45b.png', 'hex' => '#b71c1c'],
    ['name' => 'Black',        'name_ka' => 'შავი',                     'img' => 'https://jacen.jac.com.cn/_nuxt/img/Black.334efe7.png', 'hex' => '#181818'],
    ['name' => 'White',        'name_ka' => 'თეთრი',                    'img' => 'https://jacen.jac.com.cn/_nuxt/img/White.92b5ea5.png', 'hex' => '#f5f5f5'],
    ['name' => 'Gray',         'name_ka' => 'ნაცრისფერი',               'img' => 'https://jacen.jac.com.cn/_nuxt/img/Gray.37045a4.png', 'hex' => '#545454'],
    ['name' => 'Yellow',       'name_ka' => 'ყვითელი',                  'img' => 'https://jacen.jac.com.cn/_nuxt/img/Yellow.90501b4.png', 'hex' => '#fbc02d'],
    ['name' => 'Silver',       'name_ka' => 'ვერცხლისფერი',             'img' => 'https://jacen.jac.com.cn/_nuxt/img/Silver.a65ef69.png', 'hex' => '#c0c0c0'],
    ['name' => 'Blue',         'name_ka' => 'ლურჯი',                    'img' => 'https://jacen.jac.com.cn/_nuxt/img/Blue.6952985.png', 'hex' => '#0d47a1'],
    ['name' => 'Silvery-Gray', 'name_ka' => 'მოვერცხლისფრო-ნაცრისფერი', 'img' => 'https://jacen.jac.com.cn/_nuxt/img/Silvery-Gray.c7542f6.png', 'hex' => '#8e8e8e'],
];
?>

<main class="e30x-page">

 <section class="e30x-hero" id="n-series-main-hero">
        <div class="e30x-hero-overlay"></div>
        <div class="e30x-hero-content fade-up">
            <h1>JAC <br class="mobile-break">New N-Series Trucks</h1>
            <p><?php echo esc_html($t['hero_sub']); ?></p>
            <p class="hero-extra-text"><?php echo esc_html($t['hero_extra']); ?></p>
        </div>
    </section>

    <nav class="e30x-subnav" id="carSubNav">
        <div class="e30x-container subnav-flex">
            <div class="subnav-brand">
                <img src="https://jacen.jac.com.cn/_nuxt/img/N-seriesTrucksimg.7ec28f6.png" alt="JAC N-Series">
            </div>
            <ul class="subnav-links">
                <li><a href="#overview" class="active"><?php echo esc_html($t['nav_overview']); ?></a></li>
                <li><a href="#specs"><?php echo esc_html($t['nav_specs']); ?></a></li>
                <li><a href="#gallery"><?php echo esc_html($t['nav_gallery']); ?></a></li>
                <li><a href="#exterior"><?php echo esc_html($t['nav_exterior']); ?></a></li>
                <li><a href="#interior"><?php echo esc_html($t['nav_interior']); ?></a></li>
                <li><a href="#comfort"><?php echo esc_html($t['nav_comfort']); ?></a></li>
                <li>
                    <a href="https://jacen.jac.com.cn/pdf/E30X.pdf" target="_blank" class="subnav-btn-brochure">
                        <i class="fa-regular fa-file-pdf"></i> <?php echo esc_html($t['nav_brochure']); ?>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

<section id="overview" class="n-gen-section">
        <div class="e30x-container">
            <div class="gen-content-flex">
                <div class="gen-text-side fade-up">
    <h2 class="gen-main-title"><?php echo esc_html($t['gen_title']); ?></h2>
    <p class="gen-description"><?php echo esc_html($t['gen_desc']); ?></p>
</div>
                <div class="gen-image-side fade-up delay-1">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/116.f58ac68.png" alt="JAC New N-Series">
                </div>
            </div>
        </div>
    </section>
 <section id="specs" class="t9-section t9-highlights">
        <div class="t9-container h-flex">
            <div class="h-left fade-up">
                <h2><?php echo esc_html($t['hl_title']); ?></h2>
                <p><?php echo esc_html($t['hl_sub']); ?></p>
            </div>
            <div class="h-right">
                <div class="spec-box fade-up delay-1">
                    <span class="spec-val"><?php echo esc_html($t['hl_item1']); ?></span>
                </div>
                <div class="spec-box fade-up delay-1">
                    <span class="spec-val"><?php echo esc_html($t['hl_item2']); ?></span>
                </div>
                <div class="spec-box fade-up delay-1">
                    <span class="spec-val"><?php echo esc_html($t['hl_item3']); ?></span>
                </div>
                <div class="spec-box fade-up delay-2">
                    <span class="spec-val"><?php echo esc_html($t['hl_item4']); ?></span>
                </div>
                <div class="spec-box fade-up delay-2">
                    <span class="spec-val"><?php echo esc_html($t['hl_item5']); ?></span>
                </div>
                <div class="spec-box fade-up delay-2">
                    <span class="spec-val"><?php echo esc_html($t['hl_item6']); ?></span>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="e30x-section text-center gallery-main-wrapper">
        <div class="e30x-container">
            <h2 class="section-title fade-up"><?php echo esc_html($t['fun_title']); ?></h2>

            <div class="gallery-tabs fade-up delay-1">
                <button class="gal-tab active" data-cat="exterior"><?php echo esc_html($t['nav_exterior']); ?></button>
                <button class="gal-tab" data-cat="interior"><?php echo esc_html($t['nav_interior']); ?></button>
            </div>

            <div class="t9-gallery fade-up delay-1">
                <img src="https://jacen.jac.com.cn/_nuxt/img/N90-EX-001.172175b.png" class="gal-img active" data-cat="exterior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/N90-EX-002.9c54ea1.png" class="gal-img" data-cat="exterior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/N90-EX-003.cc17424.png" class="gal-img" data-cat="exterior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/N90-EX-004.9015363.png" class="gal-img" data-cat="exterior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/N90-EX-005.8a458a3.png" class="gal-img" data-cat="exterior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/N90-EX-006.4205ca5.png" class="gal-img" data-cat="exterior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/N90-EX-007.4f0dc4c.png" class="gal-img" data-cat="exterior">

                <img src="https://jacen.jac.com.cn/_nuxt/img/N-series_01_01_03.e52332d.jpg" class="gal-img" data-cat="interior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/N-series_01_02_03.3a4547e.jpg" class="gal-img" data-cat="interior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/N-series_01_03.557f628.jpg" class="gal-img" data-cat="interior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/N-series_01_04.1844318.jpg" class="gal-img" data-cat="interior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/N-series_01_05.917b46a.jpg" class="gal-img" data-cat="interior">
                <img src="https://jacen.jac.com.cn/_nuxt/img/N-series_01_07_03.8482fce.jpg" class="gal-img" data-cat="interior">
            </div>

            <div class="gal-nav-wrapper fade-up delay-2">
                <button class="gal-arrow prev"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="gal-indicators"></div>
                <button class="gal-arrow next active"><i class="fa-solid fa-chevron-right"></i></button>
            </div>


        </div>
    </section> 
   
 

   <section id="comfort" class="e30x-section e30x-battery">
        <div class="battery-content-wrapper fade-up delay-1">
            <picture class="battery-main-bg">
                <img src="https://jacen.jac.com.cn/_nuxt/img/bg_02.c764cf0.jpg" alt="Engineered for efficiency">
            </picture>

            <div class="battery-info-card">
                <h2 class="battery-info-title"><?php echo esc_html($t['cc_title']); ?></h2>
                <p class="battery-info-desc"><?php echo esc_html($t['cc_desc']); ?></p>

                <ul class="battery-specs-grid" style="margin-bottom: 40px;">
                    <li style="font-size: 15px; margin-bottom: 12px; font-weight: 500; line-height: 1.5;"><?php echo esc_html($t['cc_sp1']); ?></li>
                    <li style="font-size: 15px; margin-bottom: 12px; font-weight: 500; line-height: 1.5;"><?php echo esc_html($t['cc_sp2']); ?></li>
                    <li style="font-size: 15px; margin-bottom: 12px; font-weight: 500; line-height: 1.5;"><?php echo esc_html($t['cc_sp3']); ?></li>
                    <li style="font-size: 15px; margin-bottom: 12px; font-weight: 500; line-height: 1.5;"><?php echo esc_html($t['cc_sp4']); ?></li>
                </ul>

                <a href="https://jacen.jac.com.cn/pdf/E30X.pdf" target="_blank" class="btn-white-pill">
                    <?php echo esc_html($t['full_specs']); ?>
                </a>
            </div>
        </div>
    </section>
    

 <section id="n-ext-section">
        <div class="n-ext-container fade-up">
            <div class="section-header">
                <h2 class="section-title"><?php echo esc_html($t['ext_lbl']); ?></h2>
                <div class="title-underline"></div>
                <p class="intro-description">
                    <?php echo esc_html($t['n_ext_sub']); ?>
                </p>
            </div>

            <div class="hero-wrapper fade-up delay-1">
                <img src="https://jacen.jac.com.cn/_nuxt/img/001.95b0503.jpg" alt="JAC N-Series Trucks" class="hero-image">
                <div class="info-box">
                    <h2><?php echo esc_html($t['n_ext_h_t']); ?></h2>
                    <p><?php echo esc_html($t['n_ext_h_1']); ?></p>
                    <p><?php echo esc_html($t['n_ext_h_2']); ?></p>
                    <p><?php echo esc_html($t['n_ext_h_3']); ?></p>
                    <p><?php echo esc_html($t['n_ext_h_4']); ?></p>
                </div>
            </div>

            <div class="features-grid desktop-only-grid fade-up delay-2">
                <div class="feature-column">
                    <div class="left-column-wrapper">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/002.f658c7e.jpg" alt="JAC Truck Side View">
                        <div>
                            <h3><?php echo esc_html($t['n_ext_c1_t']); ?></h3>
                            <p><?php echo esc_html($t['n_ext_c1_1']); ?></p>
                            <p><?php echo esc_html($t['n_ext_c1_2']); ?></p>
                        </div>
                    </div>
                </div>

                <div class="feature-column right-column">
                    <div class="detail-images">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/003.5b44faf.jpg" alt="Aerodynamics Detail">
                        <div class="feature-section">
                            <h3><?php echo esc_html($t['n_ext_c2_t']); ?></h3>
                            <p><?php echo esc_html($t['n_ext_c2_1']); ?></p>
                            <p><?php echo esc_html($t['n_ext_c2_2']); ?></p>
                            <p><?php echo esc_html($t['n_ext_c2_3']); ?></p>
                        </div>
                        <img src="https://jacen.jac.com.cn/_nuxt/img/004.5cacee7.jpg" alt="Front Grille Detail">
                    </div>
                    
                    <div class="feature-section">
                        <h3><?php echo esc_html($t['n_ext_c3_t']); ?></h3>
                        <p><?php echo esc_html($t['n_ext_c3_1']); ?></p>
                        <p><?php echo esc_html($t['n_ext_c3_2']); ?></p>
                        <p><?php echo esc_html($t['n_ext_c3_3']); ?></p>
                    </div>
                </div>
            </div>

            <div class="mobile-ext-slider-wrapper fade-up delay-2">
                <div class="mobile-ext-slider">
                    <div class="mobile-ext-card active">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/002.f658c7e.jpg" alt="Robust cabin">
                        <div class="mobile-ext-info">
                            <h3><?php echo esc_html($t['n_ext_c1_t']); ?></h3>
                            <p><?php echo esc_html($t['n_ext_c1_1']); ?></p>
                            <p><?php echo esc_html($t['n_ext_c1_2']); ?></p>
                        </div>
                    </div>
                    <div class="mobile-ext-card">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/003.5b44faf.jpg" alt="Aerodynamics Detail">
                        <div class="mobile-ext-info">
                            <h3><?php echo esc_html($t['n_ext_c2_t']); ?></h3>
                            <p><?php echo esc_html($t['n_ext_c2_1']); ?></p>
                            <p><?php echo esc_html($t['n_ext_c2_2']); ?></p>
                            <p><?php echo esc_html($t['n_ext_c2_3']); ?></p>
                        </div>
                    </div>
                    <div class="mobile-ext-card">
                        <img src="https://jacen.jac.com.cn/_nuxt/img/004.5cacee7.jpg" alt="Front Grille Detail">
                        <div class="mobile-ext-info">
                            <h3><?php echo esc_html($t['n_ext_c3_t']); ?></h3>
                            <p><?php echo esc_html($t['n_ext_c3_1']); ?></p>
                            <p><?php echo esc_html($t['n_ext_c3_2']); ?></p>
                            <p><?php echo esc_html($t['n_ext_c3_3']); ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="ext-nav-wrapper">
                    <button class="ext-arrow prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <div class="ext-indicators">
                        <span class="ext-ind active"></span>
                        <span class="ext-ind"></span>
                        <span class="ext-ind"></span>
                    </div>
                    <button class="ext-arrow next active"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>

        </div>
    </section>

    <section id="n-int-section">
        <div class="n-int-container fade-up">
            <div class="section-header">
                <h2 class="section-title"><?php echo esc_html($t['int_lbl']); ?></h2>
                <div class="title-underline"></div>
                <p class="intro-description"><?php echo esc_html($t['int_sub']); ?></p>
            </div>

            <div class="int-slider-wrapper fade-up delay-1">
                <div class="int-slider">
                    <div class="int-slide active">
                        <div class="int-slide-img">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/N90-IN-001.7ae07d9.png" alt="Interior Ergonomics">
                        </div>
                        <div class="int-slide-info">
                            <h3 class="int-info-title"><?php echo esc_html($t['int_s1_t']); ?></h3>
                            <ul class="int-info-list">
                                <li><?php echo esc_html($t['int_s1_l1']); ?></li>
                                <li><?php echo esc_html($t['int_s1_l2']); ?></li>
                                <li><?php echo esc_html($t['int_s1_l3']); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="int-slide">
                        <div class="int-slide-img">
                            <img src="https://jacen.jac.com.cn/_nuxt/img/N90-IN-003.8a6530f.png" alt="Interior Space">
                        </div>
                        <div class="int-slide-info">
                            <h3 class="int-info-title"><?php echo esc_html($t['int_s2_t']); ?></h3>
                            <ul class="int-info-list">
                                <li><?php echo esc_html($t['int_s2_l1']); ?></li>
                                <li><?php echo esc_html($t['int_s2_l2']); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="int-nav-wrapper">
                    <button class="int-btn prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <div class="int-indicators">
                        <span class="int-ind active"></span>
                        <span class="int-ind"></span>
                    </div>
                    <button class="int-btn next active"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <section id="n-power-section" class="n-power-section">
        <div class="n-power-container">
            <h2 class="n-power-title fade-up"><?php echo esc_html($t['pow_rel_title']); ?></h2>
            <div class="title-underline-dark fade-up"></div>

            <img src="https://jacen.jac.com.cn/_nuxt/img/fdj.5edb371.png" alt="JAC Engine" class="n-power-img fade-up delay-1">
            
            <div class="n-power-text-row fade-up delay-2">
                <div class="n-power-text-left">
                    <h3><?php echo esc_html($t['pow_rel_sub']); ?></h3>
                </div>
                <div class="n-power-text-right">
                    <p><?php echo esc_html($t['pow_rel_desc']); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="n-intelligent-section" class="n-intelligent-section">
        <div class="n-intelligent-container">
            <h2 class="n-power-title fade-up"><?php echo esc_html($t['intel_title']); ?></h2>
            <div class="title-underline-dark fade-up"></div>
            
            <img src="https://jacen.jac.com.cn/_nuxt/img/IMAGE2.4147f53.png" alt="Intelligent" class="n-intelligent-img fade-up delay-1">
            
            <div class="n-intelligent-btn-wrapper fade-up delay-2">
                <a href="https://jacen.jac.com.cn/pdf/E30X.pdf" target="_blank" class="btn-dark-pill">
                    <?php echo esc_html($t['full_specs']); ?>
                </a>
            </div>
        </div>
    </section>

    <section id="n-application-section" class="n-application-section">
        <div class="n-power-container">
            <h2 class="n-power-title fade-up"><?php echo esc_html($t['app_title']); ?></h2>
            <div class="title-underline-dark fade-up"></div>
            
            <h3 class="n-app-subtitle fade-up delay-1">
                <?php echo esc_html($t['app_sub']); ?>
            </h3>
            <p class="n-app-desc fade-up delay-1">
                <?php echo esc_html($t['app_desc']); ?>
            </p>

            <div class="n-app-images fade-up delay-2">
                <img src="https://jacen.jac.com.cn/_nuxt/img/app1.96ef939.png" alt="Application 1">
                <img src="https://jacen.jac.com.cn/_nuxt/img/app2.dd3c348.png" alt="Application 2">
                <img src="https://jacen.jac.com.cn/_nuxt/img/app3.a157df0.png" alt="Application 3">
            </div>
        </div>
    </section>

    <section id="n-safety-section" class="n-safety-section">
        <div class="n-power-container">
            <h2 class="n-power-title fade-up"><?php echo esc_html($t['safe_title']); ?></h2>
            <div class="title-underline-dark fade-up"></div>
            <p class="n-power-subtitle fade-up delay-1">
                <?php echo esc_html($t['safe_top_desc']); ?>
            </p>

            <img src="https://jacen.jac.com.cn/_nuxt/img/safety.57a8cf5.png" alt="Safety" class="n-power-img fade-up delay-1">
            
            <div class="n-power-text-row fade-up delay-2">
                <div class="n-power-text-left">
                    <h3><?php echo esc_html($t['safe_sub']); ?></h3>
                </div>
                <div class="n-power-text-right">
                    <p><?php echo esc_html($t['safe_desc']); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="n-chassis-section" class="n-chassis-section">
        <div class="n-power-container">
            <h2 class="n-power-title fade-up"><?php echo esc_html($t['chas_title']); ?></h2>
            <div class="title-underline-dark fade-up"></div>
            <p class="n-power-subtitle fade-up delay-1">
                <?php echo esc_html($t['chas_sub']); ?>
            </p>

            <img src="https://jacen.jac.com.cn/_nuxt/img/classis.8ce427b.png" alt="Chassis" class="n-intelligent-img fade-up delay-1">
            
            <div class="n-intelligent-btn-wrapper fade-up delay-2">
                <a href="https://jacen.jac.com.cn/pdf/E30X.pdf" target="_blank" class="btn-dark-pill">
                    <?php echo esc_html($t['full_specs']); ?>
                </a>
            </div>
        </div>
    </section>

    <section id="n-application-section" class="n-application-section">
        <div class="n-power-container">
            <h2 class="n-power-title fade-up"><?php echo esc_html($t['app_title']); ?></h2>
            <div class="title-underline-dark fade-up"></div>
            
            <h3 class="n-app-subtitle fade-up delay-1">
                <?php echo esc_html($t['app_sub']); ?>
            </h3>
            <p class="n-app-desc fade-up delay-1">
                <?php echo esc_html($t['app_desc']); ?>
            </p>

            <div class="n-app-images fade-up delay-2">
                <img src="https://jacen.jac.com.cn/_nuxt/img/app1.96ef939.png" alt="Application 1">
                <img src="https://jacen.jac.com.cn/_nuxt/img/app2.dd3c348.png" alt="Application 2">
                <img src="https://jacen.jac.com.cn/_nuxt/img/app3.a157df0.png" alt="Application 3">
            </div>
        </div>
    </section>
  
 </div>
    </div>

     <section id="n-specs-download" class="n-specs-download">
        <div class="n-power-container">
            <h2 class="n-power-title fade-up"><?php echo esc_html($t['disc_title']); ?></h2>
            <div class="title-underline-dark fade-up"></div>

            <div class="n-pdf-buttons-wrapper fade-up delay-1">
                <a href="#" target="_blank" class="n-pdf-btn">
                    <i class="fa-regular fa-file-pdf"></i> <?php echo esc_html($t['btn_5t_frz']); ?>
                </a>
                <a href="#" target="_blank" class="n-pdf-btn">
                    <i class="fa-regular fa-file-pdf"></i> <?php echo esc_html($t['btn_3t']); ?>
                </a>
                <a href="#" target="_blank" class="n-pdf-btn">
                    <i class="fa-regular fa-file-pdf"></i> <?php echo esc_html($t['btn_5t']); ?>
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>