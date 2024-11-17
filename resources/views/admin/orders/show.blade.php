@extends('layouts.admin')
@section('content')
    <div class="container-fluid p-0" style="background: #f8f9fa;">
        <!-- Header Section -->
        <div style="background: linear-gradient(135deg, #ff6b00 0%, #ff8533 100%); padding: 15px; margin-bottom: 20px;">
            <div style="padding: 10px;">
                <h1 style="color: white; font-size: clamp(1.2rem, 4vw, 1.8rem); font-weight: 600; margin-bottom: 10px;">Order
                    #{{ $order->id }}</h1>
                <ol class="breadcrumb m-0" style="background: transparent; padding: 0;">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                            style="color: white; text-decoration: none; opacity: 0.9; font-size: clamp(0.875rem, 2vw, 1rem);">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.orders.index') }}"
                            style="color: white; text-decoration: none; opacity: 0.9; font-size: clamp(0.875rem, 2vw, 1rem);">Orders</a>
                    </li>
                    <li class="breadcrumb-item active"
                        style="color: white; opacity: 0.7; font-size: clamp(0.875rem, 2vw, 1rem);">Order
                        #{{ $order->id }}</li>
                </ol>
            </div>
        </div>

        <!-- Main Content -->
        <div class="row mx-0" style="padding: 10px;">
            <!-- Order Status Card (Moved to top on mobile) -->
            <div class="col-12 col-md-4 order-1 order-md-2 mb-4">
                <div style="background: white; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                    <div
                        style="padding: 15px; border-bottom: 1px solid #eee; display: flex; align-items: center; background: #f8f9fa; border-radius: 10px 10px 0 0;">
                        <i class="fas fa-clock me-2" style="color: #ff6b00;"></i>
                        <span style="font-size: clamp(1rem, 2.5vw, 1.1rem); font-weight: 500; color: #2c3e50;">Order
                            Status</span>
                    </div>
                    <div style="padding: 20px;">
                        <form action="{{ route('admin.orders.update-status', $order) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div style="margin-bottom: 20px;">
                                <label style="display: block; margin-bottom: 8px; color: #6c757d; font-weight: 500;">Update
                                    Status</label>
                                <select name="status" onchange="this.form.submit()"
                                    style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 8px; font-size: 0.95rem; color: #2c3e50; appearance: none; background: url('data:image/svg+xml;utf8,<svg fill=\"%23555\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 10l5 5 5-5z\"/></svg>') no-repeat right 10px center #fff;">
                                    <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>
                                        Processing</option>
                                    <option value="shipped" {{ $order->status === 'shipped' ? 'selected' : '' }}>Shipped
                                    </option>
                                    <option value="delivered" {{ $order->status === 'delivered' ? 'selected' : '' }}>
                                        Delivered</option>
                                </select>
                            </div>
                        </form>

                        <div style="padding: 15px; background: #f8f9fa; border-radius: 8px; margin-bottom: 15px;">
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                                <span style="color: #6c757d; font-weight: 500;">Total Amount</span>
                                <span style="color: #ff6b00; font-weight: 600; font-size: 1.1rem;">KES
                                    {{ number_format($order->total_amount) }}</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="color: #6c757d; font-weight: 500;">Order Date</span>
                                <span style="color: #2c3e50;">{{ $order->created_at->format('M d, Y H:i') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Customer Details and Order Items -->
            <div class="col-12 col-md-8 order-2 order-md-1">
                <!-- Customer Details Card -->
                <div
                    style="background: white; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 20px;">
                    <div
                        style="padding: 15px; border-bottom: 1px solid #eee; display: flex; align-items: center; background: #f8f9fa; border-radius: 10px 10px 0 0;">
                        <i class="fas fa-user me-2" style="color: #ff6b00;"></i>
                        <span style="font-size: clamp(1rem, 2.5vw, 1.1rem); font-weight: 500; color: #2c3e50;">Customer
                            Details</span>
                    </div>
                    <div style="padding: 20px;">
                        <div style="display: grid; gap: 15px;">
                            <div
                                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px;">
                                <div style="background: #f8f9fa; padding: 12px; border-radius: 8px;">
                                    <span style="color: #6c757d; display: block; margin-bottom: 5px;">Name</span>
                                    <span style="color: #2c3e50; font-weight: 500;">{{ $order->name }}</span>
                                </div>
                                <div style="background: #f8f9fa; padding: 12px; border-radius: 8px;">
                                    <span style="color: #6c757d; display: block; margin-bottom: 5px;">Email</span>
                                    <span style="color: #2c3e50; font-weight: 500;">{{ $order->email }}</span>
                                </div>
                                <div style="background: #f8f9fa; padding: 12px; border-radius: 8px;">
                                    <span style="color: #6c757d; display: block; margin-bottom: 5px;">Phone</span>
                                    <span style="color: #2c3e50; font-weight: 500;">{{ $order->phone }}</span>
                                </div>
                            </div>
                            <div style="background: #f8f9fa; padding: 12px; border-radius: 8px;">
                                <span style="color: #6c757d; display: block; margin-bottom: 5px;">Address</span>
                                <span style="color: #2c3e50; font-weight: 500;">{{ $order->address }}</span>
                            </div>
                            @if ($order->note)
                                <div style="background: #f8f9fa; padding: 12px; border-radius: 8px;">
                                    <span style="color: #6c757d; display: block; margin-bottom: 5px;">Note</span>
                                    <span style="color: #2c3e50; font-weight: 500;">{{ $order->note }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Order Items Card -->
                <div
                    style="background: white; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 20px;">
                    <div
                        style="padding: 15px; border-bottom: 1px solid #eee; display: flex; align-items: center; background: #f8f9fa; border-radius: 10px 10px 0 0;">
                        <i class="fas fa-shopping-cart me-2" style="color: #ff6b00;"></i>
                        <span style="font-size: clamp(1rem, 2.5vw, 1.1rem); font-weight: 500; color: #2c3e50;">Order
                            Items</span>
                    </div>
                    <div style="padding: 20px;">
                        <!-- Mobile View (Cards) -->
                        <div class="d-md-none">
                            @foreach ($order->items as $item)
                                <div
                                    style="border: 1px solid #eee; border-radius: 8px; padding: 15px; margin-bottom: 15px;">
                                    <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                                        <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}"
                                            style="width: 80px; height: 80px; object-fit: cover; border-radius: 8px;">
                                        <div>
                                            <h3 style="font-size: 1rem; margin: 0 0 5px 0; color: #2c3e50;">
                                                {{ $item['name'] }}</h3>
                                            <p style="margin: 0; color: #6c757d;">Color: {{ $item['color'] }}</p>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-top: 10px; border-top: 1px solid #eee;">
                                        <div>
                                            <span style="color: #6c757d; font-size: 0.9rem;">Price:</span>
                                            <span style="color: #2c3e50; font-weight: 500;">KES
                                                {{ number_format($item['price']) }}</span>
                                        </div>
                                        <div>
                                            <span style="color: #6c757d; font-size: 0.9rem;">Qty:</span>
                                            <span style="color: #2c3e50; font-weight: 500;">{{ $item['quantity'] }}</span>
                                        </div>
                                        <div>
                                            <span style="color: #6c757d; font-size: 0.9rem;">Total:</span>
                                            <span style="color: #ff6b00; font-weight: 600;">KES
                                                {{ number_format($item['price'] * $item['quantity']) }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Desktop View (Table) -->
                        <div class="d-none d-md-block" style="overflow-x: auto;">
                            <table style="width: 100%; border-collapse: separate; border-spacing: 0;">
                                <thead>
                                    <tr style="background: #f8f9fa;">
                                        <th style="padding: 12px; color: #6c757d; font-weight: 500; text-align: left;">
                                            Product</th>
                                        <th style="padding: 12px; color: #6c757d; font-weight: 500; text-align: left;">Color
                                        </th>
                                        <th style="padding: 12px; color: #6c757d; font-weight: 500; text-align: right;">
                                            Price</th>
                                        <th style="padding: 12px; color: #6c757d; font-weight: 500; text-align: center;">
                                            Quantity</th>
                                        <th style="padding: 12px; color: #6c757d; font-weight: 500; text-align: right;">
                                            Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->items as $item)
                                        <tr style="border-bottom: 1px solid #eee;">
                                            <td style="padding: 12px;">
                                                <div style="display: flex; align-items: center; gap: 10px;">
                                                    <img src="{{ asset('storage/' . $item['image']) }}"
                                                        alt="{{ $item['name'] }}"
                                                        style="width: 50px; height: 50px; object-fit: cover; border-radius: 6px;">
                                                    <span
                                                        style="color: #2c3e50; font-weight: 500;">{{ $item['name'] }}</span>
                                                </div>
                                            </td>
                                            <td style="padding: 12px; color: #2c3e50;">{{ $item['color'] }}</td>
                                            <td style="padding: 12px; text-align: right; color: #2c3e50;">KES
                                                {{ number_format($item['price']) }}</td>
                                            <td style="padding: 12px; text-align: center; color: #2c3e50;">
                                                {{ $item['quantity'] }}</td>
                                            <td
                                                style="padding: 12px; text-align: right; color: #ff6b00; font-weight: 600;">
                                                KES {{ number_format($item['price'] * $item['quantity']) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
