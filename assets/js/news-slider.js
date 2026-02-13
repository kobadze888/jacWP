document.addEventListener('DOMContentLoaded', function() {
    const grid = document.getElementById('newsGrid');
    const cards = document.querySelectorAll('.news-card');
    const dotsContainer = document.getElementById('newsDots');
    
    // --- გასწორებული ID-ები ---
    const prevBtn = document.getElementById('newsPrev');
    const nextBtn = document.getElementById('newsNext'); 
    
    let currentIndex = 0;

    if (!grid || cards.length === 0) return;

    // ეკრანზე გამოჩენილი ქარდების რაოდენობა
    function getVisibleCards() {
        if (window.innerWidth <= 768) return 1;
        if (window.innerWidth <= 1024) return 2;
        return 3;
    }

    function updateSlider() {
        const visibleCards = getVisibleCards();
        const maxIndex = cards.length - visibleCards;
        
        // --- კარუსელის (Loop) ლოგიკა ---
        if (currentIndex > maxIndex) {
            currentIndex = 0; // ბოლოდან -> დასაწყისში
        }
        if (currentIndex < 0) {
            currentIndex = maxIndex; // დასაწყისიდან -> ბოლოში
        }

        const gap = window.innerWidth <= 768 ? 20 : 30;
        const cardWidth = cards[0].getBoundingClientRect().width + gap;
        
        grid.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

        // დოტების განახლება
        const dots = document.querySelectorAll('.news-dot');
        dots.forEach((dot, idx) => {
            dot.classList.toggle('active', idx === currentIndex);
        });
    }

    function renderDots() {
        if (!dotsContainer) return;
        dotsContainer.innerHTML = '';
        const visibleCards = getVisibleCards();
        const dotCount = cards.length - visibleCards + 1;

        for (let i = 0; i < dotCount; i++) {
            const dot = document.createElement('div');
            dot.className = `news-dot ${i === currentIndex ? 'active' : ''}`;
            dot.onclick = () => { currentIndex = i; updateSlider(); };
            dotsContainer.appendChild(dot);
        }
    }

    // ღილაკების ივენთები
    if (nextBtn) {
        nextBtn.onclick = () => { 
            currentIndex++; 
            updateSlider(); 
        };
    }
    
    if (prevBtn) {
        prevBtn.onclick = () => { 
            currentIndex--; 
            updateSlider(); 
        };
    }

    // --- SWIPE (Touch) ლოგიკა ---
    let startX = 0;
    grid.addEventListener('touchstart', e => { startX = e.touches[0].clientX; }, {passive: true});
    grid.addEventListener('touchend', e => {
        let diff = startX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 50) {
            if (diff > 0) currentIndex++;
            else currentIndex--;
            updateSlider();
        }
    }, {passive: true});

    window.addEventListener('resize', () => { 
        renderDots(); 
        updateSlider(); 
    });

    renderDots();
    updateSlider();
});