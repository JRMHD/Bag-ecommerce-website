@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h1 class="text-2xl font-bold text-gray-800">Products Management</h1>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
            <i class="fas fa-plus mr-2"></i>
            Add New Product
        </a>
    </div>

    <div class="card">
        <div class="table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th class="hidden sm:table-cell">Slashed Price</th>
                        <th class="hidden sm:table-cell">Color</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td data-label="Name">{{ $product->name }}</td>
                            <td data-label="Price">
                                <span class="price">KES {{ number_format($product->price, 2) }}</span>
                            </td>
                            <td data-label="Slashed Price" class="hidden sm:table-cell">
                                @if ($product->slashed_price)
                                    <span class="slashed-price">KES {{ number_format($product->slashed_price, 2) }}</span>
                                @else
                                    <span class="text-gray-400">-</span>
                                @endif
                            </td>
                            <td data-label="Color" class="hidden sm:table-cell">
                                <span class="color-badge" style="background-color: {{ $product->color }}"></span>
                                {{ $product->color }}
                            </td>
                            <td data-label="Actions">
                                <div class="action-buttons">
                                    <a href="{{ route('admin.products.edit', $product->id) }}"
                                        class="btn btn-icon btn-secondary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Are you sure you want to delete this product?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-icon btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <style>
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

        /* Card */
        .card {
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin: 0 1rem;
        }

        /* Table */
        .table-wrapper {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            white-space: nowrap;
        }

        .table th {
            background-color: #f8f9fa;
            padding: 0.75rem 1rem;
            text-align: left;
            font-weight: 600;
            color: #1f2937;
        }

        .table td {
            padding: 0.75rem 1rem;
            border-top: 1px solid #e5e7eb;
            vertical-align: middle;
        }

        /* Price Styles */
        .price {
            color: #2563eb;
            font-weight: 500;
        }

        .slashed-price {
            color: #ef4444;
            text-decoration: line-through;
        }

        /* Color Badge */
        .color-badge {
            display: inline-block;
            width: 1rem;
            height: 1rem;
            border-radius: 50%;
            margin-right: 0.5rem;
            border: 1px solid rgba(0, 0, 0, 0.1);
            vertical-align: middle;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            font-size: 0.875rem;
            transition: all 0.2s;
            cursor: pointer;
        }

        .btn-icon {
            padding: 0.5rem;
        }

        .btn-primary {
            background-color: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
        }

        .btn-secondary {
            background-color: #f3f4f6;
            color: #1f2937;
        }

        .btn-danger {
            background-color: #fee2e2;
            color: #ef4444;
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 640px) {
            .page-header {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-primary {
                text-align: center;
                justify-content: center;
            }

            .table {
                display: block;
            }

            .table thead {
                display: none;
            }

            .table tbody {
                display: block;
            }

            .table tr {
                display: block;
                border-bottom: 1px solid #e5e7eb;
                padding: 0.5rem 0;
            }

            .table td {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0.5rem 1rem;
                border: none;
            }

            .table td::before {
                content: attr(data-label);
                font-weight: 500;
                margin-right: 1rem;
            }

            .action-buttons {
                margin-left: auto;
            }
        }

        /* Alert Styles */
        .alert {
            margin: 1rem;
            padding: 1rem;
            border-radius: 0.375rem;
            background-color: #dcfce7;
            color: #166534;
        }
    </style>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.opacity = '0';
                    alert.style.transition = 'opacity 0.5s ease';
                    setTimeout(() => alert.remove(), 500);
                }, 3000);
            });
        });
    </script>
@endsection
