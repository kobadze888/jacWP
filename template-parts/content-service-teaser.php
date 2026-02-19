<?php
/**
 * Service Teaser Section for Front Page (Video Card Layout)
 */
$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';

// ტექსტები
$st_title = ($current_lang == 'en') ? 'Official Distributor in Georgia' : 'ოფიციალური დისტრიბუტორი საქართველოში';
$st_desc  = ($current_lang == 'en') ? 'Sena Motors is the official distributor of JAC in Georgia, providing authorized technical service and repairs for JAC vehicles.' : 'JAC-ის ოფიციალური დისტრიბუტორი საქართველოში "სენა მოტორსია" და ახორციელებს JAC-ის ავტომობილების ავტორიზებულ ტექნიკურ მომსახურებასა და შეკეთებას.';
$st_btn   = ($current_lang == 'en') ? 'Service Center' : 'სერვის ცენტრი';

// თქვენ მიერ მოწოდებული ზუსტი ლინკები ენების მიხედვით
$service_url = ($current_lang == 'en') ? 'https://jacmotors.ge/en/service/' : 'https://jacmotors.ge/service-ka/';

// ახალი ვიდეო ბოლო სქრინის მიხედვით
$bg_video = 'https://jacen.jac.com.cn/_nuxt/videos/layout.3734f6e.mp4'; 
?>

<section class="service-teaser-section">
    <div class="st-inner-wrapper">
        <video class="st-video-bg" autoplay muted loop playsinline>
            <source src="<?php echo esc_url($bg_video); ?>" type="video/mp4">
        </video>
        
        <div class="st-overlay"></div>

        <div class="st-container fade-up">
            <div class="st-content">
                <h2 class="st-title"><?php echo esc_html($st_title); ?></h2>
                <p class="st-desc"><?php echo esc_html($st_desc); ?></p>
                <a href="<?php echo esc_url($service_url); ?>" class="st-btn"><?php echo esc_html($st_btn); ?></a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const fadeObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });
    document.querySelectorAll('.st-container.fade-up').forEach(el => fadeObserver.observe(el));
});
</script>