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

    /* 5. VIDEO MODAL LOGIC */
    const openFreeBtn = document.getElementById('openFreeVideo');
    const freeModal = document.getElementById('e30xVideoModal');
    const freeClose = document.getElementById('closeE30xModal');
    const freeVideo = document.getElementById('e30xModalVideo');

    if(openFreeBtn && freeModal && freeVideo) {
        openFreeBtn.addEventListener('click', () => {
            freeModal.style.display = 'flex';
            setTimeout(() => freeModal.classList.add('active'), 10);
            freeVideo.muted = false; // ჩართვა ხმით
            freeVideo.play();
        });

        const closeFreeModal = () => {
            freeModal.classList.remove('active');
            setTimeout(() => freeModal.style.display = 'none', 400);
            freeVideo.pause();
        };

        if(freeClose) freeClose.addEventListener('click', closeFreeModal);
        freeModal.addEventListener('click', (e) => { if(e.target === freeModal) closeFreeModal(); });
    }
});