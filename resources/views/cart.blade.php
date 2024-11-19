<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --royal-blue: #4169E1;
            --light-orange: #FFB74D;
            --white: #ffffff;
            --gray-100: #f8f9fa;
            --gray-200: #e9ecef;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: var(--gray-100);
        }

        .cart {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1.5rem;
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .cart h1 {
            color: var(--royal-blue);
            font-size: 2.5rem;
            font-weight: 600;
        }

        .continue-shopping {
            background-color: var(--white);
            color: var(--royal-blue);
            padding: 0.75rem 1.5rem;
            border: 2px solid var(--royal-blue);
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
        }

        .continue-shopping:hover {
            background-color: var(--royal-blue);
            color: var(--white);
            transform: translateY(-1px);
        }

        .alert {
            background-color: #4CAF50;
            color: white;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }

        .cart-items {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .cart-item {
            background: var(--white);
            border-radius: 12px;
            padding: 1.5rem;
            display: flex;
            gap: 2rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .cart-item-image {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-details h4 {
            color: #2c3e50;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .cart-item-details p {
            color: #64748b;
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }

        form {
            display: inline-flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        input[type="number"] {
            width: 80px;
            padding: 0.5rem;
            border: 1px solid var(--gray-200);
            border-radius: 6px;
            font-size: 0.875rem;
        }

        button {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        button[type="submit"] {
            background-color: var(--royal-blue);
            color: var(--white);
        }

        button[type="submit"]:hover {
            background-color: #3451b2;
        }

        form:last-child button {
            background-color: #ef4444;
            color: var(--white);
        }

        form:last-child button:hover {
            background-color: #dc2626;
        }

        .cart-total {
            background: var(--white);
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-total h3 {
            color: #2c3e50;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .btn-checkout {
            background-color: var(--light-orange);
            color: #2c3e50;
            padding: 1rem 2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-checkout:hover {
            background-color: #FFA726;
            transform: translateY(-1px);
        }

        @media (max-width: 768px) {
            .cart-header {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }

            .cart-item {
                flex-direction: column;
            }

            .cart-item-image {
                width: 100%;
                height: 200px;
            }

            .cart-total {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="cart">
        <div class="cart-header">
            <h1>Your Cart</h1>
            <a href="{{ route('shop') }}" class="continue-shopping">
                <i class="fas fa-arrow-left"></i>
                Continue Shopping
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="cart-items">
            @foreach ($cart as $productId => $item)
                <div class="cart-item">
                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="cart-item-image">
                    <div class="cart-item-details">
                        <h4>{{ $item['name'] }}</h4>
                        <p>Price: KES {{ number_format($item['price'], 2) }}</p>
                        <p>Quantity: {{ $item['quantity'] }}</p>

                        <form action="{{ route('update.cart', $productId) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1">
                            <button type="submit">Update</button>
                        </form>

                        <form action="{{ route('remove.from.cart', $productId) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Remove</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="cart-total">
            <h3>Total: KES {{ number_format($total, 2) }}</h3>
            <a href="{{ route('checkout') }}" class="btn-checkout">
                <i class="fas fa-lock"></i>
                Proceed to Checkout
            </a>
        </div>

    </div>
</body>

</html>
