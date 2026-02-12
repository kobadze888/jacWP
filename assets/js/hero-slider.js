document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator-line');
    const slider = document.querySelector('.hero-slider');
    let currentSlide = 0;
    const slideIntervalTime = 5000;
    let slideInterval;

    if (!slider || slides.length === 0) return;

    function showSlide(index) {
        slides[currentSlide].classList.remove('active');
        indicators[currentSlide].classList.remove('active');
        currentSlide = (index + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
        indicators[currentSlide].classList.add('active');
    }

    function nextSlide() { showSlide(currentSlide + 1); }
    function prevSlide() { showSlide(currentSlide - 1); }

    window.manualSlide = function(index) {
        clearInterval(slideInterval);
        showSlide(index);
        slideInterval = setInterval(nextSlide, slideIntervalTime);
    }

    // --- SWIPE ფუნქციონალი მობილურისთვის ---
    let touchStartX = 0;
    let touchStartY = 0;

    slider.addEventListener('touchstart', e => {
        touchStartX = e.touches[0].clientX;
        touchStartY = e.touches[0].clientY;
    }, { passive: true });

    slider.addEventListener('touchmove', e => {
        let touchMoveX = e.touches[0].clientX;
        let touchMoveY = e.touches[0].clientY;
        
        let diffX = Math.abs(touchStartX - touchMoveX);
        let diffY = Math.abs(touchStartY - touchMoveY);

        // თუ ჰორიზონტალური მოძრაობა უფრო დიდია, ვიდრე ვერტიკალური, ვბლოკავთ სქროლს
        if (diffX > diffY) {
            if (e.cancelable) e.preventDefault(); 
        }
    }, { passive: false });

    slider.addEventListener('touchend', e => {
        let touchEndX = e.changedTouches[0].clientX;
        let touchEndY = e.changedTouches[0].clientY;
        
        let diffX = touchStartX - touchEndX;
        let diffY = touchStartY - touchEndY;

        if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 50) {
            if (diffX > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, slideIntervalTime);
        }
    });

    slideInterval = setInterval(nextSlide, slideIntervalTime);
});