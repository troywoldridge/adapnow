import './bootstrap';
import '@fortawesome/fontawesome-free/css/all.css';  // FontAwesome for icons

document.addEventListener('DOMContentLoaded', function () {
    // Handle dropdown hover interaction
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('mouseover', function () {
            this.querySelector('.dropdown-content').style.display = 'block';
        });

        dropdown.addEventListener('mouseout', function () {
            this.querySelector('.dropdown-content').style.display = 'none';
        });
    });

    // Navbar color change on scroll
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar');

        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});
