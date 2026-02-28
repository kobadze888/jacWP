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

    // 2. Color Switcher
    const colorDots = document.querySelectorAll('.color-dot');
    const mainImg = document.getElementById('mainCarColorImg');
    const nameDisplay = document.getElementById('colorNameDisplay');

    if (colorDots.length > 0 && mainImg) {
        colorDots.forEach(dot => {
            dot.addEventListener('click', function() {
                colorDots.forEach(d => d.classList.remove('active'));
                this.classList.add('active');

                const newImgUrl = this.getAttribute('data-img');
                const newName = this.getAttribute('data-name');
                
                mainImg.style.opacity = '0';
                setTimeout(() => {
                    mainImg.src = newImgUrl;
                    nameDisplay.textContent = newName;
                    mainImg.style.opacity = '1';
                }, 300);
            });
        });
    }

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

/* 6. FEATURE VIDEO MODAL LOGIC */
    const triggerFeatureVideo = document.getElementById('triggerFeatureVideo');
    const featureModal = document.getElementById('featureVideoModal');
    const featureClose = document.getElementById('closeFeatureModal');
    const featureVideo = document.getElementById('featureModalVideo');

    if(triggerFeatureVideo && featureModal && featureVideo) {
        /* სქროლის დაბლოკვა მოდალის გახსნისას */
        triggerFeatureVideo.addEventListener('click', () => {
            featureModal.style.display = 'flex';
            document.body.style.overflow = 'hidden'; /* ბლოკავს ფონის სქროლს */
            setTimeout(() => featureModal.classList.add('active'), 10);
            featureVideo.currentTime = 0;
            featureVideo.play();
        });

        /* სქროლის აღდგენა მოდალის დახურვისას */
        const closeFeatureModal = () => {
            featureModal.classList.remove('active');
            setTimeout(() => {
                featureModal.style.display = 'none';
                document.body.style.overflow = ''; /* აღადგენს სქროლს */
            }, 400);
            featureVideo.pause();
        };

        if(featureClose) featureClose.addEventListener('click', closeFeatureModal);
        featureModal.addEventListener('click', (e) => { if(e.target === featureModal) closeFeatureModal(); });
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
});