document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    const logoImg = document.getElementById('logoImg');
    const hamburger = document.getElementById('hamburgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    if (!logoImg) return;

    const whiteLogo = logoImg.getAttribute('data-white');
    const darkLogo = logoImg.getAttribute('data-dark');

    // Scroll Logic
    window.addEventListener('scroll', () => {
        if(mobileMenu && mobileMenu.classList.contains('active')) return;

        if(window.scrollY > 50) {
            if(navbar) navbar.classList.add('scrolled');
            logoImg.src = darkLogo; 
            if(hamburger) hamburger.style.color = '#000';
        } else {
            if(navbar) navbar.classList.remove('scrolled');
            logoImg.src = whiteLogo; 
            if(hamburger) hamburger.style.color = '#fff';
        }
    });

    // Mobile Toggle
    if(hamburger && mobileMenu) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            
            if(mobileMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden'; 
                logoImg.src = whiteLogo;
                hamburger.style.color = '#fff';
            } else {
                document.body.style.overflow = ''; 
                if (window.scrollY > 50) {
                    logoImg.src = darkLogo;
                    hamburger.style.color = '#000';
                } else {
                    logoImg.src = whiteLogo;
                    hamburger.style.color = '#fff';
                }
            }
        });
    }

    // Language Selector
    const langSelector = document.querySelector('.lang-selector-wrapper');
    if (langSelector) {
        langSelector.addEventListener('click', function(e) {
            if (window.innerWidth <= 1024) {
                this.classList.toggle('active');
                e.stopPropagation();
            }
        });
    }
    document.addEventListener('click', () => {
        if (langSelector) langSelector.classList.remove('active');
    });
});