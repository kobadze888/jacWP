/**
 * M3EV MODEL PAGE — ISOLATED JAVASCRIPT
 * ყველა ლოგიკა scoped-ია .m3ev-page კონტეინერში
 */

(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {

        const m3evPage = document.querySelector('.m3ev-page');
        if (!m3evPage) return;

        // =========================================
        // 1. FADE-UP SCROLL ANIMATIONS
        // =========================================
        const fadeElements = m3evPage.querySelectorAll('.m3ev-fade-up');

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
        const sections = m3evPage.querySelectorAll('section[id]');
        const navLinks = m3evPage.querySelectorAll('.subnav-link');

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
                    const target = m3evPage.querySelector(href);
                    if (target) {
                        const offset = 130;
                        const targetPosition = target.getBoundingClientRect().top + window.scrollY - offset;
                        window.scrollTo({ top: targetPosition, behavior: 'smooth' });
                    }
                }
            });
        });

        // =========================================
        // 4. AUTO-SCROLL ACTIVE NAV LINK (MOBILE)
        // =========================================
        const subNavLinksContainer = m3evPage.querySelector('#m3ev-subnav ul');
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
                        subNavLinksContainer.scrollTo({ left: scrollPos, behavior: 'smooth' });
                    }
                });
            });
            navLinks.forEach(link => observer.observe(link, { attributes: true }));
        }

        // =========================================
        // 5. GALLERY TABS (Exterior / Interior)
        // =========================================
        const galleryTabs = m3evPage.querySelectorAll('.gallery-tab');
        const galleryPanels = m3evPage.querySelectorAll('.gallery-panel');

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
        const thumbBtns = m3evPage.querySelectorAll('.thumb-btn');

        thumbBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const newImg = this.getAttribute('data-img');
                const mainImg = m3evPage.querySelector('#' + targetId);

                if (mainImg && newImg) {
                    mainImg.style.opacity = '0';
                    setTimeout(() => {
                        mainImg.src = newImg;
                        mainImg.style.opacity = '1';
                    }, 300);
                }

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
        const colorDots = m3evPage.querySelectorAll('.color-dot');
        const mainColorImg = m3evPage.querySelector('#m3ev-main-color-img');
        const colorNameDisplay = m3evPage.querySelector('#color-name');

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

                const newImg = this.getAttribute('data-img');
                const newName = this.getAttribute('data-name');

                if (mainColorImg && newImg) {
                    mainColorImg.style.opacity = '0';
                    setTimeout(() => {
                        mainColorImg.src = newImg;
                        mainColorImg.alt = 'JAC M3EV ' + newName;
                        mainColorImg.style.opacity = '1';
                    }, 300);
                }

                if (colorNameDisplay && newName) {
                    colorNameDisplay.textContent = newName;
                }
            });
        });

    });

})();
