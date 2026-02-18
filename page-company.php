<?php
/**
 * Template Name: Company Page
 */
get_header();

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';
$opt_id = 'options_' . $current_lang;

// ლოკალური საკონტაქტო ინფო
$local_address = get_field('contact_address', $opt_id) ?: get_field('contact_address', 'option');
$local_email   = get_field('contact_email', $opt_id) ?: get_field('contact_email', 'option');

// ==========================================
// ტექსტების სრული თარგმანი (ყველა სათაური ნათარგმნია)
// ==========================================

// Hero Section
$t_hero_title = ($current_lang == 'en') ? "Better Drive, Better Life" : "უკეთესი ავტომობილი, უკეთესი ცხოვრება";
$t_hero_sub = ($current_lang == 'en') ? 'JAC MOTORS was founded in 1964.' : 'JAC MOTORS დაარსდა 1964 წელს.';

// Explore Section
$t_red_title = ($current_lang == 'en') ? "Explore JAC MOTORS" : "აღმოაჩინეთ JAC MOTORS";
$t_red_sub = ($current_lang == 'en') ? "Better Drive, Better Life" : "უკეთესი ავტომობილი, უკეთესი ცხოვრება";
$t_red_desc = ($current_lang == 'en') ? 'Anhui Jianghuai Automobile Group Co., Ltd. (JAC MOTORS) is a global automaker that integrates R&D, manufacturing, sales, and services across commercial and passenger vehicles. Its business also spans core components, mobility solutions, and automotive financial services. With over 12 million vehicles delivered worldwide, JAC offers a full product lineup—including trucks, MPVs, SUVs, sedans, and buses—powered by both traditional and new energy technologies.' : 'Anhui Jianghuai Automobile Group Co., Ltd. (JAC MOTORS) არის გლობალური საავტომობილო ჯგუფი, რომელიც აერთიანებს კვლევას, წარმოებას, გაყიდვებსა და სერვისს კომერციული და სამგზავრო ავტომობილების მიმართულებით. მსოფლიოს მასშტაბით მიწოდებულია 12 მილიონზე მეტი ავტომობილი. JAC მომხმარებელს სთავაზობს სრულ პროდუქციას — სატვირთოების, MPV, SUV და სედანების ჩათვლით.';

// Honors Section
$t_honors_title = ($current_lang == 'en') ? "JAC Brand Honors" : "JAC ბრენდის ჯილდოები";
$t_honors_sub = ($current_lang == 'en') ? 'To be Excellent' : 'ბრწყინვალებისკენ სწრაფვა';

// მოზაიკის ტექსტები
$t_top = ($current_lang == 'en') ? 'Top' : 'ტოპ';
$t_million = ($current_lang == 'en') ? 'Million' : 'მილიონი';
$t_billion = ($current_lang == 'en') ? 'Billion $' : 'მილიარდი $';
$t_no = ($current_lang == 'en') ? 'No.' : '№';

$m_china_auto = ($current_lang == 'en') ? 'China Auto Company' : 'ჩინეთის ავტო კომპანია';
$m_sales_vol = ($current_lang == 'en') ? 'Global Sales Volume' : 'გლობალური გაყიდვების მოცულობა';
$m_kantar = ($current_lang == 'en') ? 'Google KANTAR Brand Z<br>Global Brand Builders' : 'Google KANTAR Brand Z<br>გლობალური ბრენდის შემქმნელები';
$m_brand_fin = ($current_lang == 'en') ? "Brand Finance's List<br>Most Valuable Car Brands" : 'Brand Finance-ის სია<br>მსოფლიოს ყველაზე ღირებული ავტობრენდები';
$m_top_100 = ($current_lang == 'en') ? 'Global Top 100<br>Most Valuable Car Brands' : 'გლობალური ტოპ 100<br>ყველაზე ღირებული ავტობრენდები';
$m_countries = ($current_lang == 'en') ? 'Countries and Regions' : 'ქვეყანა და რეგიონი';
$m_users = ($current_lang == 'en') ? 'Overseas Users' : 'საერთაშორისო მომხმარებელი';

// Global Resources
$t_global_title = ($current_lang == 'en') ? "Global Resources.<br>Global Vehicles." : "გლობალური რესურსები.<br>გლობალური ავტომობილები.";
$t_global_sub = ($current_lang == 'en') ? '27 Production Facilities Worldwide<br>Including 8 Production Bases in China and 19 Overseas KD Factories' : '27 საწარმოო ობიექტი მსოფლიოში<br>მათ შორის 8 ბაზა ჩინეთში და 19 ქარხანა საზღვარგარეთ';

// Global Metrics 
$g_sales_net = ($current_lang == 'en') ? 'Overseas Sales<br>Networks' : 'საერთაშორისო გაყიდვების<br>ქსელი';
$g_serv_net = ($current_lang == 'en') ? 'Overseas Service<br>Networks' : 'საერთაშორისო სერვის<br>ქსელი';
$g_regions = ($current_lang == 'en') ? 'Countries And<br>Regions Covered' : 'მოცული ქვეყნები<br>და რეგიონები';
$g_export = ($current_lang == 'en') ? 'Units<br>Accumulative Export' : 'ერთეული<br>ჯამური ექსპორტი';

// Future & Contact
$t_future_title = ($current_lang == 'en') ? "Our Future" : "ჩვენი მომავალი";
$t_future_sub = ($current_lang == 'en') ? "It's just the beginning" : 'ეს მხოლოდ დასაწყისია';
$t_future_main = ($current_lang == 'en') ? '1 million vehicles and 100 billion RMB<br>revenue annually within the next decade.' : '1 მილიონი ავტომობილი და<br>100 მილიარდი RMB<br>შემოსავალი მომდევნო<br>ათწლეულში.';
$t_future_desc = ($current_lang == 'en') ? 'JAC MOTORS is committed to strengthening and expanding its commercial vehicle business while accelerating the development of intelligent and new energy vehicles.' : 'JAC MOTORS მოწოდებულია გააძლიეროს და გააფართოვოს კომერციული მანქანების ბიზნესი ინტელექტუალური და ახალი ენერგიის ავტომობილების განვითარების პარალელურად.';

$t_contact_final = ($current_lang == 'en') ? "Contact Us" : "დაგვიკავშირდით";
$t_sena_dist = ($current_lang == 'en') ? "Official Distributor of JAC MOTORS in Georgia" : "JAC MOTORS-ის ოფიციალური დისტრიბუტორი საქართველოში";
$t_lbl_address = ($current_lang == 'en') ? 'Address:' : 'მისამართი:';
$t_lbl_email = ($current_lang == 'en') ? 'Email:' : 'ელ-ფოსტა:';

// Honors Array
$honors = [
    ['icon' => 'fa-building', 'year' => '2006', 'en' => 'National Enterprise Technology Center', 'ka' => 'ეროვნული საწარმოო ტექნოლოგიების ცენტრი'],
    ['icon' => 'fa-ship', 'year' => '2009', 'en' => 'Export Inspection-free Enterprise', 'ka' => 'საექსპორტო ინსპექციისგან თავისუფალი საწარმო'],
    ['icon' => 'fa-star', 'year' => '2010', 'en' => 'National Quality Award', 'ka' => 'ეროვნული ხარისხის ჯილდო'],
    ['icon' => 'fa-drafting-compass', 'year' => '2015', 'en' => 'National Industrial Design Center', 'ka' => 'ეროვნული ინდუსტრიული დიზაინის ცენტრი'],
    ['icon' => 'fa-trophy', 'year' => '2018', 'en' => 'China Industry Award', 'ka' => 'ჩინეთის ინდუსტრიის ჯილდო'],
    ['icon' => 'fa-award', 'year' => '2023', 'en' => 'AutoVision China Jury Nomination Award', 'ka' => 'AutoVision China ჟიურის ნომინაციის ჯილდო'],
];
?>

<main class="company-page">

    <section class="company-hero">
        <div class="company-hero-bg">
            <video autoplay muted loop playsinline class="hero-video">
                <source src="https://jacen.jac.com.cn/_nuxt/videos/company-new_output.59a2156.mp4" type="video/mp4">
            </video>
            <div class="company-hero-overlay"></div>
        </div>
        <div class="company-container">
            <div class="company-hero-content">
                <h1 class="fade-up"><?php echo esc_html($t_hero_title); ?></h1>
                <p class="fade-up delay-1"><?php echo esc_html($t_hero_sub); ?></p>
            </div>
        </div>
    </section>

    <section class="company-factory-img">
        <img src="https://jacen.jac.com.cn/_nuxt/img/img1.8ea8b1c.jpg" alt="JAC HQ">
    </section>

    <section class="company-red-section">
        <div class="company-container">
            <div class="red-content">
                <h2 class="fade-up"><?php echo esc_html($t_red_title); ?></h2>
                <h3 class="fade-up delay-1"><?php echo esc_html($t_red_sub); ?></h3>
                <p class="fade-up delay-2"><?php echo esc_html($t_red_desc); ?></p>
            </div>
        </div>
    </section>

    <section class="company-metrics-section">
        <div class="mosaic-upper-wrap">
            <div class="mosaic-car-block bg-light">
                <img src="https://jacen.jac.com.cn/_nuxt/img/his-img.a2641a4.png" alt="JAC Car" class="slide-in-left">
            </div>
            
            <div class="mosaic-four-grid">
                <div class="m-box bg-light">
                    <span class="m-val fade-up"><sup><?php echo esc_html($t_top); ?></sup> <span class="counter-val" data-count="500">0</span></span>
                    <span class="m-label fade-up delay-1"><?php echo wp_kses_post($m_china_auto); ?></span>
                </div>
                <div class="m-box bg-dark">
                    <span class="m-val fade-up"><span class="counter-val" data-count="12">0</span> <sup class="sup-right"><?php echo esc_html($t_million); ?></sup></span>
                    <span class="m-label fade-up delay-1"><?php echo wp_kses_post($m_sales_vol); ?></span>
                </div>
                <div class="m-box bg-light">
                    <span class="m-val fade-up"><sup><?php echo esc_html($t_no); ?></sup> <span class="counter-val" data-count="28">0</span></span>
                    <span class="m-label fade-up delay-1"><?php echo wp_kses_post($m_kantar); ?></span>
                </div>
                <div class="m-box bg-light">
                    <span class="m-val fade-up"><sup><?php echo esc_html($t_top); ?></sup> <span class="counter-val" data-count="100">0</span></span>
                    <span class="m-label fade-up delay-1"><?php echo wp_kses_post($m_brand_fin); ?></span>
                </div>
            </div>
        </div>

        <div class="mosaic-lower-grid">
            <div class="m-box bg-red">
                <span class="m-val fade-up"><span class="counter-val" data-count="6">0</span> <sup class="sup-right"><?php echo esc_html($t_billion); ?></sup></span>
                <span class="m-label fade-up delay-1"><?php echo wp_kses_post($m_top_100); ?></span>
            </div>
            <div class="m-box bg-white">
                <span class="m-val fade-up"><span class="counter-val" data-count="130">0</span> <sup class="sup-right">+</sup></span>
                <span class="m-label fade-up delay-1"><?php echo wp_kses_post($m_countries); ?></span>
            </div>
            <div class="m-box bg-red">
                <span class="m-val fade-up"><span class="counter-val" data-count="1.5" data-float="true">0</span> <sup class="sup-right"><?php echo esc_html($t_million); ?></sup></span>
                <span class="m-label fade-up delay-1"><?php echo wp_kses_post($m_users); ?></span>
            </div>
        </div>
    </section>

    <section class="company-honors">
        <div class="company-container">
            <div class="honors-header">
                <h2 class="fade-up"><?php echo esc_html($t_honors_title); ?></h2>
                <p class="fade-up delay-1"><?php echo esc_html($t_honors_sub); ?></p>
            </div>
            
            <div class="honors-grid">
                <?php foreach($honors as $honor): ?>
                <div class="honor-card fade-up">
                    <i class="fa-solid <?php echo esc_attr($honor['icon']); ?>"></i>
                    <h4><?php echo ($current_lang == 'en') ? esc_html($honor['en']) : esc_html($honor['ka']); ?></h4>
                    <span class="honor-year"><?php echo esc_html($honor['year']); ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="company-global">
        <img src="https://jacen.jac.com.cn/_nuxt/img/Brand_Company.f077c2a.jpg" alt="Global Fleet" class="global-img-bg">
        <div class="company-container content-align-left">
            <div class="global-content">
                <h2 class="fade-up"><?php echo wp_kses_post($t_global_title); ?></h2>
                <p class="fade-up delay-1"><?php echo wp_kses_post($t_global_sub); ?></p>
            </div>
        </div>
    </section>

    <section class="company-global-metrics">
        <div class="company-container">
            <div class="g-metrics-grid">
                <div class="g-metric-box">
                    <span class="g-val fade-up"><span class="counter-val" data-count="1200" data-format="true">0</span>+</span>
                    <span class="g-lbl fade-up delay-1"><?php echo wp_kses_post($g_sales_net); ?></span>
                </div>
                <div class="g-metric-box">
                    <span class="g-val fade-up"><span class="counter-val" data-count="1200" data-format="true">0</span>+</span>
                    <span class="g-lbl fade-up delay-1"><?php echo wp_kses_post($g_serv_net); ?></span>
                </div>
                <div class="g-metric-box">
                    <span class="g-val fade-up"><span class="counter-val" data-count="132">0</span>+</span>
                    <span class="g-lbl fade-up delay-1"><?php echo wp_kses_post($g_regions); ?></span>
                </div>
                <div class="g-metric-box">
                    <span class="g-val fade-up"><span class="counter-val" data-count="1500000" data-format="true">0</span>+</span>
                    <span class="g-lbl fade-up delay-1" style="font-size:18px; margin-bottom: 5px; font-weight:900;">units</span>
                    <span class="g-lbl fade-up delay-2"><?php echo wp_kses_post($g_export); ?></span>
                </div>
            </div>
        </div>
    </section>

    <section class="company-future">
        <div class="future-header">
            <h2 class="fade-up"><?php echo esc_html($t_future_title); ?></h2>
            <p class="fade-up delay-1"><?php echo esc_html($t_future_sub); ?></p>
        </div>
        <div class="future-banner">
            <img src="https://jacen.jac.com.cn/_nuxt/img/future.75d48e3.png" alt="Future JAC">
            <div class="future-overlay"></div>
            <div class="company-container relative-z">
                <div class="future-content">
                    <h2 class="fade-up"><?php echo wp_kses_post($t_future_main); ?></h2>
                    <p class="fade-up delay-1"><?php echo esc_html($t_future_desc); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section-header">
        <div class="company-container">
            <h2 class="fade-up"><?php echo esc_html($t_contact_final); ?></h2>
        </div>
    </section>

    <section class="company-contact-banner">
        <img src="https://jacen.jac.com.cn/_nuxt/img/contact.f4cf509.jpg" alt="Contact Map">
        <div class="company-container relative-z full-height-container">
            
            <div class="sena-contact-block fade-up delay-1">
                <h3 class="sena-title"><span class="red-s">S</span>ENA AUTO GROUP</h3>
                <p class="sena-subtitle"><?php echo esc_html($t_sena_dist); ?></p>
                
                <div class="sena-details">
                    <?php if($local_address): ?>
                        <p class="contact-line">
                            <i class="fa-solid fa-location-dot contact-icon"></i> 
                            <span><strong><?php echo esc_html($t_lbl_address); ?></strong> <?php echo esc_html($local_address); ?></span>
                        </p>
                    <?php endif; ?>
                    <?php if($local_email): ?>
                        <p class="contact-line">
                            <i class="fa-solid fa-envelope contact-icon"></i> 
                            <span><strong><?php echo esc_html($t_lbl_email); ?></strong> <a href="mailto:<?php echo esc_attr($local_email); ?>"><?php echo esc_html($local_email); ?></a></span>
                        </p>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const fadeElements = document.querySelectorAll('.fade-up, .slide-in-left');
    const fadeObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    fadeElements.forEach(el => fadeObserver.observe(el));

    const counters = document.querySelectorAll('.counter-val');
    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const endVal = parseFloat(target.getAttribute('data-count'));
                const isFloat = target.getAttribute('data-float') === 'true';
                const doFormat = target.getAttribute('data-format') === 'true';
                const duration = 2000; 
                let startTime = null;

                function updateCounter(currentTime) {
                    if (!startTime) startTime = currentTime;
                    const progress = Math.min((currentTime - startTime) / duration, 1);
                    const easeOut = progress * (2 - progress);
                    let currentVal = endVal * easeOut;

                    if (isFloat) {
                        target.innerText = currentVal.toFixed(1);
                    } else if (doFormat) {
                        target.innerText = Math.floor(currentVal).toLocaleString('en-US');
                    } else {
                        target.innerText = Math.floor(currentVal);
                    }

                    if (progress < 1) {
                        requestAnimationFrame(updateCounter);
                    } else {
                        if(isFloat) target.innerText = endVal.toFixed(1);
                        else if(doFormat) target.innerText = endVal.toLocaleString('en-US');
                        else target.innerText = endVal;
                    }
                }
                requestAnimationFrame(updateCounter);
                observer.unobserve(target);
            }
        });
    }, { threshold: 0.3 });
    counters.forEach(counter => counterObserver.observe(counter));
});
</script>

<?php get_footer(); ?>