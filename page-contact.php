<?php
/**
 * Template Name: Contact Page
 */
get_header();

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';
$opt_id = 'options_' . $current_lang;

function get_acf_contact_field($field_name, $opt_id) {
    $value = get_field($field_name, $opt_id);
    if (empty($value)) {
        $value = get_field($field_name, 'option');
    }
    return $value;
}

$address      = get_acf_contact_field('contact_address', $opt_id);
$email        = get_acf_contact_field('contact_email', $opt_id);
$whatsapp     = get_acf_contact_field('contact_whatsapp', $opt_id);
$google_map   = get_acf_contact_field('contact_google_map', $opt_id);
$showroom_img = get_acf_contact_field('contact_showroom_img', $opt_id);
$depts        = get_acf_contact_field('contact_departments', $opt_id);

$soc_fb = get_acf_contact_field('social_facebook', $opt_id);
$soc_ig = get_acf_contact_field('social_instagram', $opt_id);
$soc_yt = get_acf_contact_field('social_youtube', $opt_id);
$soc_in = get_acf_contact_field('social_linkedin', $opt_id);
$soc_tk = get_acf_contact_field('social_tiktok', $opt_id);

$t_title = ($current_lang == 'en') ? 'Contact Us' : 'კონტაქტი';
$t_sub   = ($current_lang == 'en') ? 'JAC Motors Georgia - Official Distributor in Georgia' : 'JAC Motors Georgia - ოფიციალური დისტრიბუტორი საქართველოში';
?>

<main class="contact-page-balanced">
    
    <header class="contact-header-balanced">
        <div class="header-inner-balanced">
            <h1><?php echo esc_html($t_title); ?></h1>
            <p><?php echo esc_html($t_sub); ?></p>
        </div>
    </header>

    <section class="contact-body-balanced">
        <div class="contact-container-balanced">
            
            <div class="contact-main-card">
                
                <div class="contact-info-side">
                    
                    <div class="info-group">
                        <?php if($address): ?>
                        <div class="info-item">
                            <div class="info-icon-box"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="info-text-box">
                                <span><?php echo ($current_lang == 'en') ? 'Location' : 'მისამართი'; ?></span>
                                <p><?php echo esc_html($address); ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <?php if($email): ?>
                        <div class="info-item">
                            <div class="info-icon-box"><i class="fa-regular fa-envelope"></i></div>
                            <div class="info-text-box">
                                <span><?php echo ($current_lang == 'en') ? 'Email' : 'ელ-ფოსტა'; ?></span>
                                <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="dept-group">
                        <?php if($depts): foreach($depts as $dept): ?>
                        <div class="dept-row">
                            <span class="dept-name"><?php echo esc_html($dept['name']); ?></span>
                            <a href="tel:<?php echo str_replace(' ','',$dept['phone']); ?>" class="dept-phone-action">
                                <span class="phone-num-text"><?php echo esc_html($dept['phone']); ?></span>
                                <div class="call-action-btn"><i class="fa-solid fa-phone"></i></div>
                            </a>
                        </div>
                        <?php endforeach; endif; ?>
                    </div>

                    <div class="action-group">
                        <?php if($whatsapp): ?>
                        <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', $whatsapp); ?>" target="_blank" class="balanced-wa-btn">
                            <i class="fa-brands fa-whatsapp"></i> WhatsApp
                        </a>
                        <?php endif; ?>
                        
                        <div class="balanced-socials">
                            <?php if($soc_fb): ?><a href="<?php echo esc_url($soc_fb); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a><?php endif; ?>
                            <?php if($soc_ig): ?><a href="<?php echo esc_url($soc_ig); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a><?php endif; ?>
                            <?php if($soc_yt): ?><a href="<?php echo esc_url($soc_yt); ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a><?php endif; ?>
                            <?php if($soc_in): ?><a href="<?php echo esc_url($soc_in); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a><?php endif; ?>
                            <?php if($soc_tk): ?><a href="<?php echo esc_url($soc_tk); ?>" target="_blank"><i class="fa-brands fa-tiktok"></i></a><?php endif; ?>
                        </div>
                    </div>

                </div>

                <div class="contact-image-side">
                    <?php if($showroom_img): ?>
                        <img src="<?php echo esc_url($showroom_img); ?>" alt="JAC Showroom">
                    <?php else: ?>
                        <div class="placeholder-img"></div>
                    <?php endif; ?>
                </div>

            </div>

            <?php if($google_map): ?>
            <div class="contact-map-balanced">
                <?php echo $google_map; ?>
            </div>
            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>