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



function cartShow(cart) {
    const cartItemsContainer = document.getElementById('cart-items');
    cartItemsContainer.innerHTML = '';
    console.log("cart", cart);
    cart.forEach((item, index) => {
        // สร้าง div สำหรับแต่ละรายการ
        const itemDiv = document.createElement('div');
        itemDiv.className = 'cart-item';

        // สร้างเนื้อหาสำหรับรายการ
        itemDiv.innerHTML = `
            <span>   <img src="${item.img}" alt="${item.name}" style="width: 70px; height: auto;"> <br>${item.name}  <br> $${Number(item.price).toLocaleString()} x ${item.quantity} = ${Number(item.totalPrice).toLocaleString()} <br> ${item.brand} :: ${item.ratio_screen}</span>
            <span class="remove-btn" data-index="${index}">Remove</span>
        `;

        // เพิ่มรายการเข้าไปใน container
        cartItemsContainer.appendChild(itemDiv);
    });

    const buyNowBtn = document.createElement('a');
    buyNowBtn.href = '/buy-now'; // เปลี่ยน URL เป็นหน้าชำระเงินของคุณ
    buyNowBtn.className = 'buy-now-btn';
    buyNowBtn.textContent = 'Buy Now';

    // เพิ่มปุ่ม Buy Now เข้าไปใน container
    cartItemsContainer.appendChild(buyNowBtn);

    // เพิ่ม event listener สำหรับปุ่มลบ
    cartItemsContainer.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-btn')) {
            const index = event.target.dataset.index;
            cart.splice(index, 1); // ลบรายการออกจาก array
            sessionStorage.setItem('cart', JSON.stringify(cart)); // อัปเดต sessionStorage

            // รีเฟรชรายการที่แสดง
            cartItemsContainer.innerHTML = '';
            cart.forEach((item, index) => {
                const itemDiv = document.createElement('div');
                itemDiv.className = 'cart-item';
                itemDiv.innerHTML = `
                 
                <span>   <img src="${item.img}" alt="${item.name}" style="width: 70px; height: auto;"> <br>${item.name}  <br> $${Number(item.price).toLocaleString()} x ${item.quantity} = ${Number(item.totalPrice).toLocaleString()} <br> ${item.brand} :: ${item.ratio_screen}</span>
                    <span class="remove-btn" data-index="${index}">Remove</span>
                `;
                cartItemsContainer.appendChild(itemDiv);
            });
        }
        if (cart.length > 0) {
            document.getElementById('number-item').textContent = `${cart.length}`;
            document.getElementById('number-item').classList.add('number-item');

        } else {
            document.getElementById('number-item').textContent = ``;
            document.getElementById('number-item').classList.remove('number-item');

        }
    });

    if (cart.length > 0) {
        document.getElementById('number-item').textContent = `${cart.length}`;
        document.getElementById('number-item').classList.add('number-item');
    } else {
        document.getElementById('number-item').textContent = ``;
        document.getElementById('number-item').classList.remove('number-item');

    }

}

function addToCart(event, evName) {
    event.preventDefault(); // ป้องกันการรีเฟรชหน้าเมื่อคลิกปุ่ม



    var quantity = document.getElementById('quantity').value;
    if (quantity <= 0 || isNaN(quantity)) {
        alert('Please enter a valid quantity greater than 0.');
        return false;
    } else {

        const savedCart = sessionStorage.getItem('cart');
        const cart = savedCart ? JSON.parse(savedCart) : [];
        var name = document.getElementById('cart-product-name').value;
        var price = document.getElementById('cart-price').value;
        var brand = document.getElementById('cart-brand').value;
        var img = document.getElementById('cart-img').value;
        var ratio_screen = document.getElementById('cart-ratio_screen').value;


        let totalPrice = Number(quantity) * Number(price);
        var quantity = Number(quantity); // แปลงเป็นตัวเลข

        // let array = [name, price, brand, ratio_screen, quantity, totalPrice]


        const existingItemIndex = cart.findIndex(item => item.name === name);

        if (existingItemIndex !== -1) {
            // ถ้าพบรายการที่มีชื่อเดียวกัน, เพิ่มจำนวนสินค้า
            cart[existingItemIndex].quantity += Number(quantity);
            cart[existingItemIndex].totalPrice += totalPrice;
        } else {
            // ถ้าไม่พบรายการที่มีชื่อเดียวกัน, เพิ่มรายการใหม่
            cart.push({ img, name, price, brand, ratio_screen, quantity, totalPrice });
        }

        sessionStorage.setItem('cart', JSON.stringify(cart));

        if (cart.length > 0) {
            document.getElementById('number-item').textContent = `${cart.length}`;
            cartShow(cart);
        } else {
            document.getElementById('number-item').textContent = ``;
        }
        if (evName == 'buy') {
            window.location.href = '/buy-now';



        }

    }


    // You can add code here to submit the form or redirect the user
    // For example: document.getElementById('add-to-cart-form').submit();
}

document.addEventListener('DOMContentLoaded', function () {
    const savedCart = sessionStorage.getItem('cart');
    const cart = savedCart ? JSON.parse(savedCart) : [];
    document.getElementById('number-item').textContent = ``;
    document.getElementById('number-item').classList.remove('number-item');



    if (cart.length > 0) {


        cartShow(cart);


    }
});






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


document.addEventListener('DOMContentLoaded', function () {
    const savedCart = sessionStorage.getItem('cart');
    const cart = savedCart ? JSON.parse(savedCart) : [];

    const cartItemsContainer = document.getElementById('cartItemsContainer');
    let totalAmount = 0;

    function renderCart() {
        cartItemsContainer.innerHTML = '';
        totalAmount = 0;

        cart.forEach((item, index) => {
            const itemDiv = document.createElement('div');
            itemDiv.className = 'buyItemAll-cart-item';

            itemDiv.innerHTML = `
            <div class="buyItemAll-item-details">
        <div>
        <img src="${item.img}" alt="${item.name}" class="buyItemAll-item-image" />
        <span class="buyItemAll-item-name">${item.name}</span>
        <span class="buyItemAll-item-brand">${item.brand}</span>
        <span class="buyItemAll-item-ratio">${item.ratio_screen}</span>
        </div>
            <div class="">
            <span class="buyItemAll-item-price">$${Number(item.price).toLocaleString()}</span>
                ${item.quantity > 1 ? `<button class="buyItemAll-decrement-btn" data-index="${index}">-</button>` : ''}
                <span class="buyItemAll-item-quantity"> x ${item.quantity}</span>
                <button class="buyItemAll-increment-btn" data-index="${index}">+</button>
                <span class="buyItemAll-item-total">= $${Number(item.totalPrice).toLocaleString()}</span>
                <button class="buyItemAll-remove-btn" data-index="${index}">Remove</button>
            </div>
        </div>
      
 
   
            `;

            cartItemsContainer.appendChild(itemDiv);
            totalAmount += item.totalPrice;
        });

        document.querySelectorAll('.buyItemAll-total-price').forEach(element => {
            element.innerText = `$${Number(totalAmount).toLocaleString()}`;
        });
        document.querySelectorAll('.buyItemAll-remove-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const index = e.target.dataset.index;
                cart.splice(index, 1);
                renderCart();
            });
        });

        document.querySelectorAll('.buyItemAll-decrement-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const index = e.target.dataset.index;
                if (cart[index].quantity > 1) {
                    cart[index].quantity--;
                    cart[index].totalPrice = cart[index].quantity * cart[index].price;
                    renderCart();
                }
            });
        });

        document.querySelectorAll('.buyItemAll-increment-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const index = e.target.dataset.index;
                cart[index].quantity++;
                cart[index].totalPrice = cart[index].quantity * cart[index].price;
                renderCart();
            });
        });
    }

    renderCart();

    document.getElementById('totalPrice').innerText = `$${Number(totalAmount).toLocaleString()}`;
    // สร้างปุ่ม Buy Now
    const buyNowBtn = document.createElement('button');
    buyNowBtn.className = 'now-btn';
    buyNowBtn.textContent = 'Buy Now';
    buyNowBtn.addEventListener('click', function () {
        axios.post('/buy-now', { cart: cart }, {
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
            .then(function (response) {
                console.log('Success:', response.data);
                window.location.href = '/buy-now'; // เปลี่ยน URL เป็นหน้าชำระเงินของคุณ
            })
            .catch(function (error) {
                console.error('Error:', error);
            });
    });

    // เพิ่มปุ่ม Buy Now เข้าไปใน container
    document.getElementById('buy-now-item').appendChild(buyNowBtn);
});

