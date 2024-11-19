<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Order - Imuz.co.ke</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .email-header {
            background-color: #1E40AF;
            /* Royal Blue */
            color: white;
            padding: 20px;
            text-align: center;
        }

        .email-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }

        .email-body {
            padding: 30px;
        }

        .order-details {
            background-color: #F9FAFB;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #E5E7EB;
        }

        .order-details ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .order-details li {
            margin-bottom: 10px;
            padding: 10px;
            background-color: white;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .email-cta {
            text-align: center;
            margin-top: 30px;
        }

        .cta-button {
            display: inline-block;
            background-color: #FF6B00;
            /* Orange */
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #FF8A2E;
        }

        .email-footer {
            background-color: #F9FAFB;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #6B7280;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <h1>New Order Notification</h1>
        </div>

        <div class="email-body">
            <p>Hello Admin,</p>

            <p>A new order has been placed on the Imuz.co.ke website. Please review the details below:</p>

            <div class="order-details">
                <ul>
                    <li><strong>Order ID:#</strong> {{ $order->id }}</li>
                    <li><strong>Total Amount:</strong> {{ $order->total }}</li>
                    <li><strong>Status:</strong> {{ $order->status }}</li>
                </ul>
            </div>

            <div class="email-cta">
                <a href="https://imuz.co.ke/admin/login" class="cta-button">View in Admin Dashboard</a>
            </div>
        </div>

        <div class="email-footer">
            <p>&copy; 2024 Imuz.co.ke. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
