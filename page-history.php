<?php
/**
 * Template Name: History Page
 */
get_header();

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';

// HERO VIDEO URL
$hero_bg_video = "https://jacen.jac.com.cn/_nuxt/videos/his1.2c82030.mp4"; 

// (მონაცემების მასივები იგივე რჩება, რაც წინა კოდში იყო...)
// მონაცემების სრული კოდი იხილეთ წინა პასუხში, აქ შემოკლებულია წაკითხვადობისთვის.
$timeline_part_1 = [ /* ... */ ];
$banner_1 = [ /* ... */ ];
$timeline_part_2 = [ /* ... */ ];
$banner_2 = [ /* ... */ ];
$timeline_part_3 = [ /* ... */ ];

// იმისთვის რომ კოდი არ გაიბეროს, მონაცემების მასივები ვიგულისხმოთ რომ აქ არის, 
// ან გამოიყენეთ წინა სრული PHP კოდი და მხოლოდ ქვედა ნაწილი შეცვალეთ.
// თუ გნებავთ, შემიძლია ისევ სრულად დავაკოპირო. 
// მოდით, სრულად დავაკოპირებ რომ არ დაიბნეთ:

// 1. პირველი ეტაპი (1964 - 2003)
$timeline_part_1 = [
    [
        'year' => 'May 20, 1964',
        'img'  => 'https://jacen.jac.com.cn/_nuxt/img/1964.34b6a19.png',
        'desc_en' => 'Hefei JAC automobile factory was founded.',
        'desc_ka' => 'დაარსდა Hefei JAC-ის საავტომობილო ქარხანა.'
    ],
    [
        'year' => 'May, 1990',
        'img'  => 'https://jacen.jac.com.cn/_nuxt/img/1990.234d213.png',
        'desc_en' => 'JAC achieved its first batch export.',
        'desc_ka' => 'JAC-მა განახორციელა პირველი პარტიის ექსპორტი.'
    ],
    [
        'year' => 'April, 1996',
        'img'  => 'https://jacen.jac.com.cn/_nuxt/img/1996.c73a0d0.png', 
        'desc_en' => 'The JAC HFC1061 light-duty truck was launched and was recognized as "one of the most influential Chinese automobile products of the past 50 years."',
        'desc_ka' => 'გამოვიდა მსუბუქი სატვირთო JAC HFC1061, რომელიც აღიარეს "ბოლო 50 წლის ერთ-ერთ ყველაზე გავლენიან ჩინურ ავტომობილად".'
    ],
    [
        'year' => 'March, 2002',
        'img'  => 'https://jacen.jac.com.cn/_nuxt/img/2002.c4a6bb9.png',
        'desc_en' => 'The JAC MPV officially rolled off the production line, laying a solid foundation for JAC to enter the passenger car market.',
        'desc_ka' => 'JAC MPV ოფიციალურად ჩამოვიდა კონვეიერიდან, რითაც ჩაეყარა საფუძველი JAC-ის შესვლას სამგზავრო ავტომობილების ბაზარზე.'
    ],
    [
        'year' => 'October, 2003',
        'img'  => 'https://jacen.jac.com.cn/_nuxt/img/2003.0c32a87.png',
        'desc_en' => 'The very first JAC heavy-duty truck has successfully rolled off the production line.',
        'desc_ka' => 'წარმატებით გამოვიდა წარმოებიდან პირველი JAC-ის მძიმე ტვირთამწეობის სატვირთო.'
    ]
];

// შუა ბანერი 1 (Design Center - 2005)
$banner_1 = [
    'title_en' => 'June, 2005',
    'title_ka' => 'ივნისი, 2005',
    'desc_en' => 'The JAC Italian Design Center, the first design center of a Chinese auto company in Europe, was inaugurated.',
    'desc_ka' => 'გაიხსნა JAC-ის იტალიური დიზაინ ცენტრი — ჩინური ავტოკომპანიის პირველი დიზაინ ცენტრი ევროპაში.',
    'img' => 'https://jacen.jac.com.cn/_nuxt/img/2005.01d4556.png'
];

// 2. მეორე ეტაპი (2009 - 2023 Apr)
$timeline_part_2 = [
    [
        'year' => 'November, 2009',
        'img'  => 'https://jacen.jac.com.cn/_nuxt/img/2009.e8b01ed.png',
        'desc_en' => 'JAC MOTORS was awarded "Enterprise for Exemption From Export Inspection".',
        'desc_ka' => 'JAC MOTORS-ს მიენიჭა "საექსპორტო ინსპექციისგან გათავისუფლებული საწარმოს" სტატუსი.'
    ],
    [
        'year' => 'June, 2017',
        'img'  => 'https://jacen.jac.com.cn/_nuxt/img/2017.31833ad.png',
        'desc_en' => 'The Hefei Municipality, Volkswagen Group (China), and JAC Group jointly signed an investment agreement.',
        'desc_ka' => 'Hefei-ს მუნიციპალიტეტმა, Volkswagen Group-მა და JAC Group-მა ხელი მოაწერეს საინვესტიციო შეთანხმებას.'
    ],
    [
        'year' => 'May, 2019',
        'img'  => 'https://jacen.jac.com.cn/_nuxt/img/2019.322321e.png',
        'desc_en' => 'JAC MOTORS completed the joint acquisition of Allur Group, Kazakhstan’s largest automobile group.',
        'desc_ka' => 'JAC MOTORS-მა დაასრულა ყაზახეთის უდიდესი საავტომობილო ჯგუფის, Allur Group-ის ერთობლივი შეძენა.'
    ],
    [
        'year' => 'December, 2022',
        'img'  => 'https://jacen.jac.com.cn/_nuxt/img/2022.60539ad.png',
        'desc_en' => 'The exports of JAC Group have reached 1 million units.',
        'desc_ka' => 'JAC Group-ის ექსპორტმა 1 მილიონ ერთეულს მიაღწია.'
    ],
    [
        'year' => 'April, 2023',
        'img'  => 'https://jacen.jac.com.cn/_nuxt/img/2023s.6999f60.png',
        'desc_en' => 'JAC Group released the slogan "Guiding Intelligence with Intelligence".',
        'desc_ka' => 'JAC Group-მა გამოუშვა ახალი სლოგანი "ინტელექტის მართვა ინტელექტით".'
    ]
];

// შუა ბანერი 2 (Huawei - 2023 Dec)
$banner_2 = [
    'title_en' => 'December, 2023',
    'title_ka' => 'დეკემბერი, 2023',
    'desc_en' => 'JAC Group signed a strategic cooperation agreement on intelligent new energy vehicles with Huawei.',
    'desc_ka' => 'JAC Group-მა და Huawei-მ ხელი მოაწერეს სტრატეგიულ თანამშრომლობას ჭკვიანი ახალი ენერგიის მანქანების შესახებ.',
    'img' => 'https://jacen.jac.com.cn/_nuxt/img/2023.937d2b0.jpg'
];

// 3. მესამე ეტაპი (2024 - 2025)
$timeline_part_3 = [
    [
        'year' => '2024',
        'img'  => 'https://jacen.jac.com.cn/_nuxt/img/2024.de775ca.png',
        'desc_en' => 'The MAEXTRO Super Factory has been officially inaugurated.',
        'desc_ka' => 'ოფიციალურად გაიხსნა MAEXTRO-ს სუპერ ქარხანა.'
    ],
    [
        'year' => '2025',
        'img'  => 'https://jacen.jac.com.cn/_nuxt/img/2025.d9572b2.png',
        'desc_en' => 'The MAEXTRO S800, an iconic flagship co-developed by JAC MOTORS and Huawei, has officially launched.',
        'desc_ka' => 'ოფიციალურად გაეშვა MAEXTRO S800, ფლაგმანი, რომელიც JAC MOTORS-მა და Huawei-მ ერთობლივად შექმნეს.'
    ]
];
?>

<main class="history-page">

    <section class="history-hero">
        <video autoplay muted loop playsinline class="history-hero-video">
            <source src="<?php echo esc_url($hero_bg_video); ?>" type="video/mp4">
        </video>
        <div class="history-hero-overlay"></div>
        <div class="hero-play-trigger" id="openVideoModal">
            <i class="fa-solid fa-play"></i>
        </div>
    </section>

    <section class="timeline-section">
        <div class="timeline-container">
            <div class="timeline-line"></div>
            <?php foreach($timeline_part_1 as $index => $item): 
                $side_class = ($index % 2 == 0) ? 'left' : 'right';
            ?>
            <div class="timeline-row <?php echo $side_class; ?> fade-up">
                <div class="timeline-content">
                    <div class="t-img-box">
                        <img src="<?php echo esc_url($item['img']); ?>" alt="<?php echo esc_attr($item['year']); ?>">
                    </div>
                    <div class="t-text-box">
                        <span class="t-year"><?php echo esc_html($item['year']); ?></span>
                        <p><?php echo ($current_lang == 'en') ? esc_html($item['desc_en']) : esc_html($item['desc_ka']); ?></p>
                    </div>
                </div>
                <div class="timeline-dot"></div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="history-break-banner" style="background-image: url('<?php echo esc_url($banner_1['img']); ?>');">
        <div class="break-overlay"></div>
        <div class="break-content fade-up">
            <h2><?php echo ($current_lang == 'en') ? esc_html($banner_1['title_en']) : esc_html($banner_1['title_ka']); ?></h2>
            <p><?php echo ($current_lang == 'en') ? esc_html($banner_1['desc_en']) : esc_html($banner_1['desc_ka']); ?></p>
        </div>
    </section>

    <section class="timeline-section">
        <div class="timeline-container">
            <div class="timeline-line"></div>
            <?php foreach($timeline_part_2 as $index => $item): 
                $side_class = ($index % 2 == 0) ? 'left' : 'right'; 
            ?>
            <div class="timeline-row <?php echo $side_class; ?> fade-up">
                <div class="timeline-content">
                    <div class="t-img-box">
                        <img src="<?php echo esc_url($item['img']); ?>" alt="<?php echo esc_attr($item['year']); ?>">
                    </div>
                    <div class="t-text-box">
                        <span class="t-year"><?php echo esc_html($item['year']); ?></span>
                        <p><?php echo ($current_lang == 'en') ? esc_html($item['desc_en']) : esc_html($item['desc_ka']); ?></p>
                    </div>
                </div>
                <div class="timeline-dot"></div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="history-break-banner" style="background-image: url('<?php echo esc_url($banner_2['img']); ?>');">
        <div class="break-overlay"></div>
        <div class="break-content fade-up">
            <div class="partner-logos">
                <img src="https://jacen.jac.com.cn/_nuxt/img/jac-his.72d4a17.png" alt="JAC Motors" class="p-logo">
                <div class="p-divider"></div>
                <img src="https://jacen.jac.com.cn/_nuxt/img/huawei.2ee4bd5.png" alt="Huawei" class="p-logo">
            </div>
            <h2><?php echo ($current_lang == 'en') ? esc_html($banner_2['title_en']) : esc_html($banner_2['title_ka']); ?></h2>
            <p><?php echo ($current_lang == 'en') ? esc_html($banner_2['desc_en']) : esc_html($banner_2['desc_ka']); ?></p>
        </div>
    </section>

    <section class="timeline-section">
        <div class="timeline-container">
            <div class="timeline-line"></div>
            <?php foreach($timeline_part_3 as $index => $item): 
                $side_class = ($index % 2 == 0) ? 'left' : 'right'; 
            ?>
            <div class="timeline-row <?php echo $side_class; ?> fade-up">
                <div class="timeline-content">
                    <div class="t-img-box">
                        <img src="<?php echo esc_url($item['img']); ?>" alt="<?php echo esc_attr($item['year']); ?>">
                    </div>
                    <div class="t-text-box">
                        <span class="t-year"><?php echo esc_html($item['year']); ?></span>
                        <p><?php echo ($current_lang == 'en') ? esc_html($item['desc_en']) : esc_html($item['desc_ka']); ?></p>
                    </div>
                </div>
                <div class="timeline-dot"></div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="history-video-modal" id="videoModal">
        <div class="modal-content">
            <div class="modal-close-trigger" id="closeModal">
                 <i class="fa-solid fa-xmark"></i>
            </div>
            <video controls id="fullVideo">
                <source src="<?php echo esc_url($hero_bg_video); ?>" type="video/mp4">
            </video>
        </div>
    </div>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animations
    const fadeElements = document.querySelectorAll('.fade-up');
    const fadeObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });
    fadeElements.forEach(el => fadeObserver.observe(el));

    // Video Modal Logic
    const openBtn = document.getElementById('openVideoModal');
    const closeBtn = document.getElementById('closeModal'); // ID დარჩა იგივე
    const modal = document.getElementById('videoModal');
    const video = document.getElementById('fullVideo');

    if(openBtn && modal && video) {
        openBtn.addEventListener('click', () => {
            modal.style.display = 'flex'; // Flex-ით ვაჩენთ ცენტრირებისთვის
            setTimeout(() => { modal.classList.add('active'); }, 10); // ანიმაციისთვის
            video.currentTime = 0;
            video.muted = false; 
            video.play();
        });

        const closeModalFunc = () => {
            modal.classList.remove('active');
            setTimeout(() => { modal.style.display = 'none'; }, 400); // ანიმაციის დასრულებას ველოდებით
            video.pause();
            video.currentTime = 0;
        };

        if(closeBtn) closeBtn.addEventListener('click', closeModalFunc);
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModalFunc();
        });
    }
});
</script>

<?php get_footer(); ?>