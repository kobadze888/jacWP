document.addEventListener('DOMContentLoaded', function() {
    if (typeof lucide !== 'undefined') lucide.createIcons();

    /* --- Header & Logo Logic --- */
    const navbar = document.getElementById('navbar');
    const logoImg = document.getElementById('logoImg');
    const hamburger = document.getElementById('hamburgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    // ACF-დან წამოსული ლოგოების URL-ები
    const whiteLogo = logoImg.getAttribute('data-white');
    const darkLogo = logoImg.getAttribute('data-dark');

    window.addEventListener('scroll', () => {
        if(mobileMenu.classList.contains('active')) return;

        if(window.scrollY > 50) {
            navbar.classList.add('scrolled');
            logoImg.src = darkLogo; 
            hamburger.style.color = '#000';
        } else {
            navbar.classList.remove('scrolled');
            logoImg.src = whiteLogo; 
            hamburger.style.color = '#fff';
        }
    });

    if(hamburger) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            
            if(mobileMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden'; 
                logoImg.src = whiteLogo; // მობილურ მენიუში ყოველთვის თეთრი ლოგო
                hamburger.style.color = '#fff';
            } else {
                document.body.style.overflow = ''; 
                // მენიუს დახურვისას ვამოწმებთ სქროლს
                if (window.scrollY > 50) {
                    logoImg.src = darkLogo;
                    hamburger.style.color = '#000';
                } else {
                    logoImg.src = whiteLogo;
                    hamburger.style.color = '#fff';
                }
            }
        });
    }

    /* --- Mobile Language Switcher Click --- */
    const langSelector = document.querySelector('.lang-selector-wrapper');
    if (langSelector) {
        langSelector.addEventListener('click', function(e) {
            // მხოლოდ მობილურ/პლანშეტურ ზომებზე
            if (window.innerWidth <= 1024) {
                this.classList.toggle('active');
                e.stopPropagation();
            }
        });
    }

    document.addEventListener('click', () => {
        if (langSelector) langSelector.classList.remove('active');
    });

    /* --- Hero Slider Logic --- */
    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator-line');
    let currentSlide = 0;
    const slideIntervalTime = 5000;
    let slideInterval;

    if(slides.length > 0) {
        function showSlide(index) {
            slides[currentSlide].classList.remove('active');
            indicators[currentSlide].classList.remove('active');
            
            currentSlide = (index + slides.length) % slides.length;
            
            slides[currentSlide].classList.add('active');
            indicators[currentSlide].classList.add('active');
        }

        function nextSlide() { showSlide(currentSlide + 1); }

        window.manualSlide = function(index) {
            clearInterval(slideInterval);
            showSlide(index);
            slideInterval = setInterval(nextSlide, slideIntervalTime);
        }

        slideInterval = setInterval(nextSlide, slideIntervalTime);
    }

    /* --- Explore Section Logic (Dynamic WP Data) --- */
    let vehicles = (typeof dynamicVehicles !== 'undefined') ? dynamicVehicles : {};
    const tabs = document.querySelectorAll('.type-tab');
    const carImg = document.getElementById('carImage');
    const modelNav = document.querySelector('.model-nav');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let currentType = Object.keys(vehicles).length > 0 ? Object.keys(vehicles)[0] : null;
    let currentModelIndex = 0;

    function switchModelAnimation(callback) {
        if (!carImg) return;
        carImg.style.transition = 'all 0.4s ease-in';
        carImg.style.opacity = '0';
        carImg.style.transform = 'translateX(-100px)';

        setTimeout(() => {
            if (callback) callback();
            carImg.style.transition = 'none';
            carImg.style.transform = 'translateX(100px)';
            
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    carImg.style.transition = 'all 0.4s ease-out';
                    carImg.style.opacity = '1';
                    carImg.style.transform = 'translateX(0)';
                });
            });
        }, 400);
    }

    function updateModelDisplay() {
        if (!modelNav || !vehicles[currentType]) return;
        const items = modelNav.querySelectorAll('.model-item');
        items.forEach((item, idx) => {
            if(idx === currentModelIndex) item.classList.add('active');
            else item.classList.remove('active');
        });
        const currentModelObj = vehicles[currentType].models[currentModelIndex];
        if (currentModelObj && currentModelObj.image) {
            carImg.src = currentModelObj.image;
        }
    }

    function renderModelList() {
        if (!modelNav || !currentType || !vehicles[currentType]) return;
        modelNav.innerHTML = '';
        vehicles[currentType].models.forEach((modelObj, index) => {
            const div = document.createElement('div');
            div.className = `model-item ${index === currentModelIndex ? 'active' : ''}`;
            div.textContent = modelObj.name;
            div.onclick = function() {
                if (currentModelIndex !== index) {
                    currentModelIndex = index;
                    switchModelAnimation(() => {
                        updateModelDisplay();
                    });
                }
            };
            modelNav.appendChild(div);
        });
        updateModelDisplay();
    }

    if (currentType && modelNav && carImg) {
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const type = tab.getAttribute('data-type');
                if (type !== currentType && vehicles[type]) {
                    tabs.forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');
                    currentType = type;
                    currentModelIndex = 0;
                    switchModelAnimation(() => {
                        renderModelList();
                    });
                }
            });
        });

        if(nextBtn) nextBtn.addEventListener('click', () => {
            const total = vehicles[currentType].models.length;
            currentModelIndex = (currentModelIndex + 1) % total;
            switchModelAnimation(() => { updateModelDisplay(); });
        });

        if(prevBtn) prevBtn.addEventListener('click', () => {
            const total = vehicles[currentType].models.length;
            currentModelIndex = (currentModelIndex - 1 + total) % total;
            switchModelAnimation(() => { updateModelDisplay(); });
        });

        renderModelList();
    }

    /* --- Footer Mobile Accordion --- */
    const footerCols = document.querySelectorAll('.footer-col');
    footerCols.forEach(col => {
        const title = col.querySelector('h3');
        if(title) {
            title.addEventListener('click', () => {
                if(window.innerWidth <= 768) {
                    col.classList.toggle('active');
                }
            });
        }
    });

    /* --- Mobile News Slider Logic --- */
    const newsCards = document.querySelectorAll('.news-card');
    const newsDotsContainer = document.getElementById('newsDots');
    const newsPrev = document.getElementById('newsPrev');
    const newsNext = document.getElementById('newsNext');
    let currentNewsIndex = 0;

    if(newsCards.length > 0 && newsDotsContainer) {
        newsDotsContainer.innerHTML = ''; 
        newsCards.forEach((_, idx) => {
            const dot = document.createElement('div');
            dot.className = `news-dot ${idx === 0 ? 'active' : ''}`;
            newsDotsContainer.appendChild(dot);
        });
        const newsDots = document.querySelectorAll('.news-dot');

        function updateNewsSlider() {
            newsCards.forEach((card, idx) => {
                card.classList.toggle('active', idx === currentNewsIndex);
            });
            newsDots.forEach((dot, idx) => {
                dot.classList.toggle('active', idx === currentNewsIndex);
            });
        }

        if(newsNext) newsNext.addEventListener('click', () => {
            currentNewsIndex = (currentNewsIndex + 1) % newsCards.length;
            updateNewsSlider();
        });

        if(newsPrev) newsPrev.addEventListener('click', () => {
            currentNewsIndex = (currentNewsIndex - 1 + newsCards.length) % newsCards.length;
            updateNewsSlider();
        });
    }
});