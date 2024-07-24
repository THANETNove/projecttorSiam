<!DOCTYPE html>
<html>

<head>
    <title>projecttorSiam</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #333;
        }

        p {
            margin: 0 0 10px;
        }

        .item-list {
            margin: 20px 0;
            padding: 0;
            list-style-type: none;
        }

        .item-list li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .total-price {
            font-weight: bold;
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="https://img5.pic.in.th/file/secure-sv1/logo-gray.jpg" alt="logo gray" width="300px" border="0">
        <br>
        <h2>รายการการซื้อ</h2>
        <ul class="item-list">
            @foreach (json_decode($shoppingList->itemCart, true) as $item)
                <li>{{ $item['name'] }} - {{ number_format($item['totalPrice'], 2) }}</li>
            @endforeach
        </ul>
        <p class="total-price"><strong>Total Price:</strong> {{ number_format($shoppingList->totalPrice, 2) }}</p>
        <br>
        <hr>
        <h1>Address details</h1>
        <p><strong>First Name:</strong> {{ $shoppingList->fname }}</p>
        <p><strong>Last Name:</strong> {{ $shoppingList->lname }}</p>
        <p><strong>Email:</strong> {{ $shoppingList->email }}</p>
        <p><strong>Phone:</strong> {{ $shoppingList->phone }}</p>
        <p><strong>Fax:</strong> {{ $shoppingList->fax }}</p>
        <p><strong>Company:</strong> {{ $shoppingList->company }}</p>
        <p><strong>Address 1:</strong> {{ $shoppingList->address_1 }}</p>
        <p><strong>Address 2:</strong> {{ $shoppingList->address_2 }}</p>
        <p><strong>State/City:</strong> {{ $shoppingList->state_city }}</p>
        <p><strong>Postal/Zip Code:</strong> {{ $shoppingList->postal_zip }}</p>
        <p><strong>Country:</strong> {{ $shoppingList->country }}</p>
        <p><strong>Region:</strong> {{ $shoppingList->region }}</p>
    </div>
</body>

</html>
