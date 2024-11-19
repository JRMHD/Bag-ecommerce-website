@extends('layouts.admin')

@section('content')
    <style>
        :root {
            --light-orange: #FFB74D;
            --royal-blue: #1e40af;
            --light-orange-hover: #FFA726;
            --royal-blue-hover: #1e3a8a;
        }

        .orders-container {
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

        .orders-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .order-card {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            transition: transform 0.2s;
        }

        .order-card:hover {
            transform: translateY(-2px);
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .order-id {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--royal-blue);
        }

        .order-info {
            margin: 1rem 0;
            color: #4B5563;
        }

        .order-info p {
            margin: 0.5rem 0;
            display: flex;
            justify-content: space-between;
        }

        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .status-pending {
            background-color: #FEF3C7;
            color: #92400E;
        }

        .status-processing {
            background-color: #DBEAFE;
            color: #1E40AF;
        }

        .status-completed {
            background-color: #D1FAE5;
            color: #065F46;
        }

        .view-details {
            display: inline-block;
            background-color: var(--light-orange);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            text-decoration: none;
            transition: background-color 0.2s;
            text-align: center;
            margin-top: 1rem;
            width: 100%;
        }

        .view-details:hover {
            background-color: var(--light-orange-hover);
        }

        @media (max-width: 640px) {
            .orders-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="orders-container">
        <h1 class="page-title">Orders Management</h1>

        <div class="orders-grid">
            @foreach ($orders as $order)
                <div class="order-card">
                    <div class="order-header">
                        <span class="order-id">Order #{{ $order->id }}</span>
                        <span class="status-badge status-{{ strtolower($order->status) }}">
                            {{ $order->status }}
                        </span>
                    </div>

                    <div class="order-info">
                        <p>
                            <span>Customer:</span>
                            <span>{{ $order->name }}</span>
                        </p>
                        <p>
                            <span>Total:</span>
                            <span>KES {{ number_format($order->total, 2) }}</span>
                        </p>
                    </div>

                    <a href="{{ route('admin.orders.show', $order->id) }}" class="view-details">
                        View Details
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
