document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Reveal Animations
    const fadeElements = document.querySelectorAll('.fade-up');
    const fadeObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    fadeElements.forEach(el => fadeObserver.observe(el));



    // 3. Sub Nav Scroll Spy (გასწორებული ლოგიკით)
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.subnav-links a');

    function updateNavOnScroll() {
        let current = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 150;
            if (window.scrollY >= sectionTop) {
                current = section.getAttribute('id');
            }
        });

        // თუ სულ ზევით ვართ (არ დაგვისქროლავს), პირველი ('overview') ავანთოთ ნაგულისხმევად
        if (current === '') {
            current = 'overview';
        }

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (current !== '' && link.getAttribute('href').includes(current)) {
                link.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', updateNavOnScroll);
    
    // გამოვიძახოთ ეგრევე, გვერდის ჩატვირთვისთანავე, რომ ყველა ხაზი არ აინთოს!
    updateNavOnScroll();

    /* 4. REFINED GALLERY LOGIC (Tabs & Categorized Slider) */
    const galTabs = document.querySelectorAll('.gal-tab');
    const galArrows = document.querySelectorAll('.gal-arrow');
    const galIndsContainer = document.querySelector('.gal-indicators');

    let currentCat = 'exterior';
    let catIndex = 0;

    function updateGallery() {
        const activeImgs = document.querySelectorAll(`.gal-img[data-cat="${currentCat}"]`);
        document.querySelectorAll('.gal-img').forEach(img => img.classList.remove('active'));
        if(activeImgs[catIndex]) activeImgs[catIndex].classList.add('active');

        if(galIndsContainer) {
            galIndsContainer.innerHTML = '';
            activeImgs.forEach((_, i) => {
                const span = document.createElement('span');
                span.className = `gal-ind ${i === catIndex ? 'active' : ''}`;
                galIndsContainer.appendChild(span);
            });
        }

        galArrows.forEach(arr => {
            if(arr.classList.contains('next')) arr.classList.toggle('active', catIndex < activeImgs.length - 1);
            else arr.classList.toggle('active', catIndex > 0);
        });
    }

    galTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            galTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            currentCat = this.getAttribute('data-cat');
            catIndex = 0;
            updateGallery();
        });
    });

    galArrows.forEach(arrow => {
        arrow.addEventListener('click', function() {
            const activeImgs = document.querySelectorAll(`.gal-img[data-cat="${currentCat}"]`);
            if(this.classList.contains('next') && catIndex < activeImgs.length - 1) catIndex++;
            else if(this.classList.contains('prev') && catIndex > 0) catIndex--;
            updateGallery();
        });
    });

    updateGallery();


    /* INTERIOR VIDEO MODAL LOGIC */
        const triggerInteriorVideo = document.getElementById('triggerInteriorVideo');
        const interiorVideoModal = document.getElementById('interiorVideoModal');
        const closeInteriorModal = document.getElementById('closeInteriorModal');
        const interiorModalVideo = document.getElementById('interiorModalVideo');

        if(triggerInteriorVideo && interiorVideoModal) {
            triggerInteriorVideo.addEventListener('click', () => {
                interiorVideoModal.style.display = 'flex';
                document.body.style.overflow = 'hidden'; /* ბლოკავს სქროლს */
                setTimeout(() => interiorVideoModal.classList.add('active'), 10);
                interiorModalVideo.currentTime = 0;
                interiorModalVideo.play();
            });

            closeInteriorModal.addEventListener('click', () => {
                interiorVideoModal.classList.remove('active');
                setTimeout(() => {
                    interiorVideoModal.style.display = 'none';
                    document.body.style.overflow = ''; /* აღადგენს სქროლს */
                }, 400);
                interiorModalVideo.pause();
            });
        }

    /* 7. FEATURES SLIDER LOGIC (NEW LAYOUT) */
    const featureSliders = document.querySelectorAll('.feature-slider-section');

    featureSliders.forEach(slider => {
        const prevBtn = slider.querySelector('.feat-arrow.prev');
        const nextBtn = slider.querySelector('.feat-arrow.next');
        const dots = slider.querySelectorAll('.f-dot');
        let currentIndex = 0;

        function updateSliderIndicators(index) {
            dots.forEach(d => d.classList.remove('active'));
            if (dots[index]) {
                dots[index].classList.add('active');
            }
            
            // სლაიდერის ტრეკის გადაადგილების ლოგიკა
            const trackId = prevBtn ? prevBtn.getAttribute('data-slider') : null;
            if (trackId) {
                const track = document.getElementById(trackId);
                if (track) {
                    track.style.transform = `translateX(-${index * 100}%)`;
                }
            }
        }

        if (prevBtn && dots.length > 0) {
            prevBtn.addEventListener('click', () => {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : dots.length - 1;
                updateSliderIndicators(currentIndex);
            });
        }

        if (nextBtn && dots.length > 0) {
            nextBtn.addEventListener('click', () => {
                currentIndex = (currentIndex < dots.length - 1) ? currentIndex + 1 : 0;
                updateSliderIndicators(currentIndex);
            });
        }

        dots.forEach((dot, idx) => {
            dot.addEventListener('click', () => {
                currentIndex = idx;
                updateSliderIndicators(currentIndex);
            });
        });
    });

    /* 8. SAFETY VIDEO MODAL LOGIC */
    const triggerSafetyVideo = document.getElementById('triggerSafetyVideo');
    const safetyVideoModal = document.getElementById('safetyVideoModal');
    const closeSafetyModal = document.getElementById('closeSafetyModal');
    const safetyModalVideo = document.getElementById('safetyModalVideo');

    if(triggerSafetyVideo && safetyVideoModal) {
        triggerSafetyVideo.addEventListener('click', () => {
            safetyVideoModal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
            setTimeout(() => safetyVideoModal.classList.add('active'), 10);
            safetyModalVideo.currentTime = 0;
            safetyModalVideo.play();
        });

        closeSafetyModal.addEventListener('click', () => {
            safetyVideoModal.classList.remove('active');
            setTimeout(() => {
                safetyVideoModal.style.display = 'none';
                document.body.style.overflow = '';
            }, 400);
            safetyModalVideo.pause();
        });
    }
    

const subNavLinksContainer = document.querySelector('.subnav-links');
    if (subNavLinksContainer) {
        const observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                if (mutation.attributeName === 'class' && mutation.target.classList.contains('active')) {
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

        const links = subNavLinksContainer.querySelectorAll('a:not(.subnav-btn-brochure)');
        links.forEach(link => {
            observer.observe(link, { attributes: true });
        });
    }

    const perfTabs = document.querySelectorAll('.perf-tab');
    const perfSlides = document.querySelectorAll('.perf-slide');

    if (perfTabs.length > 0 && perfSlides.length > 0) {
        perfTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                perfTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                const targetId = this.getAttribute('data-target');
                
                perfSlides.forEach(slide => {
                    slide.style.opacity = '0';
                    slide.classList.remove('active');
                });

                const activeSlide = document.getElementById(targetId);
                if (activeSlide) {
                    activeSlide.classList.add('active');
                    setTimeout(() => { activeSlide.style.opacity = '1'; }, 50);
                }
            });
        });
    }

    // =========================================
    // T9 VERSIONS TABS LOGIC
    // =========================================
    const vTabs = document.querySelectorAll('.v-tab');
    const vContents = document.querySelectorAll('.v-content');
    const vImages = document.querySelectorAll('.v-car-img');

    if (vTabs.length > 0) {
        vTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                vTabs.forEach(t => t.classList.remove('active'));
                vContents.forEach(c => c.classList.remove('active'));
                vImages.forEach(img => img.classList.remove('active'));

                this.classList.add('active');
                
                const targetId = this.getAttribute('data-target');
                
                const targetContent = document.getElementById('desc-' + targetId);
                if (targetContent) {
                    targetContent.classList.add('active');
                }

                const targetImg = document.getElementById('img-' + targetId);
                if (targetImg) {
                    targetImg.classList.add('active');
                }
            });
        });
    }
});