/**
 * SUNRAY MODEL PAGE — ISOLATED JAVASCRIPT
 * ყველა ლოგიკა scoped-ია .sunray-page კონტეინერში
 * არ შეეხება სხვა მოდელების გვერდებს
 */

(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {

        const sunrayPage = document.querySelector('.sunray-page');
        if (!sunrayPage) return; // თუ ეს გვერდი არ არის, არ აამუშაო

        // =========================================
        // 1. FADE-UP SCROLL ANIMATIONS
        // =========================================
        const fadeElements = sunrayPage.querySelectorAll('.sunray-fade-up');
        
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
                rootMargin: '0px 0px -50px 0px'
            });

            fadeElements.forEach(el => fadeObserver.observe(el));
        }

        // =========================================
        // 2. SUB-NAV SCROLL SPY
        // =========================================
        const sections = sunrayPage.querySelectorAll('section[id]');
        const navLinks = sunrayPage.querySelectorAll('.subnav-link');

        function updateActiveNav() {
            let current = '';
            const scrollPos = window.scrollY;

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 180;
                if (scrollPos >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            // ნაგულისხმევი სტატუსი ზემოდან
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
            window.addEventListener('scroll', updateActiveNav, { passive: true });
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
                    const target = sunrayPage.querySelector(href);
                    if (target) {
                        const offset = 140;
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
        const subNavLinksContainer = sunrayPage.querySelector('#sunray-subnav ul');
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
        const specTabs = sunrayPage.querySelectorAll('.spec-tab');
        
        if (specTabs.length > 0) {
            specTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active from all
                    specTabs.forEach(t => t.classList.remove('active'));
                    // Add active to clicked
                    this.classList.add('active');
                    
                    // აქ შეგიძლია დაამატო კონტენტის გადართვის ლოგიკა
                    // თუ გექნება სხვადასხვა spec image თითოეული ვერსიისთვის
                    const targetId = this.getAttribute('data-target');
                    console.log('Active spec:', targetId);
                });
            });
        }

        // =========================================
        // 6. LAZY LOAD IMAGES (OPTIONAL ENHANCEMENT)
        // =========================================
        const images = sunrayPage.querySelectorAll('img[loading="lazy"]');
        if (images.length > 0 && 'IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.classList.add('loaded');
                        observer.unobserve(img);
                    }
                });
            });

            images.forEach(img => imageObserver.observe(img));
        }

    });

})();
