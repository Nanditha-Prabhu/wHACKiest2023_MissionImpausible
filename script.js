const toggleButton = document.getElementById("toggle-dark-mode");

// Add event listener to toggle button
toggleButton.addEventListener("click", () => {
    // Toggle the `dark-mode` class on the `body` element
    document.body.classList.toggle("dark");
    // Update the button text
    toggleButton.innerHTML =
        document.body.classList.contains("dark") ? "Toggle Light Mode" : "Toggle Dark Mode";
});
