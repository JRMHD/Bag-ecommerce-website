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
        }

        .page-title {
            color: var(--royal-blue);
            font-size: 1.875rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--light-orange);
        }

        .add-product-btn {
            display: inline-block;
            margin-bottom: 1.5rem;
            background-color: var(--light-orange);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .add-product-btn:hover {
            background-color: var(--light-orange-hover);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .product-card {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: translateY(-2px);
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .product-name {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--royal-blue);
        }

        .product-info {
            margin: 1rem 0;
            color: #4B5563;
        }

        .product-info p {
            margin: 0.5rem 0;
            display: flex;
            justify-content: space-between;
        }

        .product-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
        }

        .edit-btn,
        .delete-btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            text-align: center;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .edit-btn {
            background-color: var(--royal-blue);
            color: white;
        }

        .edit-btn:hover {
            background-color: var(--royal-blue-hover);
        }

        .delete-btn {
            background-color: #E11D48;
            color: white;
        }

        .delete-btn:hover {
            background-color: #B91C1C;
        }

        @media (max-width: 640px) {
            .products-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    @if (session('success'))
        <div class="alert alert-success" style="background-color: green; color: white;">
            {{ session('success') }}
        </div>
    @endif

    <div class="products-container">
        <h1 class="page-title">Products Management</h1>

        <a href="{{ route('admin.products.create') }}" class="add-product-btn">Add New Product</a>

        <div class="products-grid">
            @foreach ($products as $product)
                <div class="product-card">
                    <div class="product-header">
                        <span class="product-name">{{ $product->name }}</span>
                    </div>

                    <div class="product-info">
                        <p>
                            <span>Price:</span>
                            <span>KES {{ number_format($product->price, 2) }}</span>
                        </p>
                        <p>
                            <span>Slashed Price:</span>
                            <span>KES {{ number_format($product->slashed_price, 2) }}</span>
                        </p>
                    </div>

                    <div class="product-actions">
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="edit-btn">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
