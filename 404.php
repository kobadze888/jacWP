<?php get_header(); ?>

<main class="error-404-section">
    <div class="container">
        <div class="error-wrapper">
            <div class="error-visual">
                <div class="visual-wrapper">
                    <h1 class="error-code animated-code">404</h1>
                    <div class="road-sign-wrapper">
                        <div class="road-sign stop-sign">
                            <span class="sign-text">STOP</span>
                        </div>
                        <div class="sign-pole"></div>
                    </div>
                </div>
            </div>
            <div class="error-text">
                <h2 class="error-title">გვერდი ვერ მოიძებნა</h2>
                <p class="error-description">თქვენ მიერ მოთხოვნილი მისამართი არ არსებობს. სავარაუდოდ, მარშრუტი არასწორია.</p>
                <div class="error-actions">
                    <a href="<?php echo home_url(); ?>" class="btn-jac-red">მთავარ გვერდზე დაბრუნება</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>