<!DOCTYPE html>
<html>

<head>
    <title>New Message from Imuz Travel Bags</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #ff6600;
            padding: 30px 20px;
            text-align: center;
        }

        .header h1 {
            color: white;
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }

        .notification-bar {
            background-color: #ff8533;
            color: white;
            padding: 10px 20px;
            text-align: center;
            font-size: 14px;
        }

        .content {
            padding: 30px;
        }

        .message-box {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
        }

        .field {
            margin-bottom: 15px;
        }

        .field-label {
            font-weight: 600;
            color: #666;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .field-value {
            color: #333;
            margin-top: 5px;
        }

        .message-content {
            white-space: pre-line;
            color: #444;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 6px;
            margin-top: 5px;
        }

        .footer {
            background-color: #f8f8f8;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
            border-top: 1px solid #eee;
        }

        .logo {
            width: 120px;
            height: auto;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="/api/placeholder/120/60" alt="Imuz Travel Bags Logo" class="logo" />
            <h1>New Message Received</h1>
        </div>
        <div class="notification-bar">
            A customer has reached out through the contact form
        </div>
        <div class="content">
            <div class="message-box">
                <div class="field">
                    <div class="field-label">From</div>
                    <div class="field-value">{{ $contact->full_name }}</div>
                </div>
                <div class="field">
                    <div class="field-label">Email</div>
                    <div class="field-value">{{ $contact->email }}</div>
                </div>
                <div class="field">
                    <div class="field-label">Phone</div>
                    <div class="field-value">{{ $contact->phone }}</div>
                </div>
                <div class="field">
                    <div class="field-label">Subject</div>
                    <div class="field-value">{{ $contact->subject }}</div>
                </div>
                <div class="field">
                    <div class="field-label">Message</div>
                    <div class="message-content">{{ $contact->message }}</div>
                </div>
            </div>
        </div>
        <div class="footer">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script> Imuz Travel Bags. All Rights Reserved.
        </div>
    </div>
</body>

</html>
