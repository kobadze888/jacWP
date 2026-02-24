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

    // 3. Sub Nav Scroll Spy (ჰედერის ლინკების გააქტიურება სქროლისას)
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.subnav-links a');

    window.addEventListener('scroll', () => {
        let current = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 150;
            if (scrollY >= sectionTop) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current)) {
                link.classList.add('active');
            }
        });
    });

    // 4. NEW: Interior Gallery Slider
    const galDots = document.querySelectorAll('.gal-dot');
    const galImgs = document.querySelectorAll('.gal-img');
    
    if(galDots.length > 0 && galImgs.length > 0) {
        galDots.forEach(dot => {
            dot.addEventListener('click', function() {
                const idx = this.getAttribute('data-idx');
                
                // წავშალოთ აქტიური კლასები
                galDots.forEach(d => d.classList.remove('active'));
                galImgs.forEach(img => img.classList.remove('active'));
                
                // მივანიჭოთ ახალს
                this.classList.add('active');
                if(galImgs[idx]) {
                    galImgs[idx].classList.add('active');
                }
            });
        });
    }
});