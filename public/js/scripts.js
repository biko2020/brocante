// Marketplace functionality
document.addEventListener('DOMContentLoaded', () => {
    loadAds();
    
    const form = document.getElementById('adForm');
    if(form) {
        form.addEventListener('submit', handleAdSubmission);
    }
});

function loadAds() {
    const ads = JSON.parse(localStorage.getItem('marketplaceAds')) || [];
    const container = document.getElementById('adsContainer');
    
    if(container) {
        container.innerHTML = ads.map(ad => `
            <article class="ad-card">
                <img src="${ad.image || 'images/placeholder.png'}" alt="${ad.title}">
                <div class="ad-details">
                    <h3>${ad.title}</h3>
                    <p>${ad.description}</p>
                    <div class="ad-meta">
                        <span class="price">${ad.price} MAD</span>
                        <span class="category">${ad.category}</span>
                    </div>
                </div>
            </article>
        `).join('');
    }
}

function handleAdSubmission(e) {
    e.preventDefault();
    
    const newAd = {
        title: document.getElementById('title').value,
        description: document.getElementById('description').value,
        price: document.getElementById('price').value,
        category: document.getElementById('category').value,
        image: document.getElementById('image').files[0] ?
            URL.createObjectURL(document.getElementById('image').files[0]) : null,
        date: new Date().toISOString()
    };

    const ads = JSON.parse(localStorage.getItem('marketplaceAds')) || [];
    ads.push(newAd);
    localStorage.setItem('marketplaceAds', JSON.stringify(ads));
    
    window.location.href = 'articles.html';
}
