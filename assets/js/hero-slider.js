document.addEventListener('DOMContentLoaded', function() {
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
});