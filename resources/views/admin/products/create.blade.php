@extends('layouts.admin')

@section('content')
    <h1>Add New Product</h1>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
        </div>

        <div class="form-group">
            <label for="slashed_price">Slashed Price</label>
            <input type="number" name="slashed_price" id="slashed_price" class="form-control"
                value="{{ old('slashed_price') }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="design_description">Design Description</label>
            <textarea name="design_description" id="design_description" class="form-control" required>{{ old('design_description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="features">Features</label>
            <textarea name="features" id="features" class="form-control" required>{{ old('features') }}</textarea>
        </div>

        <div class="form-group">
            <label for="images">Product Images</label>
            <div id="images-wrapper">
                <div class="image-item">
                    <input type="file" name="images[0][path]" class="form-control-file" required>
                    <input type="text" name="images[0][color]" class="form-control" placeholder="Enter color" required>
                </div>
            </div>
            <button type="button" class="btn btn-info" id="add-image">Add Another Image</button>
        </div>

        <div class="form-group">
            <label for="videos">Product Videos</label>
            <input type="file" name="videos[]" class="form-control" multiple accept="video/*">
            <small class="form-text text-muted">You can upload multiple videos. Supported formats: MP4, MOV, AVI.</small>
        </div>


        <button type="submit" class="btn btn-primary">Save Product</button>
    </form>

    <script>
        document.getElementById('add-image').addEventListener('click', function() {
            const index = document.querySelectorAll('.image-item').length;
            const newImageItem = `
                <div class="image-item">
                    <input type="file" name="images[${index}][path]" class="form-control-file" required>
                    <input type="text" name="images[${index}][color]" class="form-control" placeholder="Enter color" required>
                </div>
            `;
            document.getElementById('images-wrapper').insertAdjacentHTML('beforeend', newImageItem);
        });
    </script>
@endsection
