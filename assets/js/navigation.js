document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    const logoImg = document.getElementById('logoImg');
    const hamburger = document.getElementById('hamburgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    if (!logoImg || !navbar) return;

    const whiteLogo = logoImg.getAttribute('data-white');
    const darkLogo = logoImg.getAttribute('data-dark');
    const isAlwaysScrolled = navbar.classList.contains('always-scrolled');

    /**
     * ჰედერის ვიზუალის მართვა
     */
    function handleHeaderAppearance() {
        const isMenuOpen = mobileMenu && mobileMenu.classList.contains('active');
        const isScrolled = window.scrollY > 50 || isAlwaysScrolled;

        if (isMenuOpen) {
            navbar.classList.add('menu-open');
            navbar.classList.remove('scrolled');
            logoImg.src = whiteLogo;
            if (hamburger) hamburger.style.color = '#fff';
        } else {
            navbar.classList.remove('menu-open');
            if (isScrolled) {
                navbar.classList.add('scrolled');
                logoImg.src = darkLogo;
                if (hamburger) hamburger.style.color = '#000';
            } else {
                navbar.classList.remove('scrolled');
                logoImg.src = whiteLogo;
                if (hamburger) hamburger.style.color = '#fff';
            }
        }
    }

    handleHeaderAppearance();
    window.addEventListener('scroll', handleHeaderAppearance);

    // ჰამბურგერის კლიკი
    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', function() {
            this.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            
            if (mobileMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden'; 
            } else {
                document.body.style.overflow = ''; 
            }
            handleHeaderAppearance();
        });
    }

    // მობილური სუბ-მენიუების მართვა
    const mobileParentLinks = document.querySelectorAll('.mobile-nav-list .menu-item-has-children > a');
    mobileParentLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const parentLi = this.parentElement;
            const submenu = parentLi.querySelector('.sub-menu');
            
            if (submenu) {
                e.preventDefault();
                parentLi.classList.toggle('open');
                submenu.style.display = parentLi.classList.contains('open') ? 'block' : 'none';
            }
        });
    });

    // ==========================================
    // ფუტერის აკორდეონი მობილურისთვის
    // ==========================================
    const footerCols = document.querySelectorAll('.footer-col');
    footerCols.forEach(col => {
        const title = col.querySelector('h3');
        if(title) {
            title.addEventListener('click', () => {
                if(window.innerWidth <= 768) {
                    // ხურავს სხვა ღია ტაბებს (სურვილისამებრ)
                    // footerCols.forEach(c => { if(c !== col) c.classList.remove('active'); });
                    col.classList.toggle('active');
                }
            });
        }
    });
});