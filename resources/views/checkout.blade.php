<!doctype html>
<html lang="en" class="no-js">


<head>
    <title>Your Cart | Imuz Travel Bags - Affordable Travel Bags in Kenya</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="meta description">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <!-- all css -->
    <style>
        :root {
            --primary-color: #00234D;
            --secondary-color: #F76B6A;

            --btn-primary-border-radius: 0.25rem;
            --btn-primary-color: #fff;
            --btn-primary-background-color: #00234D;
            --btn-primary-border-color: #00234D;
            --btn-primary-hover-color: #fff;
            --btn-primary-background-hover-color: #00234D;
            --btn-primary-border-hover-color: #00234D;
            --btn-primary-font-weight: 500;

            --btn-secondary-border-radius: 0.25rem;
            --btn-secondary-color: #00234D;
            --btn-secondary-background-color: transparent;
            --btn-secondary-border-color: #00234D;
            --btn-secondary-hover-color: #fff;
            --btn-secondary-background-hover-color: #00234D;
            --btn-secondary-border-hover-color: #00234D;
            --btn-secondary-font-weight: 500;

            --heading-color: #000;
            --heading-font-family: 'Poppins', sans-serif;
            --heading-font-weight: 700;

            --title-color: #000;
            --title-font-family: 'Poppins', sans-serif;
            --title-font-weight: 400;

            --body-color: #000;
            --body-background-color: #fff;
            --body-font-family: 'Poppins', sans-serif;
            --body-font-size: 14px;
            --body-font-weight: 400;

            --section-heading-color: #000;
            --section-heading-font-family: 'Poppins', sans-serif;
            --section-heading-font-size: 48px;
            --section-heading-font-weight: 600;

            --section-subheading-color: #000;
            --section-subheading-font-family: 'Poppins', sans-serif;
            --section-subheading-font-size: 16px;
            --section-subheading-font-weight: 400;
        }
    </style>

    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="body-wrapper">
        @include('header')
        <!-- header end -->


        <!-- breadcrumb start -->
        <div class="breadcrumb">
            <div class="container">
                <ul class="list-unstyled d-flex align-items-center m-0">
                    <li><a href="https://spreethemesprevious.github.io/">Home</a></li>
                    <li>
                        <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path
                                    d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                    fill="#000" />
                            </g>
                        </svg>
                    </li>
                    <li>Cart</li>
                    <li>
                        <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path
                                    d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                    fill="#000" />
                            </g>
                        </svg>
                    </li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>

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
                line-height: 1.6;
            }

            .checkout-container {
                max-width: 1200px;
                margin: 2rem auto;
                padding: 0 1rem;
                display: grid;
                grid-template-columns: 1.2fr 0.8fr;
                gap: 2rem;
            }

            @media (max-width: 968px) {
                .checkout-container {
                    grid-template-columns: 1fr;
                }
            }

            .section-title {
                font-size: 1.5rem;
                color: #1e293b;
                margin-bottom: 1.5rem;
                padding-bottom: 0.5rem;
                border-bottom: 2px solid #e2e8f0;
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

            .checkout-form {
                background: white;
                padding: 2rem;
                border-radius: 1rem;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            }

            .form-group {
                margin-bottom: 1.5rem;
            }

            .form-group label {
                display: block;
                margin-bottom: 0.5rem;
                color: #475569;
                font-weight: 500;
            }

            .form-group input,
            .form-group textarea {
                width: 100%;
                padding: 0.75rem;
                border: 1px solid #e2e8f0;
                border-radius: 0.5rem;
                font-size: 1rem;
                transition: border-color 0.2s;
            }

            .form-group input:focus,
            .form-group textarea:focus {
                outline: none;
                border-color: #3b82f6;
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            }

            .order-summary {
                background: white;
                padding: 2rem;
                border-radius: 1rem;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                position: sticky;
                top: 2rem;
            }

            .order-items {
                list-style: none;
                margin-bottom: 1.5rem;
            }

            .order-item {
                display: flex;
                align-items: center;
                gap: 1rem;
                padding: 1rem 0;
                border-bottom: 1px solid #e2e8f0;
            }

            .order-item:last-child {
                border-bottom: none;
            }

            .order-item img {
                width: 60px;
                height: 60px;
                object-fit: cover;
                border-radius: 0.5rem;
            }

            .item-details {
                flex: 1;
            }

            .total {
                font-size: 1.25rem;
                color: #1e293b;
                font-weight: 600;
                margin-top: 1.5rem;
                padding-top: 1.5rem;
                border-top: 2px solid #e2e8f0;
            }

            .submit-button {
                width: 100%;
                padding: 1rem;
                background-color: #16a34a;
                color: white;
                border: none;
                border-radius: 0.5rem;
                font-size: 1.125rem;
                font-weight: 600;
                cursor: pointer;
                transition: background-color 0.2s;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 0.5rem;
            }

            .submit-button:hover {
                background-color: #15803d;
            }

            .trust-info {
                margin-top: 2rem;
                padding: 1.5rem;
                background-color: #f8fafc;
                border-radius: 0.5rem;
            }

            .trust-points {
                list-style: none;
                margin-top: 1rem;
            }

            .trust-point {
                display: flex;
                align-items: center;
                gap: 0.75rem;
                margin-bottom: 0.75rem;
                color: #64748b;
            }

            .trust-point i {
                color: #16a34a;
            }

            .delivery-note {
                margin-top: 1rem;
                padding: 1rem;
                background-color: #fffbeb;
                border-radius: 0.5rem;
                font-size: 0.875rem;
                color: #92400e;
            }
        </style>

        <!-- breadcrumb end -->
        <div class="checkout-container">
            <div class="checkout-main">
                <h1 class="section-title">Secure Checkout</h1>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="checkout-form">
                    <form action="{{ route('checkout.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" required placeholder="Enter your full name">
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" required placeholder="your@email.com">
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone" required placeholder="e.g., +254 XXX XXX XXX">
                        </div>

                        <div class="form-group">
                            <label>Delivery Address</label>
                            <textarea name="address" required rows="3" placeholder="Enter your complete delivery address"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Order Notes (Optional)</label>
                            <textarea name="note" rows="2" placeholder="Any special instructions for delivery"></textarea>
                        </div>

                        <div class="trust-info">
                            <h4>Why Shop with Imuz.co.ke?</h4>
                            <ul class="trust-points">
                                <li class="trust-point">
                                    <i class="fas fa-truck"></i>
                                    <span>Fast delivery within 24-48 hours</span>
                                </li>
                                <li class="trust-point">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>Convenient pay on delivery option</span>
                                </li>
                                <li class="trust-point">
                                    <i class="fas fa-exchange-alt"></i>
                                    <span>Easy returns within 7 days</span>
                                </li>
                                <li class="trust-point">
                                    <i class="fas fa-headset"></i>
                                    <span>24/7 customer support</span>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>

            <div class="order-summary">
                <h2 class="section-title">Order Summary</h2>
                <ul class="order-items">
                    @foreach ($cart as $item)
                        <li class="order-item">
                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                            <div class="item-details">
                                <h4>{{ $item['name'] }}</h4>
                                <p>Quantity: {{ $item['quantity'] }}</p>
                                <p>KES {{ number_format($item['price'], 2) }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="total">
                    <p>Total Amount: KES {{ number_format($total, 2) }}</p>
                </div>

                <div class="delivery-note">
                    <i class="fas fa-info-circle"></i>
                    Free delivery for orders above KES 5,000 within Nairobi
                </div>

                <button type="submit" class="submit-button">
                    <i class="fas fa-lock"></i>
                    Place Order Securely
                </button>
                </form>
            </div>
        </div>

        <!-- footer start -->
        @include('footer')
        <!-- footer end -->

        <!-- scrollup start -->
        <button id="scrollup">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="18 15 12 9 6 15"></polyline>
            </svg>
        </button>
        <!-- scrollup end -->


        <!-- all js -->
        <script src="assets/js/vendor.js"></script>
        <script src="assets/js/main.js"></script>
    </div>
</body>


</html>
