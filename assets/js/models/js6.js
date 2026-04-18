/**
 * JS6 2026 MODEL PAGE — ISOLATED JAVASCRIPT
 * ყველა ლოგიკა scoped-ია .js6-page კონტეინერში
 */

(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {

        const js6Page = document.querySelector('.js6-page');
        if (!js6Page) return;

        // =========================================
        // 1. FADE-UP SCROLL ANIMATIONS
        // =========================================
        const fadeElements = js6Page.querySelectorAll('.js6-fade-up');
        
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
        const sections = js6Page.querySelectorAll('section[id]');
        const navLinks = js6Page.querySelectorAll('.subnav-link');

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
                    const target = js6Page.querySelector(href);
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
        // 4. AUTO-SCROLL ACTIVE NAV LINK (MOBILE)
        // =========================================
        const subNavLinksContainer = js6Page.querySelector('#js6-subnav ul');
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
        // 5. GALLERY TABS (Exterior / Interior)
        // =========================================
        const galleryTabs = js6Page.querySelectorAll('.gallery-tab');
        const galleryPanels = js6Page.querySelectorAll('.gallery-panel');

        galleryTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const targetTab = this.getAttribute('data-tab');

                galleryTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                galleryPanels.forEach(panel => {
                    if (panel.getAttribute('data-panel') === targetTab) {
                        panel.classList.remove('hidden');
                        panel.classList.add('active');
                    } else {
                        panel.classList.add('hidden');
                        panel.classList.remove('active');
                    }
                });
            });
        });

        // =========================================
        // 6. GALLERY THUMBNAIL SWITCHING
        // =========================================
        const thumbBtns = js6Page.querySelectorAll('.thumb-btn');

        thumbBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const newImg = this.getAttribute('data-img');
                const mainImg = js6Page.querySelector('#' + targetId);

                if (mainImg && newImg) {
                    // Fade out, change source, fade in
                    mainImg.style.opacity = '0';
                    setTimeout(() => {
                        mainImg.src = newImg;
                        mainImg.style.opacity = '1';
                    }, 300);
                }

                // Active state within the same panel
                const panel = this.closest('.gallery-panel');
                if (panel) {
                    panel.querySelectorAll('.thumb-btn').forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });

        // =========================================
        // 7. COLOR DOTS (Overview)
        // =========================================
        const colorDots = js6Page.querySelectorAll('.color-dot');
        
        colorDots.forEach(dot => {
            dot.addEventListener('click', function() {
                colorDots.forEach(d => {
                    d.classList.remove('active');
                    const icon = d.querySelector('.check-icon');
                    if (icon) icon.style.opacity = '0';
                });
                this.classList.add('active');
                const icon = this.querySelector('.check-icon');
                if (icon) icon.style.opacity = '1';
            });
        });

    });

})();
