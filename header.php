<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="header" id="navbar">
        <div class="logo-group">
            <?php 
                // დინამიური ლოგიკა: თუ ACF Options-ში გექნება ლოგოები, აქ ჩასვამ.
                // ამ ეტაპზე ვტოვებ ისე, როგორც არის, მაგრამ ლინკი მთავარ გვერდზე გადადის
            ?>
            <a href="<?php echo home_url(); ?>">
                <img id="logoImg" src="https://jacen.jac.com.cn/_nuxt/img/logo-nav-pc.fb0453d.png" alt="JAC MOTORS">
            </a>
        </div>

        <nav>
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'container' => false,
                'menu_class' => 'nav-list',
                'walker' => new Walker_Nav_Menu() // საჭიროების შემთხვევაში სტილიზაციისთვის
            )); 
            ?>
        </nav>

        <div class="header-icons">
            <ul class="lang-switcher">
                <?php if(function_exists('pll_the_languages')){
                    pll_the_languages(array('show_flags'=>1, 'show_names'=>0));
                } ?>
            </ul>
        </div>

        <div class="mobile-lang" id="mobileLang">
            <i data-lucide="globe" width="24"></i>
        </div>

        <div class="hamburger" id="hamburgerBtn">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </header>

    <div class="mobile-menu" id="mobileMenu">
        <?php 
        // მობილური მენიუსთვისაც იგივე მენიუ გამოვიყენოთ ან ცალკე დარეგისტრირებული
        wp_nav_menu(array(
            'theme_location' => 'primary_menu',
            'container' => false,
            'menu_class' => 'mobile-nav-list', // CSS-ში გასასწორებელი იქნება ოდნავ
        )); 
        ?>
    </div>