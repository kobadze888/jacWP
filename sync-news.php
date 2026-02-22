<?php
// ავტომატიზაციის სკრიპტი JAC სიახლეებისთვის

$news_data = [
    116 => [
        'en_title' => "JAC's Revenue in the Third Quarter Increased by over 20% Month-on-Month",
        'ka_title' => 'JAC-ის შემოსავალი მესამე კვარტალში 20%-ზე მეტით გაიზარდა',
    ],
    104 => [
        'en_title' => 'JAC Motors Showcases Innovative Smart and Electric Vehicle Portfolio at the 2025 Guangzhou International Automobile Exhibition',
        'ka_title' => 'JAC Motors-მა გუანჯოუს ავტოგამოფენაზე ინოვაციური ელექტრო ავტომობილები წარადგინა',
    ],
    102 => [
        'en_title' => 'JAC Show in the 21st ANPACT Transportation Exhibition in Mexico',
        'ka_title' => 'JAC-ის გამოფენა 21-ე ANPACT სატრანსპორტო ღონისძიებაზე მექსიკაში',
    ],
    97 => [
        'en_title' => 'A Significant Milestone in the Collaboration between JAC Motors and DHL Mexico',
        'ka_title' => 'მნიშვნელოვანი ეტაპი JAC Motors-ისა და DHL Mexico-ს თანამშრომლობაში',
    ],
    94 => [
        'en_title' => 'JAC Motors Unveils its Latest Light-duty and Heavy-duty Truck Models in Brazil',
        'ka_title' => 'JAC Motors-მა ბრაზილიაში უახლესი სატვირთო ავტომობილების მოდელები წარადგინა',
    ],
    91 => [
        'en_title' => 'JAC Motors Achieves Dual Recognition in the 2025 China’s Top 100 Overseas Brands Index',
        'ka_title' => 'JAC Motors-მა ორმაგი აღიარება მოიპოვა ჩინეთის საუკეთესო 100 საერთაშორისო ბრენდის ინდექსში',
    ],
    87 => [
        'en_title' => 'JAC Motors successfully held a product launch event in Dubai',
        'ka_title' => 'JAC Motors-მა დუბაიში ახალი პროდუქტების პრეზენტაცია წარმატებით ჩაატარა',
    ]
];

foreach ($news_data as $ka_post_id => $data) {
    $ka_post = get_post($ka_post_id);
    if (!$ka_post) {
        echo "Post ID $ka_post_id ვერ მოიძებნა.\n";
        continue;
    }

    $en_content = $ka_post->post_content;

    // 1. იქმნება ახალი ინგლისური პოსტი
    $en_post_id = wp_insert_post([
        'post_title'   => $data['en_title'],
        'post_content' => $en_content,
        'post_status'  => 'publish',
        'post_type'    => 'post',
    ]);

    if (is_wp_error($en_post_id)) {
        echo "შეცდომა $ka_post_id-ის ინგლისურის შექმნისას.\n";
        continue;
    }

    // 2. ენების დაკავშირება (Polylang)
    if (function_exists('pll_set_post_language')) {
        pll_set_post_language($ka_post_id, 'ka');
        pll_set_post_language($en_post_id, 'en');
        pll_save_post_translations(['ka' => $ka_post_id, 'en' => $en_post_id]);
    }

    // 3. სურათის (Thumbnail) კოპირება
    $thumb_id = get_post_thumbnail_id($ka_post_id);
    if ($thumb_id) {
        set_post_thumbnail($en_post_id, $thumb_id);
    }

    // 4. ქართული პოსტის განახლება ქართული სათაურით
    wp_update_post([
        'ID'           => $ka_post_id,
        'post_title'   => $data['ka_title'],
        'post_name'    => sanitize_title($data['ka_title']), // ურლ-ის გასწორება ქართულად
    ]);

    // 5. Yoast SEO ავტომატიზაცია ორივე ენაზე
    $seo_desc = wp_trim_words(strip_tags($en_content), 20, '...'); // პირველი 20 სიტყვა აღწერისთვის

    // ინგლისურისთვის SEO
    update_post_meta($en_post_id, '_yoast_wpseo_title', $data['en_title'] . ' - JAC Motors');
    update_post_meta($en_post_id, '_yoast_wpseo_metadesc', $seo_desc);
    
    // ქართულისთვის SEO
    update_post_meta($ka_post_id, '_yoast_wpseo_title', $data['ka_title'] . ' - JAC Motors');
    update_post_meta($ka_post_id, '_yoast_wpseo_metadesc', $seo_desc);

    echo "✅ დასრულდა: ქართული ID $ka_post_id გადაბმულია ინგლისურზე ID $en_post_id \n";
}
echo "🚀 ყველა პოსტი სინქრონიზებულია!\n";
?>
