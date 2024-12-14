$(document).ready(function () {
    $('#registrationForm').submit(function (e) {
        let isValid = true;
        
        // Validate name
        if ($('#name').val().trim() === '') {
            alert('Name is required!');
            isValid = false;
        }

        // Validate email
        const emailPattern = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
        if (!emailPattern.test($('#email').val())) {
            alert('Enter a valid email!');
            isValid = false;
        }

        if (!isValid) e.preventDefault();
    });
});
