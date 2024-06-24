document.addEventListener('DOMContentLoaded', function () {
    const rememberCheckbox = document.getElementById('remember');
    const emailField = document.getElementById('email');
    const passwordField = document.getElementById('password');
    const loginForm = document.getElementById('login-form');

    // Check if email and password are stored in local storage
    if (localStorage.getItem('rememberMe') === 'true') {
        rememberCheckbox.checked = true;
        emailField.value = localStorage.getItem('email');
        passwordField.value = atob(localStorage.getItem('password')); // Decode base64 password
    }

    // Listen for form submission to save or clear data
    loginForm.addEventListener('submit', function () {
        if (rememberCheckbox.checked) {
            localStorage.setItem('rememberMe', 'true');
            localStorage.setItem('email', emailField.value);
            localStorage.setItem('password', btoa(passwordField
                .value)); // Encode password in base64
        } else {
            localStorage.removeItem('rememberMe');
            localStorage.removeItem('email');
            localStorage.removeItem('password');
        }
    });

    // Function to encode data in base64
    function btoa(input) {
        return window.btoa(unescape(encodeURIComponent(input)));
    }

    // Function to decode data from base64
    function atob(input) {
        return decodeURIComponent(escape(window.atob(input)));
    }
});