import './bootstrap';
import '@fortawesome/fontawesome-free/css/all.css';  // FontAwesome for icons

// Navbar color change on scroll
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');

    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
