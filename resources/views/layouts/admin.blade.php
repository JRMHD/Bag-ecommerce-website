<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #2563eb;
            --primary-orange: #f97316;
            --dark: #1f2937;
            --light: #f3f4f6;
            --sidebar-width: 250px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--light);
            color: var(--dark);
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            width: var(--sidebar-width);
            background-color: white;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-blue);
        }

        .nav-links {
            padding: 1rem 0;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            color: var(--dark);
            text-decoration: none;
            transition: all 0.3s ease;
            gap: 0.75rem;
        }

        .nav-link:hover {
            background-color: #f3f4f6;
            color: var(--primary-orange);
        }

        .nav-link.active {
            background-color: #e5e7eb;
            color: var(--primary-orange);
            border-left: 4px solid var(--primary-orange);
        }

        /* Top Navigation */
        .top-nav {
            position: fixed;
            right: 0;
            top: 0;
            left: var(--sidebar-width);
            height: 64px;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            z-index: 100;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary-blue);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 84px 2rem 2rem;
            min-height: 100vh;
        }

        /* Mobile Menu Toggle */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--dark);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .top-nav {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .mobile-menu-toggle {
                display: block;
            }
        }

        /* Utility Classes */
        .btn {
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: var(--primary-blue);
            color: white;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
        }

        .btn-danger {
            background-color: #ef4444;
            color: white;
        }

        .btn-danger:hover {
            background-color: #dc2626;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <span class="logo">Admin Panel</span>
        </div>
        <nav class="nav-links">
            <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                <i class="fas fa-home"></i>
                Dashboard
            </a>
            <a href="{{ route('admin.products.index') }}" class="nav-link">
                <i class="fas fa-box"></i>
                Products
            </a>
            <a href="{{ url('/admin/orders') }}" class="nav-link">
                <i class="fas fa-shopping-cart"></i>
                Orders
            </a>
            <a href="{{ url('/admin/orders') }}" class="nav-link">
                <i class="fas fa-users"></i>
                Customers
            </a>
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i class="fas fa-cog"></i>
                Settings
            </a>
        </nav>
    </aside>

    <!-- Top Navigation -->
    <nav class="top-nav">
        <button class="mobile-menu-toggle">
            <i class="fas fa-bars"></i>
        </button>
        <div class="user-menu">
            <div class="user-avatar">A</div>
            <div class="dropdown">
                <a href="#" class="btn">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            if (window.innerWidth <= 768) {
                const sidebar = document.querySelector('.sidebar');
                const toggleButton = document.querySelector('.mobile-menu-toggle');

                if (!sidebar.contains(event.target) && !toggleButton.contains(event.target)) {
                    sidebar.classList.remove('active');
                }
            }
        });
    </script>
</body>

</html>
