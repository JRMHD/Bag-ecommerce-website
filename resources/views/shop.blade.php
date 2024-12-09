<!doctype html>
<html lang="en" class="no-js">


<head>
    <title>Shop Travel Bags | Imuz Travel Bags - Affordable & Quality in Kenya</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Browse a wide range of high-quality travel bags at Imuz Travel Bags. Affordable prices, pay on delivery, and countrywide delivery across Kenya.">
    <meta name="keywords"
        content="Travel Bags Shop Kenya, Buy Travel Bags Online, Affordable Travel Bags Nairobi, Quality Travel Bags Kenya, Travel Luggage Nairobi">
    <meta name="author" content="Imuz Travel Bags">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Open Graph / Social Media Meta -->
    <meta property="og:title" content="Shop Travel Bags | Imuz Travel Bags - Affordable & Quality in Kenya">
    <meta property="og:description"
        content="Explore premium travel bags at affordable prices. Enjoy pay-on-delivery and countrywide shipping with Imuz Travel Bags.">
    <meta property="og:image" content="assets/img/social-share-image.jpg">
    <!-- Replace with a specific shop-related image -->
    <meta property="og:url" content="https://www.imuz.co.ke/shop"> <!-- Replace with your shop page URL -->
    <meta property="og:type" content="website">

    <!-- Twitter Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Shop Travel Bags | Imuz Travel Bags - Affordable & Quality in Kenya">
    <meta name="twitter:description"
        content="Shop a wide variety of travel bags at great prices. Enjoy pay-on-delivery and delivery across Kenya with Imuz Travel Bags.">
    <meta name="twitter:image" content="assets/img/social-share-image.jpg">
    <!-- Replace with a specific shop-related image -->

    <!-- SEO Scripts -->
    <link rel="canonical" href="https://www.imuz.co.ke/shop"> <!-- Update with your shop page URL -->


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
                    <li><a href="/">Home</a></li>
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
                    <li>Products</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <section
            style="
    font-family: 'Poppins', sans-serif; 
    background-color: #f0f2f5; 
    padding: 2rem 1rem;
    width: 100%;
">
            <div
                style="
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
        max-width: 1600px;
        margin: 0 auto;
        width: 100%;
    ">
                @foreach ($products as $product)
                    <div style="
                background: linear-gradient(145deg, #ffffff, #f0f0f0);
                border-radius: 20px;
                box-shadow: 
                    -10px -10px 30px rgba(255,255,255,0.8), 
                    10px 10px 30px rgba(0,0,0,0.1);
                overflow: hidden;
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            "
                        class="product-card">
                        <a href="{{ route('products.show', $product->id) }}"
                            style="
                    text-decoration: none; 
                    color: inherit;
                    display: block;
                ">
                            <div
                                style="
                        height: 350px; 
                        position: relative;
                        overflow: hidden;
                    ">
                                <img src="{{ asset('storage/' . $product->images->first()->image_path) }}"
                                    alt="{{ $product->name }}"
                                    style="
                                width: 100%; 
                                height: 100%; 
                                object-fit: cover;
                                transition: transform 0.5s ease;
                            ">
                                <div
                                    style="
                            position: absolute;
                            top: 15px;
                            right: 15px;
                            background-color: rgba(0,0,0,0.6);
                            color: white;
                            padding: 5px 10px;
                            border-radius: 20px;
                            font-size: 0.8rem;
                        ">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <span style="color: #FFD700; text-shadow: 0 0 5px rgba(255,215,0,0.5);">★</span>
                                    @endfor
                                </div>
                            </div>

                            <div
                                style="
                        padding: 1.5rem;
                        background: white;
                        position: relative;
                        z-index: 10;
                    ">
                                <h3
                                    style="
                            font-size: 1.3rem; 
                            font-weight: 700; 
                            color: #1a1a2e;
                            margin-bottom: 0.5rem;
                            letter-spacing: -0.5px;
                        ">
                                    {{ $product->name }}
                                </h3>

                                <p
                                    style="
                            color: #6c757d;
                            font-size: 0.85rem;
                            line-height: 1.5;
                            margin-bottom: 1rem;
                            display: -webkit-box;
                            -webkit-line-clamp: 2;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            height: 3rem;
                        ">
                                    {{ $product->description }}
                                </p>

                                <div
                                    style="
                            display: flex; 
                            justify-content: space-between;
                            align-items: center;
                            margin-top: 0.5rem;
                        ">
                                    <div
                                        style="
                                font-size: 1.5rem;
                                font-weight: 700;
                                color: #4a4a4a;
                            ">
                                        @if ($product->slashed_price)
                                            <span
                                                style="
                                        text-decoration: line-through; 
                                        color: #b0b0b0; 
                                        font-size: 1rem;
                                        margin-right: 0.5rem;
                                    ">
                                                KES {{ number_format($product->slashed_price, 2) }}
                                            </span>
                                        @endif
                                        <span style="color: #007bff;">
                                            KES {{ number_format($product->price, 2) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

            @media (max-width: 768px) {
                section>div {
                    grid-template-columns: 1fr !important;
                    gap: 1rem !important;
                }

                .product-card {
                    max-width: 100%;
                }

                .product-card div[style*="height: 350px"] {
                    height: 250px !important;
                }

                .product-card h3 {
                    font-size: 1.1rem !important;
                }

                .product-card p {
                    font-size: 0.8rem !important;
                    height: 2.5rem !important;
                }

                .product-card div[style*="font-size: 1.5rem"] {
                    font-size: 1.2rem !important;
                }
            }

            @media (min-width: 769px) {
                section>div {
                    grid-template-columns: repeat(3, 1fr) !important;
                }
            }
        </style>

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
