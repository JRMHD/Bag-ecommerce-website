<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - Product Details</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #3b82f6;
            --text-primary: #1f2937;
            --text-secondary: #64748b;
            --bg-primary: #ffffff;
            --bg-secondary: #f1f5f9;
        }

        body {
            font-family: 'SF Pro Display', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--bg-secondary);
            color: var(--text-primary);
            line-height: 1.5;
            min-height: 100vh;
        }

        .main-container {
            max-width: 100vw;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navigation {
            position: sticky;
            top: 0;
            z-index: 50;
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(8px);
            padding: 1rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background-color: var(--bg-secondary);
            color: var(--text-primary);
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.2s ease;
        }

        .back-btn:hover {
            background-color: #e2e8f0;
        }

        .product-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            max-height: calc(100vh - 60px);
            overflow-y: auto;
        }

        .product-container {
            display: grid;
            padding: 1rem;
            gap: 2rem;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        .image-gallery {
            position: relative;
            aspect-ratio: 1;
            border-radius: 16px;
            overflow: hidden;
            background: var(--bg-primary);
        }

        .main-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .thumbnail-strip {
            position: absolute;
            bottom: 1rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.9);
            padding: 0.5rem;
            border-radius: 12px;
            backdrop-filter: blur(8px);
        }

        .thumbnail {
            width: 40px;
            height: 40px;
            border-radius: 6px;
            cursor: pointer;
            object-fit: cover;
            transition: all 0.2s ease;
            opacity: 0.6;
        }

        .thumbnail.active {
            opacity: 1;
            transform: scale(1.1);
            box-shadow: 0 0 0 2px var(--primary-color);
        }

        .product-info {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .product-header {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .product-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .rating-container {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .stars {
            color: #fbbf24;
            display: flex;
            gap: 0.25rem;
        }

        .rating-text {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .price-section {
            display: flex;
            align-items: baseline;
            gap: 1rem;
            background: var(--bg-secondary);
            padding: 1rem;
            border-radius: 12px;
        }

        .current-price {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
        }

        .slashed-price {
            color: var(--text-secondary);
            text-decoration: line-through;
            font-size: 1rem;
        }

        .product-meta {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .description {
            line-height: 1.6;
            color: var(--text-secondary);
        }

        .action-buttons {
            display: grid;
            gap: 1rem;
        }

        .primary-button {
            padding: 1rem;
            border: none;
            border-radius: 12px;
            background: var(--primary-color);
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .primary-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
        }

        .secondary-button {
            padding: 1rem;
            border: 1px solid var(--primary-color);
            border-radius: 12px;
            background: transparent;
            color: var(--primary-color);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .secondary-button:hover {
            background: var(--bg-secondary);
        }

        .related-section {
            padding: 2rem 1rem;
            background: var(--bg-primary);
        }

        .related-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .related-grid {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            max-width: 1400px;
            margin: 0 auto;
        }

        .product-card {
            background: var(--bg-primary);
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.2s ease;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
        }

        .card-image {
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover;
        }

        .card-content {
            padding: 1rem;
        }

        .card-title {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .card-price {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .card-button {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 8px;
            background: var(--bg-secondary);
            color: var(--text-primary);
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .card-button:hover {
            background: #e2e8f0;
        }

        @media (min-width: 768px) {
            .product-container {
                grid-template-columns: 1fr 1fr;
                padding: 2rem;
            }

            .product-title {
                font-size: 2rem;
            }

            .thumbnail {
                width: 60px;
                height: 60px;
            }
        }

        @media (min-width: 1024px) {
            .product-container {
                padding: 3rem;
                gap: 4rem;
            }

            .related-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        /* Custom scrollbar */
        .product-section::-webkit-scrollbar {
            width: 8px;
        }

        .product-section::-webkit-scrollbar-track {
            background: transparent;
        }

        .product-section::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 4px;
        }

        /* Animation for image change */
        .main-image {
            transition: opacity 0.3s ease;
        }

        .main-image.fade {
            opacity: 0;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <nav class="navigation">
            <a href="{{ route('shop') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i>
                Back to Shop
            </a>
        </nav>

        <main class="product-section">
            <div class="product-container">
                <div class="image-gallery">
                    @if ($product->images)
                        @php
                            $images = json_decode($product->images);
                            $mainImage = $images[0];
                        @endphp
                        <img src="{{ asset('storage/' . $mainImage) }}" alt="{{ $product->name }}" class="main-image"
                            id="mainImage">

                        <div class="thumbnail-strip">
                            @foreach ($images as $index => $image)
                                <img src="{{ asset('storage/' . $image) }}" alt="{{ $product->name }}"
                                    class="thumbnail {{ $index === 0 ? 'active' : '' }}"
                                    onclick="updateMainImage(this, '{{ asset('storage/' . $image) }}')">
                            @endforeach
                        </div>
                    @endif
                </div>

                <div class="product-info">
                    <div class="product-header">
                        <h1 class="product-title">{{ $product->name }}</h1>
                        <div class="rating-container">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-text">4.5 (128 reviews)</span>
                        </div>
                    </div>

                    <div class="price-section">
                        <span class="current-price">KES {{ number_format($product->price) }}</span>
                        @if ($product->slashed_price)
                            <span class="slashed-price">KES {{ number_format($product->slashed_price) }}</span>
                        @endif
                    </div>

                    <div class="product-meta">
                        <div class="meta-item">
                            <i class="fas fa-palette"></i>
                            <span>{{ $product->color }}</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-box"></i>
                            <span>In Stock</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-truck"></i>
                            <span>Fast Delivery</span>
                        </div>
                    </div>

                    <p class="description">{{ $product->description }}</p>

                    <div class="action-buttons">
                        <button class="primary-button">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                        <button class="secondary-button">Save for Later</button>
                    </div>
                </div>
            </div>

            <section class="related-section">
                <h2 class="related-title">You Might Also Like</h2>
                <div class="related-grid">
                    @foreach ($products as $relatedProduct)
                        <div class="product-card">
                            <img src="{{ asset('storage/' . json_decode($relatedProduct->images)[0]) }}"
                                alt="{{ $relatedProduct->name }}" class="card-image">
                            <div class="card-content">
                                <h3 class="card-title">{{ $relatedProduct->name }}</h3>
                                <p class="card-price">KES {{ number_format($relatedProduct->price) }}</p>
                                <a href="{{ route('product.show', $relatedProduct->id) }}" class="card-button">View
                                    Details</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </main>
    </div>

    <script>
        function updateMainImage(thumbnail, newSrc) {
            const mainImage = document.getElementById('mainImage');
            mainImage.classList.add('fade');

            setTimeout(() => {
                mainImage.src = newSrc;
                mainImage.classList.remove('fade');
            }, 300);

            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.classList.remove('active');
            });
            thumbnail.classList.add('active');
        }
    </script>
</body>

</html>
