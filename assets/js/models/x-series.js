/**
 * X-SERIES MODEL PAGE — ISOLATED JAVASCRIPT
 * ყველა ლოგიკა scoped-ია .xseries-page კონტეინერში
 * არ შეეხება სხვა მოდელების გვერდებს
 */

(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {

        const xseriesPage = document.querySelector('.xseries-page');
        if (!xseriesPage) return;

        // =========================================
        // 1. FADE-UP SCROLL ANIMATIONS
        // =========================================
        const fadeElements = xseriesPage.querySelectorAll('.xseries-fade-up');
        
        if (fadeElements.length > 0) {
            const fadeObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { 
                threshold: 0.1,
                rootMargin: '0px 0px -60px 0px'
            });

            fadeElements.forEach(el => fadeObserver.observe(el));
        }

        // =========================================
        // 2. SUB-NAV SCROLL SPY
        // =========================================
        const sections = xseriesPage.querySelectorAll('section[id]');
        const navLinks = xseriesPage.querySelectorAll('.subnav-link');

        function updateActiveNav() {
            let current = '';
            const scrollPos = window.scrollY;

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 180;
                if (scrollPos >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            if (current === '' && scrollPos < 200) {
                current = 'overview';
            }

            navLinks.forEach(link => {
                link.classList.remove('active');
                const href = link.getAttribute('href');
                if (href && href.includes(current) && current !== '') {
                    link.classList.add('active');
                }
            });
        }

        if (sections.length > 0 && navLinks.length > 0) {
            let scrollTimeout;
            window.addEventListener('scroll', () => {
                if (scrollTimeout) cancelAnimationFrame(scrollTimeout);
                scrollTimeout = requestAnimationFrame(updateActiveNav);
            }, { passive: true });
            updateActiveNav();
        }

        // =========================================
        // 3. SMOOTH SCROLL FOR SUB-NAV LINKS
        // =========================================
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href && href.startsWith('#')) {
                    e.preventDefault();
                    const target = xseriesPage.querySelector(href);
                    if (target) {
                        const offset = 130;
                        const targetPosition = target.getBoundingClientRect().top + window.scrollY - offset;
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });

        // =========================================
        // 4. AUTO-SCROLL ACTIVE NAV LINK INTO VIEW (MOBILE)
        // =========================================
        const subNavLinksContainer = xseriesPage.querySelector('#xseries-subnav ul');
        if (subNavLinksContainer) {
            const observer = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    if (mutation.attributeName === 'class' && 
                        mutation.target.classList.contains('active')) {
                        const activeLink = mutation.target;
                        const containerWidth = subNavLinksContainer.clientWidth;
                        const linkLeft = activeLink.offsetLeft;
                        const linkWidth = activeLink.offsetWidth;
                        const scrollPos = linkLeft - (containerWidth / 2) + (linkWidth / 2);

                        subNavLinksContainer.scrollTo({
                            left: scrollPos,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            navLinks.forEach(link => {
                observer.observe(link, { attributes: true });
            });
        }

        // =========================================
        // 5. SPEC TABS LOGIC
        // =========================================
        const specTabs = xseriesPage.querySelectorAll('.spec-tab');
        
        if (specTabs.length > 0) {
            specTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    specTabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    
                    const targetId = this.getAttribute('data-target');
                    // აქ შეიძლება დაემატოს კონტენტის გადართვის ლოგიკა
                    // თუ სხვადასხვა სურათი გექნებათ თითო ვერსიისთვის
                    console.log('Active spec:', targetId);
                });
            });
        }

    });

})();
