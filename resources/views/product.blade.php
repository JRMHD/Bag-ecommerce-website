<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} Product Details</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .color-btn.active {
            transform: scale(1.1);
            border-width: 2px;
        }

        .thumbnail-image:hover {
            opacity: 0.8;
            cursor: pointer;
        }

        .video-container {
            aspect-ratio: 16/9;
        }

        .star-rating {
            color: #FFD700;
        }

        .shipping-icon {
            color: #4F46E5;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Back to Shop Button -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <a href="/shop" class="inline-flex items-center text-gray-600 hover:text-gray-900">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Shop
        </a>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Left Column - Images & Videos -->
            <div class="space-y-6">
                <!-- Main Image -->
                <div class="bg-white rounded-lg shadow-lg p-4">
                    <img id="product-image" src="{{ asset('storage/' . $product->images->first()->image_path) }}"
                        alt="{{ $product->name }}" class="w-full h-auto object-cover rounded-lg">
                </div>

                <!-- Thumbnail Images -->
                <div class="grid grid-cols-5 gap-2" id="image-thumbnails">
                    @foreach ($groupedImages as $color => $images)
                        <div class="thumbnail-group" data-color="{{ $color }}" style="display: none;">
                            @foreach ($images as $image)
                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="Product thumbnail"
                                    class="thumbnail-image w-full h-20 object-cover rounded-lg shadow cursor-pointer"
                                    onclick="changeImage('{{ asset('storage/' . $image->image_path) }}')">
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <!-- Thumbnail Images -->
                <div class="grid grid-cols-5 gap-2">
                    @foreach ($product->images as $image)
                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Product thumbnail"
                            class="thumbnail-image w-full h-20 object-cover rounded-lg shadow cursor-pointer"
                            onclick="changeImage('{{ asset('storage/' . $image->image_path) }}')">
                    @endforeach
                </div>
            </div>
            <!-- Right Column - Product Details -->
            <div class="space-y-6">
                <div
                    class="flex items-center justify-center bg-green-100 border border-green-300 rounded-full px-3 py-1 space-x-2">
                    <span class="text-sm font-semibold text-green-700 uppercase">
                        Hot Product
                    </span>
                    <span class="bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-full">
                        Limited Stock
                    </span>
                </div>
                <h1 class="text-3xl font-bold text-gray-900">{{ $product->name }}</h1>

                <!-- Rating Section -->
                <div class="flex items-center space-x-2">
                    <div class="star-rating text-xl">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="text-gray-600">(4.9/5 - 256 Reviews)</span>
                </div>
                <!-- Price Section -->
                <div class="flex items-center space-x-4">
                    @if ($product->slashed_price)
                        <span class="text-gray-500 line-through text-2xl">KES
                            {{ number_format($product->slashed_price, 2) }}</span>
                        <span class="text-3xl font-bold text-red-600">KES
                            {{ number_format($product->price, 2) }}</span>
                        <span class="bg-red-100 text-red-800 text-sm font-medium px-3 py-1 rounded-full">
                            Save
                            {{ round((($product->slashed_price - $product->price) / $product->slashed_price) * 100) }}%
                        </span>
                    @else
                        <span class="text-3xl font-bold text-gray-900">KES
                            {{ number_format($product->price, 2) }}</span>
                    @endif
                </div>

                @if (session('success'))
                    <div class="alert alert-success" style="background-color: #28a745; color: white;">
                        {{ session('success') }}
                    </div>
                @endif

                <div
                    style="display: flex; flex-direction: column; align-items: flex-start; padding: 20px; font-family: Arial, sans-serif; background-color: #f0f4f8; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); max-width: 600px; margin: 20px auto;">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#4CAF50" viewBox="0 0 24 24" width="24"
                            height="24" style="margin-right: 10px;">
                            <path d="M10 20.5L4.5 15l1.4-1.4L10 17.7l8.1-8.1L19.5 11 10 20.5z" />
                        </svg>
                        <span style="font-size: 16px; color: #555;">TSA Approved</span>
                    </div>
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#4CAF50" viewBox="0 0 24 24" width="24"
                            height="24" style="margin-right: 10px;">
                            <path d="M10 20.5L4.5 15l1.4-1.4L10 17.7l8.1-8.1L19.5 11 10 20.5z" />
                        </svg>
                        <span style="font-size: 16px; color: #555;">Carry-on Sized</span>
                    </div>
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#4CAF50" viewBox="0 0 24 24" width="24"
                            height="24" style="margin-right: 10px;">
                            <path d="M10 20.5L4.5 15l1.4-1.4L10 17.7l8.1-8.1L19.5 11 10 20.5z" />
                        </svg>
                        <span style="font-size: 16px; color: #555;">Large Storage Capacity</span>
                    </div>
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#4CAF50" viewBox="0 0 24 24" width="24"
                            height="24" style="margin-right: 10px;">
                            <path d="M10 20.5L4.5 15l1.4-1.4L10 17.7l8.1-8.1L19.5 11 10 20.5z" />
                        </svg>
                        <span style="font-size: 16px; color: #555;">Easily Pack and Go</span>
                    </div>
                </div>

                <!-- Color Selection -->
                <div class="space-y-3">
                    <h3 class="text-lg font-medium">Select Color</h3>
                    <div class="flex flex-wrap gap-3">
                        @foreach ($groupedImages as $color => $images)
                            <button
                                class="color-btn flex items-center space-x-2 px-4 py-2 rounded-full border-2 transition-all duration-200"
                                data-color="{{ $color }}" onclick="showImagesByColor('{{ $color }}')">
                                <span class="w-4 h-4 rounded-full"
                                    style="background-color: {{ $images->first()->color }}"></span>
                                <span>{{ ucfirst($color) }}</span>
                            </button>
                        @endforeach
                    </div>
                </div>


                <!-- Action Buttons -->
                <div class="flex flex-col space-y-3">
                    <button onclick="orderViaWhatsApp()"
                        class="flex items-center justify-center space-x-2 bg-green-500 text-white px-6 py-3 rounded-lg font-medium hover:bg-green-600 transition-colors">
                        <i class="fab fa-whatsapp text-xl"></i>
                        <span>Order via WhatsApp</span>
                    </button>

                    <form action="{{ route('add.to.cart') }}" method="POST" class="w-full">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit"
                            class="w-full flex items-center justify-center space-x-2 bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span>Add to Cart</span>
                        </button>
                    </form>

                    <a href="{{ route('cart') }}"
                        class="flex items-center justify-center space-x-2 bg-gray-800 text-white px-6 py-3 rounded-lg font-medium hover:bg-gray-900 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        <span>View Cart</span>
                    </a>
                </div>

                <!-- Product Information -->
                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-semibold mb-4">Product Description</h3>
                        <p class="text-gray-600">{{ $product->description }}</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-semibold mb-4">Design Details</h3>
                        <p class="text-gray-600">{{ $product->design_description }}</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-semibold mb-4">Features</h3>
                        <p class="text-gray-600">{{ $product->features }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Shipping Information (Moved up) -->
        <div class="mt-16 bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-lg font-semibold flex items-center">
                <svg class="w-6 h-6 mr-2 shipping-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                </svg>
                Shipping Information
            </h3>
            <div class="space-y-4 mt-4">
                <div class="flex items-center text-sm">
                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    Processing Time: 2 - 3 business days
                </div>
                <div class="flex items-center text-sm">
                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    Transit Time: 2 - 7 business days
                </div>
            </div>
        </div>

        <!-- Video Gallery (Moved up) -->
        <div class="mt-16 video-gallery">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($product->videos as $video)
                    <div class="video-container">
                        <video autoplay muted loop class="w-full rounded-lg shadow-lg">
                            <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                @endforeach
            </div>
        </div>


        <!-- Bundle and Save Section -->
        <div class="mt-16 bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Bundle and Save</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @for ($quantity = 1; $quantity <= 4; $quantity++)
                    @php
                        $originalPrice = $product->slashed_price * $quantity;
                        $bundlePrice = $product->price * $quantity;
                        $savings = $originalPrice - $bundlePrice;
                        $isMostPopular = $quantity === 2;
                    @endphp
                    <div
                        class="relative p-6 border rounded-lg {{ $isMostPopular ? 'border-blue-500 bg-blue-50' : 'border-gray-200' }}">
                        @if ($isMostPopular)
                            <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                                <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm">Most
                                    Popular</span>
                            </div>
                        @endif
                        <div class="text-center">
                            <h3 class="text-xl font-semibold mb-2">Buy {{ $quantity }}</h3>
                            <p class="text-gray-500 line-through">KES {{ number_format($originalPrice, 2) }}</p>
                            <p class="text-2xl font-bold text-gray-900 mb-2">KES
                                {{ number_format($bundlePrice, 2) }}
                            </p>
                            @if ($savings > 0)
                                <p class="text-green-600 text-sm">Save KES {{ number_format($savings, 2) }}</p>
                            @endif
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <!-- Related Products -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold mb-6">Products You Might Like</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($relatedProducts as $relatedProduct)
                    <a href="{{ route('products.show', $relatedProduct->id) }}"
                        class="group bg-white rounded-lg shadow-lg overflow-hidden transition-transform hover:scale-105">
                        <div class="aspect-w-1 aspect-h-1">
                            <img src="{{ asset('storage/' . $relatedProduct->images->first()->image_path) }}"
                                alt="{{ $relatedProduct->name }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-medium text-gray-900 group-hover:text-blue-600">
                                {{ $relatedProduct->name }}
                            </h3>
                            <p class="mt-1 text-lg font-bold text-gray-900">
                                KES {{ number_format($relatedProduct->price, 2) }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        function showImagesByColor(color) {
            // Hide all thumbnail groups
            document.querySelectorAll('.thumbnail-group').forEach(function(group) {
                group.style.display = 'none';
            });

            // Show the thumbnail group for the selected color
            const selectedGroup = document.querySelector(`.thumbnail-group[data-color="${color}"]`);
            if (selectedGroup) {
                selectedGroup.style.display = 'block';
            }

            // Optionally, change the main image to the first image of the selected color
            const firstImage = selectedGroup.querySelector('img');
            if (firstImage) {
                changeImage(firstImage.src);
            }
        }

        function changeImage(imageSrc) {
            const mainImage = document.getElementById('product-image');
            mainImage.src = imageSrc;
        }
    </script>
</body>

</html>
