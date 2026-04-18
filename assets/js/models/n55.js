(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {

        const n55Page = document.querySelector('.n55-page');
        if (!n55Page) return;

        const fadeElements = n55Page.querySelectorAll('.n55-fade-up');
        
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

        const sections = n55Page.querySelectorAll('section[id]');
        const navLinks = n55Page.querySelectorAll('.subnav-link');

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
                    const target = n55Page.querySelector(href);
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

        const subNavLinksContainer = n55Page.querySelector('#n55-subnav ul');
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

        const specTabs = n55Page.querySelectorAll('.spec-tab');
        
        if (specTabs.length > 0) {
            specTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    specTabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        }

        const videoTrigger = n55Page.querySelector('#n55-video-trigger');
        const videoModal = n55Page.querySelector('#n55-video-modal');
        const videoClose = n55Page.querySelector('#n55-video-close');
        const videoBackdrop = n55Page.querySelector('.video-modal-backdrop');
        const modalVideo = n55Page.querySelector('#n55-modal-video');

        function openVideoModal() {
            if (!videoModal) return;
            videoModal.classList.add('active');
            document.body.classList.add('n55-video-open');
            if (modalVideo) {
                modalVideo.currentTime = 0;
                const playPromise = modalVideo.play();
                if (playPromise !== undefined) {
                    playPromise.catch(() => {
                    });
                }
            }
        }

        function closeVideoModal() {
            if (!videoModal) return;
            videoModal.classList.remove('active');
            document.body.classList.remove('n55-video-open');
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
