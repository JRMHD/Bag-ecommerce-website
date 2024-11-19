@extends('layouts.admin')

@section('content')
    <style>
        :root {
            --light-orange: #FFB74D;
            --royal-blue: #1e40af;
            --light-orange-hover: #FFA726;
            --royal-blue-hover: #1e3a8a;
        }

        .order-details-container {
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

        .details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .customer-info,
        .order-products {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
        }

        .info-section {
            margin-bottom: 1rem;
        }

        .info-section h2 {
            color: var(--royal-blue);
            font-size: 1.25rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .info-item {
            padding: 0.75rem;
            background: #F8FAFC;
            border-radius: 0.5rem;
        }

        .info-label {
            color: #64748B;
            font-size: 0.875rem;
            margin-bottom: 0.25rem;
        }

        .info-value {
            color: #1E293B;
            font-weight: 500;
        }

        .product-list {
            list-style: none;
            padding: 0;
        }

        .product-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid #E2E8F0;
        }

        .product-item:last-child {
            border-bottom: none;
        }

        .product-image {
            width: 60px;
            height: 60px;
            border-radius: 0.5rem;
            object-fit: cover;
            margin-right: 1rem;
        }

        .product-details {
            flex: 1;
        }

        .status-form {
            margin-top: 2rem;
            background: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .form-group label {
            color: var(--royal-blue);
            font-weight: 500;
            min-width: 80px;
        }

        .status-select {
            flex: 1;
            padding: 0.5rem;
            border: 1px solid #E2E8F0;
            border-radius: 0.5rem;
            font-size: 1rem;
        }

        .update-button {
            background-color: var(--light-orange);
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .update-button:hover {
            background-color: var(--light-orange-hover);
        }

        @media (max-width: 768px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="order-details-container">
        <h1 class="page-title">Order Details</h1>

        <div class="details-grid">
            <div class="customer-info">
                <div class="info-section">
                    <h2>Customer Information</h2>
                    <div class="info-grid">
                        <div class="info-item">
                            <div class="info-label">Name</div>
                            <div class="info-value">{{ $order->name }}</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Email</div>
                            <div class="info-value">{{ $order->email }}</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Phone</div>
                            <div class="info-value">{{ $order->phone }}</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Total</div>
                            <div class="info-value">KES {{ number_format($order->total, 2) }}</div>
                        </div>
                    </div>
                </div>

                <div class="info-section">
                    <div class="info-item">
                        <div class="info-label">Delivery Address</div>
                        <div class="info-value">{{ $order->address }}</div>
                    </div>
                </div>
            </div>

            <div class="order-products">
                <h2>Order Products</h2>
                <ul class="product-list">
                    @foreach ($order->orderProducts as $orderProduct)
                        <li class="product-item">
                            <img src="{{ asset('storage/' . $orderProduct->product->images->first()->image_path) }}"
                                alt="{{ $orderProduct->product->name }}" class="product-image">
                            <div class="product-details">
                                <div class="product-name">{{ $orderProduct->product->name }}</div>
                                <div class="product-meta">
                                    <span>Quantity: {{ $orderProduct->quantity }}</span>
                                    <span> • </span>
                                    <span>KES {{ number_format($orderProduct->price, 2) }}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="status-form">
            <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" class="form-group">
                @csrf
                @method('PUT')
                <label for="status">Status</label>
                <select name="status" id="status" class="status-select">
                    <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Processing" {{ $order->status == 'Processing' ? 'selected' : '' }}>Processing</option>
                    <option value="Completed" {{ $order->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                </select>
                <button type="submit" class="update-button">Update Status</button>
            </form>
        </div>
    </div>
@endsection
