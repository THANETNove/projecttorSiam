<!DOCTYPE html>
<html>

<head>
    <title>Your Shopping List</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #ef742d;
            border-bottom: 2px solid #ef742d;
            padding-bottom: 10px;
        }

        h2 {
            border-top: 2px solid #ef742d;
            padding-top: 20px;
            font-size: 20px;
            margin-top: 30px;

        }

        .details,
        .total-price,
        .back-button {
            margin-bottom: 20px;
        }

        .details p,
        .total-price p {
            margin: 5px 0;
        }

        .details p strong {
            display: inline-block;
            width: 150px;
        }

        .item-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .item-list li {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        .item-list li:last-child {
            border-bottom: none;
        }

        .item-list img {
            max-width: 60px;
            margin-right: 20px;
            border-radius: 5px;
        }

        .total-price p {
            font-weight: bold;
            font-size: 1.4em;
            color: #ef742d;
        }

        .back-button a {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #ef742d;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-button a:hover {
            background-color: #d8651c;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="https://img2.pic.in.th/pic/1631eabd5439d1a19.jpg" alt="1" border="0">
        <br>
        <h1>Address details</h1>
        <div class="details">
            <p><strong>First Name:</strong> {{ $data->fname }}</p>
            <p><strong>Last Name:</strong> {{ $data->lname }}</p>
            <p><strong>Email:</strong> {{ $data->email }}</p>
            <p><strong>Phone:</strong> {{ $data->phone }}</p>
            <p><strong>Fax:</strong> {{ $data->fax }}</p>
            <p><strong>Company:</strong> {{ $data->company }}</p>
            <p><strong>Address 1:</strong> {{ $data->address_1 }}</p>
            <p><strong>Address 2:</strong> {{ $data->address_2 }}</p>
            <p><strong>State/City:</strong> {{ $data->state_city }}</p>
            <p><strong>Postal/Zip Code:</strong> {{ $data->postal_zip }}</p>
            <p><strong>Country:</strong> {{ $data->country }}</p>
            <p><strong>Region:</strong> {{ $data->region }}</p>
        </div>

        <h2>รายการการซื้อ</h2>
        <ul class="item-list">
            @foreach (json_decode($data->itemCart, true) as $item)
                <li>
                    <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}">
                    <div>
                        <p>{{ $item['name'] }}</p>
                        <p>{{ number_format($item['totalPrice'], 2) }}</p>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="total-price">
            <p><strong>Total Price:</strong> {{ number_format($data->totalPrice, 2) }}</p>
        </div>

        <div class="back-button">
            <a href="{{ url('/') }}">Go Back</a>
        </div>


    </div>
    <script>
        sessionStorage.removeItem('cart');
    </script>
</body>

</html>
