<!doctype html>
<html lang="en" class="no-js">


<head>
    <title>Bisum - eCommerce Bootstrap 5 Template</title>
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
                    <li>Bag</li>
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
                    <li>Accesories Lather Bag</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <main id="MainContent" class="content-for-layout">
            <div class="product-page mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="product-gallery product-gallery-vertical d-flex">
                                <div class="product-img-large">
                                    <div class="img-large-slider common-slider"
                                        data-slick='{
                                        "slidesToShow": 1, 
                                        "slidesToScroll": 1,
                                        "dots": false,
                                        "arrows": false,
                                        "asNavFor": ".img-thumb-slider"
                                    }'>
                                        <div class="img-large-wrapper">
                                            <a href="assets/img/products/bags/39.jpg" data-fancybox="gallery">
                                                <img src="assets/img/products/bags/39.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="img-large-wrapper">
                                            <a href="assets/img/products/bags/38.jpg" data-fancybox="gallery">
                                                <img src="assets/img/products/bags/38.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="img-large-wrapper">
                                            <a href="assets/img/products/bags/37.jpg" data-fancybox="gallery">
                                                <img src="assets/img/products/bags/37.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="img-large-wrapper">
                                            <a href="assets/img/products/bags/36.jpg" data-fancybox="gallery">
                                                <img src="assets/img/products/bags/36.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="img-large-wrapper">
                                            <a href="assets/img/products/bags/34.jpg" data-fancybox="gallery">
                                                <img src="assets/img/products/bags/34.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="img-large-wrapper">
                                            <a href="assets/img/products/bags/30.jpg" data-fancybox="gallery">
                                                <img src="assets/img/products/bags/30.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="img-large-wrapper">
                                            <a href="assets/img/products/bags/32.jpg" data-fancybox="gallery">
                                                <img src="assets/img/products/bags/32.jpg" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-img-thumb">
                                    <div class="img-thumb-slider common-slider" data-vertical-slider="true"
                                        data-slick='{
                                        "slidesToShow": 5, 
                                        "slidesToScroll": 1,
                                        "dots": false,
                                        "arrows": true,
                                        "infinite": false,
                                        "speed": 300,
                                        "cssEase": "ease",
                                        "focusOnSelect": true,
                                        "swipeToSlide": true,
                                        "asNavFor": ".img-large-slider"
                                    }'>
                                        <div>
                                            <div class="img-thumb-wrapper">
                                                <img src="assets/img/products/bags/39.jpg" alt="img">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="img-thumb-wrapper">
                                                <img src="assets/img/products/bags/38.jpg" alt="img">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="img-thumb-wrapper">
                                                <img src="assets/img/products/bags/37.jpg" alt="img">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="img-thumb-wrapper">
                                                <img src="assets/img/products/bags/36.jpg" alt="img">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="img-thumb-wrapper">
                                                <img src="assets/img/products/bags/34.jpg" alt="img">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="img-thumb-wrapper">
                                                <img src="assets/img/products/bags/30.jpg" alt="img">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="img-thumb-wrapper">
                                                <img src="assets/img/products/bags/32.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="activate-arrows show-arrows-always arrows-white d-none d-lg-flex justify-content-between mt-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="product-details ps-lg-4">
                                <div class="mb-3"><span class="product-availability">In Stock</span></div>
                                <h2 class="product-title mb-3">Accesories Lather bag</h2>
                                <div class="product-rating d-flex align-items-center mb-3">
                                    <span class="star-rating">
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.168 5.77344L10.082 5.23633L8 0.566406L5.91797 5.23633L0.832031 5.77344L4.63086 9.19727L3.57031 14.1992L8 11.6445L12.4297 14.1992L11.3691 9.19727L15.168 5.77344Z"
                                                fill="#FFAE00" />
                                        </svg>
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.168 5.77344L10.082 5.23633L8 0.566406L5.91797 5.23633L0.832031 5.77344L4.63086 9.19727L3.57031 14.1992L8 11.6445L12.4297 14.1992L11.3691 9.19727L15.168 5.77344Z"
                                                fill="#FFAE00" />
                                        </svg>
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.168 5.77344L10.082 5.23633L8 0.566406L5.91797 5.23633L0.832031 5.77344L4.63086 9.19727L3.57031 14.1992L8 11.6445L12.4297 14.1992L11.3691 9.19727L15.168 5.77344Z"
                                                fill="#FFAE00" />
                                        </svg>
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.168 5.77344L10.082 5.23633L8 0.566406L5.91797 5.23633L0.832031 5.77344L4.63086 9.19727L3.57031 14.1992L8 11.6445L12.4297 14.1992L11.3691 9.19727L15.168 5.77344Z"
                                                fill="#FFAE00" />
                                        </svg>
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.168 5.77344L10.082 5.23633L8 0.566406L5.91797 5.23633L0.832031 5.77344L4.63086 9.19727L3.57031 14.1992L8 11.6445L12.4297 14.1992L11.3691 9.19727L15.168 5.77344Z"
                                                fill="#B2B2B2" />
                                        </svg>
                                    </span>
                                    <span class="rating-count ms-2">(22)</span>
                                </div>
                                <div class="product-price-wrapper mb-4">
                                    <span class="product-price regular-price">$24.00</span>
                                    <del class="product-price compare-price ms-2">$32.00</del>
                                </div>
                                <div class="product-sku product-meta mb-1">
                                    <strong class="label">SKU:</strong> 401
                                </div>
                                <div class="product-vendor product-meta mb-3">
                                    <strong class="label">Vendor:</strong> leather
                                </div>

                                <div class="product-variant-wrapper">
                                    <div class="product-variant product-variant-color">
                                        <strong class="label mb-1 d-block">Color:</strong>

                                        <ul class="variant-list list-unstyled d-flex align-items-center flex-wrap">
                                            <li class="variant-item">
                                                <input type="radio" value="cyan" checked>
                                                <label class="variant-label swatch-cyan"></label>
                                            </li>
                                            <li class="variant-item">
                                                <input type="radio" value="black">
                                                <label class="variant-label swatch-black"></label>
                                            </li>
                                            <li class="variant-item">
                                                <input type="radio" value="purple">
                                                <label class="variant-label swatch-purple"></label>
                                            </li>
                                            <li class="variant-item">
                                                <input type="radio" value="blue">
                                                <label class="variant-label swatch-blue"></label>
                                            </li>
                                            <li class="variant-item">
                                                <input type="radio" value="orange">
                                                <label class="variant-label swatch-orange"></label>
                                            </li>
                                            <li class="variant-item">
                                                <input type="radio" value="teal">
                                                <label class="variant-label swatch-teal"></label>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="product-variant product-variant-other">
                                        <strong class="label mb-1 d-block">Size:</strong>

                                        <ul class="variant-list list-unstyled d-flex align-items-center flex-wrap">
                                            <li class="variant-item">
                                                <input type="radio" value="34" checked>
                                                <label class="variant-label">34</label>
                                            </li>
                                            <li class="variant-item">
                                                <input type="radio" value="36">
                                                <label class="variant-label">36</label>
                                            </li>
                                            <li class="variant-item">
                                                <input type="radio" value="38">
                                                <label class="variant-label">38</label>
                                            </li>
                                            <li class="variant-item">
                                                <input type="radio" value="40">
                                                <label class="variant-label">40</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="misc d-flex align-items-end justify-content-between mt-4">
                                    <div class="quantity d-flex align-items-center justify-content-between">
                                        <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                                alt="minus"></button>
                                        <input class="qty-input" type="number" name="qty" value="1"
                                            min="0">
                                        <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                                alt="plus"></button>
                                    </div>
                                    <div class="message-popup d-flex align-items-center">
                                        <span class="message-popup-icon">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.5 4.25V16.25H4.5V20.0703L5.71875 19.0859L9.25781 16.25H16.5V4.25H1.5ZM3 5.75H15V14.75H8.74219L8.53125 14.9141L6 16.9297V14.75H3V5.75ZM18 7.25V8.75H21V17.75H18V19.9297L15.2578 17.75H9.63281L7.75781 19.25H14.7422L19.5 23.0703V19.25H22.5V7.25H18Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <span class="message-popup-text ms-2">Message</span>
                                    </div>
                                </div>

                                <form class="product-form" action="#">
                                    <div
                                        class="product-form-buttons d-flex align-items-center justify-content-between mt-4">
                                        <button type="submit"
                                            class="position-relative btn-atc btn-add-to-cart loader">ADD TO
                                            CART</button>
                                        <a href="wishlist.html" class="product-wishlist">
                                            <svg class="icon icon-wishlist" width="26" height="22"
                                                viewBox="0 0 26 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                    fill="#00234D"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="buy-it-now-btn mt-2">
                                        <button type="submit" class="position-relative btn-atc btn-buyit-now">BUY IT
                                            NOW</button>
                                    </div>
                                </form>

                                <div class="guaranteed-checkout">
                                    <strong class="label mb-1 d-block">Guaranteed safe checkout:</strong>
                                    <ul class="list-unstyled checkout-icon-list d-flex align-items-center flex-wrap">
                                        <li class="checkout-icon-item">
                                            <svg width="38" height="24" viewBox="0 0 38 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_205_2246)">
                                                    <path opacity="0.07"
                                                        d="M35 0H3C1.3 0 0 1.3 0 3V21C0 22.7 1.4 24 3 24H35C36.7 24 38 22.7 38 21V3C38 1.3 36.6 0 35 0Z"
                                                        fill="black" />
                                                    <path
                                                        d="M35 1C36.1 1 37 1.9 37 3V21C37 22.1 36.1 23 35 23H3C1.9 23 1 22.1 1 21V3C1 1.9 1.9 1 3 1H35Z"
                                                        fill="#FEFEFE" />
                                                    <path
                                                        d="M15 19C18.866 19 22 15.866 22 12C22 8.13401 18.866 5 15 5C11.134 5 8 8.13401 8 12C8 15.866 11.134 19 15 19Z"
                                                        fill="#EB001B" />
                                                    <path
                                                        d="M23 19C26.866 19 30 15.866 30 12C30 8.13401 26.866 5 23 5C19.134 5 16 8.13401 16 12C16 15.866 19.134 19 23 19Z"
                                                        fill="#F79E1B" />
                                                    <path
                                                        d="M22 12C22 9.59999 20.8 7.49999 19 6.29999C17.2 7.59999 16 9.69999 16 12C16 14.3 17.2 16.5 19 17.7C20.8 16.5 22 14.4 22 12Z"
                                                        fill="#FF5F00" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_205_2246">
                                                        <rect width="38" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </li>
                                        <li class="checkout-icon-item">
                                            <svg width="38" height="24" viewBox="0 0 38 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_205_2252)">
                                                    <path opacity="0.07"
                                                        d="M35 0H3C1.3 0 0 1.3 0 3V21C0 22.7 1.4 24 3 24H35C36.7 24 38 22.7 38 21V3C38 1.3 36.6 0 35 0Z"
                                                        fill="black" />
                                                    <path
                                                        d="M35 1C36.1 1 37 1.9 37 3V21C37 22.1 36.1 23 35 23H3C1.9 23 1 22.1 1 21V3C1 1.9 1.9 1 3 1H35Z"
                                                        fill="#FEFEFE" />
                                                    <path
                                                        d="M23.9 8.3C24.1 7.3 23.9 6.6 23.3 6C22.7 5.3 21.6 5 20.2 5H16.1C15.8 5 15.6 5.2 15.5 5.5L14 15.6C14 15.8 14.1 16 14.3 16H17L17.4 12.6L19.2 10.4L23.9 8.3Z"
                                                        fill="#003087" />
                                                    <path
                                                        d="M23.8996 8.29999L23.6996 8.49999C23.1996 11.3 21.4996 12.3 19.0996 12.3H17.9996C17.6996 12.3 17.4996 12.5 17.3996 12.8L16.7996 16.7L16.5996 17.7C16.5996 17.9 16.6996 18.1 16.8996 18.1H18.9996C19.2996 18.1 19.4996 17.9 19.4996 17.7V17.6L19.8996 15.2V15.1C19.8996 14.9 20.1996 14.7 20.3996 14.7H20.6996C22.7996 14.7 24.3996 13.9 24.7996 11.5C24.9996 10.5 24.8996 9.69999 24.3996 9.09999C24.2996 8.59999 24.0996 8.39999 23.8996 8.29999Z"
                                                        fill="#3086C8" />
                                                    <path
                                                        d="M23.3004 8.09999C23.2004 7.99999 23.1004 7.99999 23.0004 7.99999C22.9004 7.99999 22.8004 7.99999 22.7004 7.89999C22.4004 7.79999 22.0004 7.79999 21.6004 7.79999H18.6004C18.5004 7.79999 18.4004 7.79999 18.4004 7.89999C18.2004 7.99999 18.1004 8.09999 18.1004 8.29999L17.4004 12.7V12.8C17.4004 12.5 17.7004 12.3 18.0004 12.3H19.3004C21.8004 12.3 23.4004 11.3 23.9004 8.49999V8.29999C23.8004 8.19999 23.6004 8.09999 23.4004 8.09999H23.3004Z"
                                                        fill="#012169" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_205_2252">
                                                        <rect width="38" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </li>
                                        <li class="checkout-icon-item">
                                            <svg width="38" height="24" viewBox="0 0 38 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_205_2258)">
                                                    <path opacity="0.07"
                                                        d="M35 0H3C1.3 0 0 1.3 0 3V21C0 22.7 1.4 24 3 24H35C36.7 24 38 22.7 38 21V3C38 1.3 36.6 0 35 0Z"
                                                        fill="black" />
                                                    <path
                                                        d="M35 1C36.1 1 37 1.9 37 3V21C37 22.1 36.1 23 35 23H3C1.9 23 1 22.1 1 21V3C1 1.9 1.9 1 3 1H35Z"
                                                        fill="#FF6B6C" />
                                                    <path
                                                        d="M8.971 10.268L9.745 12.144H8.203L8.971 10.268ZM25.046 10.346H22.069V11.173H24.998V12.412H22.075V13.334H25.052V14.073L27.129 11.828L25.052 9.488L25.046 10.346ZM10.983 8.006H14.978L15.865 9.941L16.687 8H27.057L28.135 9.19L29.25 8H34.013L30.494 11.852L33.977 15.68H29.143L28.065 14.49L26.94 15.68H10.03L9.536 14.49H8.406L7.911 15.68H4L7.286 8H10.716L10.983 8.006ZM19.646 9.084H17.407L15.907 12.62L14.282 9.084H12.06V13.894L10 9.084H8.007L5.625 14.596H7.18L7.674 13.406H10.27L10.764 14.596H13.484V10.661L15.235 14.602H16.425L18.165 10.673V14.603H19.623L19.647 9.083L19.646 9.084ZM28.986 11.852L31.517 9.084H29.695L28.094 10.81L26.546 9.084H20.652V14.602H26.462L28.076 12.864L29.624 14.602H31.499L28.987 11.852H28.986Z"
                                                        fill="#FEFEFE" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_205_2258">
                                                        <rect width="38" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </li>
                                        <li class="checkout-icon-item">
                                            <svg width="38" height="24" viewBox="0 0 38 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_205_2274)">
                                                    <path opacity="0.07"
                                                        d="M35 0H3C1.3 0 0 1.3 0 3V21C0 22.7 1.4 24 3 24H35C36.7 24 38 22.7 38 21V3C38 1.3 36.6 0 35 0Z"
                                                        fill="black" />
                                                    <path
                                                        d="M35 1C36.1 1 37 1.9 37 3V21C37 22.1 36.1 23 35 23H3C1.9 23 1 22.1 1 21V3C1 1.9 1.9 1 3 1H35Z"
                                                        fill="#FEFEFE" />
                                                    <path
                                                        d="M28.3 10.1H28C27.6 11.1 27.3 11.6 27 13.1H28.9C28.6 11.6 28.6 10.9 28.3 10.1ZM31.2 16H29.5C29.4 16 29.4 16 29.3 15.9L29.1 15L29 14.8H26.6C26.5 14.8 26.4 14.8 26.4 15L26.1 15.9C26.1 16 26 16 26 16H23.9L24.1 15.5L27 8.7C27 8.2 27.3 8 27.8 8H29.3C29.4 8 29.5 8 29.5 8.2L30.9 14.7C31 15.1 31.1 15.4 31.1 15.8C31.2 15.9 31.2 15.9 31.2 16ZM17.8 15.7L18.2 13.9C18.3 13.9 18.4 14 18.4 14C19.1 14.3 19.8 14.5 20.5 14.4C20.7 14.4 21 14.3 21.2 14.2C21.7 14 21.7 13.5 21.3 13.1C21.1 12.9 20.8 12.8 20.5 12.6C20.1 12.4 19.7 12.2 19.4 11.9C18.2 10.9 18.6 9.5 19.3 8.8C19.9 8.4 20.2 8 21 8C22.2 8 23.5 8 24.1 8.2H24.2C24.1 8.8 24 9.3 23.8 9.9C23.3 9.7 22.8 9.5 22.3 9.5C22 9.5 21.7 9.5 21.4 9.6C21.2 9.6 21.1 9.7 21 9.8C20.8 10 20.8 10.3 21 10.5L21.5 10.9C21.9 11.1 22.3 11.3 22.6 11.5C23.1 11.8 23.6 12.3 23.7 12.9C23.9 13.8 23.6 14.6 22.8 15.2C22.3 15.6 22.1 15.8 21.4 15.8C20 15.8 18.9 15.9 18 15.6C17.9 15.8 17.9 15.8 17.8 15.7ZM14.3 16C14.4 15.3 14.4 15.3 14.5 15C15 12.8 15.5 10.5 15.9 8.3C16 8.1 16 8 16.2 8H18C17.8 9.2 17.6 10.1 17.3 11.2C17 12.7 16.7 14.2 16.3 15.7C16.3 15.9 16.2 15.9 16 15.9L14.3 16ZM5 8.2C5 8.1 5.2 8 5.3 8H8.7C9.2 8 9.6 8.3 9.7 8.8L10.6 13.2C10.6 13.3 10.6 13.3 10.7 13.4C10.7 13.3 10.8 13.3 10.8 13.3L12.9 8.2C12.8 8.1 12.9 8 13 8H15.1C15.1 8.1 15.1 8.1 15 8.2L11.9 15.5C11.8 15.7 11.8 15.8 11.7 15.9C11.6 16 11.4 15.9 11.2 15.9H9.7C9.6 15.9 9.5 15.9 9.5 15.7L7.9 9.5C7.7 9.3 7.4 9 7 8.9C6.4 8.6 5.3 8.4 5.1 8.4L5 8.2Z"
                                                        fill="#FFD200" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_205_2274">
                                                        <rect width="38" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </li>
                                        <li class="checkout-icon-item">
                                            <svg width="38" height="24" viewBox="0 0 38 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_205_2242)">
                                                    <path opacity="0.07"
                                                        d="M35 0H3C1.3 0 0 1.3 0 3V21C0 22.7 1.4 24 3 24H35C36.7 24 38 22.7 38 21V3C38 1.3 36.6 0 35 0Z"
                                                        fill="black" />
                                                    <path
                                                        d="M35 1C36.1 1 37 1.9 37 3V21C37 22.1 36.1 23 35 23H3C1.9 23 1 22.1 1 21V3C1 1.9 1.9 1 3 1H35Z"
                                                        fill="#2153A8" />
                                                    <path
                                                        d="M21.3811 9.71299C21.3811 11.381 20.2041 12.571 18.5601 12.571H17.0111C16.9855 12.5714 16.9606 12.5791 16.9393 12.5933C16.9181 12.6075 16.9013 12.6275 16.8911 12.651C16.8846 12.6665 16.8812 12.6832 16.8811 12.7V14.892C16.8811 14.909 16.8778 14.9259 16.8712 14.9416C16.8647 14.9573 16.8551 14.9716 16.843 14.9836C16.8309 14.9956 16.8166 15.005 16.8008 15.0115C16.785 15.0179 16.7682 15.0211 16.7511 15.021H15.6671C15.6326 15.021 15.5996 15.0073 15.5752 14.9829C15.5508 14.9585 15.5371 14.9255 15.5371 14.891V6.98599C15.5367 6.96024 15.5442 6.93497 15.5584 6.91353C15.5727 6.8921 15.5932 6.87552 15.6171 6.86599C15.633 6.85936 15.65 6.85596 15.6671 6.85599H18.5671C20.2041 6.85599 21.3811 8.04599 21.3811 9.71399V9.71299ZM20.0291 9.71299C20.0291 8.75499 19.3711 8.05499 18.4791 8.05499H17.0111C16.9941 8.05499 16.9771 8.05835 16.9614 8.06489C16.9456 8.07142 16.9313 8.081 16.9192 8.09307C16.9071 8.10514 16.8976 8.11947 16.891 8.13524C16.8845 8.15101 16.8811 8.16792 16.8811 8.18499V11.235C16.8809 11.2521 16.8842 11.2691 16.8907 11.2849C16.8973 11.3007 16.9069 11.315 16.9191 11.327C16.9312 11.3391 16.9455 11.3487 16.9613 11.3552C16.9771 11.3617 16.994 11.3651 17.0111 11.365H18.4791C19.3711 11.37 20.0291 10.67 20.0291 9.71299ZM21.7031 13.504C21.6917 13.2478 21.745 12.9929 21.8581 12.7627C21.9711 12.5325 22.1404 12.3345 22.3501 12.187C22.7731 11.871 23.4341 11.707 24.4051 11.673L25.4381 11.637V11.334C25.4381 10.727 25.0281 10.471 24.3701 10.471C23.7121 10.471 23.2951 10.702 23.2001 11.081C23.192 11.1076 23.1754 11.1308 23.1528 11.1471C23.1302 11.1634 23.1029 11.1718 23.0751 11.171H22.0531C22.025 11.1714 21.9975 11.1626 21.9748 11.146C21.9521 11.1294 21.9353 11.1059 21.9271 11.079C21.9217 11.0612 21.9203 11.0424 21.9231 11.024C22.0751 10.126 22.8271 9.44399 24.4171 9.44399C26.1091 9.44399 26.7201 10.227 26.7201 11.72V14.892C26.72 14.9091 26.7165 14.9261 26.7098 14.9419C26.703 14.9577 26.6933 14.972 26.681 14.984C26.6687 14.996 26.6542 15.0054 26.6383 15.0118C26.6223 15.0181 26.6053 15.0213 26.5881 15.021H25.5581C25.5236 15.021 25.4906 15.0073 25.4662 14.9829C25.4418 14.9585 25.4281 14.9255 25.4281 14.891V14.655C25.4285 14.6354 25.4228 14.6162 25.4119 14.5999C25.401 14.5837 25.3854 14.5711 25.3671 14.564C25.3491 14.5569 25.3294 14.5552 25.3104 14.5591C25.2914 14.563 25.2739 14.5723 25.2601 14.586C24.9501 14.92 24.4521 15.161 23.6531 15.161C22.4781 15.161 21.7031 14.554 21.7031 13.504ZM25.4381 12.817V12.571L24.0991 12.641C23.3941 12.677 22.9841 12.967 22.9841 13.457C22.9841 13.901 23.3601 14.147 24.0181 14.147C24.9111 14.147 25.4381 13.667 25.4381 12.817ZM27.7541 17.417V16.498C27.7544 16.4787 27.7589 16.4598 27.7674 16.4425C27.7759 16.4252 27.7881 16.41 27.8031 16.398C27.8181 16.3859 27.8355 16.3772 27.8541 16.3726C27.8728 16.3679 27.8922 16.3674 27.9111 16.371C28.0691 16.4 28.2291 16.415 28.3901 16.415C28.6659 16.4301 28.9387 16.3519 29.1646 16.193C29.3905 16.034 29.5562 15.8037 29.6351 15.539L29.7021 15.328C29.7121 15.2995 29.7121 15.2685 29.7021 15.24L27.5571 9.76899C27.5447 9.73897 27.544 9.70537 27.5551 9.67483C27.5662 9.64429 27.5883 9.61902 27.6171 9.60399C27.6362 9.59392 27.6575 9.58876 27.6791 9.58899H28.7191C28.7458 9.58906 28.7719 9.59722 28.7938 9.6124C28.8158 9.62757 28.8326 9.64905 28.8421 9.67399L30.2981 13.533C30.3071 13.5589 30.324 13.5813 30.3465 13.5971C30.3689 13.6129 30.3957 13.6213 30.4231 13.621C30.4505 13.621 30.4772 13.6125 30.4995 13.5967C30.5219 13.581 30.5389 13.5587 30.5481 13.533L31.8131 9.68499C31.8217 9.65846 31.8386 9.63539 31.8613 9.61919C31.884 9.60298 31.9113 9.5945 31.9391 9.59499H33.0151C33.0474 9.59518 33.0785 9.60702 33.1028 9.62833C33.127 9.64965 33.1428 9.679 33.1471 9.71099C33.1495 9.73233 33.1468 9.75394 33.1391 9.77399L30.8441 15.85C30.3161 17.263 29.4111 17.623 28.4141 17.623C28.2249 17.6282 28.036 17.606 27.8531 17.557C27.8225 17.5495 27.7955 17.5312 27.7772 17.5055C27.7588 17.4798 27.7503 17.4484 27.7531 17.417H27.7541ZM8.56913 6.39999C7.20462 6.38979 5.88755 6.9001 4.88613 7.82699C4.84351 7.86575 4.81692 7.91902 4.81155 7.97637C4.80619 8.03372 4.82244 8.09101 4.85713 8.13699L5.47513 8.97599C5.49515 9.00428 5.52116 9.02781 5.55131 9.04492C5.58145 9.06202 5.615 9.07227 5.64956 9.07494C5.68411 9.07762 5.71883 9.07264 5.75125 9.06038C5.78367 9.04812 5.81299 9.02887 5.83713 9.00399C6.19705 8.64659 6.6245 8.36438 7.09457 8.17381C7.56464 7.98324 8.06793 7.88812 8.57513 7.89399C10.6951 7.89399 11.8021 9.47799 11.8021 11.044C11.8021 12.744 10.6391 13.942 8.96713 13.965C7.67513 13.965 6.70113 13.115 6.70113 11.991C6.70223 11.7068 6.76683 11.4264 6.89019 11.1703C7.01354 10.9143 7.19255 10.689 7.41413 10.511C7.4613 10.4723 7.49125 10.4165 7.49744 10.3558C7.50362 10.2951 7.48553 10.2344 7.44713 10.187L6.79713 9.37199C6.7775 9.34693 6.75301 9.32611 6.72513 9.31076C6.69725 9.29541 6.66655 9.28586 6.63488 9.28268C6.60321 9.27951 6.57123 9.28277 6.54085 9.29228C6.51048 9.30178 6.48234 9.31733 6.45813 9.33799C6.06003 9.65733 5.73821 10.0615 5.51613 10.521C5.29484 10.9795 5.17966 11.4819 5.17913 11.991C5.17913 13.926 6.83413 15.443 8.95413 15.455H8.98413C11.5011 15.423 13.3211 13.571 13.3211 11.04C13.3211 8.79299 11.6541 6.39999 8.56913 6.39999Z"
                                                        fill="#FEFEFE" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_205_2242">
                                                        <rect width="38" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </li>
                                        <li class="checkout-icon-item">
                                            <svg width="38" height="24" viewBox="0 0 38 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_205_2263)">
                                                    <path
                                                        d="M34.3874 0H3.61312C3.48493 0 3.35651 0 3.22854 0.00067947C3.1205 0.00158543 3.01269 0.00271788 2.90466 0.00566225C2.66934 0.012004 2.43197 0.0260463 2.1996 0.0677205C1.96655 0.107648 1.74075 0.182074 1.52964 0.288548C1.10523 0.504411 0.76027 0.849374 0.544407 1.27378C0.437744 1.48497 0.363309 1.71095 0.32358 1.94419C0.281453 2.17679 0.267637 2.41393 0.261295 2.64903C0.258535 2.75697 0.256874 2.86493 0.256312 2.97291C0.255859 3.10065 0.255859 3.22884 0.255859 3.35726V20.6425C0.255859 20.7709 0.255859 20.8989 0.256312 21.0273C0.256992 21.1351 0.258351 21.2432 0.261295 21.3512C0.267637 21.5858 0.281679 21.8232 0.32358 22.0556C0.363227 22.2888 0.437586 22.5148 0.544181 22.726C0.651352 22.9369 0.791243 23.1296 0.958658 23.2967C1.12579 23.4642 1.31843 23.6041 1.52941 23.7112C1.7439 23.8206 1.96359 23.8902 2.19982 23.9325C2.43197 23.974 2.66934 23.988 2.90466 23.9943C3.01269 23.9968 3.1205 23.9982 3.22854 23.9989C3.35651 23.9998 3.48493 23.9998 3.61312 23.9998H34.3874C34.5154 23.9998 34.6438 23.9998 34.7718 23.9989C34.8796 23.9984 34.9874 23.9968 35.0959 23.9943C35.3308 23.988 35.5681 23.974 35.801 23.9325C36.0341 23.8925 36.2599 23.818 36.4709 23.7112C36.8951 23.4951 37.24 23.1502 37.4561 22.726C37.5655 22.5115 37.6348 22.2918 37.6767 22.0556C37.7189 21.8232 37.7325 21.5858 37.7388 21.3512C37.7417 21.2432 37.7433 21.1351 37.7438 21.0273C37.7447 20.8989 37.7447 20.7709 37.7447 20.6425V3.35749C37.7447 3.22907 37.7447 3.10087 37.7438 2.97268C37.7433 2.86478 37.7417 2.75689 37.7388 2.64903C37.7325 2.41393 37.7189 2.17679 37.6767 1.94419C37.6373 1.71091 37.5629 1.4849 37.4561 1.27378C37.2402 0.849448 36.8952 0.504513 36.4709 0.288548C36.2598 0.182184 36.034 0.107836 35.801 0.067947C35.5681 0.0260463 35.3308 0.0122305 35.0959 0.00588874C34.9879 0.00314533 34.8798 0.00148432 34.7718 0.000905959C34.6438 0 34.5154 0 34.3874 0Z"
                                                        fill="#00234D" />
                                                    <path
                                                        d="M34.3863 0.799957L34.765 0.800637C34.8674 0.801316 34.97 0.802449 35.073 0.805167C35.2526 0.810149 35.4623 0.819888 35.658 0.854994C35.8279 0.88557 35.9706 0.932001 36.1074 1.00176C36.3812 1.14095 36.6036 1.3636 36.7425 1.63752C36.8118 1.77341 36.858 1.91519 36.8886 2.08665C36.9234 2.28007 36.9332 2.49048 36.9379 2.67099C36.9409 2.77291 36.9422 2.87483 36.9425 2.97902C36.9436 3.10517 36.9436 3.2311 36.9436 3.35748V20.6427C36.9436 20.7691 36.9436 20.895 36.9427 21.0237C36.9422 21.1256 36.9409 21.2275 36.9382 21.3295C36.9332 21.5097 36.9234 21.7201 36.8881 21.9158C36.8624 22.0715 36.8132 22.2223 36.742 22.3632C36.6028 22.6372 36.3801 22.8598 36.106 22.9989C35.9701 23.0682 35.8279 23.1146 35.6596 23.145C35.4601 23.1806 35.2413 23.1903 35.0766 23.1948C34.9731 23.1971 34.8701 23.1987 34.7643 23.1991C34.6386 23.2 34.5122 23.2 34.3863 23.2H3.607C3.48243 23.2 3.35786 23.2 3.23103 23.1991C3.1291 23.1987 3.02717 23.1973 2.92527 23.1951C2.75676 23.1905 2.53797 23.1806 2.34002 23.1452C2.18351 23.1191 2.03185 23.0695 1.89021 22.998C1.75434 22.929 1.63033 22.8388 1.52284 22.7307C1.41501 22.6231 1.32496 22.499 1.25604 22.3632C1.18486 22.2215 1.13553 22.07 1.10972 21.9136C1.07439 21.7181 1.06443 21.5086 1.0599 21.3297C1.05734 21.2274 1.05583 21.1251 1.05537 21.0228L1.05469 20.7222V3.27821L1.05514 2.97811C1.05561 2.87565 1.05712 2.77319 1.05967 2.67076C1.06465 2.49138 1.07439 2.28188 1.10995 2.08483C1.13581 1.92875 1.18514 1.77748 1.25626 1.63616C1.32512 1.50072 1.41481 1.37705 1.52352 1.26856C1.63127 1.16064 1.75541 1.07044 1.89134 1.00131C2.03264 0.93032 2.18382 0.880997 2.33979 0.854994C2.5357 0.819888 2.74566 0.810149 2.92549 0.805167C3.02787 0.802449 3.13047 0.801316 3.23216 0.800637L3.61198 0.799957H34.3863Z"
                                                        fill="#FEFEFE" />
                                                    <path
                                                        d="M10.1087 8.10153C10.4267 7.70404 10.6423 7.1702 10.5854 6.62482C10.1202 6.64792 9.55266 6.93171 9.22379 7.32965C8.92868 7.67029 8.66753 8.22633 8.73548 8.74884C9.25777 8.79414 9.7796 8.48792 10.1087 8.10153Z"
                                                        fill="#00234D" />
                                                    <path
                                                        d="M10.5804 8.85097C9.82162 8.80567 9.17703 9.2813 8.81487 9.2813C8.45249 9.2813 7.89782 8.87362 7.29784 8.88472C6.51713 8.89604 5.79282 9.3377 5.39646 10.0398C4.58155 11.4441 5.1813 13.5278 5.97401 14.6715C6.35882 15.2378 6.82267 15.8606 7.43374 15.8382C8.01129 15.8155 8.23755 15.4645 8.93922 15.4645C9.64066 15.4645 9.8445 15.8382 10.4558 15.8269C11.0895 15.8155 11.4859 15.2606 11.8707 14.6944C12.3123 14.0489 12.4928 13.4261 12.5042 13.3921C12.4928 13.3808 11.282 12.9162 11.2707 11.5233C11.2594 10.3569 12.2215 9.802 12.2668 9.7678C11.7235 8.96422 10.8746 8.87362 10.5801 8.85097"
                                                        fill="#00234D" />
                                                    <path
                                                        d="M18.1419 7.27258C19.7903 7.27258 20.9384 8.40888 20.9384 10.0632C20.9384 11.7233 19.7668 12.8655 18.1007 12.8655H16.2757V15.7682H14.957V7.27258H18.1419ZM16.2757 11.7587H17.7886C18.9369 11.7587 19.5901 11.1406 19.5901 10.0691C19.5901 8.99776 18.9367 8.38533 17.7945 8.38533H16.2757V11.7587Z"
                                                        fill="#00234D" />
                                                    <path
                                                        d="M21.2656 14.0077C21.2656 12.9185 22.0957 12.2946 23.6263 12.2003L25.2688 12.1002V11.6291C25.2688 10.9406 24.8156 10.5637 24.0091 10.5637C23.3437 10.5637 22.8608 10.905 22.7611 11.4289H21.5716C21.6072 10.3282 22.6431 9.52753 24.0444 9.52753C25.5515 9.52753 26.5347 10.3164 26.5347 11.541V15.768H25.3162V14.7495H25.2867C24.9393 15.4147 24.1738 15.8326 23.3437 15.8326C22.1193 15.8326 21.2656 15.1028 21.2656 14.0077ZM25.2688 13.4603V12.9833L23.803 13.0775C22.9786 13.1305 22.5491 13.4365 22.5491 13.9722C22.5491 14.4904 22.9965 14.826 23.697 14.826C24.5916 14.826 25.2688 14.2548 25.2688 13.4603Z"
                                                        fill="#00234D" />
                                                    <path
                                                        d="M27.6554 18.0404V17.0221C27.7378 17.0336 27.9378 17.0454 28.0438 17.0454C28.6266 17.0454 28.9564 16.7985 29.1566 16.1623L29.2743 15.7857L27.043 9.60406H28.4205L29.9749 14.6199H30.0043L31.5585 9.60406H32.9009L30.5871 16.0975C30.0571 17.5872 29.4508 18.0759 28.1675 18.0759C28.0674 18.0759 27.7435 18.0641 27.6554 18.0404Z"
                                                        fill="#00234D" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_205_2263">
                                                        <rect width="38" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </li>
                                        <li class="checkout-icon-item">
                                            <svg width="38" height="24" viewBox="0 0 38 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_205_2278)">
                                                    <path opacity="0.07"
                                                        d="M35 0H3C1.3 0 0 1.3 0 3V21C0 22.7 1.4 24 3 24H35C36.7 24 38 22.7 38 21V3C38 1.3 36.6 0 35 0Z"
                                                        fill="black" />
                                                    <path
                                                        d="M35 1C36.1 1 37 1.9 37 3V21C37 22.1 36.1 23 35 23H3C1.9 23 1 22.1 1 21V3C1 1.9 1.9 1 3 1H35Z"
                                                        fill="#FEFEFE" />
                                                    <path
                                                        d="M18.0922 11.976V15.176H17.0742V7.27599H19.7652C20.0876 7.27053 20.408 7.32885 20.7078 7.44761C21.0076 7.56637 21.281 7.74322 21.5122 7.96799C21.7313 8.17238 21.9079 8.41794 22.0319 8.69062C22.156 8.96331 22.2251 9.25777 22.2354 9.55719C22.2456 9.8566 22.1967 10.1551 22.0915 10.4356C21.9863 10.7161 21.8268 10.9731 21.6222 11.192L21.5122 11.308C21.0422 11.755 20.4142 11.998 19.7652 11.982L18.0922 11.976ZM18.0922 8.24399V11.032H19.7902C20.1672 11.044 20.5312 10.897 20.7952 10.628C20.9841 10.4312 21.1109 10.1832 21.1598 9.91482C21.2088 9.64649 21.1779 9.36967 21.0708 9.11881C20.9637 8.86795 20.7852 8.65412 20.5575 8.50391C20.3298 8.3537 20.063 8.27374 19.7902 8.27399L18.0922 8.24399ZM24.5762 9.59199C25.2262 9.56199 25.8622 9.77999 26.3542 10.205C26.7992 10.635 27.0362 11.235 27.0042 11.854V15.188H26.0352V14.422H25.9862C25.8124 14.7093 25.5667 14.9463 25.2733 15.1096C24.9799 15.2728 24.649 15.3567 24.3132 15.353C23.7651 15.3707 23.2306 15.1803 22.8172 14.82C22.6213 14.6602 22.4644 14.458 22.3582 14.2286C22.252 13.9992 22.1993 13.7487 22.2042 13.496C22.1927 13.2406 22.2423 12.9861 22.3489 12.7537C22.4555 12.5214 22.6161 12.3178 22.8172 12.16C23.3106 11.8051 23.9078 11.624 24.5152 11.645C25.0322 11.625 25.5452 11.738 26.0052 11.976V11.768C26.0086 11.596 25.9728 11.4255 25.9006 11.2694C25.8283 11.1133 25.7215 10.9757 25.5882 10.867C25.3206 10.6236 24.9699 10.492 24.6082 10.499C24.3455 10.4965 24.0866 10.561 23.8558 10.6865C23.625 10.812 23.43 10.9942 23.2892 11.216L22.3942 10.652C22.6372 10.3038 22.9653 10.0236 23.3473 9.83804C23.7292 9.65249 24.1523 9.56779 24.5762 9.59199ZM23.2892 13.52C23.2868 13.6495 23.3163 13.7776 23.3751 13.8931C23.4338 14.0085 23.5201 14.1077 23.6262 14.182C23.8492 14.358 24.1262 14.451 24.4112 14.445C24.8402 14.444 25.2512 14.275 25.5572 13.973C25.8622 13.687 26.0352 13.288 26.0352 12.87C25.6503 12.5963 25.1825 12.4642 24.7112 12.496C24.3453 12.4816 23.9844 12.5846 23.6812 12.79C23.5611 12.8703 23.4626 12.9789 23.3943 13.1062C23.3259 13.2334 23.2899 13.3755 23.2892 13.52ZM32.5752 9.76999L29.1852 17.56H28.1372L29.4182 14.832L27.1942 9.76999H28.2972L29.9092 13.655L31.4782 9.76999H32.5752Z"
                                                        fill="#5F6368" />
                                                    <path
                                                        d="M13.986 11.284C13.986 10.976 13.962 10.668 13.913 10.364H9.62305V12.111H12.074C12.0241 12.3887 11.9187 12.6534 11.7641 12.8893C11.6094 13.1252 11.4087 13.3275 11.174 13.484V14.618H12.638C13.0832 14.1873 13.4331 13.6681 13.6653 13.0938C13.8975 12.5196 14.0067 11.9031 13.986 11.284Z"
                                                        fill="#4285F4" />
                                                    <path
                                                        d="M9.62817 15.721C10.7345 15.7514 11.8108 15.3591 12.6382 14.624L11.1722 13.484C10.8199 13.7099 10.4208 13.8524 10.0052 13.9008C9.58957 13.9492 9.16838 13.9022 8.77365 13.7634C8.37893 13.6245 8.02106 13.3975 7.72726 13.0996C7.43346 12.8016 7.21147 12.4406 7.07817 12.044H5.57617V13.214C5.95202 13.967 6.53022 14.6005 7.24593 15.0433C7.96164 15.4861 8.78655 15.7208 9.62817 15.721Z"
                                                        fill="#34A853" />
                                                    <path
                                                        d="M7.07893 12.05C6.88872 11.4873 6.88872 10.8777 7.07893 10.315V9.14499H5.57693C5.25672 9.77644 5.08984 10.4745 5.08984 11.1825C5.08984 11.8905 5.25672 12.5885 5.57693 13.22L7.07893 12.05Z"
                                                        fill="#FBBC04" />
                                                    <path
                                                        d="M9.62817 8.44C10.2752 8.42819 10.9006 8.67261 11.3682 9.12L12.6682 7.82701C11.8393 7.04902 10.7398 6.62466 9.60317 6.644C8.76654 6.6482 7.94741 6.88401 7.2366 7.32528C6.5258 7.76656 5.95108 8.39606 5.57617 9.144L7.07817 10.315C7.25379 9.77509 7.59426 9.30381 8.05168 8.96748C8.5091 8.63114 9.06045 8.44666 9.62817 8.44Z"
                                                        fill="#EA4335" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_205_2278">
                                                        <rect width="38" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </li>
                                    </ul>
                                </div>

                                <div class="share-area mt-4 d-flex align-items-center">
                                    <strong class="label mb-1 d-block">Share:</strong>
                                    <ul class="list-unstyled share-list d-flex align-items-center mb-1 flex-wrap">
                                        <li class="share-item">
                                            <svg width="9" height="16" viewBox="0 0 9 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.17383 9.3125L8.58398 6.61719H5.97656V4.85938C5.97656 4.09766 6.32812 3.39453 7.5 3.39453H8.70117V1.08008C8.70117 1.08008 7.61719 0.875 6.5918 0.875C4.45312 0.875 3.04688 2.19336 3.04688 4.53711V6.61719H0.644531V9.3125H3.04688V15.875H5.97656V9.3125H8.17383Z"
                                                    fill="black" />
                                            </svg>
                                        </li>
                                        <li class="share-item">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.1452 6.62529C17.1452 6.79391 17.1452 6.94848 17.1452 7.08899C17.1452 8.35363 16.9063 9.60422 16.4286 10.8407C15.9789 12.0492 15.3185 13.1593 14.4473 14.171C13.6042 15.1827 12.4941 16.0117 11.1171 16.6581C9.76815 17.2763 8.27869 17.5855 6.64871 17.5855C4.59719 17.5855 2.71429 17.0375 1 15.9415C1.28103 15.9696 1.57611 15.9836 1.88525 15.9836C3.59953 15.9836 5.13115 15.4637 6.48009 14.4239C5.66511 14.3958 4.93443 14.1429 4.28806 13.6651C3.66979 13.1874 3.24824 12.5831 3.02342 11.8525C3.24824 11.9087 3.47307 11.9368 3.69789 11.9368C4.03513 11.9368 4.35831 11.8806 4.66745 11.7681C3.82436 11.5995 3.12178 11.178 2.55972 10.5035C1.99766 9.82904 1.71663 9.05621 1.71663 8.18501C1.71663 8.15691 1.71663 8.14286 1.71663 8.14286C2.25059 8.42389 2.81265 8.57845 3.40281 8.60656C2.30679 7.84777 1.75878 6.82201 1.75878 5.52927C1.75878 4.8548 1.9274 4.23653 2.26464 3.67447C3.19204 4.79859 4.30211 5.69789 5.59485 6.37237C6.91569 7.04684 8.33489 7.42623 9.85246 7.51054C9.79625 7.22951 9.76815 6.94848 9.76815 6.66745C9.76815 5.65574 10.1194 4.79859 10.822 4.09602C11.5527 3.36534 12.4239 3 13.4356 3C14.5035 3 15.4028 3.37939 16.1335 4.13817C16.9766 3.96956 17.7635 3.67447 18.4941 3.25293C18.2131 4.12412 17.6651 4.79859 16.8501 5.27635C17.6089 5.19204 18.3255 5.00937 19 4.72834C18.4941 5.45902 17.8759 6.09133 17.1452 6.62529Z"
                                                    fill="black" />
                                            </svg>
                                        </li>
                                        <li class="share-item">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.99998 2.62165C12.4031 2.62165 12.6877 2.6308 13.6367 2.6741C14.5142 2.71415 14.9908 2.86077 15.3079 2.98398C15.728 3.14725 16.0278 3.34231 16.3428 3.65723C16.6577 3.97215 16.8528 4.272 17.016 4.69206C17.1392 5.00923 17.2859 5.48577 17.3259 6.36323C17.3692 7.31228 17.3783 7.5969 17.3783 10C17.3783 12.4031 17.3692 12.6878 17.3259 13.6368C17.2859 14.5143 17.1392 14.9908 17.016 15.308C16.8528 15.728 16.6577 16.0279 16.3428 16.3428C16.0278 16.6577 15.728 16.8528 15.3079 17.016C14.9908 17.1393 14.5142 17.2859 13.6367 17.3259C12.6879 17.3692 12.4032 17.3784 9.99998 17.3784C7.59672 17.3784 7.3121 17.3692 6.36323 17.3259C5.48574 17.2859 5.00919 17.1393 4.69206 17.016C4.27196 16.8528 3.97212 16.6577 3.6572 16.3428C3.34227 16.0279 3.14721 15.728 2.98398 15.308C2.86073 14.9908 2.71411 14.5143 2.67406 13.6368C2.63076 12.6878 2.62162 12.4031 2.62162 10C2.62162 7.5969 2.63076 7.31228 2.67406 6.36326C2.71411 5.48577 2.86073 5.00923 2.98398 4.69206C3.14721 4.272 3.34227 3.97215 3.6572 3.65723C3.97212 3.34231 4.27196 3.14725 4.69206 2.98398C5.00919 2.86077 5.48574 2.71415 6.36319 2.6741C7.31224 2.6308 7.59687 2.62165 9.99998 2.62165ZM9.99998 1C7.55571 1 7.24926 1.01036 6.28931 1.05416C5.33133 1.09789 4.67712 1.25001 4.10462 1.47251C3.51279 1.70251 3.01088 2.01025 2.51055 2.51058C2.01021 3.01092 1.70247 3.51283 1.47247 4.10466C1.24997 4.67716 1.09785 5.33137 1.05412 6.28935C1.01032 7.24926 1 7.55575 1 10C1 12.4443 1.01032 12.7508 1.05412 13.7107C1.09785 14.6687 1.24997 15.3229 1.47247 15.8954C1.70247 16.4872 2.01021 16.9891 2.51055 17.4895C3.01088 17.9898 3.51279 18.2975 4.10462 18.5275C4.67712 18.75 5.33133 18.9021 6.28931 18.9459C7.24926 18.9897 7.55571 19 9.99998 19C12.4443 19 12.7507 18.9897 13.7107 18.9459C14.6686 18.9021 15.3228 18.75 15.8953 18.5275C16.4872 18.2975 16.9891 17.9898 17.4894 17.4895C17.9898 16.9891 18.2975 16.4872 18.5275 15.8954C18.75 15.3229 18.9021 14.6687 18.9458 13.7107C18.9896 12.7508 19 12.4443 19 10C19 7.55575 18.9896 7.24926 18.9458 6.28935C18.9021 5.33137 18.75 4.67716 18.5275 4.10466C18.2975 3.51283 17.9898 3.01092 17.4894 2.51058C16.9891 2.01025 16.4872 1.70251 15.8953 1.47251C15.3228 1.25001 14.6686 1.09789 13.7107 1.05416C12.7507 1.01036 12.4443 1 9.99998 1ZM9.99998 5.37838C7.44753 5.37838 5.37835 7.44757 5.37835 10C5.37835 12.5525 7.44753 14.6217 9.99998 14.6217C12.5524 14.6217 14.6216 12.5525 14.6216 10C14.6216 7.44757 12.5524 5.37838 9.99998 5.37838ZM9.99998 13C8.34314 13 6.99996 11.6569 6.99996 10C6.99996 8.34317 8.34314 7 9.99998 7C11.6568 7 13 8.34317 13 10C13 11.6569 11.6568 13 9.99998 13ZM15.8842 5.19579C15.8842 5.79226 15.4007 6.27581 14.8042 6.27581C14.2077 6.27581 13.7242 5.79226 13.7242 5.19579C13.7242 4.59931 14.2077 4.1158 14.8042 4.1158C15.4007 4.1158 15.8842 4.59931 15.8842 5.19579Z"
                                                    fill="black" />
                                            </svg>
                                        </li>
                                        <li class="share-item">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.7892 6.69789C18.9297 7.6815 19 8.65105 19 9.60656V10.9555L18.7892 13.8642C18.6768 14.6792 18.4379 15.2693 18.0726 15.6347C17.6792 16.0281 17.089 16.281 16.3021 16.3934C15.5433 16.4496 14.63 16.4918 13.5621 16.5199C12.5222 16.548 11.6651 16.5621 10.9906 16.5621H9.97892C6.85948 16.534 4.82201 16.4778 3.86651 16.3934C3.86651 16.3934 3.7541 16.3794 3.52927 16.3513C3.30445 16.3232 3.12178 16.2951 2.98126 16.267C2.84075 16.2389 2.65808 16.1686 2.43326 16.0562C2.23653 15.9438 2.05386 15.8033 1.88525 15.6347C1.74473 15.466 1.60422 15.2412 1.4637 14.9602C1.35129 14.6511 1.28103 14.3841 1.25293 14.1593L1.16862 13.8642C1.05621 12.8806 1 11.911 1 10.9555V9.60656L1.16862 6.69789C1.28103 5.8829 1.51991 5.29274 1.88525 4.9274C2.27869 4.50585 2.8829 4.25293 3.69789 4.16862C4.45667 4.11241 5.35597 4.07026 6.39578 4.04215C7.4356 4.01405 8.29274 4 8.96721 4H9.97892C12.5082 4 14.6159 4.05621 16.3021 4.16862C17.089 4.25293 17.6792 4.50585 18.0726 4.9274C18.185 5.03981 18.2834 5.18033 18.3677 5.34895C18.452 5.48946 18.5222 5.64403 18.5785 5.81265C18.6347 5.95316 18.6768 6.09368 18.7049 6.23419C18.733 6.37471 18.7611 6.48712 18.7892 6.57143V6.69789ZM12.4239 10.4075L13.0141 10.1124L8.16628 7.58314V12.6417L12.4239 10.4075Z"
                                                    fill="black" />
                                            </svg>
                                        </li>
                                        <li class="share-item">
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.5312 7.375C14.5312 3.36133 11.2793 0.109375 7.26562 0.109375C3.25195 0.109375 0 3.36133 0 7.375C0 10.4805 1.9043 13.0879 4.59961 14.1426C4.54102 13.5859 4.48242 12.707 4.62891 12.0625C4.77539 11.5059 5.47852 8.45898 5.47852 8.45898C5.47852 8.45898 5.27344 8.01953 5.27344 7.375C5.27344 6.37891 5.85938 5.61719 6.5918 5.61719C7.20703 5.61719 7.5 6.08594 7.5 6.64258C7.5 7.25781 7.08984 8.19531 6.88477 9.07422C6.73828 9.77734 7.26562 10.3633 7.96875 10.3633C9.25781 10.3633 10.2539 9.01562 10.2539 7.05273C10.2539 5.29492 8.99414 4.09375 7.23633 4.09375C5.15625 4.09375 3.95508 5.64648 3.95508 7.22852C3.95508 7.87305 4.18945 8.54688 4.48242 8.89844C4.54102 8.95703 4.54102 9.04492 4.54102 9.10352C4.48242 9.33789 4.33594 9.83594 4.33594 9.92383C4.30664 10.0703 4.21875 10.0996 4.07227 10.041C3.16406 9.60156 2.60742 8.2832 2.60742 7.19922C2.60742 4.91406 4.27734 2.80469 7.41211 2.80469C9.93164 2.80469 11.8945 4.62109 11.8945 7.02344C11.8945 9.51367 10.3125 11.5352 8.11523 11.5352C7.38281 11.5352 6.67969 11.1543 6.44531 10.6855C6.44531 10.6855 6.09375 12.0918 6.00586 12.4141C5.83008 13.0586 5.39062 13.8496 5.09766 14.3184C5.77148 14.5527 6.50391 14.6406 7.26562 14.6406C11.2793 14.6406 14.5312 11.3887 14.5312 7.375Z"
                                                    fill="black" />
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product tab start -->
            <div class="product-tab-section mt-100" data-aos="fade-up" data-aos-duration="700">
                <div class="container">
                    <div class="tab-list product-tab-list">
                        <nav class="nav product-tab-nav">
                            <a class="product-tab-link tab-link active" href="#pdescription"
                                data-bs-toggle="tab">Description</a>
                            <a class="product-tab-link tab-link" href="#pshipping" data-bs-toggle="tab">Shipping &
                                Returns</a>
                            <a class="product-tab-link tab-link" href="#pstyle" data-bs-toggle="tab">Style with</a>
                            <a class="product-tab-link tab-link" href="#preview" data-bs-toggle="tab">Reviews</a>
                        </nav>
                    </div>
                    <div class="tab-content product-tab-content">
                        <div id="pdescription" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-lg-7 col-md-12 col-12">
                                    <div class="desc-content">
                                        <h4 class="heading_18 mb-3">What is lorem ipsum?</h4>
                                        <p class="text_16 mb-4">Lorem ipsum dolor sit amet conse ctetur adipisicing
                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                            enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                            dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet
                                            conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                            pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="desc-img">
                                        <img src="assets/img/product.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="desc-content mt-4">
                                        <p class="text_16">Lorem ipsum dolor sit amet conse ctetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pshipping" class="tab-pane fade">
                            <div class="desc-content">
                                <h4 class="heading_18 mb-3">Returns within the European Union</h4>
                                <p class="text_16 mb-4">The European law states that when an order is being returned,
                                    it is mandatory for the company to refund the product price and shipping costs
                                    charged for the original shipment. Meaning: one shipping fee is paid by us.</p>
                                <p class="text_16 mb-4">Standard Shipping: If you placed an order using "standard
                                    shipping" and you want to return it, you will be refunded the product price and
                                    initial shipping costs. However, the return shipping costs will be paid by you.</p>
                                <p class="text_16">Free Shipping: If you placed an order using "free shipping" and you
                                    want to return it, you will be refunded the product price, but since we paid for the
                                    initial shipping, you will pay for the return.</p>
                            </div>
                        </div>
                        <div id="pstyle" class="tab-pane fade">
                            <div class="desc-content">
                                <h4 class="heading_18 mb-3">Style with</h4>
                                <p class="text_16 mb-4">Please also bear in mind that shipping goods back and forth
                                    generates greenhouse gases that are accelerating climate change. We encourage you to
                                    choose your items carefully to avoid unnecessary return shipments.</p>
                                <p class="text_16 mb-4">You have to pay for return shipping if you want to exchange
                                    your product for another size or the package is returned because it has not been
                                    picked up at the post office.</p>
                            </div>
                        </div>
                        <div id="preview" class="tab-pane fade">
                            <div class="review-area accordion-parent">
                                <h4 class="heading_18 mb-3">Customer Reviews</h4>
                                <div class="review-header d-flex justify-content-between align-items-center">
                                    <p class="text_16">No reviews yet.</p>
                                    <button class="text_14 bg-transparent text-decoration-underline write-btn"
                                        type="button">Write a review</button>
                                </div>
                                <div class="review-form-area accordion-child">
                                    <form action="#">
                                        <fieldset>
                                            <label class="label">Full Name</label>
                                            <input type="text" placeholder="Enter your name" />
                                        </fieldset>
                                        <fieldset>
                                            <label class="label">Email</label>
                                            <input type="email" placeholder="john.smith@example.com" />
                                        </fieldset>
                                        <fieldset>
                                            <label class="label">Rating</label>
                                            <div class="star-rating">
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.168 5.77344L10.082 5.23633L8 0.566406L5.91797 5.23633L0.832031 5.77344L4.63086 9.19727L3.57031 14.1992L8 11.6445L12.4297 14.1992L11.3691 9.19727L15.168 5.77344Z"
                                                        fill="#B2B2B2" />
                                                </svg>
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.168 5.77344L10.082 5.23633L8 0.566406L5.91797 5.23633L0.832031 5.77344L4.63086 9.19727L3.57031 14.1992L8 11.6445L12.4297 14.1992L11.3691 9.19727L15.168 5.77344Z"
                                                        fill="#B2B2B2" />
                                                </svg>
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.168 5.77344L10.082 5.23633L8 0.566406L5.91797 5.23633L0.832031 5.77344L4.63086 9.19727L3.57031 14.1992L8 11.6445L12.4297 14.1992L11.3691 9.19727L15.168 5.77344Z"
                                                        fill="#B2B2B2" />
                                                </svg>
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.168 5.77344L10.082 5.23633L8 0.566406L5.91797 5.23633L0.832031 5.77344L4.63086 9.19727L3.57031 14.1992L8 11.6445L12.4297 14.1992L11.3691 9.19727L15.168 5.77344Z"
                                                        fill="#B2B2B2" />
                                                </svg>
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.168 5.77344L10.082 5.23633L8 0.566406L5.91797 5.23633L0.832031 5.77344L4.63086 9.19727L3.57031 14.1992L8 11.6445L12.4297 14.1992L11.3691 9.19727L15.168 5.77344Z"
                                                        fill="#B2B2B2" />
                                                </svg>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <label class="label">Review Title</label>
                                            <input type="text" placeholder="Give your review a title" />
                                        </fieldset>
                                        <fieldset>
                                            <label class="label">Body of Review (2000)</label>
                                            <textarea cols="30" rows="10" placeholder="Write your comments here"></textarea>
                                        </fieldset>

                                        <button type="submit"
                                            class="position-relative review-submit-btn">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product tab end -->

            <!-- you may also like start -->
            <div class="featured-collection-section mt-100 home-section overflow-hidden">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-heading">You may also like</h2>
                    </div>

                    <div class="product-container position-relative">
                        <div class="common-slider"
                            data-slick='{
                        "slidesToShow": 4, 
                        "slidesToScroll": 1,
                        "dots": false,
                        "arrows": true,
                        "responsive": [
                        {
                            "breakpoint": 1281,
                            "settings": {
                            "slidesToShow": 3
                            }
                        },
                        {
                            "breakpoint": 768,
                            "settings": {
                            "slidesToShow": 2
                            }
                        }
                        ]
                    }'>

                            <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img" src="assets/img/products/bags/11.jpg"
                                                alt="product-img">
                                            <img class="primary-img" src="assets/img/products/bags/1.jpg"
                                                alt="product-img">
                                        </a>

                                        <div class="product-card-action product-card-action-2">
                                            <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                data-bs-toggle="modal">QUICKVIEW</a>
                                            <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                        </div>

                                        <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                            <svg class="icon icon-wishlist" width="26" height="22"
                                                viewBox="0 0 26 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                    fill="black" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="product-card-details text-center">
                                        <h3 class="product-card-title"><a href="collection-left-sidebar.html">black
                                                backpack</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$1529</span>
                                            <span class="card-price-compare text-decoration-line-through">$1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img" src="assets/img/products/bags/22.jpg"
                                                alt="product-img">
                                            <img class="primary-img" src="assets/img/products/bags/2.jpg"
                                                alt="product-img">
                                        </a>

                                        <div class="product-card-action product-card-action-2">
                                            <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                data-bs-toggle="modal">QUICKVIEW</a>
                                            <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                        </div>

                                        <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                            <svg class="icon icon-wishlist" width="26" height="22"
                                                viewBox="0 0 26 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                    fill="black" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="product-card-details text-center">
                                        <h3 class="product-card-title"><a href="collection-left-sidebar.html">lady
                                                handbag</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$529</span>
                                            <span class="card-price-compare text-decoration-line-through">$759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img" src="assets/img/products/bags/23.jpg"
                                                alt="product-img">
                                            <img class="primary-img" src="assets/img/products/bags/3.jpg"
                                                alt="product-img">
                                        </a>

                                        <div class="product-card-action product-card-action-2">
                                            <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                data-bs-toggle="modal">QUICKVIEW</a>
                                            <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                        </div>

                                        <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                            <svg class="icon icon-wishlist" width="26" height="22"
                                                viewBox="0 0 26 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                    fill="black" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="product-card-details text-center">
                                        <h3 class="product-card-title"><a href="collection-left-sidebar.html">men
                                                travel bag</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$529</span>
                                            <span class="card-price-compare text-decoration-line-through">$759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img" src="assets/img/products/bags/26.jpg"
                                                alt="product-img">
                                            <img class="primary-img" src="assets/img/products/bags/4.jpg"
                                                alt="product-img">
                                        </a>

                                        <div class="product-card-action product-card-action-2">
                                            <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                data-bs-toggle="modal">QUICKVIEW</a>
                                            <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                        </div>

                                        <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                            <svg class="icon icon-wishlist" width="26" height="22"
                                                viewBox="0 0 26 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                    fill="black" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="product-card-details text-center">
                                        <h3 class="product-card-title"><a href="collection-left-sidebar.html">nike
                                                legend
                                                stripe</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$529</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img" src="assets/img/products/bags/27.jpg"
                                                alt="product-img">
                                            <img class="primary-img" src="assets/img/products/bags/5.jpg"
                                                alt="product-img">
                                        </a>

                                        <div class="product-card-action product-card-action-2">
                                            <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                data-bs-toggle="modal">QUICKVIEW</a>
                                            <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                        </div>

                                        <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                            <svg class="icon icon-wishlist" width="26" height="22"
                                                viewBox="0 0 26 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                    fill="black" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="product-card-details text-center">
                                        <h3 class="product-card-title"><a href="collection-left-sidebar.html">nike
                                                legend
                                                stripe</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$529</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img" src="assets/img/products/bags/29.jpg"
                                                alt="product-img">
                                            <img class="primary-img" src="assets/img/products/bags/6.jpg"
                                                alt="product-img">
                                        </a>

                                        <div class="product-card-action product-card-action-2">
                                            <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                data-bs-toggle="modal">QUICKVIEW</a>
                                            <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                        </div>

                                        <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                            <svg class="icon icon-wishlist" width="26" height="22"
                                                viewBox="0 0 26 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                    fill="black" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="product-card-details text-center">
                                        <h3 class="product-card-title"><a href="collection-left-sidebar.html">nike
                                                legend
                                                stripe</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$529</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img" src="assets/img/products/bags/17.jpg"
                                                alt="product-img">
                                            <img class="primary-img" src="assets/img/products/bags/7.jpg"
                                                alt="product-img">
                                        </a>

                                        <div class="product-card-action product-card-action-2">
                                            <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                data-bs-toggle="modal">QUICKVIEW</a>
                                            <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                        </div>

                                        <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                            <svg class="icon icon-wishlist" width="26" height="22"
                                                viewBox="0 0 26 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                    fill="black" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="product-card-details text-center">
                                        <h3 class="product-card-title"><a href="collection-left-sidebar.html">women
                                                vanity
                                                bag</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$529</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img" src="assets/img/products/bags/18.jpg"
                                                alt="product-img">
                                            <img class="primary-img" src="assets/img/products/bags/8.jpg"
                                                alt="product-img">
                                        </a>

                                        <div class="product-card-action product-card-action-2">
                                            <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                data-bs-toggle="modal">QUICKVIEW</a>
                                            <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                        </div>

                                        <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                            <svg class="icon icon-wishlist" width="26" height="22"
                                                viewBox="0 0 26 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                    fill="black" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="product-card-details text-center">
                                        <h3 class="product-card-title"><a href="collection-left-sidebar.html">women
                                                large
                                                bag</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$529</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
                    </div>
                </div>
            </div>
            <!-- you may also lik end -->
        </main>

        <!-- footer start -->
        @include('footer')
        <!-- footer end -->

        <!-- scrollup start -->
        <button id="scrollup">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
