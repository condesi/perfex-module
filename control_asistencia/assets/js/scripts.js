document.addEventListener('DOMContentLoaded', function() {
    var navLinks = document.querySelectorAll('.nav-link');
    var tabPanes = document.querySelectorAll('.tab-pane');

    navLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            navLinks.forEach(function(link) {
                link.classList.remove('active');
            });

            tabPanes.forEach(function(pane) {
                pane.classList.remove('active');
                pane.classList.remove('show');
            });

            link.classList.add('active');
            var target = document.querySelector(link.getAttribute('href'));
            target.classList.add('active');
            target.classList.add('show');
        });
    });
});
