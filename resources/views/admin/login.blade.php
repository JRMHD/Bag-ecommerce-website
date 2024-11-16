<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imuz Travel Bags - Admin Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --orange: #FF6B2B;
            --royal-blue: #1E3799;
            --border-radius: 12px;
        }

        body {
            background-color: #ffffff;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .login-container {
            padding: 2rem 0;
        }

        .brand-section {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .brand-icon {
            font-size: 2.8rem;
            color: var(--orange);
            margin-bottom: 1rem;
        }

        .brand-name {
            color: var(--royal-blue);
            font-weight: 700;
            font-size: 1.75rem;
            margin-bottom: 0.25rem;
        }

        .brand-subtitle {
            color: #6c757d;
            font-size: 1rem;
        }

        .form-section {
            background: #ffffff;
            border-radius: var(--border-radius);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            padding: 2.5rem;
        }

        .form-floating {
            margin-bottom: 1.5rem;
        }

        .form-floating > .form-control {
            padding: 1.5rem 1rem;
            height: calc(3.5rem + 2px);
            border: 2px solid #edf2f7;
            border-radius: var(--border-radius);
            transition: all 0.3s ease;
        }

        .form-floating > label {
            padding: 1rem;
        }

        .form-control:focus {
            border-color: var(--orange);
            box-shadow: 0 0 0 4px rgba(255, 107, 43, 0.1);
        }

        .btn-login {
            background-color: var(--orange);
            border: none;
            color: white;
            padding: 1rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .btn-login:hover {
            background-color: #ff5722;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 107, 43, 0.2);
        }

        .alert-danger {
            background-color: #fff5f5;
            border: none;
            border-radius: var(--border-radius);
            color: #dc3545;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }

        .alert-danger ul {
            margin-bottom: 0;
            padding-left: 1.5rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .login-container {
                padding: 1rem;
            }
            
            .form-section {
                padding: 1.5rem;
            }
        }

        @media (min-width: 992px) {
            .col-login {
                max-width: 450px;
            }
        }

        /* Modern Input Icon Style */
        .input-icon {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #cbd5e0;
            z-index: 2;
        }

        .form-floating > .form-control {
            padding-right: 3rem;
        }

        /* Loading State */
        .btn-login.loading {
            position: relative;
            pointer-events: none;
        }

        .btn-login.loading::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 2px solid rgba(255,255,255,0.3);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-login">
                <!-- Brand Section -->
                <div class="brand-section">
                    <i class="fas fa-suitcase-rolling brand-icon"></i>
                    <h1 class="brand-name">Imuz Travel Bags</h1>
                    <p class="brand-subtitle">Admin Portal</p>
                </div>

                <!-- Form Section -->
                <div class="form-section">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.login.post') }}" method="POST">
                        @csrf
                        <div class="form-floating position-relative">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                            <label for="phone">Phone Number</label>
                            <i class="fas fa-phone input-icon"></i>
                        </div>

                        <div class="form-floating position-relative">
                            <input type="password" class="form-control" id="pin" name="pin" placeholder="PIN" required>
                            <label for="pin">PIN</label>
                            <i class="fas fa-lock input-icon"></i>
                        </div>

                        <button type="submit" class="btn btn-login w-100">
                            Sign In
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add loading state to button on form submit
        document.querySelector('form').addEventListener('submit', function(e) {
            const button = this.querySelector('.btn-login');
            button.classList.add('loading');
        });
    </script>
</body>
</html>