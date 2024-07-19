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



function calculateDistance() {
    // Retrieve values from the spans
    const ratioScreen = document.getElementById('ratio-screen').textContent;
    const throwRatioMin = parseFloat(document.getElementById('ratio-min').textContent);
    const throwRatioMax = parseFloat(document.getElementById('ratio-max').textContent);


    // Retrieve the input value
    const inputElement = document.getElementById('exampleFormControlInput1');
    const inputSize = parseFloat(inputElement.value);

    if (isNaN(inputSize)) {
        document.getElementById('distance-16-9').textContent = ``;
        document.getElementById('screen-text-bottom').textContent = ``;
        document.getElementById('screen-text-right').textContent = ``;
        document.getElementById('screen-text-center').textContent = ``;

        return;
    }
    const parts = ratioScreen.split(':');

    // Convert the parts to numbers and round them if needed
    const scrap = parseFloat(parts[0]);
    const part = parseFloat(parts[1]);

    let b;
    let c;
    if (ratioScreen == "4:3") {
        b = inputSize * (3 / 4);
        c = inputSize * (5 / 4);
    }
    if (ratioScreen == "16:9") {

        b = inputSize * (9 / 16);
        c = inputSize * (18.358 / 16);

    }
    if (ratioScreen == "16:10") {
        b = inputSize * (10 / 16);
        c = inputSize * (18.868 / 16);
    }

    // Example calculations (update as needed)
    const minDistance = inputSize * throwRatioMin;
    const maxDistance = inputSize * throwRatioMax;

    // Display the results (you can update the text of an element on the page)
    document.getElementById('distance-16-9').textContent = ` min: ${minDistance.toFixed(2)} m ถึง  max: ${maxDistance.toFixed(2)} m  Distance`;
    document.getElementById('screen-text-bottom').textContent = `${inputSize} m`;
    document.getElementById('screen-text-right').textContent = `${b.toFixed(2)} m`;
    document.getElementById('screen-text-center').textContent = `${c.toFixed(2)} m`;
}

function addToCart(event) {
    event.preventDefault(); // ป้องกันการรีเฟรชหน้าเมื่อคลิกปุ่ม

    var quantity = document.getElementById('quantity').value;
    if (quantity <= 0 || isNaN(quantity)) {
        alert('Please enter a valid quantity greater than 0.');
        return false;
    }

    // Logic to add item to cart with specified quantity
    alert('Added ' + quantity + ' item(s) to the cart.');

    // You can add code here to submit the form or redirect the user
    // For example: document.getElementById('add-to-cart-form').submit();
}

document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.custom-navbar');
    const stickyOffset = navbar.offsetTop;

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > stickyOffset) {
            navbar.classList.add('sticky-navbar');
        } else {
            navbar.classList.remove('sticky-navbar');
        }
    });
});