// Get the book now button and form elements
const bookNowBtn = document.getElementById('book-now-btn');
const bookNowForm = document.getElementById('book-now-form');

// Add an event listener to the book now button
bookNowBtn.addEventListener('click', function() {
    // Toggle the display of the form
    bookNowForm.style.display = (bookNowForm.style.display === 'none') ? 'block' : 'none';
});