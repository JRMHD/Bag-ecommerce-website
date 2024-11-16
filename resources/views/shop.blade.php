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
    <meta property="og:url" content="https://www.imuztravelbags.co.ke/shop"> <!-- Replace with your shop page URL -->
    <meta property="og:type" content="website">

    <!-- Twitter Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Shop Travel Bags | Imuz Travel Bags - Affordable & Quality in Kenya">
    <meta name="twitter:description"
        content="Shop a wide variety of travel bags at great prices. Enjoy pay-on-delivery and delivery across Kenya with Imuz Travel Bags.">
    <meta name="twitter:image" content="assets/img/social-share-image.jpg">
    <!-- Replace with a specific shop-related image -->

    <!-- SEO Scripts -->
    <link rel="canonical" href="https://www.imuztravelbags.co.ke/shop"> <!-- Update with your shop page URL -->


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

        <section style="background-color: #f8fafc; padding: 48px 16px;">
            <div style="max-width: 1280px; margin: 0 auto;">
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; padding: 0 16px;">
                    @foreach ($products as $product)
                        <div
                            style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06); transition: all 0.3s ease; position: relative;">
                            <!-- Image Container -->
                            @if ($product->images)
                                <div style="position: relative; width: 100%; padding-top: 100%;">
                                    <img src="{{ asset('storage/' . json_decode($product->images)[0]) }}"
                                        alt="{{ $product->name }}"
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                                    @if ($product->slashed_price)
                                        <div
                                            style="position: absolute; top: 16px; right: 16px; background-color: #FF6B35; color: white; padding: 6px 12px; border-radius: 20px; font-size: 14px; font-weight: 600;">
                                            SALE
                                        </div>
                                    @endif
                                </div>
                            @endif

                            <!-- Content Container -->
                            <div style="padding: 20px;">
                                <!-- Title -->
                                <h2
                                    style="font-size: 18px; font-weight: 600; color: #1a1a1a; margin: 0 0 12px 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    {{ $product->name }}
                                </h2>

                                <!-- Rating -->
                                <div style="display: flex; align-items: center; margin-bottom: 12px;">
                                    <div style="display: flex; gap: 2px;">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <svg style="width: 16px; height: 16px; fill: #FF6B35;" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        @endfor
                                        <span style="margin-left: 4px; font-size: 14px; color: #666;">4.8</span>
                                    </div>
                                </div>

                                <!-- Price -->
                                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                                    <span style="font-size: 24px; font-weight: 700; color: #2B4FFE;">KES
                                        {{ $product->price }}</span>
                                    @if ($product->slashed_price)
                                        <span
                                            style="font-size: 16px; color: #666; text-decoration: line-through;">KES{{ $product->slashed_price }}</span>
                                    @endif
                                </div>

                                <!-- Color -->
                                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                                    <span style="font-size: 14px; color: #666;">Color:</span>
                                    <span
                                        style="padding: 4px 12px; background-color: #f1f5f9; border-radius: 20px; font-size: 14px; color: #1a1a1a;">
                                        {{ $product->color }}
                                    </span>
                                </div>

                                <!-- Description -->
                                <p
                                    style="font-size: 14px; color: #666; margin: 0 0 16px 0; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; line-height: 1.5;">
                                    {{ $product->description }}
                                </p>

                                <!-- Button -->
                                <a href="{{ route('product.show', $product->id) }}"
                                    style="display: block; width: 100%; padding: 12px 0; background-color: #2B4FFE; color: white; text-align: center; border-radius: 8px; text-decoration: none; font-weight: 500; font-size: 16px; transition: background-color 0.3s ease; box-shadow: 0 2px 4px rgba(43, 79, 254, 0.2);"
                                    onmouseover="this.style.backgroundColor='#2342E6'"
                                    onmouseout="this.style.backgroundColor='#2B4FFE'">
                                    View Details
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


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
