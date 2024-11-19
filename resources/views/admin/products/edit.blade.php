@extends('layouts.admin')

@section('content')
    <h1>Edit Product: {{ $product->name }}</h1>
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Same fields as in the create view, with pre-filled data -->
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}"
                required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control"
                value="{{ old('price', $product->price) }}" required>
        </div>

        <div class="form-group">
            <label for="slashed_price">Slashed Price</label>
            <input type="number" name="slashed_price" id="slashed_price" class="form-control"
                value="{{ old('slashed_price', $product->slashed_price) }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="design_description">Design Description</label>
            <textarea name="design_description" id="design_description" class="form-control" required>{{ old('design_description', $product->design_description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="features">Features</label>
            <textarea name="features" id="features" class="form-control" required>{{ old('features', $product->features) }}</textarea>
        </div>

        <div class="form-group">
            <label for="images">Product Images</label>
            <div id="images-wrapper">
                @foreach ($product->images as $index => $image)
                    <div class="image-item">
                        <input type="file" name="images[{{ $index }}][path]" class="form-control-file">
                        <input type="text" name="images[{{ $index }}][color]" class="form-control"
                            placeholder="Enter color" value="{{ $image->color }}">
                    </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-info" id="add-image">Add Another Image</button>
        </div>

        <div class="form-group">
            <label for="videos">Upload New Videos</label>
            <input type="file" name="videos[]" class="form-control" multiple accept="video/*">
            <small class="form-text text-muted">Upload new videos to replace existing ones. Supported formats: MP4, MOV,
                AVI.</small>
        </div>

        @if ($product->videos->count())
            <div class="existing-videos">
                <label>Existing Videos:</label>
                <ul>
                    @foreach ($product->videos as $video)
                        <li>
                            <video width="250" controls>
                                <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <p>{{ $video->video_path }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif


        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
