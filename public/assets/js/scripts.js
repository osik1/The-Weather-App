
// SIDEBAR PULL UP ///
document.getElementById("pullSidebar").addEventListener("click", function(e) {
    document.getElementById("sidebar").classList.toggle("show");
    });
    // Close the dropdown if the user clicks outside of it
    window.addEventListener("click", function(event) {
    if (!event.target.matches('.menu-btn')) {
        document.querySelectorAll(".left-sidebar.show")
        .forEach(openDropdown => openDropdown.classList.remove('show'))
    }
});



