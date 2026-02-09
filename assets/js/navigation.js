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

    // მობილური სუბ-მენიუს აკორდეონი
    const mobileParentLinks = document.querySelectorAll('.mobile-nav-list .menu-item-has-children > a');
    mobileParentLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const parentLi = this.parentElement;
            parentLi.classList.toggle('open');
            
            // სუბ-მენიუს გახსნა/დახურვა
            const submenu = parentLi.querySelector('.sub-menu');
            if (submenu) {
                if (parentLi.classList.contains('open')) {
                    submenu.style.display = 'block';
                } else {
                    submenu.style.display = 'none';
                }
            }
        });
    });
});