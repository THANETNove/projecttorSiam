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

document.addEventListener('DOMContentLoaded', function () {
    const smallImages = document.querySelectorAll('.product-image-sm');
    const mainImage = document.getElementById('product-image');

    console.log('JavaScript loaded and running'); // ตรวจสอบว่า JavaScript ถูกโหลด

    smallImages.forEach(function (img) {
        img.addEventListener('click', function () {
            console.log('Image clicked:', img.src); // ตรวจสอบว่าภาพถูกคลิก
            mainImage.src = img.src;
            console.log('Main image src changed to:', mainImage
                .src); // ตรวจสอบว่าภาพหลักถูกเปลี่ยน
        });
    });
});