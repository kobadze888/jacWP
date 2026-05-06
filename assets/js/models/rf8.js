(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {

        const rf8Page = document.querySelector('.rf8-page');
        if (!rf8Page) return;

        const fadeElements = rf8Page.querySelectorAll('.rf8-fade-up');
        
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

        const sections = rf8Page.querySelectorAll('section[id]');
        const navLinks = rf8Page.querySelectorAll('.subnav-link');

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
                    const target = rf8Page.querySelector(href);
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

        const subNavLinksContainer = rf8Page.querySelector('#rf8-subnav ul');
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

        const colorDots = rf8Page.querySelectorAll('.color-dot');
        const mainColorImg = rf8Page.querySelector('#rf8-main-color-img');
        const colorNameDisplay = rf8Page.querySelector('#color-name');
        
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
                        mainColorImg.alt = 'JAC RF8 ' + newName;
                        mainColorImg.style.opacity = '1';
                    }, 300);
                }

                if (colorNameDisplay && newName) {
                    colorNameDisplay.textContent = newName;
                }
            });
        });

        const videoTrigger = rf8Page.querySelector('#rf8-video-trigger');
        const videoModal = rf8Page.querySelector('#rf8-video-modal');
        const videoClose = rf8Page.querySelector('#rf8-video-close');
        const videoBackdrop = rf8Page.querySelector('.video-modal-backdrop');
        const modalVideo = rf8Page.querySelector('#rf8-modal-video');

        function openVideoModal() {
            if (!videoModal) return;
            videoModal.classList.add('active');
            document.body.classList.add('rf8-video-open');
            if (modalVideo) {
                modalVideo.currentTime = 0;
                const playPromise = modalVideo.play();
                if (playPromise !== undefined) {
                    playPromise.catch(() => {});
                }
            }
        }

        function closeVideoModal() {
            if (!videoModal) return;
            videoModal.classList.remove('active');
            document.body.classList.remove('rf8-video-open');
            if (modalVideo) {
                modalVideo.pause();
                modalVideo.currentTime = 0;
            }
        }

        if (videoTrigger) {
            videoTrigger.addEventListener('click', function(e) {
                e.preventDefault();
                openVideoModal();
            });
        }

        if (videoClose) {
            videoClose.addEventListener('click', function(e) {
                e.preventDefault();
                closeVideoModal();
            });
        }

        if (videoBackdrop) {
            videoBackdrop.addEventListener('click', function(e) {
                e.preventDefault();
                closeVideoModal();
            });
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && videoModal && videoModal.classList.contains('active')) {
                closeVideoModal();
            }
        });

    });

})();
