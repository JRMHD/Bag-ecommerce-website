@extends('layouts.admin')
@section('content')
    <div class="container-fluid p-0" style="background: #f8f9fa;">
        <!-- Header Section -->
        <div style="background: linear-gradient(135deg, #ff6b00 0%, #ff8533 100%); padding: 15px; margin-bottom: 20px;">
            <div style="padding: 10px;">
                <h1 style="color: white; font-size: clamp(1.5rem, 4vw, 2rem); font-weight: 600; margin-bottom: 10px;">Manage
                    Orders</h1>
                <ol class="breadcrumb m-0" style="background: transparent; padding: 0;">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                            style="color: white; text-decoration: none; opacity: 0.9; font-size: clamp(0.875rem, 2vw, 1rem);">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active"
                        style="color: white; opacity: 0.7; font-size: clamp(0.875rem, 2vw, 1rem);">Orders</li>
                </ol>
            </div>
        </div>

        <!-- Main Content -->
        <div style="padding: 10px;">
            <div
                style="background: white; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 20px;">
                <div style="padding: 15px; border-bottom: 1px solid #eee; display: flex; align-items: center;">
                    <i class="fas fa-table me-2" style="color: #ff6b00;"></i>
                    <span style="font-size: clamp(1rem, 3vw, 1.2rem); font-weight: 500; color: #2c3e50;">All Orders</span>
                </div>

                <!-- Mobile Card View (shown on small screens) -->
                <div class="d-md-none">
                    @foreach ($orders as $order)
                        <div style="padding: 15px; border-bottom: 1px solid #eee; background: white;">
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <span style="font-weight: 600; color: #2c3e50;">#{{ $order->id }}</span>
                                <span
                                    style="padding: 6px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 500; 
                                    @if ($order->status === 'pending') background-color: #fff3e0; color: #ff6b00;
                                    @elseif($order->status === 'processing')
                                        background-color: #e3f2fd; color: #1565c0;
                                    @elseif($order->status === 'shipped')
                                        background-color: #e8eaf6; color: #3949ab;
                                    @else
                                        background-color: #e8f5e9; color: #2e7d32; @endif
                                ">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </div>
                            <div style="margin-bottom: 8px;">
                                <strong style="color: #6c757d; display: inline-block; width: 90px;">Customer:</strong>
                                <span style="color: #2c3e50;">{{ $order->name }}</span>
                            </div>
                            <div style="margin-bottom: 8px;">
                                <strong style="color: #6c757d; display: inline-block; width: 90px;">Total:</strong>
                                <span style="color: #2c3e50;">KES {{ number_format($order->total_amount) }}</span>
                            </div>
                            <div style="margin-bottom: 12px;">
                                <strong style="color: #6c757d; display: inline-block; width: 90px;">Date:</strong>
                                <span style="color: #2c3e50;">{{ $order->created_at->format('M d, Y H:i') }}</span>
                            </div>
                            <div style="text-align: right;">
                                <a href="{{ route('admin.orders.show', $order) }}"
                                    style="display: inline-block; background: #1565c0; color: white; padding: 8px 20px; border-radius: 8px; text-decoration: none; font-size: 0.9rem; transition: all 0.3s ease; width: 100%; text-align: center;">
                                    View Details
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Desktop Table View (shown on medium screens and up) -->
                <div class="d-none d-md-block" style="overflow-x: auto;">
                    <table id="ordersTable" class="table" style="width: 100%; margin-bottom: 0;">
                        <thead>
                            <tr style="background: #f8f9fa;">
                                <th
                                    style="padding: 15px; color: #6c757d; font-weight: 600; border: none; white-space: nowrap;">
                                    Order ID</th>
                                <th style="padding: 15px; color: #6c757d; font-weight: 600; border: none;">Customer</th>
                                <th style="padding: 15px; color: #6c757d; font-weight: 600; border: none;">Total</th>
                                <th style="padding: 15px; color: #6c757d; font-weight: 600; border: none;">Status</th>
                                <th style="padding: 15px; color: #6c757d; font-weight: 600; border: none;">Date</th>
                                <th style="padding: 15px; color: #6c757d; font-weight: 600; border: none;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr style="background: white; transition: all 0.3s ease;">
                                    <td style="padding: 15px; border-top: 1px solid #eee; color: #2c3e50;">
                                        #{{ $order->id }}</td>
                                    <td style="padding: 15px; border-top: 1px solid #eee; color: #2c3e50;">
                                        {{ $order->name }}</td>
                                    <td style="padding: 15px; border-top: 1px solid #eee; color: #2c3e50;">KES
                                        {{ number_format($order->total_amount) }}</td>
                                    <td style="padding: 15px; border-top: 1px solid #eee;">
                                        <span
                                            style="padding: 6px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 500; 
                                            @if ($order->status === 'pending') background-color: #fff3e0; color: #ff6b00;
                                            @elseif($order->status === 'processing')
                                                background-color: #e3f2fd; color: #1565c0;
                                            @elseif($order->status === 'shipped')
                                                background-color: #e8eaf6; color: #3949ab;
                                            @else
                                                background-color: #e8f5e9; color: #2e7d32; @endif
                                        ">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                    </td>
                                    <td style="padding: 15px; border-top: 1px solid #eee; color: #2c3e50;">
                                        {{ $order->created_at->format('M d, Y H:i') }}</td>
                                    <td style="padding: 15px; border-top: 1px solid #eee;">
                                        <a href="{{ route('admin.orders.show', $order) }}"
                                            style="display: inline-block; background: #1565c0; color: white; padding: 8px 16px; border-radius: 8px; text-decoration: none; font-size: 0.9rem; transition: all 0.3s ease;">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            if ($(window).width() >= 768) {
                $('#ordersTable').DataTable({
                    order: [
                        [0, 'desc']
                    ],
                    responsive: true,
                    pageLength: 10,
                    lengthMenu: [
                        [10, 25, 50, -1],
                        [10, 25, 50, "All"]
                    ],
                    dom: '<"top"<"d-flex justify-content-between align-items-center flex-wrap gap-3"<"d-flex align-items-center"l><"d-flex align-items-center"f>>>rt<"bottom"ip><"clear">',
                    language: {
                        search: "",
                        searchPlaceholder: "Search orders...",
                        lengthMenu: "Show _MENU_ entries",
                    },
                    initComplete: function() {
                        // Style the search input
                        $('.dataTables_filter input').css({
                            'padding': '8px 15px',
                            'border-radius': '8px',
                            'border': '1px solid #ddd',
                            'margin': '10px 0',
                            'width': '100%',
                            'min-width': '200px'
                        });

                        // Style the length selector
                        $('.dataTables_length select').css({
                            'padding': '8px',
                            'border-radius': '8px',
                            'border': '1px solid #ddd',
                            'margin': '10px 0',
                            'min-width': '100px'
                        });

                        // Add responsive margins
                        $('.top').css({
                            'padding': '15px',
                            'background': '#fff'
                        });
                    }
                });
            }
        });
    </script>
@endpush
