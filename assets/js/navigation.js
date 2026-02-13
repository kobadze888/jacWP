document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    const logoImg = document.getElementById('logoImg');
    const hamburger = document.getElementById('hamburgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    if (!logoImg || !navbar) return;

    const whiteLogo = logoImg.getAttribute('data-white');
    const darkLogo = logoImg.getAttribute('data-dark');
    
    // ვამოწმებთ, არის თუ არა შიდა გვერდი (რომელსაც მუდმივად scrolled სჭირდება)
    const isAlwaysScrolled = navbar.classList.contains('always-scrolled');

    /**
     * ჰედერის ვიზუალის მართვა
     */
    function handleHeaderAppearance() {
        const isMenuOpen = mobileMenu && mobileMenu.classList.contains('active');
        
        // თუ შიდა გვერდია (isAlwaysScrolled), მაშინ ყოველთვის ჩათვლის რომ დასქროლილია
        const isScrolled = window.scrollY > 50 || isAlwaysScrolled;

        if (isMenuOpen) {
            // მენიუს გახსნისას: ყოველთვის შავი ფონი და თეთრი ელემენტები
            navbar.classList.add('menu-open');
            navbar.classList.remove('scrolled');
            logoImg.src = whiteLogo;
            if (hamburger) hamburger.style.color = '#fff';
        } else {
            // მენიუს დაკეტვისას
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

    // 1. თავდაპირველი გამოძახება, რომ ჩატვირთვისთანავე სწორი ფერები დაჯდეს (მნიშვნელოვანია შიდა გვერდებისთვის)
    handleHeaderAppearance();

    // 2. სქროლის მოვლენა
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
            
            // მყისიერი განახლება მენიუს ანიმაციისას
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
});