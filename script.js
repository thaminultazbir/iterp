// Select all nav items
const navItems = document.querySelectorAll(".nav-item");

//For Dynamic input field
const numberOfItemsInput = document.getElementById("numberOfItems");
const itemsContainer = document.getElementById("itemsContainer");
// Loop through each nav item and add click event
navItems.forEach(item => {
    item.addEventListener("click", function() {
        // Remove active class from all items
        navItems.forEach(nav => nav.classList.remove("active"));
        
        // Add active class to the clicked item
        this.classList.add("active");
    });
});
numberOfItemsInput.addEventListener("input", function() {
    const itemCount = parseInt(numberOfItemsInput.value) || 0;
    itemsContainer.innerHTML = ""; // Clear previous fields

    for (let i = 1; i <= itemCount; i++) {
        const itemGroup = document.createElement("div");
        itemGroup.className = "form-group";
        itemGroup.innerHTML = `
            <label for="itemDescription${i}">Item Description ${i}</label>
            <input type="text" id="itemDescription${i}" name="itemDescription${i}" required>

            <label for="price${i}">Price ${i}</label>
            <input type="number" id="price${i}" name="price${i}" step="0.01" required>
        `;
        itemsContainer.appendChild(itemGroup);
    }
});
