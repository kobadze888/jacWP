<?php
$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';
$opt_id = 'options_' . $current_lang;

$t_col1 = ($current_lang == 'en') ? 'Models' : 'მოდელები';
$t_col3 = ($current_lang == 'en') ? 'Company' : 'კომპანია';
$t_col4 = ($current_lang == 'en') ? 'News' : 'სიახლეები';
$t_col5 = ($current_lang == 'en') ? 'Contact' : 'კონტაქტი';
$t_copy = ($current_lang == 'en') ? '© 2026 JAC All Rights Reserved' : '© 2026 JAC ყველა უფლება დაცულია';

// ბმულები სათაურებისთვის (ენების მიხედვით)
$news_url    = ($current_lang == 'en') ? home_url('/en/news/') : home_url('/news-ka/');
$contact_url = ($current_lang == 'en') ? home_url('/en/contact-us/') : home_url('/contact/');

// საკონტაქტო მონაცემები ACF Options-დან ენის მიხედვით
$phone1  = get_field('contact_phone_1', $opt_id);
$phone2  = get_field('contact_phone_2', $opt_id);
$email   = get_field('contact_email', $opt_id);
$address = get_field('contact_address', $opt_id);

// სოციალური ქსელები ACF Options-დან ენის მიხედვით
$soc_fb = get_field('social_facebook', $opt_id);
$soc_yt = get_field('social_youtube', $opt_id);
$soc_ig = get_field('social_instagram', $opt_id);
$soc_in = get_field('social_linkedin', $opt_id);
$soc_tk = get_field('social_tiktok', $opt_id);
?>

<footer class="footer">
    <div class="footer-grid">
        
        <div class="footer-col">
            <h3><?php echo esc_html($t_col1); ?></h3>
            <div class="footer-links">
                <?php if (has_nav_menu('footer_col_1')) { wp_nav_menu(array('theme_location' => 'footer_col_1', 'container' => false, 'depth' => 1)); } ?>
            </div>
        </div>
        
        <div class="footer-col">
            <h3><?php echo esc_html($t_col3); ?></h3>
            <div class="footer-links">
                <?php if (has_nav_menu('footer_col_3')) { wp_nav_menu(array('theme_location' => 'footer_col_3', 'container' => false, 'depth' => 1)); } ?>
            </div>
        </div>
        
        <div class="footer-col">
            <h3><a href="<?php echo esc_url($news_url); ?>"><?php echo esc_html($t_col4); ?></a></h3>
            <div class="footer-links">
                <?php if (has_nav_menu('footer_col_4')) { wp_nav_menu(array('theme_location' => 'footer_col_4', 'container' => false, 'depth' => 1)); } ?>
            </div>
        </div>

        <div class="footer-col">
            <h3><a href="<?php echo esc_url($contact_url); ?>"><?php echo esc_html($t_col5); ?></a></h3>
            <div class="footer-links contact-acf-links">
                <?php if($phone1): ?><a href="tel:<?php echo esc_attr(str_replace(' ','',$phone1)); ?>"><i class="fa-solid fa-phone"></i> <?php echo esc_html($phone1); ?></a><?php endif; ?>
                <?php if($phone2): ?><a href="tel:<?php echo esc_attr(str_replace(' ','',$phone2)); ?>"><i class="fa-solid fa-mobile-screen"></i> <?php echo esc_html($phone2); ?></a><?php endif; ?>
                <?php if($email): ?><a href="mailto:<?php echo esc_attr($email); ?>"><i class="fa-regular fa-envelope"></i> <?php echo esc_html($email); ?></a><?php endif; ?>
                <?php if($address): ?><a href="#"><i class="fa-solid fa-location-dot"></i> <?php echo esc_html($address); ?></a><?php endif; ?>
            </div>
        </div>
    </div>

    <div class="footer-socials">
        <?php if($soc_fb): ?><a href="<?php echo esc_url($soc_fb); ?>" target="_blank" class="social-btn"><span class="social-inner"><i class="fa-brands fa-facebook-f"></i><i class="fa-brands fa-facebook-f"></i></span></a><?php endif; ?>
        <?php if($soc_yt): ?><a href="<?php echo esc_url($soc_yt); ?>" target="_blank" class="social-btn"><span class="social-inner"><i class="fa-brands fa-youtube"></i><i class="fa-brands fa-youtube"></i></span></a><?php endif; ?>
        <?php if($soc_ig): ?><a href="<?php echo esc_url($soc_ig); ?>" target="_blank" class="social-btn"><span class="social-inner"><i class="fa-brands fa-instagram"></i><i class="fa-brands fa-instagram"></i></span></a><?php endif; ?>
        <?php if($soc_in): ?><a href="<?php echo esc_url($soc_in); ?>" target="_blank" class="social-btn"><span class="social-inner"><i class="fa-brands fa-linkedin-in"></i><i class="fa-brands fa-linkedin-in"></i></span></a><?php endif; ?>
        <?php if($soc_tk): ?><a href="<?php echo esc_url($soc_tk); ?>" target="_blank" class="social-btn"><span class="social-inner"><i class="fa-brands fa-tiktok"></i><i class="fa-brands fa-tiktok"></i></span></a><?php endif; ?>
    </div>

    <div class="footer-bottom"><?php echo esc_html($t_copy); ?></div>
</footer>

<?php wp_footer(); ?>
</body>
</html>