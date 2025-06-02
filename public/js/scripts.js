document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.site-header');
    
    window.addEventListener('scroll', () => {
        const isScrolled = window.scrollY > 50;
        header.classList.toggle('scrolled', isScrolled);
    });
});
