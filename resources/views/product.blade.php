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


        /* New styles for reviews section */
        .reviews-section {
            padding: 2rem 1rem;
            background: var(--bg-primary);
            margin-top: 2rem;
        }

        .reviews-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .reviews-title {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .review-card {
            background: var(--bg-primary);
            border-radius: 16px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            border: 1px solid rgba(0, 0, 0, 0.1);
            max-width: 1400px;
            margin: 1rem auto;
        }

        .reviewer-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .reviewer-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--bg-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: var(--primary-color);
        }

        .reviewer-name {
            font-weight: 600;
        }

        .review-date {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .review-content {
            color: var(--text-secondary);
            line-height: 1.6;
            margin-top: 0.5rem;
        }

        .verified-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            padding: 0.25rem 0.5rem;
            background: #ecfdf5;
            color: #059669;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .whatsapp-button {
            padding: 1rem;
            border: 1px solid #25D366;
            border-radius: 12px;
            background: #25D366;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .whatsapp-button:hover {
            background: #128C7E;
            border-color: #128C7E;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 211, 102, 0.2);
        }

        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #4CAF50;
            /* Green */
            color: white;
            padding: 10px;
            border-radius: 5px;
            z-index: 1000;
            display: none;
        }

        .notification.error {
            background-color: #f44336;
            /* Red */
        }

        .bundle-save-section {
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }

        .bundle-save-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
            color: #5a2d82;
            /* Adjust to your theme color */
        }

        .bundle-options {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
            /* Ensures responsiveness */
        }

        .bundle-option {
            flex: 1;
            min-width: 200px;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            background: #f9f9f9;
        }

        .bundle-option .bundle-title {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        .bundle-option .bundle-saving {
            font-size: 14px;
            color: #5a2d82;
            /* Adjust for your branding */
            margin: 5px 0;
        }

        .bundle-option .bundle-price {
            font-size: 18px;
            font-weight: bold;
            color: #27ae60;
            /* Highlight discount price */
        }

        .bundle-option .bundle-original-price {
            font-size: 14px;
            color: #999;
            text-decoration: line-through;
        }

        .bundle-option.most-popular {
            border: 2px solid #5a2d82;
            /* Highlight popular option */
            background: #faf3fc;
        }

        .bundle-option.most-popular .bundle-title {
            color: #5a2d82;
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
                        <a href="https://wa.me/254769839595?text=Hello! I'm interested in ordering: %0A%0AProduct: {{ $product->name }}%0APrice: KES {{ number_format($product->price) }}%0A%0ACould you please assist me with the purchase?"
                            class="whatsapp-button" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                            Order Via WhatsApp
                        </a>
                        <a href="/cart" class="whatsapp-button" target="_blank">
                            <i class="fas fa-shopping-cart"></i>
                            View Cart
                        </a>
                    </div>

                </div>
            </div>

            <div class="bundle-save-section">
                <h2 class="bundle-save-title">Bundle & Save</h2>
                <div class="bundle-options">
                    <div class="bundle-option">
                        <span class="bundle-title">Buy 1</span>
                        <span class="bundle-saving">You save KSh8,676.08</span>
                        <span class="bundle-price">KSh8,413.16</span>
                        <span class="bundle-original-price"><s>KSh17,089.24</s></span>
                    </div>
                    <div class="bundle-option most-popular">
                        <span class="bundle-title">Buy 2</span>
                        <span class="bundle-saving">You save KSh17,357.16</span>
                        <span class="bundle-price">KSh16,821.32</span>
                        <span class="bundle-original-price"><s>KSh34,178.48</s></span>
                    </div>
                    <div class="bundle-option">
                        <span class="bundle-title">Buy 3</span>
                        <span class="bundle-saving">You save KSh26,038.24</span>
                        <span class="bundle-price">KSh25,229.48</span>
                        <span class="bundle-original-price"><s>KSh51,267.72</s></span>
                    </div>
                    <div class="bundle-option">
                        <span class="bundle-title">Buy 4</span>
                        <span class="bundle-saving">You save KSh34,719.32</span>
                        <span class="bundle-price">KSh33,637.64</span>
                        <span class="bundle-original-price"><s>KSh68,356.96</s></span>
                    </div>
                </div>
            </div>

            <!-- Add this section before the related-section -->
            <section class="reviews-section">
                <div class="reviews-header">
                    <h2 class="reviews-title">Customer Reviews</h2>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="rating-text">4.8 out of 5</span>
                    </div>
                </div>

                <div class="review-card">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">AO</div>
                        <div>
                            <div class="reviewer-name">Aisha Omar</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="review-date">2 days ago</div>
                        </div>
                        <span class="verified-badge">
                            <i class="fas fa-check"></i>
                            Verified Purchase
                        </span>
                    </div>
                    <p class="review-content">Mashallah! The quality is exceptional and delivery was very quick. I
                        received my order in Eastleigh within 24 hours. Will definitely order again!</p>
                </div>

                <div class="review-card">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">JK</div>
                        <div>
                            <div class="reviewer-name">John Kamau</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="review-date">1 week ago</div>
                        </div>
                        <span class="verified-badge">
                            <i class="fas fa-check"></i>
                            Verified Purchase
                        </span>
                    </div>
                    <p class="review-content">Amazing product! The price is very fair considering the quality. Delivery
                        to Westlands was smooth and the packaging was excellent.</p>
                </div>

                <div class="review-card">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">FH</div>
                        <div>
                            <div class="reviewer-name">Fatuma Hassan</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="review-date">2 weeks ago</div>
                        </div>
                        <span class="verified-badge">
                            <i class="fas fa-check"></i>
                            Verified Purchase
                        </span>
                    </div>
                    <p class="review-content">The WhatsApp ordering process was very convenient. Customer service was
                        excellent and very responsive. Product arrived in perfect condition to South C.</p>
                </div>

                <div class="review-card">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">WO</div>
                        <div>
                            <div class="reviewer-name">Wanjiku Odhiambo</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="review-date">3 weeks ago</div>
                        </div>
                        <span class="verified-badge">
                            <i class="fas fa-check"></i>
                            Verified Purchase
                        </span>
                    </div>
                    <p class="review-content">Great value for money! The product exceeded my expectations.
                        Communication was clear throughout the delivery process to Kileleshwa.</p>
                </div>

                <div class="review-card">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">AA</div>
                        <div>
                            <div class="reviewer-name">Abdi Ahmed</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="review-date">1 month ago</div>
                        </div>
                        <span class="verified-badge">
                            <i class="fas fa-check"></i>
                            Verified Purchase
                        </span>
                    </div>
                    <p class="review-content">SubhanAllah, the quality is outstanding! Fast delivery to Pangani, and
                        the WhatsApp communication was very clear. The product looks exactly like in the photos.</p>
                </div>

                <div class="review-card">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">MK</div>
                        <div>
                            <div class="reviewer-name">Muthoni Kariuki</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="review-date">3 weeks ago</div>
                        </div>
                        <span class="verified-badge">
                            <i class="fas fa-check"></i>
                            Verified Purchase
                        </span>
                    </div>
                    <p class="review-content">I was hesitant about ordering via WhatsApp at first, but the process was
                        super smooth! Delivery to Kilimani was quick, and the product is worth every shilling.</p>
                </div>

                <div class="review-card">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">YM</div>
                        <div>
                            <div class="reviewer-name">Yasmin Mohamed</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="review-date">1 month ago</div>
                        </div>
                        <span class="verified-badge">
                            <i class="fas fa-check"></i>
                            Verified Purchase
                        </span>
                    </div>
                    <p class="review-content">Alhamdulillah! Second time ordering and still impressed. The customer
                        service is exceptional, and delivery to California Estate was prompt. Highly recommend!</p>
                </div>

                <div class="review-card">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">RO</div>
                        <div>
                            <div class="reviewer-name">Reuben Omondi</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="review-date">2 months ago</div>
                        </div>
                        <span class="verified-badge">
                            <i class="fas fa-check"></i>
                            Verified Purchase
                        </span>
                    </div>
                    <p class="review-content">Very satisfied with my purchase! The packaging was secure and delivery to
                        Umoja was faster than expected. Will definitely order again.</p>
                </div>

                <div class="review-card">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">HI</div>
                        <div>
                            <div class="reviewer-name">Hussein Ibrahim</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="review-date">1 month ago</div>
                        </div>
                        <span class="verified-badge">
                            <i class="fas fa-check"></i>
                            Verified Purchase
                        </span>
                    </div>
                    <p class="review-content">Excellent service from start to finish! The WhatsApp ordering was
                        convenient, and delivery to South B was well-coordinated. The product quality is top-notch.</p>
                </div>

                <div class="review-card">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">NK</div>
                        <div>
                            <div class="reviewer-name">Njeri Kimani</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="review-date">2 months ago</div>
                        </div>
                        <span class="verified-badge">
                            <i class="fas fa-check"></i>
                            Verified Purchase
                        </span>
                    </div>
                    <p class="review-content">The product arrived in perfect condition to Lavington. Customer support
                        was very helpful and responsive on WhatsApp. Fair price for the quality received.</p>
                </div>
            </section>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.primary-button').click(function(e) {
                e.preventDefault();

                $.ajax({
                    url: '{{ route('cart.add') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        product_id: {{ $product->id }}
                    },
                    success: function(response) {
                        showNotification(response.message);
                    },
                    error: function() {
                        showNotification('Error adding product to cart!', true);
                    }
                });
            });

            function showNotification(message, isError = false) {
                const notification = $('<div>')
                    .addClass('notification')
                    .toggleClass('error', isError)
                    .text(message)
                    .appendTo('body');

                notification.fadeIn();

                setTimeout(() => {
                    notification.fadeOut(() => notification.remove());
                }, 3000);
            }
        });
    </script>
</body>

</html>
