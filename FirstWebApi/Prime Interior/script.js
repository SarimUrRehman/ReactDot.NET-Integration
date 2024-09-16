document.addEventListener('DOMContentLoaded', function() {
    var dropdowns = document.querySelectorAll('.dropbtn');

    dropdowns.forEach(function(dropdown) {
        dropdown.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default action (if any)
            var dropdownContent = this.nextElementSibling;

            if (dropdownContent.classList.contains('show')) {
                dropdownContent.classList.remove('show');
            } else {
                // Close any other open dropdowns
                var openDropdowns = document.querySelectorAll('.ul-dropdown.show');
                openDropdowns.forEach(function(openDropdown) {
                    openDropdown.classList.remove('show');
                });

                dropdownContent.classList.add('show');
            }
        });
    });

    // Close the dropdown if the user clicks outside of it
    window.addEventListener('click', function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.querySelectorAll('.ul-dropdown');
            dropdowns.forEach(function(dropdown) {
                dropdown.classList.remove('show');
            });
        }
    });
});
