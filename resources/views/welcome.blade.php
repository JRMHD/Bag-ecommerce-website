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
            --primary-color: #F76B6A;
            --secondary-color: #F0686E;

            --btn-primary-border-radius: 0.25rem;
            --btn-primary-color: #fff;
            --btn-primary-background-color: #F76B6A;
            --btn-primary-border-color: #F76B6A;
            --btn-primary-hover-color: #fff;
            --btn-primary-background-hover-color: #F0686E;
            --btn-primary-border-hover-color: #F0686E;
            --btn-primary-font-weight: 500;

            --btn-secondary-border-radius: 0.25rem;
            --btn-secondary-color: #F76B6A;
            --btn-secondary-background-color: transparent;
            --btn-secondary-border-color: #F76B6A;
            --btn-secondary-hover-color: #fff;
            --btn-secondary-background-hover-color: #F0686E;
            --btn-secondary-border-hover-color: #F0686E;
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
            --section-subheading-font-size: 18px;
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

        <main id="MainContent" class="content-for-layout">
            <!-- slideshow start -->
            <div class="slideshow-section position-relative">
                <div class="slideshow-active activate-slider"
                    data-slick='{
                    "slidesToShow": 1, 
                    "slidesToScroll": 1, 
                    "dots": true,
                    "arrows": true,
                    "responsive": [
                        {
                            "breakpoint": 768,
                            "settings": {
                                "arrows": false
                            }
                        }
                    ]
                }'>
                    <div class="slide-item slide-item-bag position-relative">
                        <img class="slide-img d-none d-md-block" src="assets/img/slideshow/b1.jpg" alt="slide-1">
                        <img class="slide-img d-md-none" src="assets/img/slideshow/b1-m.jpg" alt="slide-1">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex align-items-center justify-content-end">
                                <div class="content-box slide-content py-4">
                                    <p class="slide-text heading_24 animate__animated animate__fadeInUp"
                                        data-animation="animate__animated animate__fadeInUp">
                                        Top Branded
                                    </p>
                                    <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                        data-animation="animate__animated animate__fadeInUp">
                                        Best Bags 2022
                                    </h2>
                                    <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                        href="collection-left-sidebar.html"
                                        data-animation="animate__animated animate__fadeInUp">SHOP
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item position-relative">
                        <img class="slide-img d-none d-md-block" src="assets/img/slideshow/b2.jpg" alt="slide-2">
                        <img class="slide-img d-md-none" src="assets/img/slideshow/b2-m.jpg" alt="slide-2">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex align-items-center">
                                <div class="content-box slide-content py-4">
                                    <p class="slide-text heading_24 animate__animated animate__fadeInUp"
                                        data-animation="animate__animated animate__fadeInUp">
                                        Top Branded
                                    </p>
                                    <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                        data-animation="animate__animated animate__fadeInUp">
                                        Best Bags 2022
                                    </h2>
                                    <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                        href="collection-left-sidebar.html"
                                        data-animation="animate__animated animate__fadeInUp">SHOP
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item position-relative">
                        <img class="slide-img d-none d-md-block" src="assets/img/slideshow/b3.jpg" alt="slide-3">
                        <img class="slide-img d-md-none" src="assets/img/slideshow/b3-m.jpg" alt="slide-3">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex align-items-center justify-content-end">
                                <div class="content-box slide-content py-4">
                                    <p class="slide-text heading_24 animate__animated animate__fadeInUp"
                                        data-animation="animate__animated animate__fadeInUp">
                                        Top Branded
                                    </p>
                                    <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                        data-animation="animate__animated animate__fadeInUp">
                                        Best Bags 2022
                                    </h2>
                                    <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                        href="collection-left-sidebar.html"
                                        data-animation="animate__animated animate__fadeInUp">SHOP
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="activate-arrows"></div>
                <div class="activate-dots dot-tools"></div>
            </div>
            <!-- slideshow end -->

            <!-- banner start -->
            <div class="banner-section mt-100 overflow-hidden">
                <div class="banner-section-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-6 col-12" data-aos="fade-right" data-aos-duration="1200">
                                <a class="banner-item position-relative rounded" href="collection-left-sidebar.html">
                                    <img class="banner-img" src="assets/img/banner/bag-1.jpg" alt="banner-1">
                                    <div class="content-absolute content-slide">
                                        <div class="container height-inherit d-flex align-items-center">
                                            <div class="content-box banner-content p-4">
                                                <p class="heading_18 mb-3">Mini Backpack</p>
                                                <h2 class="heading_34">25% off on <br>all bags</h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12" data-aos="fade-left" data-aos-duration="1200">
                                <a class="banner-item position-relative rounded" href="collection-left-sidebar.html">
                                    <img class="banner-img" src="assets/img/banner/bag-2.jpg" alt="banner-2">
                                    <div class="content-absolute content-slide">
                                        <div class="container height-inherit d-flex align-items-center">
                                            <div class="content-box banner-content p-4">
                                                <p class="heading_18 mb-3">New Year Sell</p>
                                                <h2 class="heading_34">25% off <br>for women</h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner end -->


            <!-- shop by category start -->
            <div class="shop-category mt-100 overflow-hidden">
                <div class="collection-tab-inner">
                    <div class="container">
                        <div class="section-header text-center">
                            <h2 class="section-heading">Shop By Category</h2>
                        </div>
                        <div class="grid-container shop-category-inner">
                            <a class="grid-item grid-item-1 position-relative rounded mt-0 d-flex"
                                href="collection-left-sidebar.html">
                                <img class="banner-img" src="assets/img/banner/bag-3.jpg" alt="banner-1">
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex">
                                        <div class="content-box banner-content p-4">
                                            <p class="heading_16 m-0 primary-color">New Arrivals</p>
                                            <h2 class="heading_18">Women Beautiful Handbag</h2>
                                            <span class="text_12 mt-2 link-underline d-block">SHOP
                                                COLLECTION
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="grid-item grid-item-2 position-relative rounded mt-0 d-flex"
                                href="collection-left-sidebar.html">
                                <img class="banner-img" src="assets/img/banner/bag-4.jpg" alt="banner-1">
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex">
                                        <div class="content-box banner-content p-4">
                                            <p class="heading_16 m-0 primary-color">New Arrivals</p>
                                            <h2 class="heading_18">Bag Bouquet</h2>
                                            <span class="text_12 mt-2 link-underline d-block">SHOP
                                                COLLECTION
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="grid-item grid-item-3 position-relative rounded mt-0 d-flex"
                                href="collection-left-sidebar.html">
                                <img class="banner-img" src="assets/img/banner/bag-5.jpg" alt="banner-1">
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex justify-content-end text-end">
                                        <div class="content-box banner-content p-4">
                                            <p class="heading_16 m-0 primary-color">Quality Product</p>
                                            <h2 class="heading_18">Leather collection</h2>
                                            <span class="text_12 mt-2 link-underline d-block">SHOP
                                                COLLECTION
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="grid-item grid-item-4 position-relative rounded mt-0 d-flex"
                                href="collection-left-sidebar.html">
                                <img class="banner-img" src="assets/img/banner/bag-6.jpg" alt="banner-1">
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex">
                                        <div class="content-box banner-content p-4">
                                            <p class="heading_16 m-0 primary-color">New Arrivals</p>
                                            <h2 class="heading_18">Office Carrier</h2>
                                            <span class="text_12 mt-2 link-underline d-block">SHOP
                                                COLLECTION
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="grid-item grid-item-5 position-relative rounded mt-0 d-flex"
                                href="collection-left-sidebar.html">
                                <img class="banner-img" src="assets/img/banner/bag-7.jpg" alt="banner-1">
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex">
                                        <div class="content-box banner-content p-4">
                                            <p class="heading_16 m-0 primary-color">New Arrivals</p>
                                            <h2 class="heading_18">Travel The World</h2>
                                            <span class="text_12 mt-2 link-underline d-block">SHOP
                                                COLLECTION
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shop by category end -->



            <!-- instagram start -->
            <div class="instagram-section mt-100 overflow-hidden home-section">
                <div class="instagram-inner">
                    <div class="container">
                        <div class="section-header text-center">
                            <div class="section-icon">
                                <svg width="54" height="54" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.99998 2.62165C12.4031 2.62165 12.6877 2.6308 13.6367 2.6741C14.5142 2.71415 14.9908 2.86077 15.3079 2.98398C15.728 3.14725 16.0278 3.34231 16.3428 3.65723C16.6577 3.97215 16.8528 4.272 17.016 4.69206C17.1392 5.00923 17.2859 5.48577 17.3259 6.36323C17.3692 7.31228 17.3783 7.5969 17.3783 10C17.3783 12.4031 17.3692 12.6878 17.3259 13.6368C17.2859 14.5143 17.1392 14.9908 17.016 15.308C16.8528 15.728 16.6577 16.0279 16.3428 16.3428C16.0278 16.6577 15.728 16.8528 15.3079 17.016C14.9908 17.1393 14.5142 17.2859 13.6367 17.3259C12.6879 17.3692 12.4032 17.3784 9.99998 17.3784C7.59672 17.3784 7.3121 17.3692 6.36323 17.3259C5.48574 17.2859 5.00919 17.1393 4.69206 17.016C4.27196 16.8528 3.97212 16.6577 3.6572 16.3428C3.34227 16.0279 3.14721 15.728 2.98398 15.308C2.86073 14.9908 2.71411 14.5143 2.67406 13.6368C2.63076 12.6878 2.62162 12.4031 2.62162 10C2.62162 7.5969 2.63076 7.31228 2.67406 6.36326C2.71411 5.48577 2.86073 5.00923 2.98398 4.69206C3.14721 4.272 3.34227 3.97215 3.6572 3.65723C3.97212 3.34231 4.27196 3.14725 4.69206 2.98398C5.00919 2.86077 5.48574 2.71415 6.36319 2.6741C7.31224 2.6308 7.59687 2.62165 9.99998 2.62165ZM9.99998 1C7.55571 1 7.24926 1.01036 6.28931 1.05416C5.33133 1.09789 4.67712 1.25001 4.10462 1.47251C3.51279 1.70251 3.01088 2.01025 2.51055 2.51058C2.01021 3.01092 1.70247 3.51283 1.47247 4.10466C1.24997 4.67716 1.09785 5.33137 1.05412 6.28935C1.01032 7.24926 1 7.55575 1 10C1 12.4443 1.01032 12.7508 1.05412 13.7107C1.09785 14.6687 1.24997 15.3229 1.47247 15.8954C1.70247 16.4872 2.01021 16.9891 2.51055 17.4895C3.01088 17.9898 3.51279 18.2975 4.10462 18.5275C4.67712 18.75 5.33133 18.9021 6.28931 18.9459C7.24926 18.9897 7.55571 19 9.99998 19C12.4443 19 12.7507 18.9897 13.7107 18.9459C14.6686 18.9021 15.3228 18.75 15.8953 18.5275C16.4872 18.2975 16.9891 17.9898 17.4894 17.4895C17.9898 16.9891 18.2975 16.4872 18.5275 15.8954C18.75 15.3229 18.9021 14.6687 18.9458 13.7107C18.9896 12.7508 19 12.4443 19 10C19 7.55575 18.9896 7.24926 18.9458 6.28935C18.9021 5.33137 18.75 4.67716 18.5275 4.10466C18.2975 3.51283 17.9898 3.01092 17.4894 2.51058C16.9891 2.01025 16.4872 1.70251 15.8953 1.47251C15.3228 1.25001 14.6686 1.09789 13.7107 1.05416C12.7507 1.01036 12.4443 1 9.99998 1ZM9.99998 5.37838C7.44753 5.37838 5.37835 7.44757 5.37835 10C5.37835 12.5525 7.44753 14.6217 9.99998 14.6217C12.5524 14.6217 14.6216 12.5525 14.6216 10C14.6216 7.44757 12.5524 5.37838 9.99998 5.37838ZM9.99998 13C8.34314 13 6.99996 11.6569 6.99996 10C6.99996 8.34317 8.34314 7 9.99998 7C11.6568 7 13 8.34317 13 10C13 11.6569 11.6568 13 9.99998 13ZM15.8842 5.19579C15.8842 5.79226 15.4007 6.27581 14.8042 6.27581C14.2077 6.27581 13.7242 5.79226 13.7242 5.19579C13.7242 4.59931 14.2077 4.1158 14.8042 4.1158C15.4007 4.1158 15.8842 4.59931 15.8842 5.19579Z"
                                        fill="#00234D" />
                                </svg>
                            </div>
                            <h2 class="section-heading">Bag & Water pot</h2>
                            <p class="section-subheading">See how our customers styled shoe products in their foot</p>
                        </div>
                        <div class="instagram-container position-relative mt-48">
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
                                <div class="instagram-slick-item" data-aos="fade-up" data-aos-duration="700">
                                    <div class="instagram-card">
                                        <a class="instagram-img-wrapper" href="index-bag.html">
                                            <img src="assets/img/instagram/bag1.jpg" alt="img"
                                                class="instagram-card-img rounded">
                                        </a>
                                    </div>
                                </div>
                                <div class="instagram-slick-item" data-aos="fade-up" data-aos-duration="700">
                                    <div class="instagram-card">
                                        <a class="instagram-img-wrapper" href="index-bag.html">
                                            <img src="assets/img/instagram/bag2.jpg" alt="img"
                                                class="instagram-card-img rounded">
                                        </a>
                                    </div>
                                </div>
                                <div class="instagram-slick-item" data-aos="fade-up" data-aos-duration="700">
                                    <div class="instagram-card">
                                        <a class="instagram-img-wrapper" href="index-bag.html">
                                            <img src="assets/img/instagram/bag3.jpg" alt="img"
                                                class="instagram-card-img rounded">
                                        </a>
                                    </div>
                                </div>
                                <div class="instagram-slick-item" data-aos="fade-up" data-aos-duration="700">
                                    <div class="instagram-card">
                                        <a class="instagram-img-wrapper" href="index-bag.html">
                                            <img src="assets/img/instagram/bag4.jpg" alt="img"
                                                class="instagram-card-img rounded">
                                        </a>
                                    </div>
                                </div>
                                <div class="instagram-slick-item" data-aos="fade-up" data-aos-duration="700">
                                    <div class="instagram-card">
                                        <a class="instagram-img-wrapper" href="index-bag.html">
                                            <img src="assets/img/instagram/bag2.jpg" alt="img"
                                                class="instagram-card-img rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- instagram end -->

            <!-- faq start -->
            <div class="faq-section mt-100 overflow-hidden">
                <div class="faq-inner">
                    <div class="container">
                        <div class="section-header text-center">
                            <h2 class="section-heading">Frequently Asked Question</h2>
                            <p class="section-subheading">All your questions about Axion answered </p>
                        </div>
                        <div class="faq-container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="faq-item rounded">
                                        <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                            data-bs-toggle="collapse" data-bs-target="#faq1">
                                            Is Bisum a safe investment?
                                            <span class="faq-heading-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="#F76B6A"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </span>
                                        </h2>
                                        <div id="faq1" class="accordion-collapse collapse">
                                            <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit.
                                                Sit repellat
                                                quod facere illo esse cumque inventore veniam necessitatibus totam
                                                repudiandae. Hic rerum animi modi sed?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="faq-item rounded">
                                        <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                            data-bs-toggle="collapse" data-bs-target="#faq2">
                                            How do I set up a crypto wallet?
                                            <span class="faq-heading-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="#F76B6A"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </span>
                                        </h2>
                                        <div id="faq2" class="accordion-collapse collapse">
                                            <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit.
                                                Sit repellat
                                                quod facere illo esse cumque inventore veniam necessitatibus totam
                                                repudiandae. Hic rerum animi modi sed?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="faq-item rounded">
                                        <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                            data-bs-toggle="collapse" data-bs-target="#faq3">
                                            Where and how do I buy Bisum?
                                            <span class="faq-heading-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="#F76B6A"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </span>
                                        </h2>
                                        <div id="faq3" class="accordion-collapse collapse">
                                            <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit.
                                                Sit repellat
                                                quod facere illo esse cumque inventore veniam necessitatibus totam
                                                repudiandae. Hic rerum animi modi sed?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="faq-item rounded">
                                        <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                            data-bs-toggle="collapse" data-bs-target="#faq4">
                                            What often will results be reported?
                                            <span class="faq-heading-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="#F76B6A"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </span>
                                        </h2>
                                        <div id="faq4" class="accordion-collapse collapse">
                                            <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit.
                                                Sit repellat
                                                quod facere illo esse cumque inventore veniam necessitatibus totam
                                                repudiandae. Hic rerum animi modi sed?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="faq-item rounded">
                                        <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                            data-bs-toggle="collapse" data-bs-target="#faq5">
                                            How can I get support?
                                            <span class="faq-heading-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="#F76B6A"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </span>
                                        </h2>
                                        <div id="faq5" class="accordion-collapse collapse">
                                            <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit.
                                                Sit repellat
                                                quod facere illo esse cumque inventore veniam necessitatibus totam
                                                repudiandae. Hic rerum animi modi sed?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="faq-item rounded">
                                        <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                            data-bs-toggle="collapse" data-bs-target="#faq6">
                                            Is Axion available on a major Product exchange?
                                            <span class="faq-heading-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="#F76B6A"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </span>
                                        </h2>
                                        <div id="faq6" class="accordion-collapse collapse">
                                            <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit.
                                                Sit repellat
                                                quod facere illo esse cumque inventore veniam necessitatibus totam
                                                repudiandae. Hic rerum animi modi sed?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                                <a class="btn-primary" href="faq.html">SEE MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- faq end -->
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

        <!-- newsletter subscribe modal start -->
        <div class="modal fade" tabindex="-1" id="modal-subscribe">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content newsletter-modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4">
                        <form action="#" class="newletter-modal-form common-form mx-auto">
                            <div class="section-header mb-3">
                                <h4
                                    class="newsletter-modal-heading heading_34 d-flex align-items-center justify-content-center">
                                    <svg class="newsletter-modal-icon" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>

                                    SUBSCRIBE & SAVE
                                </h4>
                                <hr>
                                <p class="newsletter-modal-misc text_14 mt-4 text-center">Sign up & be the first to
                                    hear about exclusive offers, new arrivals & more.</p>
                            </div>
                            <div class="newsletter-input-box d-flex align-items-center">
                                <input class="mt-2 px-3" type="email" placeholder="Email address">
                                <button type="submit" class="btn-primary d-block mt-2 btn-signin">SUBSCRIBE</button>
                            </div>
                            <p class="newsletter-modal-misc text_14 mt-4 text-center pb-4">You can change your email
                                preference any time by clicking "unsubscribe" in your email.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter subscribe modal end -->

        <!-- all js -->
        <script src="assets/js/vendor.js"></script>
        <script src="assets/js/main.js"></script>
    </div>
</body>


</html>
