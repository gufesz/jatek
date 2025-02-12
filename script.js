// Get all the toggle button elements
const toggleButtons = document.querySelectorAll('.toggle-button');

// Add a click event listener to each toggle button
toggleButtons.forEach((toggleButton, index) => {
    toggleButton.addEventListener('click', () => {
        // Get the corresponding cover div
        const cover = document.querySelector(`.cover${index + 1}`);

        // Toggle the visibility of the cover div
        cover.classList.toggle('hidden');
    });
});