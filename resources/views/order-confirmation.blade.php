<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: #f7f7f9;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .success-icon {
            animation: scaleIn 0.5s ease-out;
            color: #10b981;
            font-size: 64px;
            margin-bottom: 1rem;
        }

        @keyframes scaleIn {
            0% {
                transform: scale(0);
            }

            70% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .text-center {
            text-align: center;
        }

        h1 {
            color: #1f2937;
            font-size: 2rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .order-number {
            background: #e5e7eb;
            color: #4b5563;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            display: inline-block;
            font-size: 0.9rem;
            margin: 1rem 0;
        }

        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin: 2rem 0;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background: #f8fafc;
            padding: 1.5rem;
            border-bottom: 1px solid #e5e7eb;
        }

        .card-title {
            color: #1f2937;
            font-size: 1.25rem;
            font-weight: 600;
            margin: 0;
        }

        .card-body {
            padding: 1.5rem;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            padding: 0.75rem 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            color: #6b7280;
            font-weight: 500;
        }

        .detail-value {
            color: #111827;
            font-weight: 500;
        }

        .total-amount {
            font-size: 1.25rem;
            color: #059669;
            font-weight: 600;
        }

        .btn-continue {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            color: white;
            padding: 1rem 2rem;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-continue:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        @media (max-width: 640px) {
            .container {
                margin: 1rem auto;
            }

            h1 {
                font-size: 1.5rem;
            }

            .success-icon {
                font-size: 48px;
            }

            .card {
                margin: 1rem 0;
            }

            .btn-continue {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <i class="fas fa-check-circle success-icon"></i>
            <h1>Thank You for Your Order!</h1>
            <div class="order-number">
                Order #{{ $order->id }}
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Order Details</h5>
                </div>
                <div class="card-body">
                    <div class="detail-row">
                        <span class="detail-label">Name</span>
                        <span class="detail-value">{{ $order->name }}</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Email</span>
                        <span class="detail-value">{{ $order->email }}</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Phone</span>
                        <span class="detail-value">{{ $order->phone }}</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Address</span>
                        <span class="detail-value">{{ $order->address }}</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Total Amount</span>
                        <span class="detail-value total-amount">KES {{ number_format($order->total_amount) }}</span>
                    </div>
                </div>
            </div>

            <a href="{{ route('shop') }}" class="btn-continue">
                <i class="fas fa-shopping-bag" style="margin-right: 8px;"></i>
                Continue Shopping
            </a>
        </div>
    </div>
</body>

</html>
