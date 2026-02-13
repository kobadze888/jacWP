document.addEventListener('DOMContentLoaded', function() {
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const grid = document.getElementById('newsArchiveGrid');
    
    if(!loadMoreBtn || !grid) return;
    
    loadMoreBtn.addEventListener('click', function() {
        let currentPage = parseInt(this.getAttribute('data-page'));
        let maxPages = parseInt(this.getAttribute('data-max'));
        
        if(currentPage >= maxPages) return;
        
        // ვააქტიურებთ Loading ანიმაციას
        this.classList.add('loading');
        let nextPage = currentPage + 1;
        
        let formData = new FormData();
        formData.append('action', 'load_more_news');
        formData.append('page', nextPage);
        
        // AJAX მოთხოვნა
        fetch(jac_ajax.ajax_url, {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(html => {
            // ვამატებთ ახალ ქარდებს გრიდში
            grid.insertAdjacentHTML('beforeend', html);
            
            // ვანახლებთ ღილაკის სტატუსს
            loadMoreBtn.classList.remove('loading');
            loadMoreBtn.setAttribute('data-page', nextPage);
            
            // თუ მეტი პოსტი აღარაა, ვაქრობთ ღილაკს
            if(nextPage >= maxPages) {
                loadMoreBtn.style.display = 'none';
            }
        })
        .catch(err => {
            console.error('AJAX Error:', err);
            loadMoreBtn.classList.remove('loading');
        });
    });
});