<?php
/**
 * Template Name: Service Page
 */
get_header();

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';
$opt_id = 'options_' . $current_lang;

// მისამართი მოგვაქვს ACF-დან, ან ვიყენებთ სტანდარტულს
$address = get_field('contact_address', $opt_id) ?: get_field('contact_address', 'option');

// სერვისის მენეჯერის ექსკლუზიური საკონტაქტო ინფო
$service_phone = "+995 577 17 67 24";
$service_email = "servicemanager@senamotors.com.ge";

// მთავარი სურათი
$main_image_url = "https://jacmotors.ge/wp-content/uploads/2026/02/sena-serivce-page-scaled.webp";

// ტექსტების თარგმანი
$t_title = ($current_lang == 'en') ? 'Service Center' : 'სერვის ცენტრი';
$t_subtitle = ($current_lang == 'en') ? 'Authorized technical service and parts for JAC vehicles.' : 'JAC-ის ავტომობილების ავტორიზებული ტექნიკური მომსახურება და სათადარიგო ნაწილები.';
$t_intro_title = ($current_lang == 'en') ? 'Official Distributor in Georgia' : 'ოფიციალური დისტრიბუტორი საქართველოში';
$t_intro_text = ($current_lang == 'en') ? 'Sena Motors is the official distributor of JAC in Georgia, providing high-quality technical service and original spare parts for all JAC models.' : 'JAC-ის ოფიციალური დისტრიბუტორი საქართველოში "სენა მოტორსია" და ახორციელებს JAC-ის ავტომობილების ავტორიზებულ ტექნიკურ მომსახურებასა და შეკეთებას.';
$t_warranty = ($current_lang == 'en') ? 'Vehicles purchased at our center are covered by warranty conditions - <strong>4 years or 150,000 km</strong> (whichever comes first).' : 'ცენტრში შეძენილ ავტომობილებზე ვრცელდება საგარანტიო პირობები - <strong>4 წელი ან 150 000 კმ</strong>, რომელიც ადრე შესრულდება.';
$t_contact_title = ($current_lang == 'en') ? 'Service Contact Info' : 'სერვისის საკონტაქტო ინფო';

// სერვისების სია 
$services = [
    ['icon' => 'fa-clipboard-check', 'ka' => 'ავტომანქანის გეგმიური მომსახურება', 'en' => 'Scheduled Vehicle Maintenance'],
    ['icon' => 'fa-oil-can', 'ka' => 'ძრავისა და კოლოფის ზეთის შეცვლა', 'en' => 'Engine & Gearbox Oil Change'],
    ['icon' => 'fa-fill-drip', 'ka' => 'ანტიფრიზის და ტექ. სითხეების შეცვლა', 'en' => 'Antifreeze & Technical Fluids Change'],
    ['icon' => 'fa-wrench', 'ka' => 'სავალი ნაწილის დიაგნოსტიკა და შეკეთება', 'en' => 'Chassis Diagnostics & Repair'],
    ['icon' => 'fa-gears', 'ka' => 'ძრავის დიაგნოსტიკა და შეკეთება', 'en' => 'Engine Diagnostics & Repair'],
    ['icon' => 'fa-bolt', 'ka' => 'ელექტრო დიაგნოსტიკა და შეკეთება', 'en' => 'Electrical Diagnostics & Repair'],
    ['icon' => 'fa-circle-notch', 'ka' => 'საბურავების მონტაჟი და ბალანსირება', 'en' => 'Tire Mounting & Balancing'],
    ['icon' => 'fa-car-side', 'ka' => 'თვლების შეყრის და განშლადობის გასწორება', 'en' => 'Wheel Alignment (Tracking/Camber)'],
    ['icon' => 'fa-spray-can', 'ka' => 'სამღებრო და სათუნუქე სამუშაოები', 'en' => 'Painting & Bodywork'],
    ['icon' => 'fa-plus-circle', 'ka' => 'აქსესუარების მონტაჟი', 'en' => 'Accessories Installation'],
    ['icon' => 'fa-truck-fast', 'ka' => 'ევაკუატორის მომსახურება', 'en' => 'Tow Truck Service'],
];
?>

<main class="service-page-wrapper">
    
    <header class="service-hero">
        <div class="service-hero-inner">
            <h1><?php echo esc_html($t_title); ?></h1>
            <p><?php echo esc_html($t_subtitle); ?></p>
        </div>
    </header>

    <div class="service-container">
        
        <section class="service-featured-image">
            <img src="<?php echo esc_url($main_image_url); ?>" alt="Sena Motors Service Center">
        </section>

        <section class="service-intro-section">
            <div class="intro-content">
                <h2><?php echo esc_html($t_intro_title); ?></h2>
                <p><?php echo esc_html($t_intro_text); ?></p>
            </div>
            <div class="warranty-badge">
                <div class="warranty-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <div class="warranty-text"><?php echo wp_kses_post($t_warranty); ?></div>
            </div>
        </section>

        <section class="services-grid-section">
            <div class="services-grid">
                <?php foreach($services as $item): ?>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid <?php echo esc_attr($item['icon']); ?>"></i></div>
                        <h3 class="service-name"><?php echo ($current_lang == 'en') ? esc_html($item['en']) : esc_html($item['ka']); ?></h3>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="service-bottom-grid">
            
            <div class="service-contact-card">
                <h2><?php echo esc_html($t_contact_title); ?></h2>
                <div class="service-contact-info">
                    
                    <?php if($address): ?>
                    <div class="s-contact-row">
                        <div class="s-icon-wrap"><i class="fa-solid fa-location-dot"></i></div>
                        <span><?php echo esc_html($address); ?></span>
                    </div>
                    <?php endif; ?>

                    <div class="s-contact-row">
                        <div class="s-icon-wrap"><i class="fa-regular fa-envelope"></i></div>
                        <a href="mailto:<?php echo esc_attr($service_email); ?>"><?php echo esc_html($service_email); ?></a>
                    </div>
                    
                    <div class="s-contact-row highlight-phone">
                        <div class="s-icon-wrap pulse-icon"><i class="fa-solid fa-headset"></i></div>
                        <div class="manager-info">
                            <span class="m-label"><?php echo ($current_lang == 'en') ? 'Service Manager:' : 'სერვისის მენეჯერი:'; ?></span>
                            <a href="tel:<?php echo str_replace(' ','',$service_phone); ?>"><?php echo esc_html($service_phone); ?></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="service-map-card">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14205.790458136215!2d44.769993!3d41.798449!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40446f6bb1311241%3A0x98f144ca69c7371c!2sSENA%20AUTO%20Group!5e1!3m2!1sen!2sge!4v1771095690700!5m2!1sen!2sge" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </section>

    </div>
</main>

<?php get_footer(); ?>