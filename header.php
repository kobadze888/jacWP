<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAC MOTORS</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="header" id="navbar">
        <div class="logo-group">
            <img id="logoImg" src="https://jacen.jac.com.cn/_nuxt/img/logo-nav-pc.fb0453d.png" alt="JAC MOTORS">
        </div>

        <nav>
            <ul class="nav-list">
                <li class="nav-item">მოდელები</li>
                <li class="nav-item">
                    კომპანია
                    <div class="submenu-container">
                        <div class="submenu">
                            <a href="#"><span>JAC-ის შესახებ</span></a>
                            <a href="#"><span>ისტორია</span></a>
                            <a href="#"><span>ფილოსოფია</span></a>
                            <a href="#"><span>კვლევა და განვითარება</span></a>
                            <a href="#"><span>სოციალური პასუხისმგებლობა</span></a>
                            <a href="#"><span>სერვისი</span></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">სიახლეები</li>
                <li class="nav-item">ცხოვრების სტილი</li>
                <li class="nav-item">მფლობელებისთვის</li>
            </ul>
        </nav>

        <div class="header-icons">
            <i data-lucide="globe" width="20"></i>
        </div>

        <!-- მობილური მენიუს ენის ღილაკი -->
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
        <a href="#" class="mobile-nav-item">მოდელები</a>
        
        <div class="mobile-submenu-wrapper">
            <div class="mobile-nav-item" id="mobileCompanyBtn">
                კომპანია <i class="fa-solid fa-chevron-down" style="font-size: 16px; vertical-align: middle; margin-left: 5px;"></i>
            </div>
            <div class="mobile-submenu" id="mobileCompanySubmenu">
                <a href="#">JAC-ის შესახებ</a>
                <a href="#">ისტორია</a>
                <a href="#">ფილოსოფია</a>
                <a href="#">კვლევა და განვითარება</a>
                <a href="#">სოციალური პასუხისმგებლობა</a>
                <a href="#">სერვისი</a>
            </div>
        </div>

        <a href="#" class="mobile-nav-item">სიახლეები</a>
        <a href="#" class="mobile-nav-item">ცხოვრების სტილი</a>
        <a href="#" class="mobile-nav-item">მფლობელებისთვის</a>
    </div>