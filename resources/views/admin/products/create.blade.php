@extends('layouts.admin')

@section('content')
    <style>
        :root {
            --light-orange: #FFB74D;
            --royal-blue: #1e40af;
            --light-orange-hover: #FFA726;
            --royal-blue-hover: #1e3a8a;
        }

        .products-container {
            padding: 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .page-title {
            color: var(--royal-blue);
            font-size: 1.875rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--light-orange);
        }

        .form-container {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            color: var(--royal-blue);
            font-weight: 600;
            display: block;
            margin-bottom: 0.5rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #E2E8F0;
            border-radius: 0.5rem;
            font-size: 1rem;
        }

        .form-group input[type="file"] {
            padding: 0;
        }

        .btn {
            background-color: var(--light-orange);
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.2s;
        }

        .btn:hover {
            background-color: var(--light-orange-hover);
        }

        #add-image {
            margin-top: 1rem;
            display: inline-block;
        }

        .image-item {
            display: flex;
            gap: 1rem;
            align-items: center;
            margin-bottom: 1rem;
        }

        .image-item input {
            flex: 1;
        }

        .form-hint {
            color: #64748B;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
    </style>

    <div class="products-container">
        <h1 class="page-title">Add New Product</h1>

        <div class="form-container">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" value="{{ old('price') }}" required>
                </div>

                <div class="form-group">
                    <label for="slashed_price">Slashed Price</label>
                    <input type="number" name="slashed_price" id="slashed_price" value="{{ old('slashed_price') }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" rows="4" required>{{ old('description') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="design_description">Design Description</label>
                    <textarea name="design_description" id="design_description" rows="4" required>{{ old('design_description') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="features">Features</label>
                    <textarea name="features" id="features" rows="4" required>{{ old('features') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="images">Product Images</label>
                    <div id="images-wrapper">
                        <div class="image-item">
                            <input type="file" name="images[0][path]" required>
                            <input type="text" name="images[0][color]" placeholder="Enter color" required>
                        </div>
                    </div>
                    <button type="button" class="btn" id="add-image">Add Another Image</button>
                </div>

                <div class="form-group">
                    <label for="videos">Product Videos</label>
                    <input type="file" name="videos[]" accept="video/*" multiple>
                    <span class="form-hint">You can upload multiple videos. Supported formats: MP4, MOV, AVI.</span>
                </div>

                <button type="submit" class="btn">Save Product</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('add-image').addEventListener('click', function () {
            const index = document.querySelectorAll('.image-item').length;
            const newImageItem = `
                <div class="image-item">
                    <input type="file" name="images[${index}][path]" required>
                    <input type="text" name="images[${index}][color]" placeholder="Enter color" required>
                </div>
            `;
            document.getElementById('images-wrapper').insertAdjacentHTML('beforeend', newImageItem);
        });
    </script>
@endsection