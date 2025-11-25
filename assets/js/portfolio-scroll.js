document.addEventListener('DOMContentLoaded', function () {

    // ---- Projects page button click ----
    const projectsBtn = document.querySelector('.scroll-cta'); // the Explore button
    const projectsGrid = document.getElementById('projects-grid');

    if (projectsBtn && projectsGrid) {
        projectsBtn.addEventListener('click', function (e) {
            e.preventDefault();

            // Show the hidden grid
            projectsGrid.classList.add('show-grid');

            // Scroll to grid
            projectsGrid.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    }

    // ---- Optional: smooth scroll for other pages ----
    const scrollLinks = document.querySelectorAll('a[href^="#"]');
    scrollLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            const targetId = link.getAttribute('href').substring(1);
            const target = document.getElementById(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

});
