<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --royal-blue: #2563eb;
            --light-orange: #fb923c;
            --text-gray: #4b5563;
            --border-color: #e5e7eb;
            --success-green: #10b981;
            --background-light: #f8fafc;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: white;
            color: #1f2937;
            line-height: 1.6;
        }


        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        .product-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-top: 2rem;
        }

        .navigation-breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
            color: var(--text-gray);
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background-color: var(--background-light);
            color: var(--text-gray);
            text-decoration: none;
            border-radius: 12px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            background-color: #e2e8f0;
            transform: translateX(-4px);
        }

        .product-gallery {
            position: sticky;
            top: 2rem;
        }

        .product-image-container {
            border-radius: 24px;
            overflow: hidden;
            background: var(--background-light);
            margin-bottom: 1.5rem;
            box-shadow: var(--shadow-md);
        }

        .product-image {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }

        .product-image:hover {
            transform: scale(1.02);
        }

        .color-selection {
            display: flex;
            gap: 1rem;
            margin: 1.5rem 0;
            flex-wrap: wrap;
        }

        .color-btn {
            padding: 0.75rem 1.5rem;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            background: white;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 500;
        }

        .color-btn:hover {
            border-color: var(--royal-blue);
            background: var(--background-light);
            transform: translateY(-2px);
        }

        .color-btn.active {
            border-color: var(--royal-blue);
            background: #eef2ff;
        }

        .color-dot {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid var(--border-color);
        }

        .product-details {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .product-header {
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 2rem;
        }

        .product-title {
            font-size: 2.5rem;
            color: #1f2937;
            margin-bottom: 1rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .product-description {
            color: var(--text-gray);
            font-size: 1.1rem;
            margin: 1.5rem 0;
            line-height: 1.8;
        }

        .rating-price-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 1.5rem 0;
            padding: 1.5rem;
            background: var(--background-light);
            border-radius: 16px;
        }

        .rating {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .stars {
            color: var(--light-orange);
            font-size: 1.25rem;
        }

        .rating-number {
            font-weight: 600;
            color: var(--text-gray);
        }

        .price-container {
            text-align: right;
        }

        .original-price {
            font-size: 1.25rem;
            color: var(--text-gray);
            text-decoration: line-through;
            margin-right: 1rem;
        }

        .slashed-price {
            font-size: 2rem;
            color: var(--royal-blue);
            font-weight: bold;
        }

        .action-buttons {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin: 2rem 0;
        }

        .btn {
            padding: 1.25rem 2rem;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
        }

        .btn-whatsapp {
            background: #25D366;
            color: white;
        }

        .btn-cart {
            background: var(--royal-blue);
            color: white;
        }

        .btn-view-cart {
            background: white;
            border: 2px solid var(--royal-blue);
            color: var(--royal-blue);
            grid-column: span 2;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .info-sections {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 2rem;
        }

        .expandable-section {
            border: 1px solid var(--border-color);
            border-radius: 16px;
            overflow: hidden;
            background: white;
            transition: all 0.3s ease;
        }

        .expandable-section:hover {
            box-shadow: var(--shadow-sm);
        }

        .expandable-header {
            padding: 1.5rem;
            background: var(--background-light);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
        }

        .expandable-content {
            padding: 1.5rem;
            display: none;
            line-height: 1.8;
            color: var(--text-gray);
        }

        .expandable-content.show {
            display: block;
        }

        .bundle-and-save {
            margin-top: 3rem;
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: var(--shadow-sm);
        }

        .bundle-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin: 1.5rem 0;
        }

        .bundle-table th,
        .bundle-table td {
            padding: 1.25rem;
            border: 1px solid var(--border-color);
            text-align: left;
        }

        .bundle-table th {
            background: var(--background-light);
            font-weight: 600;
        }

        .bundle-table tr:first-child th:first-child {
            border-top-left-radius: 12px;
        }

        .bundle-table tr:first-child th:last-child {
            border-top-right-radius: 12px;
        }

        .bundle-table tr:last-child td:first-child {
            border-bottom-left-radius: 12px;
        }

        .bundle-table tr:last-child td:last-child {
            border-bottom-right-radius: 12px;
        }

        .video-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .video-container {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            background: var(--background-light);
        }

        .video-container video {
            width: 100%;
            height: auto;
            display: block;
        }

        .related-products {
            margin-top: 4rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border-color);
        }

        .related-products h2 {
            margin-bottom: 2rem;
            font-size: 1.8rem;
            color: #1f2937;
        }

        .related-products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .related-product {
            border-radius: 16px;
            overflow: hidden;
            background: white;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }

        .related-product:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .related-product img {
            width: 100%;
            height: 280px;
            object-fit: cover;
        }

        .related-product-info {
            padding: 1.5rem;
        }

        .related-product-info h3 {
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }

        .stock-status {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: #ecfdf5;
            color: var(--success-green);
            border-radius: 8px;
            font-weight: 500;
            margin-top: 1rem;
        }

        @media (max-width: 1024px) {
            .product-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .product-gallery {
                position: static;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .action-buttons {
                grid-template-columns: 1fr;
            }

            .btn-view-cart {
                grid-column: span 1;
            }

            .rating-price-container {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .price-container {
                text-align: center;
            }
        }

        @media (max-width: 640px) {
            .product-title {
                font-size: 2rem;
            }

            .expandable-header {
                padding: 1rem;
            }

            .expandable-content {
                padding: 1rem;
            }

            .bundle-table {
                font-size: 0.9rem;
            }

            .bundle-table th,
            .bundle-table td {
                padding: 0.75rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navigation-breadcrumb">
            <a href="/shop" class="back-button">
                <i class="fas fa-arrow-left"></i> Back to Shop
            </a>
        </nav>

        <div class="product-grid">
            <div class="product-gallery">
                <div class="product-image-container">
                    <img id="product-image" class="product-image"
                        src="{{ asset('storage/' . $product->images->first()->image_path) }}"
                        alt="{{ $product->name }}">
                </div>

                <div class="color-selection">
                    @foreach ($product->images as $image)
                        <button class="color-btn" data-color="{{ $image->color }}"
                            onclick="changeImage('{{ asset('storage/' . $image->image_path) }}')">
                            <span class="color-dot" style="background-color: {{ $image->color }};"></span>
                            {{ ucfirst($image->color) }}
                        </button>
                    @endforeach
                </div>

                <div class="video-gallery">
                    @foreach ($product->videos as $video)
                        <div class="video-container">
                            <video autoplay muted loop>
                                <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="product-details">
                <div class="product-header">
                    <h1 class="product-title">{{ $product->name }}</h1>
                    <p class="product-description">{{ $product->description }}</p>

                    <div class="rating-price-container">
                        <div class="rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-number">4.8 (256 reviews)</span>
                        </div>
                        <div class="price-container">
                            <span class="original-price">KES{{ number_format($product->price, 2) }}</span>
                            <span class="slashed-price">KES{{ number_format($product->slashed_price, 2) }}</span>
                        </div>
                    </div>

                    <div class="stock-status">
                        <i class="fas fa-check-circle"></i>
                        In Stock
                    </div>
                </div>
                <!-- Add to Cart Form -->
                @if (session('success'))
                    <div class="alert alert-success" style="background-color: #28a745; color: white;">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="action-buttons">
                    <button class="btn btn-whatsapp" onclick="orderViaWhatsApp()">
                        <i class="fab fa-whatsapp"></i> Order via WhatsApp
                    </button>



                    <form action="{{ route('add.to.cart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button class="btn btn-cart">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                    </form>



                    <a href="{{ route('cart') }}" class="btn btn-view-cart">
                        <i class="fas fa-shopping-bag"></i> View Cart
                    </a>
                </div>

                <div class="info-sections">
                    <div class="expandable-section">
                        <div class="expandable-header" onclick="toggleSection(this)">
                            <h4>Design Description</h4>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="expandable-content">
                            <p>{{ $product->design_description }}</p>
                        </div>
                    </div>

                    <div class="expandable-section">
                        <div class="expandable-header" onclick="toggleSection(this)">
                            <h4>Features</h4>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="expandable-content">
                            <p>{{ $product->features }}</p>
                        </div>
                    </div>
                </div>

                <div style="padding: 20px; font-family: Arial, sans-serif; text-align: center;">
                    <h2 style="font-size: 24px; color: #6D4E91; border-bottom: 1px solid #DDD; padding-bottom: 10px;">
                        Bundle & Save</h2>
                    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-top: 20px;">
                        @for ($quantity = 1; $quantity <= 4; $quantity++)
                            @php
                                $originalPrice = $product->price * $quantity;
                                $bundlePrice = $product->slashed_price
                                    ? $product->slashed_price * $quantity
                                    : $originalPrice;
                                $savings = $originalPrice - $bundlePrice;
                                $isMostPopular = $quantity === 2;
                            @endphp
                            <div
                                style="
                border: 1px solid #DDD;
                border-radius: 8px;
                padding: 15px;
                width: 200px;
                text-align: center;
                background-color: {{ $isMostPopular ? '#F3E9FF' : '#FFF' }};
                box-shadow: {{ $isMostPopular ? '0 0 10px rgba(109, 78, 145, 0.2)' : 'none' }};
            ">
                                <h3 style="font-size: 18px; color: #6D4E91; margin-bottom: 10px;">
                                    Buy {{ $quantity }}
                                </h3>
                                @if ($isMostPopular)
                                    <span style="font-size: 12px; color: #6D4E91; font-weight: bold;">Most
                                        Popular</span>
                                @endif
                                <p style="font-size: 14px; color: #333; margin: 10px 0;">
                                    You save <span
                                        style="color: #0A8754; font-weight: bold;">KSh{{ number_format($savings, 2) }}</span>
                                </p>
                                <p style="font-size: 16px; color: #333; font-weight: bold; margin: 5px 0;">
                                    KSh{{ number_format($bundlePrice, 2) }}
                                </p>
                                <p style="font-size: 12px; color: #999; text-decoration: line-through;">
                                    KSh{{ number_format($originalPrice, 2) }}
                                </p>
                            </div>
                        @endfor
                    </div>
                </div>

            </div>
        </div>

        <div class="related-products">
            <h2>Products You Might Like</h2>
            <div class="related-products-grid">
                @foreach ($relatedProducts as $relatedProduct)
                    <button class="related-product"
                        onclick="window.location.href='{{ route('product.show', $relatedProduct->id) }}'">
                        <img src="{{ asset('storage/' . $relatedProduct->images->first()->image_path) }}"
                            alt="{{ $relatedProduct->name }}">
                        <div class="related-product-info">
                            <h3>{{ $relatedProduct->name }}</h3>
                            <p class="price">KES {{ number_format($relatedProduct->price, 2) }}</p>
                        </div>
                    </button>
                @endforeach
            </div>
        </div>

    </div>

    <script>
        function changeImage(imageUrl) {
            const img = document.getElementById('product-image');
            img.style.opacity = '0';
            setTimeout(() => {
                img.src = imageUrl;
                img.style.opacity = '1';
            }, 300);

            // Remove active class from all buttons
            document.querySelectorAll('.color-btn').forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            event.currentTarget.classList.add('active');
        }

        function orderViaWhatsApp() {
            const message = encodeURIComponent(`Hello, I would like to inquire about the product: {{ $product->name }}.`);
            const phone = "+254745478277";
            const url = `https://wa.me/${phone}?text=${message}`;
            window.open(url, "_blank");
        }

        function addToCart() {
            const btn = event.currentTarget;
            btn.innerHTML = '<i class="fas fa-check"></i> Added to Cart';
            btn.style.background = 'var(--success-green)';
            setTimeout(() => {
                btn.innerHTML = '<i class="fas fa-shopping-cart"></i> Add to Cart';
                btn.style.background = 'var(--royal-blue)';
            }, 2000);
        }

        function toggleSection(element) {
            const content = element.nextElementSibling;
            const icon = element.querySelector('i');
            content.classList.toggle('show');
            icon.classList.toggle('fa-chevron-up');
            icon.classList.toggle('fa-chevron-down');
        }

        // Set first color button as active
        document.querySelector('.color-btn').classList.add('active');

        // Add smooth fade-in effect for images
        document.getElementById('product-image').style.transition = 'opacity 0.3s ease';
    </script>
</body>

</html>
