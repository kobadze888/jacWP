document.addEventListener("DOMContentLoaded", function() {
    const banner = document.getElementById('cookie-banner');
    const acceptBtn = document.getElementById('cookie-accept');
    const declineBtn = document.getElementById('cookie-decline');
    const openBtn = document.getElementById('open-cookie-banner');
    
    if (!banner) return;

    const consent = localStorage.getItem('jac_cookie_consent');

    if (!consent) {
        setTimeout(() => {
            banner.style.display = 'block';
        }, 1000);
    } else if (consent === 'accepted') {
        initScripts();
    }

    acceptBtn.addEventListener('click', function() {
        localStorage.setItem('jac_cookie_consent', 'accepted');
        banner.style.display = 'none';
        initScripts();
    });

    declineBtn.addEventListener('click', function() {
        localStorage.setItem('jac_cookie_consent', 'declined');
        banner.style.display = 'none';
    });

    if (openBtn) {
        openBtn.addEventListener('click', function(e) {
            e.preventDefault();
            banner.style.display = 'block';
        });
    }

    function initScripts() {
        if (typeof gtag === 'function') {
            gtag('consent', 'update', { 'analytics_storage': 'granted' });
        }
        if (typeof fbq === 'function') {
            fbq('consent', 'grant');
        }
    }
});