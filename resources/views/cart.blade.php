<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        :root {
            --primary-color: #3b82f6;
            --text-primary: #1f2937;
            --text-secondary: #64748b;
            --bg-primary: #ffffff;
            --bg-secondary: #f1f5f9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'SF Pro Display', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--bg-secondary);
            color: var(--text-primary);
            line-height: 1.5;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .cart-title {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .cart-empty {
            text-align: center;
            padding: 3rem;
            background: var(--bg-primary);
            border-radius: 12px;
            margin-bottom: 1rem;
        }

        .cart-table {
            width: 100%;
            background: var(--bg-primary);
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 1rem;
        }

        .cart-table th {
            background: var(--bg-secondary);
            padding: 1rem;
            text-align: left;
        }

        .cart-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--bg-secondary);
        }

        .product-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .product-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }

        .quantity-input {
            width: 60px;
            padding: 0.5rem;
            border: 1px solid var(--bg-secondary);
            border-radius: 4px;
            text-align: center;
        }

        .remove-btn {
            color: #ef4444;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
        }

        .cart-summary {
            background: var(--bg-primary);
            border-radius: 12px;
            padding: 1.5rem;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .summary-title {
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .checkout-btn {
            display: block;
            width: 100%;
            padding: 1rem;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            margin-top: 1rem;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: var(--bg-secondary);
            color: var(--text-primary);
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
        }

        .notification {
            position: fixed;
            top: 1rem;
            right: 1rem;
            padding: 1rem;
            border-radius: 8px;
            background: #10b981;
            color: white;
            z-index: 1000;
            display: none;
        }

        .error {
            background: #ef4444;
        }

        @media (max-width: 768px) {
            .cart-table {
                display: block;
                overflow-x: auto;
            }

            .product-info {
                min-width: 200px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="cart-header">
            <a href="{{ route('shop') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i>
                Continue Shopping
            </a>
            <h1 class="cart-title">Shopping Cart</h1>
        </div>

        <div id="notification" class="notification"></div>

        @if (count($cartItems) > 0)
            <div class="cart-table">
                <table style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $id => $details)
                            <tr data-id="{{ $id }}">
                                <td>
                                    <div class="product-info">
                                        <img src="{{ asset('storage/' . $details['image']) }}"
                                            alt="{{ $details['name'] }}" class="product-image">
                                        <span>{{ $details['name'] }}</span>
                                    </div>
                                </td>
                                <td>{{ $details['color'] }}</td>
                                <td>KES {{ number_format($details['price']) }}</td>
                                <td>
                                    <input type="number" value="{{ $details['quantity'] }}" class="quantity-input"
                                        min="1">
                                </td>
                                <td class="item-total">KES {{ number_format($details['price'] * $details['quantity']) }}
                                </td>
                                <td>
                                    <button class="remove-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="cart-summary">
                <h2 class="summary-title">Cart Summary</h2>
                <div class="summary-row">
                    <span>Subtotal</span>
                    <span class="cart-total">KES {{ number_format($total) }}</span>
                </div>
                <div class="summary-row">
                    <span>Shipping</span>
                    <span>Pay On Delivery</span>
                </div>
                <a href="{{ route('checkout.index') }}" class="checkout-btn">
                    Proceed to Checkout
                </a>
            </div>
        @else
            <div class="cart-empty">
                <h2>Your cart is empty</h2>
                <p>Looks like you haven't added any products to your cart yet.</p>
            </div>
        @endif
    </div>

    <script>
        $(document).ready(function() {
            function showNotification(message, isError = false) {
                const notification = $('#notification');
                notification.text(message);
                notification.toggleClass('error', isError);
                notification.fadeIn();

                setTimeout(() => {
                    notification.fadeOut();
                }, 3000);
            }

            // Update quantity
            $('.quantity-input').change(function(e) {
                e.preventDefault();
                var ele = $(this);
                var quantity = ele.val();
                var productId = ele.parents("tr").attr("data-id");

                $.ajax({
                    url: '{{ route('cart.update') }}',
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}',
                        product_id: productId,
                        quantity: quantity
                    },
                    success: function(response) {
                        ele.parents("tr").find(".item-total").text('KES ' + response.itemTotal);
                        $('.cart-total').text('KES ' + response.cartTotal);
                        showNotification(response.message);
                    }
                });
            });

            // Remove from cart
            $('.remove-btn').click(function(e) {
                e.preventDefault();
                var ele = $(this);
                var productId = ele.parents("tr").attr("data-id");

                if (confirm("Are you sure you want to remove this item?")) {
                    $.ajax({
                        url: '{{ route('cart.remove') }}',
                        method: "delete",
                        data: {
                            _token: '{{ csrf_token() }}',
                            product_id: productId
                        },
                        success: function(response) {
                            ele.parents("tr").remove();
                            $('.cart-total').text('KES ' + response.cartTotal);
                            showNotification(response.message);

                            if (response.cartCount === 0) {
                                location.reload();
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
