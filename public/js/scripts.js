// Mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
  const mobileToggle = document.querySelector('.mobile-menu-toggle');
  const mobileNav = document.querySelector('.mobile-nav');

  if (mobileToggle && mobileNav) {
    mobileToggle.addEventListener('click', function() {
      mobileNav.classList.toggle('active');
      this.setAttribute('aria-expanded', mobileNav.classList.contains('active'));
    });

    document.addEventListener('click', function(event) {
      if (!event.target.closest('.mobile-nav') && !event.target.closest('.mobile-menu-toggle')) {
        mobileNav.classList.remove('active');
        mobileToggle.setAttribute('aria-expanded', 'false');
      }
    });

    window.addEventListener('resize', function() {
      if (window.innerWidth > 768) {
        mobileNav.classList.remove('active');
        mobileToggle.setAttribute('aria-expanded', 'false');
      }
    });
  }
});
