(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {

        const j7Page = document.querySelector('.j7-page');
        if (!j7Page) return;

        const fadeElements = j7Page.querySelectorAll('.j7-fade-up');
        
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

        const sections = j7Page.querySelectorAll('section[id]');
        const navLinks = j7Page.querySelectorAll('.subnav-link');

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

        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href && href.startsWith('#')) {
                    e.preventDefault();
                    const target = j7Page.querySelector(href);
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

        const subNavLinksContainer = j7Page.querySelector('#j7-subnav ul');
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

        const specTabs = j7Page.querySelectorAll('.spec-tab');
        
        if (specTabs.length > 0) {
            specTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    specTabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        }

        const colorDots = j7Page.querySelectorAll('.color-dot');
        const mainColorImg = j7Page.querySelector('#j7-main-color-img');
        const colorNameDisplay = j7Page.querySelector('#color-name');
        
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
                        mainColorImg.alt = 'JAC J7 ' + newName;
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
