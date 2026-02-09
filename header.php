<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php 
        $white_logo = get_field('white_logo', 'option') ?: "https://jacen.jac.com.cn/_nuxt/img/logo-nav-pc.fb0453d.png";
        $dark_logo = get_field('dark_logo', 'option') ?: "https://jacmotors.ge/wp-content/uploads/2026/02/jac-georgia-logo.png";
    ?>

    <header class="header" id="navbar">
        <div class="logo-group">
            <a href="<?php echo home_url(); ?>">
                <img id="logoImg" src="<?php echo $white_logo; ?>" 
                     data-white="<?php echo $white_logo; ?>" 
                     data-dark="<?php echo $dark_logo; ?>" 
                     alt="JAC MOTORS">
            </a>
        </div>

        <nav>
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'container'      => false,
                'menu_class'     => 'nav-list',
                'fallback_cb'    => false,
            )); 
            ?>
        </nav>

        <div class="header-icons">
            <div class="lang-selector-wrapper desktop-only-lang">
                <div class="lang-current">
                    <i data-lucide="globe" width="20"></i>
                    <i class="fa-solid fa-chevron-down lang-arrow"></i>
                </div>
                <ul class="lang-dropdown">
                    <?php 
                    if(function_exists('pll_the_languages')) {
                        $languages = pll_the_languages(array('raw' => 1));
                        foreach($languages as $lang) {
                            $slug = $lang['slug'];
                            echo '<li>';
                            echo '<a href="' . $lang['url'] . '" class="lang-link">';
                            echo '<div class="flag-icon-container">';
                            if($slug == 'ka') { ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 16" class="flag-svg"><defs><clipPath id="clip0_ge"><rect width="21" height="16" rx="1" fill="white"></rect></clipPath></defs><g clip-path="url(#clip0_ge)"><rect width="21" height="16" fill="white"></rect><rect x="8.92578" width="3.15" height="16" fill="#FF0000"></rect><rect y="6.4" width="21" height="3.2" fill="#FF0000"></rect><path fill="#FF0000" fill-rule="evenodd" d="M4.81648 12.4367C4.8493 11.8767 4.94773 11.4 4.94773 11.4C4.94773 11.4 4.62617 11.4333 4.46211 11.4333C4.29805 11.4333 3.97648 11.4 3.97648 11.4C3.97648 11.4 4.07492 11.8767 4.10773 12.44C3.5532 12.4067 3.08398 12.3067 3.08398 12.3067C3.08398 12.3067 3.1168 12.5533 3.1168 12.8C3.1168 13.0467 3.08398 13.2933 3.08398 13.2933C3.08398 13.2933 3.5532 13.1933 4.10773 13.16C4.07492 13.7233 3.97648 14.2 3.97648 14.2C3.97648 14.2 4.2193 14.1667 4.46211 14.1667C4.70492 14.1667 4.94773 14.2 4.94773 14.2C4.94773 14.2 4.8493 13.7233 4.81648 13.16C5.37102 13.1933 5.84023 13.2933 5.84023 13.2933C5.84023 13.2933 5.80742 12.9667 5.80742 12.8C5.80742 12.6333 5.84023 12.3067 5.84023 12.3067C5.84023 12.3067 5.37102 12.4067 4.81977 12.44L4.81648 12.4367Z"></path><path fill="#FF0000" fill-rule="evenodd" d="M16.8915 2.83665C16.9243 2.27665 17.0227 1.79999 17.0227 1.79999C17.0227 1.79999 16.7012 1.83332 16.5371 1.83332C16.373 1.83332 16.0515 1.79999 16.0515 1.79999C16.0515 1.79999 16.1499 2.27665 16.1827 2.83665C15.6282 2.80332 15.159 2.70665 15.159 2.70665C15.159 2.70665 15.1918 2.95332 15.1918 3.19999C15.1918 3.44665 15.159 3.69332 15.159 3.69332C15.159 3.69332 15.6282 3.59332 16.1827 3.55999C16.1499 4.12332 16.0515 4.59999 16.0515 4.59999C16.0515 4.59999 16.2943 4.56665 16.5371 4.56665C16.7799 4.56665 17.0227 4.59999 17.0227 4.59999C17.0227 4.59999 16.9243 4.12332 16.8915 3.56332C17.446 3.59665 17.9152 3.69665 17.9152 3.69665C17.9152 3.69665 17.8824 3.36332 17.8824 3.19999C17.8824 3.03665 17.9152 2.70665 17.9152 2.70665C17.9152 2.70665 17.446 2.80665 16.8915 2.83999V2.83665Z"></path><path fill="#FF0000" fill-rule="evenodd" d="M4.81648 2.83665C4.8493 2.27665 4.94773 1.79999 4.94773 1.79999C4.94773 1.79999 4.62617 1.83332 4.46211 1.83332C4.29805 1.83332 3.97648 1.79999 3.97648 1.79999C3.97648 1.79999 4.07492 2.27665 4.10773 2.83999C3.5532 2.80665 3.08398 2.70665 3.08398 2.70665C3.08398 2.70665 3.1168 2.95332 3.1168 3.19999C3.1168 3.44665 3.08398 3.69332 3.08398 3.69332C3.08398 3.69332 3.5532 3.59332 4.10773 3.55999C4.07492 4.12332 3.97648 4.59999 3.97648 4.59999C3.97648 4.59999 4.2193 4.56665 4.46211 4.56665C4.70492 4.56665 4.94773 4.59999 4.94773 4.59999C4.94773 4.59999 4.8493 4.12332 4.81648 3.55999C5.37102 3.59332 5.84023 3.69332 5.84023 3.69332C5.84023 3.69332 5.80742 3.36665 5.80742 3.19999C5.80742 3.03332 5.84023 2.70665 5.84023 2.70665C5.84023 2.70665 5.37102 2.80665 4.81977 2.83999L4.81648 2.83665Z"></path><path fill="#FF0000" fill-rule="evenodd" d="M16.8915 12.4367C16.9243 11.8767 17.0227 11.4 17.0227 11.4C17.0227 11.4 16.7012 11.4333 16.5371 11.4333C16.373 11.4333 16.0515 11.4 16.0515 11.4C16.0515 11.4 16.1499 11.8767 16.1827 12.44C15.6282 12.4067 15.159 12.3067 15.159 12.3067C15.159 12.3067 15.1918 12.5533 15.1918 12.8C15.1918 13.0467 15.159 13.2933 15.159 13.2933C15.159 13.2933 15.6282 13.1933 16.1827 13.16C16.1499 13.7233 16.0515 14.2 16.0515 14.2C16.0515 14.2 16.2943 14.1667 16.5371 14.1667C16.7799 14.1667 17.0227 14.2 17.0227 14.2C17.0227 14.2 16.9243 13.7233 16.8915 13.16C17.446 13.1933 17.9152 13.2933 17.9152 13.2933C17.9152 13.2933 17.8824 12.9667 17.8824 12.8C17.8824 12.6333 17.9152 12.3067 17.9152 12.3067C17.9152 12.3067 17.446 12.4067 16.8915 12.44V12.4367Z"></path></g></svg>
                            <?php } else if($slug == 'en') { ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 16" class="flag-svg"><g clip-path="url(#clip0_uk)"><path d="M0 0H21V16H0V0Z" fill="#012169"></path><path d="M2.46094 0L10.4672 6.03333L18.4406 0H21V2.06667L13.125 8.03333L21 13.9667V16H18.375L10.5 10.0333L2.65781 16H0V14L7.84219 8.06667L0 2.13333V0H2.46094Z" fill="white"></path><path d="M13.9125 9.36667L21 14.6667V16L12.1078 9.36667H13.9125ZM7.875 10.0333L8.07187 11.2L1.77187 16H0L7.875 10.0333ZM21 0V0.1L12.8297 6.36667L12.8953 4.9L19.3594 0H21ZM0 0L7.84219 5.86667H5.87344L0 1.4V0Z" fill="#C8102E"></path><path d="M7.90781 0V16H13.1578V0H7.90781ZM0 5.33333V10.6667H21V5.33333H0Z" fill="white"></path><path d="M0 6.43333V9.63333H21V6.43333H0ZM8.95781 0V16H12.1078V0H8.95781Z" fill="#C8102E"></path></g><defs><clipPath id="clip0_uk"><rect width="21" height="16" rx="1" fill="white"></rect></clipPath></defs></svg>
                            <?php } ?>
                            </div>
                            <span><?php echo $lang['name']; ?></span>
                        </a>
                        </li>
                    <?php } } ?>
                </ul>
            </div>
        </div>

        <div class="hamburger" id="hamburgerBtn">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </header>

    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-lang-section">
            <?php 
            if(function_exists('pll_the_languages')) {
                $languages = pll_the_languages(array('raw' => 1));
                foreach($languages as $lang) {
                    $active = $lang['current_lang'] ? 'active' : '';
                    echo '<a href="' . $lang['url'] . '" class="mobile-lang-item ' . $active . '">' . $lang['slug'] . '</a>';
                }
            } ?>
        </div>

        <?php 
        wp_nav_menu(array(
            'theme_location' => 'primary_menu',
            'container'      => false,
            'menu_class'     => 'mobile-nav-list',
        )); 
        ?>
    </div>