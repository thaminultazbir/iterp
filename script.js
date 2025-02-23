// Select all nav items
const navItems = document.querySelectorAll(".nav-item");

// Loop through each nav item and add click event
navItems.forEach(item => {
    item.addEventListener("click", function() {
        // Remove active class from all items
        navItems.forEach(nav => nav.classList.remove("active"));
        
        // Add active class to the clicked item
        this.classList.add("active");
    });
});