@extends('layouts.admin')

@section('title', 'Edit Product')

@section('content')
    <div class="page-header">
        <h1 class="text-2xl font-bold text-gray-800">Edit Product</h1>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left mr-2"></i>
            Back to Products
        </a>
    </div>

    <div class="card">
        @if ($errors->any())
            <div class="alert alert-danger">
                <div class="alert-title">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    Please fix the following errors:
                </div>
                <ul class="alert-list">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data"
            class="product-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" id="name" name="name" class="form-input @error('name') error @enderror"
                    value="{{ old('name', $product->name) }}" required>
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group flex-1">
                    <label for="price" class="form-label">Price (KES)</label>
                    <input type="number" id="price" name="price" class="form-input @error('price') error @enderror"
                        step="0.01" value="{{ old('price', $product->price) }}" required>
                    @error('price')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group flex-1">
                    <label for="slashed_price" class="form-label">Slashed Price (KES)</label>
                    <input type="number" id="slashed_price" name="slashed_price"
                        class="form-input @error('slashed_price') error @enderror" step="0.01"
                        value="{{ old('slashed_price', $product->slashed_price) }}">
                    @error('slashed_price')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="color" class="form-label">Color</label>
                <input type="text" id="color" name="color" class="form-input @error('color') error @enderror"
                    value="{{ old('color', $product->color) }}" required>
                @error('color')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-textarea @error('description') error @enderror" rows="4"
                    required>{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Current Images</label>
                <div class="current-images">
                    @if ($product->images)
                        @foreach (json_decode($product->images) as $image)
                            <div class="image-preview">
                                <img src="{{ asset('storage/' . $image) }}" alt="Product Image">
                                <span class="image-name">{{ basename($image) }}</span>
                            </div>
                        @endforeach
                    @else
                        <p class="text-gray-500">No images uploaded</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="images" class="form-label">Upload New Images</label>
                <div class="file-input-wrapper">
                    <input type="file" id="images" name="images[]" class="file-input @error('images') error @enderror"
                        multiple accept="image/*">
                    <label for="images" class="file-input-label">
                        <i class="fas fa-cloud-upload-alt mr-2"></i>
                        Choose Files
                    </label>
                    <div id="file-names" class="file-names"></div>
                </div>
                @error('images')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save mr-2"></i>
                    Update Product
                </button>
            </div>
        </form>
    </div>

    <style>
        /* Card Styles */
        .card {
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin: 0 1rem;
            padding: 1.5rem;
        }

        /* Page Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding: 0 1rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        /* Alert Styles */
        .alert {
            margin-bottom: 1.5rem;
            padding: 1rem;
            border-radius: 0.375rem;
            background-color: #fef2f2;
            color: #991b1b;
        }

        .alert-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .alert-list {
            list-style-type: disc;
            margin-left: 1.5rem;
        }

        /* Form Styles */
        .product-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .form-row {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .form-group {
            flex: 1;
            min-width: 250px;
        }

        .form-label {
            display: block;
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 0.625rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            background-color: #fff;
            color: #1f2937;
            transition: border-color 0.2s;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.1);
        }

        .form-textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* File Input Styles */
        .file-input-wrapper {
            position: relative;
        }

        .file-input {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }

        .file-input-label {
            display: inline-block;
            padding: 0.625rem 1rem;
            background-color: #f3f4f6;
            color: #374151;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            cursor: pointer;
            transition: all 0.2s;
        }

        .file-input-label:hover {
            background-color: #e5e7eb;
        }

        .file-names {
            margin-top: 0.5rem;
            font-size: 0.875rem;
            color: #6b7280;
        }

        /* Current Images */
        .current-images {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 0.5rem;
        }

        .image-preview {
            position: relative;
            width: 100px;
        }

        .image-preview img {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border-radius: 0.375rem;
            border: 1px solid #d1d5db;
        }

        .image-name {
            display: block;
            font-size: 0.75rem;
            color: #6b7280;
            margin-top: 0.25rem;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /* Button Styles */
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.625rem 1.25rem;
            border-radius: 0.375rem;
            font-weight: 500;
            font-size: 0.875rem;
            transition: all 0.2s;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #2563eb;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
        }

        .btn-secondary {
            background-color: #f3f4f6;
            color: #1f2937;
            border: 1px solid #d1d5db;
        }

        .btn-secondary:hover {
            background-color: #e5e7eb;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            margin-top: 1rem;
        }

        /* Error Styles */
        .error {
            border-color: #ef4444;
        }

        .error-message {
            display: block;
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        /* Responsive Styles */
        @media (max-width: 640px) {
            .page-header {
                flex-direction: column;
                align-items: stretch;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .form-row {
                flex-direction: column;
            }

            .form-group {
                min-width: 100%;
            }

            .current-images {
                justify-content: center;
            }
        }
    </style>

    <script>
        // Display selected file names
        document.getElementById('images').addEventListener('change', function(e) {
            const fileNames = Array.from(e.target.files)
                .map(file => file.name)
                .join(', ');
            document.getElementById('file-names').textContent = fileNames || 'No files selected';
        });
    </script>
@endsection
