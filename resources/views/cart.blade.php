<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart - Imuz.co.ke</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            background-color: #f8fafc;
            color: #334155;
        }

        .cart {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .cart-header h1 {
            font-size: 1.875rem;
            color: #1e293b;
        }

        .continue-shopping {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #3b82f6;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .continue-shopping:hover {
            color: #2563eb;
        }

        .alert {
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .alert-success {
            background-color: #dcfce7;
            color: #166534;
            border: 1px solid #86efac;
        }

        .cart-items {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .cart-item {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 1.5rem;
            padding: 1.5rem;
            border-bottom: 1px solid #e2e8f0;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item-image {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 0.5rem;
        }

        .cart-item-details {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .cart-item-details h4 {
            font-size: 1.125rem;
            color: #1e293b;
        }

        .cart-item-details p {
            color: #64748b;
        }

        .quantity-controls {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        input[type="number"] {
            width: 80px;
            padding: 0.5rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.375rem;
        }

        button {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.375rem;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s;
        }

        button[type="submit"] {
            background-color: #3b82f6;
            color: white;
        }

        button[type="submit"]:hover {
            background-color: #2563eb;
        }

        .remove-button {
            background-color: #ef4444;
            color: white;
        }

        .remove-button:hover {
            background-color: #dc2626;
        }

        .cart-total {
            margin-top: 2rem;
            padding: 2rem;
            background: white;
            border-radius: 1rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .cart-summary {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .btn-checkout {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            background-color: #16a34a;
            color: white;
            padding: 1rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.2s;
        }

        .btn-checkout:hover {
            background-color: #15803d;
        }

        .trust-signals {
            margin-top: 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .trust-signal {
            padding: 1.5rem;
            background: white;
            border-radius: 0.5rem;
            text-align: center;
        }

        .trust-signal i {
            font-size: 2rem;
            color: #3b82f6;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .cart-item {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .cart-item-image {
                margin: 0 auto;
            }

            .quantity-controls {
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <div class="cart">
        <div class="cart-header">
            <h1>Your Shopping Cart</h1>
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
                        <p class="price">KES {{ number_format($item['price'], 2) }}</p>
                        <div class="quantity-controls">
                            <form action="{{ route('update.cart', $productId) }}" method="POST" class="update-form">
                                @csrf
                                @method('PUT')
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1">
                                <button type="submit">Update</button>
                            </form>
                            <form action="{{ route('remove.from.cart', $productId) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="remove-button">
                                    <i class="fas fa-trash"></i> Remove
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="cart-total">
            <div class="cart-summary">
                <h3>Order Summary</h3>
                <h3>Total: KES {{ number_format($total, 2) }}</h3>
            </div>
            <a href="{{ route('checkout') }}" class="btn-checkout">
                <i class="fas fa-lock"></i>
                Proceed to Secure Checkout
            </a>
        </div>

        <div class="trust-signals">
            <div class="trust-signal">
                <i class="fas fa-truck"></i>
                <h4>Fast Delivery</h4>
                <p>Quick delivery across Kenya</p>
            </div>
            <div class="trust-signal">
                <i class="fas fa-money-bill-wave"></i>
                <h4>Pay on Delivery</h4>
                <p>Cash on delivery available</p>
            </div>
            <div class="trust-signal">
                <i class="fas fa-headset"></i>
                <h4>24/7 Support</h4>
                <p>Call us: +254 769839595</p>
            </div>
            <div class="trust-signal">
                <i class="fas fa-shield-alt"></i>
                <h4>Secure Shopping</h4>
                <p>100% secure payment</p>
            </div>
        </div>
    </div>
</body>

</html>
