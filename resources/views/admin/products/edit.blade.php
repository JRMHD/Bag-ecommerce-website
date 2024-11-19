@extends('layouts.admin')

@section('content')
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    html, body {
        width: 100%;
        max-width: 100%;
        overflow-x: hidden;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        background-color: #f4f4f4;
        line-height: 1.6;
        color: #333;
        padding: 0 15px; /* Prevent content from touching screen edges */
    }

    .container {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px 0;
    }

    .product-edit-form {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 30px 15px; /* Reduced horizontal padding */
    }

    .form-title {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 25px;
        font-size: 22px; /* Slightly smaller for mobile */
        font-weight: 600;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #34495e;
    }

    .form-input,
    .form-textarea {
        width: 100%;
        padding: 10px 12px; /* Slightly reduced padding */
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        transition: all 0.3s ease;
        appearance: none; /* Remove default styling */
        -webkit-appearance: none; /* For iOS */
    }

    .form-input:focus,
    .form-textarea:focus {
        outline: none;
        border-color: #3498db;
        box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
    }

    .form-textarea {
        min-height: 100px; /* Slightly reduced height */
        resize: vertical;
    }

    .image-upload-section {
        border: 2px dashed #e0e0e0;
        border-radius: 8px;
        padding: 15px;
        text-align: center;
    }

    .image-item {
        display: flex;
        flex-direction: column; /* Stack inputs vertically */
        gap: 10px;
        margin-bottom: 10px;
    }

    .image-item input {
        width: 100%; /* Full width */
    }

    .add-image-btn {
        background-color: #3498db;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
        margin-top: 10px;
    }

    .add-image-btn:hover {
        background-color: #2980b9;
    }

    .submit-btn {
        background-color: #2ecc71;
        color: white;
        border: none;
        padding: 15px;
        border-radius: 8px;
        font-size: 18px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s ease;
        margin-top: 20px;
    }

    .submit-btn:hover {
        background-color: #27ae60;
    }

    .existing-videos {
        display: grid;
        grid-template-columns: 1fr; /* Single column on mobile */
        gap: 15px;
        margin-top: 20px;
    }

    .video-item {
        text-align: center;
        width: 100%; /* Full width */
    }

    .video-item video {
        max-width: 100%;
        width: 100%; /* Ensure video fills container */
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Improved responsiveness and touch targets */
    @media (max-width: 600px) {
        .container {
            padding: 10px 0;
        }

        .product-edit-form {
            padding: 20px 15px;
            border-radius: 0;
            box-shadow: none;
        }

        .form-input,
        .form-textarea,
        .add-image-btn,
        .submit-btn {
            font-size: 16px; /* Ensure readability */
            padding: 12px; /* Larger touch target */
        }

        /* Ensure no horizontal scroll */
        * {
            max-width: 100%;
        }
    }

    /* Prevent input zoom on focus in iOS */
    @media screen and (-webkit-min-device-pixel-ratio:0) { 
        select,
        textarea,
        input {
            font-size: 16px;
        }
    }
</style>

<div class="container">
    <form class="product-edit-form" action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h1 class="form-title">Edit Product: {{ $product->name }}</h1>

        <div class="form-group">
            <label class="form-label" for="name">Product Name</label>
            <input 
                class="form-input" 
                type="text" 
                name="name" 
                id="name" 
                value="{{ old('name', $product->name) }}" 
                required
            >
        </div>

        <div class="form-group">
            <label class="form-label" for="price">Price</label>
            <input 
                class="form-input" 
                type="number" 
                name="price" 
                id="price" 
                value="{{ old('price', $product->price) }}" 
                required
            >
        </div>

        <div class="form-group">
            <label class="form-label" for="slashed_price">Slashed Price</label>
            <input 
                class="form-input" 
                type="number" 
                name="slashed_price" 
                id="slashed_price" 
                value="{{ old('slashed_price', $product->slashed_price) }}"
            >
        </div>

        <div class="form-group">
            <label class="form-label" for="description">Description</label>
            <textarea 
                class="form-textarea" 
                name="description" 
                id="description" 
                required
            >{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-group">
            <label class="form-label" for="design_description">Design Description</label>
            <textarea 
                class="form-textarea" 
                name="design_description" 
                id="design_description" 
                required
            >{{ old('design_description', $product->design_description) }}</textarea>
        </div>

        <div class="form-group">
            <label class="form-label" for="features">Features</label>
            <textarea 
                class="form-textarea" 
                name="features" 
                id="features" 
                required
            >{{ old('features', $product->features) }}</textarea>
        </div>

        <div class="form-group image-upload-section">
            <label class="form-label">Product Images</label>
            <div id="images-wrapper">
                @foreach ($product->images as $index => $image)
                    <div class="image-item">
                        <input 
                            type="file" 
                            name="images[{{ $index }}][path]" 
                            class="form-input"
                        >
                        <input 
                            type="text" 
                            name="images[{{ $index }}][color]" 
                            placeholder="Enter color" 
                            value="{{ $image->color }}"
                            class="form-input"
                        >
                    </div>
                @endforeach
            </div>
            <button 
                type="button" 
                id="add-image" 
                class="add-image-btn"
            >
                Add Another Image
            </button>
        </div>

        <div class="form-group">
            <label class="form-label" for="videos">Upload New Videos</label>
            <input 
                type="file" 
                name="videos[]" 
                class="form-input" 
                multiple 
                accept="video/*"
            >
            <small style="color: #7f8c8d; font-size: 0.8em; margin-top: 5px; display: block;">
                Upload new videos to replace existing ones. Supported formats: MP4, MOV, AVI.
            </small>
        </div>

        @if ($product->videos->count())
            <div class="existing-videos">
                @foreach ($product->videos as $video)
                    <div class="video-item">
                        <video controls>
                            <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <p style="color: #7f8c8d; font-size: 0.8em; margin-top: 5px;">
                            {{ $video->video_path }}
                        </p>
                    </div>
                @endforeach
            </div>
        @endif

        <button type="submit" class="submit-btn">Update Product</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const imagesWrapper = document.getElementById('images-wrapper');
    const addImageBtn = document.getElementById('add-image');
    let imageIndex = {{ $product->images->count() }};

    addImageBtn.addEventListener('click', function() {
        const newImageItem = document.createElement('div');
        newImageItem.className = 'image-item';
        newImageItem.innerHTML = `
            <input 
                type="file" 
                name="images[${imageIndex}][path]" 
                class="form-input"
            >
            <input 
                type="text" 
                name="images[${imageIndex}][color]" 
                placeholder="Enter color"
                class="form-input"
            >
        `;
        imagesWrapper.appendChild(newImageItem);
        imageIndex++;
    });
});
</script>
@endsection